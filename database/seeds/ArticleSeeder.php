<?php

use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $var = new \App\Article;
        $var->user_id = 2;
        $category = App\Category::where('name','Beach')->first();
        $var->category_id = $category->id;
        $var->title = "Pantai Kuta, Bali";
        $var->description = "Pantai Kuta adalah sebuah tempat pariwisata yang terletak kecamatan Kuta, sebelah selatan Kota Denpasar, Bali, Indonesia. Daerah ini merupakan sebuah tujuan wisata turis mancanegara dan telah menjadi objek wisata andalan Pulau Bali sejak awal tahun 1970-an. Pantai Kuta sering pula disebut sebagai pantai matahari terbenam (sunset beach) sebagai lawan dari pantai Sanur. Selain itu, Lapangan Udara I Gusti Ngurah Rai terletak tidak jauh dari Kuta.";
        $var->image = "/storage/image/pantai_kuta.jpg";
        $var->save();

        $var = new \App\Article;
        $var->user_id = 2;
        $category = App\Category::where('name','Candi')->first();
        $var->category_id = $category->id;
        $var->title = "Candi Mendut, Magelang";
        $var->description = "Candi Mendut (bahasa Jawa: ꦕꦤ꧀ꦝꦶ​ꦩꦼꦤ꧀ꦢꦸꦠ꧀, translit. Candhi Mendut) adalah sebuah candi bercorak Buddha. Candi yang terletak di Jalan Mayor Kusen Kota Mungkid, Kabupaten Magelang, Jawa Tengah ini, letaknya berada sekitar 3 kilometer dari Candi Borobudur"; 
        $var->image = "/storage/image/candi_medut.jpg";
        $var->save();


        $var = new \App\Article;
        $var->user_id = 2;
        $category = App\Category::where('name','Mountain')->first();
        $var->category_id = $category->id;
        $var->title = "Gunung Merapi, Magelang";
        $var->description = "Gunung Merapi (ketinggian puncak 2.930 mdpl, per 2010) (Hanacaraka:ꦒꦸꦤꦸꦁ​ꦩꦼꦫꦥꦶ) adalah gunung berapi di bagian tengah Pulau Jawa dan merupakan salah satu gunung api teraktif di Indonesia. Lereng sisi selatan berada dalam administrasi Kabupaten Sleman, Daerah Istimewa Yogyakarta, dan sisanya berada dalam wilayah Provinsi Jawa Tengah, yaitu Kabupaten Magelang di sisi barat, Kabupaten Boyolali di sisi utara dan timur, serta Kabupaten Klaten di sisi tenggara. Kawasan hutan di sekitar puncaknya menjadi kawasan Taman Nasional Gunung Merapi sejak tahun 2004.";
        $var->image = "/storage/image/gunung_merapi.jpg";
        $var->save();

        $var = new \App\Article;
        $var->user_id = 2;
        $category = App\Category::where('name','Beach')->first();
        $var->category_id = $category->id;
        $var->title = "Pantai Kuta, Bali";
        $var->description = "Pantai Kuta adalah sebuah tempat pariwisata yang terletak kecamatan Kuta, sebelah selatan Kota Denpasar, Bali, Indonesia. Daerah ini merupakan sebuah tujuan wisata turis mancanegara dan telah menjadi objek wisata andalan Pulau Bali sejak awal tahun 1970-an. Pantai Kuta sering pula disebut sebagai pantai matahari terbenam (sunset beach) sebagai lawan dari pantai Sanur. Selain itu, Lapangan Udara I Gusti Ngurah Rai terletak tidak jauh dari Kuta.";
        $var->image = "/storage/image/pantai_kuta.jpg";
        $var->save();

        $var = new \App\Article;
        $var->user_id = 3;
        $category = App\Category::where('name','Candi')->first();
        $var->category_id = $category->id;
        $var->title = "Candi Mendut, Magelang";
        $var->description = "Candi Mendut (bahasa Jawa: ꦕꦤ꧀ꦝꦶ​ꦩꦼꦤ꧀ꦢꦸꦠ꧀, translit. Candhi Mendut) adalah sebuah candi bercorak Buddha. Candi yang terletak di Jalan Mayor Kusen Kota Mungkid, Kabupaten Magelang, Jawa Tengah ini, letaknya berada sekitar 3 kilometer dari Candi Borobudur"; 
        $var->image = "/storage/image/candi_medut.jpg";
        $var->save();

        $var = new \App\Article;
        $var->user_id = 4;
        $category = App\Category::where('name','Mountain')->first();
        $var->category_id = $category->id;
        $var->title = "Gunung Merapi, Magelang";
        $var->description = "Gunung Merapi (ketinggian puncak 2.930 mdpl, per 2010) (Hanacaraka:ꦒꦸꦤꦸꦁ​ꦩꦼꦫꦥꦶ) adalah gunung berapi di bagian tengah Pulau Jawa dan merupakan salah satu gunung api teraktif di Indonesia. Lereng sisi selatan berada dalam administrasi Kabupaten Sleman, Daerah Istimewa Yogyakarta, dan sisanya berada dalam wilayah Provinsi Jawa Tengah, yaitu Kabupaten Magelang di sisi barat, Kabupaten Boyolali di sisi utara dan timur, serta Kabupaten Klaten di sisi tenggara. Kawasan hutan di sekitar puncaknya menjadi kawasan Taman Nasional Gunung Merapi sejak tahun 2004.";
        $var->image = "/storage/image/gunung_merapi.jpg";
        $var->save();
        
        $var = new \App\Article;
        $var->user_id = 2;
        $category = App\Category::where('name','Beach')->first();
        $var->category_id = $category->id;
        $var->title = "Pantai Kuta, Bali";
        $var->description = "Pantai Kuta adalah sebuah tempat pariwisata yang terletak kecamatan Kuta, sebelah selatan Kota Denpasar, Bali, Indonesia. Daerah ini merupakan sebuah tujuan wisata turis mancanegara dan telah menjadi objek wisata andalan Pulau Bali sejak awal tahun 1970-an. Pantai Kuta sering pula disebut sebagai pantai matahari terbenam (sunset beach) sebagai lawan dari pantai Sanur. Selain itu, Lapangan Udara I Gusti Ngurah Rai terletak tidak jauh dari Kuta.";
        $var->image = "/storage/image/pantai_kuta.jpg";
        $var->save();

        $var = new \App\Article;
        $var->user_id = 2;
        $category = App\Category::where('name','Candi')->first();
        $var->category_id = $category->id;
        $var->title = "Candi Mendut, Magelang";
        $var->description = "Candi Mendut (bahasa Jawa: ꦕꦤ꧀ꦝꦶ​ꦩꦼꦤ꧀ꦢꦸꦠ꧀, translit. Candhi Mendut) adalah sebuah candi bercorak Buddha. Candi yang terletak di Jalan Mayor Kusen Kota Mungkid, Kabupaten Magelang, Jawa Tengah ini, letaknya berada sekitar 3 kilometer dari Candi Borobudur"; 
        $var->image = "/storage/image/candi_medut.jpg";
        $var->save();

        $var = new \App\Article;
        $var->user_id = 4;
        $category = App\Category::where('name','Mountain')->first();
        $var->category_id = $category->id;
        $var->title = "Gunung Merapi, Magelang";
        $var->description = "Gunung Merapi (ketinggian puncak 2.930 mdpl, per 2010) (Hanacaraka:ꦒꦸꦤꦸꦁ​ꦩꦼꦫꦥꦶ) adalah gunung berapi di bagian tengah Pulau Jawa dan merupakan salah satu gunung api teraktif di Indonesia. Lereng sisi selatan berada dalam administrasi Kabupaten Sleman, Daerah Istimewa Yogyakarta, dan sisanya berada dalam wilayah Provinsi Jawa Tengah, yaitu Kabupaten Magelang di sisi barat, Kabupaten Boyolali di sisi utara dan timur, serta Kabupaten Klaten di sisi tenggara. Kawasan hutan di sekitar puncaknya menjadi kawasan Taman Nasional Gunung Merapi sejak tahun 2004.";
        $var->image = "/storage/image/gunung_merapi.jpg";
        $var->save();
        
        $var = new \App\Article;
        $var->user_id = 3;
        $category = App\Category::where('name','Beach')->first();
        $var->category_id = $category->id;
        $var->title = "Pantai Kuta, Bali";
        $var->description = "Pantai Kuta adalah sebuah tempat pariwisata yang terletak kecamatan Kuta, sebelah selatan Kota Denpasar, Bali, Indonesia. Daerah ini merupakan sebuah tujuan wisata turis mancanegara dan telah menjadi objek wisata andalan Pulau Bali sejak awal tahun 1970-an. Pantai Kuta sering pula disebut sebagai pantai matahari terbenam (sunset beach) sebagai lawan dari pantai Sanur. Selain itu, Lapangan Udara I Gusti Ngurah Rai terletak tidak jauh dari Kuta.";
        $var->image = "/storage/image/pantai_kuta.jpg";
        $var->save();

        $var = new \App\Article;
        $var->user_id = 2;
        $category = App\Category::where('name','Candi')->first();
        $var->category_id = $category->id;
        $var->title = "Candi Mendut, Magelang";
        $var->description = "Candi Mendut (bahasa Jawa: ꦕꦤ꧀ꦝꦶ​ꦩꦼꦤ꧀ꦢꦸꦠ꧀, translit. Candhi Mendut) adalah sebuah candi bercorak Buddha. Candi yang terletak di Jalan Mayor Kusen Kota Mungkid, Kabupaten Magelang, Jawa Tengah ini, letaknya berada sekitar 3 kilometer dari Candi Borobudur"; 
        $var->image = "/storage/image/candi_medut.jpg";
        $var->save();


        $var = new \App\Article;
        $var->user_id = 2;
        $category = App\Category::where('name','Mountain')->first();
        $var->category_id = $category->id;
        $var->title = "Gunung Merapi, Magelang";
        $var->description = "Gunung Merapi (ketinggian puncak 2.930 mdpl, per 2010) (Hanacaraka:ꦒꦸꦤꦸꦁ​ꦩꦼꦫꦥꦶ) adalah gunung berapi di bagian tengah Pulau Jawa dan merupakan salah satu gunung api teraktif di Indonesia. Lereng sisi selatan berada dalam administrasi Kabupaten Sleman, Daerah Istimewa Yogyakarta, dan sisanya berada dalam wilayah Provinsi Jawa Tengah, yaitu Kabupaten Magelang di sisi barat, Kabupaten Boyolali di sisi utara dan timur, serta Kabupaten Klaten di sisi tenggara. Kawasan hutan di sekitar puncaknya menjadi kawasan Taman Nasional Gunung Merapi sejak tahun 2004.";
        $var->image = "/storage/image/gunung_merapi.jpg";
        $var->save();

        
        $var = new \App\Article;
        $var->user_id = 3;
        $category = App\Category::where('name','Candi')->first();
        $var->category_id = $category->id;
        $var->title = "Candi Mendut, Magelang";
        $var->description = "Candi Mendut (bahasa Jawa: ꦕꦤ꧀ꦝꦶ​ꦩꦼꦤ꧀ꦢꦸꦠ꧀, translit. Candhi Mendut) adalah sebuah candi bercorak Buddha. Candi yang terletak di Jalan Mayor Kusen Kota Mungkid, Kabupaten Magelang, Jawa Tengah ini, letaknya berada sekitar 3 kilometer dari Candi Borobudur"; 
        $var->image = "/storage/image/candi_medut.jpg";
        $var->save();


        $var = new \App\Article;
        $var->user_id = 3;
        $category = App\Category::where('name','Mountain')->first();
        $var->category_id = $category->id;
        $var->title = "Gunung Merapi, Magelang";
        $var->description = "Gunung Merapi (ketinggian puncak 2.930 mdpl, per 2010) (Hanacaraka:ꦒꦸꦤꦸꦁ​ꦩꦼꦫꦥꦶ) adalah gunung berapi di bagian tengah Pulau Jawa dan merupakan salah satu gunung api teraktif di Indonesia. Lereng sisi selatan berada dalam administrasi Kabupaten Sleman, Daerah Istimewa Yogyakarta, dan sisanya berada dalam wilayah Provinsi Jawa Tengah, yaitu Kabupaten Magelang di sisi barat, Kabupaten Boyolali di sisi utara dan timur, serta Kabupaten Klaten di sisi tenggara. Kawasan hutan di sekitar puncaknya menjadi kawasan Taman Nasional Gunung Merapi sejak tahun 2004.";
        $var->image = "/storage/image/gunung_merapi.jpg";
        $var->save();

    }
}
