<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    
    public function hotels(){
        return $this->belongsTo(Hotel::class);
    }

    public function author(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function hotel(){
        return $this->belongsTo(Hotel::class, 'hotel_id', 'id');
    }
}
