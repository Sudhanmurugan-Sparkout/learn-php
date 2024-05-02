<?php

namespace App\Http\Controllers;

use App\Models\user_detail;
use Illuminate\Http\Request;

class userController extends Controller
{
    function get_details(){
          $data = user_detail::all();
          foreach($data as $val){
            echo($val->user_name);
            echo "<br>";
          }
          
        //    print_r($data);
         //  return implode(",",$data);
    }
}
