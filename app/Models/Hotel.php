<?php

namespace App\Models;

class Hotel
{
    private static $hotel_posts = [
        [
            "title" => "Judul Hotel Pertama",
            "slug" => "judul-hotel-pertama",
            "author" => "Ahmad Faidhoni",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Id fuga quod excepturi harum aliquid praesentium animi dolore perspiciatis repudiandae? Blanditiis ratione earum quos laudantium, expedita at similique mollitia nesciunt animi.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Id fuga quod excepturi harum aliquid praesentium animi dolore perspiciatis repudiandae? Blanditiis ratione earum quos laudantium, expedita at similique mollitia nesciunt animi."
        ],
        [
            "title" => "Judul Hotel Kedua",
            "slug" => "judul-hotel-kedua",
            "author" => "Laku Hemm",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Id fuga quod excepturi harum aliquid praesentium animi dolore perspiciatis repudiandae? Blanditiis ratione earum quos laudantium, expedita at similique mollitia nesciunt animi.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Id fuga quod excepturi harum aliquid praesentium animi dolore perspiciatis repudiandae? Blanditiis ratione earum quos laudantium, expedita at similique mollitia nesciunt animi.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Id fuga quod excepturi harum aliquid praesentium animi dolore perspiciatis repudiandae? Blanditiis ratione earum quos laudantium, expedita at similique mollitia nesciunt animi."
        ]
    ];

    public static function all(){
        return collect(self::$hotel_posts);
    }

    public static function find($slug){
        $hotels = static::all();
        return $hotels->firstWhere('slug', $slug);
    }
}
