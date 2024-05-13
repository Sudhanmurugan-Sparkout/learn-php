<?php

namespace App\Models\task;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Authorprofile extends Model
{
    use HasFactory;
    

    function getAuthor(){
        return $this->belongsTo(Author::class,'author_id','id');
    }
}
