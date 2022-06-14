<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Hotel;
use App\Models\Category;
use App\Models\User;
use App\Models\Review;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'Ahmad Faidhoni',
            'username' => 'ahmadfaidhoni',
            'email' => 'ahmadfaidhoni03@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Siapapun',
            'username' => 'siapapun',
            'email' => 'siapapun@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Aku',
            'username' => 'aku',
            'email' => 'aku@gmail.com',
            'password' => bcrypt('12345')
        ]);

        // User::factory(5)->create();

        Category::create([
            'name' => 'Aesthetic Floral',
            'slug' => 'aesthetic-floral'
        ]);

        Category::create([
            'name' => 'Aesthetic Beach',
            'slug' => 'aesthetic-beach'
        ]);

        Category::create([
            'name' => 'Aesthetic Wood',
            'slug' => 'aesthetic-wood'
        ]);
        
        Hotel::create([
            'title' => 'Judul Hotel Kesatu',
            'category_id' => 1,
            'user_id' => 1,
            'slug' => 'judul-hotel-kesatu',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel adipisci atque debitis pariatur ut nemo cupiditate molestias maiores eaque architecto quisquam suscipit ad vero laudantium labore',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat porro dicta at cumque accusamus sint sed ullam quis officia eligendi ipsum, laborum voluptatibus quidem dolor, odio, velit iste maiores et nulla consequuntur doloribus dignissimos rerum asperiores est! Excepturi, optio illo aliquam aliquid dignissimos alias nobis temporibus amet vel pariatur asperiores sequi modi ipsum enim rerum dolor voluptatibus.</p><p>Odit ex mollitia quasi autem nisi temporibus itaque voluptates tempora minus reprehenderit nihil praesentium sed distinctio laborum officiis beatae vitae, aspernatur aperiam fugiat soluta quae dolores. Suscipit quisquam optio eligendi in et recusandae incidunt quam, inventore porro, ex, libero nam eaque numquam assumenda ipsam? Vitae quibusdam obcaecati laboriosam animi, molestiae sed nobis voluptatibus eveniet exercitationem nihil officia optio earum consectetur aut enim totam.</p><p>Beatae consequatur reprehenderit deserunt, quae commodi vel! Perferendis alias, illum quam quaerat porro ipsam velit ipsa aperiam numquam et sit culpa beatae incidunt voluptatibus molestiae quos non dolores sed rerum.</p>',
            'price' => '400.000',
            'location' => 'Jakarta Barat',
            'facility' => 'Sangat megah ',
            'rating' => '3.0',
            'contact' => '+62 852123 222',
        ]);

        Hotel::create([
            'title' => 'Judul Hotel Kedua',
            'category_id' => 2,
            'user_id' => 2,
            'slug' => 'judul-hotel-kedua',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel adipisci atque debitis pariatur ut nemo cupiditate molestias maiores eaque architecto quisquam suscipit ad vero laudantium labore',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat porro dicta at cumque accusamus sint sed ullam quis officia eligendi ipsum, laborum voluptatibus quidem dolor, odio, velit iste maiores et nulla consequuntur doloribus dignissimos rerum asperiores est! Excepturi, optio illo aliquam aliquid dignissimos alias nobis temporibus amet vel pariatur asperiores sequi modi ipsum enim rerum dolor voluptatibus.</p><p>Odit ex mollitia quasi autem nisi temporibus itaque voluptates tempora minus reprehenderit nihil praesentium sed distinctio laborum officiis beatae vitae, aspernatur aperiam fugiat soluta quae dolores. Suscipit quisquam optio eligendi in et recusandae incidunt quam, inventore porro, ex, libero nam eaque numquam assumenda ipsam? Vitae quibusdam obcaecati laboriosam animi, molestiae sed nobis voluptatibus eveniet exercitationem nihil officia optio earum consectetur aut enim totam.</p><p>Beatae consequatur reprehenderit deserunt, quae commodi vel! Perferendis alias, illum quam quaerat porro ipsam velit ipsa aperiam numquam et sit culpa beatae incidunt voluptatibus molestiae quos non dolores sed rerum.</p>',
            'price' => '300.000',
            'location' => 'Jakarta Barat',
            'facility' => 'Sangat megah ',
            'rating' => '3.0',
            'contact' => '+62 852123 222',
        ]);

        Hotel::create([
            'title' => 'Judul Hotel Ketiga',
            'category_id' => 2,
            'user_id' => 1,
            'slug' => 'judul-hotel-ketiga',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel adipisci atque debitis pariatur ut nemo cupiditate molestias maiores eaque architecto quisquam suscipit ad vero laudantium labore',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat porro dicta at cumque accusamus sint sed ullam quis officia eligendi ipsum, laborum voluptatibus quidem dolor, odio, velit iste maiores et nulla consequuntur doloribus dignissimos rerum asperiores est! Excepturi, optio illo aliquam aliquid dignissimos alias nobis temporibus amet vel pariatur asperiores sequi modi ipsum enim rerum dolor voluptatibus.</p><p>Odit ex mollitia quasi autem nisi temporibus itaque voluptates tempora minus reprehenderit nihil praesentium sed distinctio laborum officiis beatae vitae, aspernatur aperiam fugiat soluta quae dolores. Suscipit quisquam optio eligendi in et recusandae incidunt quam, inventore porro, ex, libero nam eaque numquam assumenda ipsam? Vitae quibusdam obcaecati laboriosam animi, molestiae sed nobis voluptatibus eveniet exercitationem nihil officia optio earum consectetur aut enim totam.</p><p>Beatae consequatur reprehenderit deserunt, quae commodi vel! Perferendis alias, illum quam quaerat porro ipsam velit ipsa aperiam numquam et sit culpa beatae incidunt voluptatibus molestiae quos non dolores sed rerum.</p>',
            'price' => '300.000',
            'location' => 'Jakarta Barat',
            'facility' => 'Sangat megah ',
            'rating' => '3.0',
            'contact' => '+62 852123 222',
        ]);
        
        Hotel::create([
            'title' => 'Judul Hotel Keempat',
            'category_id' => 1,
            'user_id' => 2,
            'slug' => 'judul-hotel-keempat',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel adipisci atque debitis pariatur ut nemo cupiditate molestias maiores eaque architecto quisquam suscipit ad vero laudantium labore',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat porro dicta at cumque accusamus sint sed ullam quis officia eligendi ipsum, laborum voluptatibus quidem dolor, odio, velit iste maiores et nulla consequuntur doloribus dignissimos rerum asperiores est! Excepturi, optio illo aliquam aliquid dignissimos alias nobis temporibus amet vel pariatur asperiores sequi modi ipsum enim rerum dolor voluptatibus.</p><p>Odit ex mollitia quasi autem nisi temporibus itaque voluptates tempora minus reprehenderit nihil praesentium sed distinctio laborum officiis beatae vitae, aspernatur aperiam fugiat soluta quae dolores. Suscipit quisquam optio eligendi in et recusandae incidunt quam, inventore porro, ex, libero nam eaque numquam assumenda ipsam? Vitae quibusdam obcaecati laboriosam animi, molestiae sed nobis voluptatibus eveniet exercitationem nihil officia optio earum consectetur aut enim totam.</p><p>Beatae consequatur reprehenderit deserunt, quae commodi vel! Perferendis alias, illum quam quaerat porro ipsam velit ipsa aperiam numquam et sit culpa beatae incidunt voluptatibus molestiae quos non dolores sed rerum.</p>',
            'price' => '200.000',
            'location' => 'Jakarta Barat',
            'facility' => 'Sangat megah ',
            'rating' => '3.0',
            'contact' => '+62 852123 222',
        ]);

        Review::create([
            'hotel_id' => 1,
            'user_id' => 2,
            'body' => 'gaenak'
        ]);

        Review::create([
            'hotel_id' => 1,
            'user_id' => 3,
            'body' => 'apaansi ah'
        ]);

        Review::create([
            'hotel_id' => 1,
            'user_id' => 1,
            'body' => 'Jahat banget'
        ]);

        Review::create([
            'hotel_id' => 1,
            'user_id' => 1,
            'body' => 'Jelek sekali'
        ]);

        Review::create([
            'hotel_id' => 2,
            'user_id' => 3,
            'body' => 'Mengecewakan'
        ]);
    }
}
