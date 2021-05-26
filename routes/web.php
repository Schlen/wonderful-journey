<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@home')->name('home');
Route::get('/about-us','HomeController@aboutUs');

Route::get('/login','UserController@loginForm')->name('login');
Route::post('/login','UserController@login');

Route::get('/register','UserController@registerForm')->name('register');
Route::post('/register','UserController@register');

Route::get('/logout','UserController@logout');

Route::get('/profile','UserController@profile');
Route::post('/profile/update','UserController@updateProfile');

Route::get('/blog','UserController@blog')->name('blog');

Route::get('/create','ArticleController@postArticleForm');
Route::post('/create','ArticleController@postArticle');

Route::get('/category','CategoryController@allCategory');
Route::get('/category/{category}','CategoryController@category');

Route::get('/article/{article}','ArticleController@article');
Route::get('/article/delete/{article}','ArticleController@deleteArticle');

Route::get('/admin/user','UserController@allUser');
Route::get('/admin/user/{user}','UserController@userBlog');
Route::get('/admin/delete/{user}','UserController@deleteUser');
