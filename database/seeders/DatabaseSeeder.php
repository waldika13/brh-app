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

        //Default Admin
        User::create([
            'name' => 'Admin BRH',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'is_admin' => '1',
            'password' => bcrypt('admin123')
        ]);
    }
}
