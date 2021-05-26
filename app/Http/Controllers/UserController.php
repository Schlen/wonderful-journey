<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use Hash;
use Storage;

class UserController extends Controller
{
    public function loginForm(){
        if(Auth::user() != null){
            return redirect()->route('home');
        }

        return view('login');
    }

    public function login(Request $request){
        if(Auth::user() != null) return redirect()->route('home');

        $this->validate($request, [
            'email' => 'required|min:4',
            'password' => 'required|min:6'
        ]);

        $user = \App\User::where('email', $request->email)->first();
        if($user == null) return redirect()->route('login')->withErrors(['This account doesn\'t exist']);

        if($user->role != $request->role){
            return redirect()->route('login')->withErrors(['Your account doesnt have this role']);
        }

        if(Hash::check($request->password, $user->password)){
            Auth::login($user);
        }else return redirect()->route('login');

        return redirect()->route('home')->with('alert','Login Success!!');

    }

    public function registerForm(){
        if(Auth::user() != null){
            return redirect()->route('home');
        }

        return view('register');
    }

    public function register(Request $request){
        if(Auth::user() != null) return redirect()->route('home');

        $this->validate($request, [
            'username' => 'required|min:4',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'conf_pass' => 'required|same:password',
            'phone' => 'required|numeric'
        ]);

        $user = new \App\User();
        $user->name = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = "User";
        $user->phone = $request->phone;
        $user->save();

        Auth::login($user);

        return redirect()->route('home')->with('alert','Register Success!!');

    }

    public function logout(){
        if(Auth::user() != null){
            Auth::logout();
        }
        return redirect()->route('home');
    }

    public function profile(){
        if(Auth::user() == null){
            return redirect()->route('home');
        }

        return view('user.profile');
    }

    public function updateProfile(){
        if(Auth::user() == null) return redirect()->route('home');

        $this->validate($request, [
            'username' => 'required|min:4',
            'email' => 'required|email|unique:users',
            'phone' => 'required|numeric'
        ]);

        $user = Auth::user();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->save();

        Auth::logout();
        Auth::login($user);
        

        return redirect()->route('home')->with('alert','Update User Success!!');

    }

    public function blog(){
        if(Auth::user() == null){
            return redirect()->route('home');
        }

        $var = \App\Article::where('user_id',Auth::id())->paginate(5);

        return view('user.blog',[
            'article' => $var
        ]);
    }

    public function userBlog($user){
        if(Auth::user() == null || Auth::user()->role == "User"){
            return redirect()->route('home');
        }

        $var = \App\Article::where('user_id',  $user)->paginate(5);

        return view ('user.blog',[
            'article' => $var
        ]);
    }

    public function allUser(){
        if(Auth::user() == null || Auth::user()->role == "User"){
            return redirect()->route('home');
        }

        $var = User::where('role','User')->get();

        return view('admin.user',[
            'users' => $var
        ]);
    }

    public function deleteUser(User $user){
        if(Auth::user() == null || Auth::user()->role == "User"){
            return redirect()->route('home');
        }

        if($user->Article->count() != 0){
            foreach ($user->Article as $item) {
                Storage::disk('public')->delete($item->image);
                $item->delete();
            }
            $user->delete();
        }
        
        return redirect()->route('home')->with('alert','Delete User Success!!');

    }
}
