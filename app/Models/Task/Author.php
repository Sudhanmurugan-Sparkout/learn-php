<?php

namespace App\Models\task;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
   protected $fillable=[
      'name',
      'email',
      'password',
      'status',
      'phone'
   ];

    function getProfile(){
        return $this->hasOne(Authorprofile::class);
    }
    function getBooks(){
        return $this->hasMany(book::class);
    }
}
    