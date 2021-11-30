<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function bookToDetail(){
        return $this->hasOne(Detail::class);
    }

    public function booksOfACategory(){
        return $this->belongsTo(Category::class);
    }
}
