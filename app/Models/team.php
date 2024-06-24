<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class team extends Model
{
    use HasFactory;

    protected $fillable = ['name','company_id'];

    public function roles(){
       return $this->hasMany(role::class,'team_id');
    }
    public function company(){
        return $this->belongsTo(company::class);
    }
    
}
