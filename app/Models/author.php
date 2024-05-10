<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class author extends Model
{
    use HasFactory;
    function getbook(){
        return $this->hasManyThrough(book::class,book_author::class);
    }
}
