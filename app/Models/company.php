<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    use HasFactory;

    function getEmployee(){
        return $this->hasOne(employee::class)->where('name','!=','sudhan');
    }
    function getClient(){
        return $this->hasOne(client::class);
    }
    function getEmployees(){
        return $this->hasMany(employee::class);
    }
    function getClients(){
        return $this->hasMany(client::class);
    }
}
