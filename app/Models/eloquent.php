<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str; 

class eloquent extends Model
{
    use HasFactory;
    protected $fillable=[
       'name',
       	'lastName',
           'age',
           'slug'
    ];
    protected $hidden=[
        'created_at'
    ];
    protected $casts=[
       'age'=>'integer'
    ];
    protected $appends=[
        'name_lastName'
    ];
    function getNameLastNameattribute(){
       return $this->name.'-'.$this->lastName;
    }

    //Accessor
    function getNamAttributes(){
        return ucfirst($this->name);
    }
    //mutators

    function setNameattribute($value){
         $this->attributes['name']=strtoupper($value);
         $this->attributes['slug']=Str::slug($value);
    }
}
