<?php

namespace App\Models;

use Database\Factories\TeamTableFactory;
use Illuminate\Database\Eloquent\Model;

class team extends Model
{
 
    protected static function newFactory()
    {
        return TeamTableFactory::new();
    }
}
