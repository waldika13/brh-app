<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'user_id',
        'title',
        'slug',
        'image',
        'excerpt',
        'body',
        'created_at'
    ];
    public function user()
    {
        return $this->belongsTo(user::class, 'user_id', 'id');
    }
}
