<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    use HasFactory;
    function getauthors(){
        return $this->belongsToMany(author::class,book_author::class);
    }
}
