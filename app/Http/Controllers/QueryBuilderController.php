<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class QueryBuilderController extends Controller
{
   public function index(){
        //   $data=DB::table('players')->get();
        // $data=DB::table('players')->where('id','!=',1)->value('email');
        // $data=DB::table('players')->pluck('email','name');
        //   return Response::json($data);

        // if(DB::table('players')->where('id',10)->exists()){
        //     return "Record 1 has be there";
        // }
        // else{
        //     return "record 1 not be there";
        // }
        
        // if(DB::table('players')->where('id',1)->doesntExist()){
        //     return "Record 10 not be there";
        // }
        // else{
        //     return "record 1 has be there";
        // }

   //   $data= DB::table('players')->insert([
   //       ['name'=>'sudhan',
   //       'team_id'=>2,
   //       'email'=>'abc12@gmail.com',
   //       'health_condition'=>'good',
   //       'number'=>3],[
   //          'name'=>'madhan',
   //          'team_id'=>4,
   //          'email'=>'abc2@gmail.com',
   //          'health_condition'=>'injury',
   //          'number'=>7
   //       ]
   //    ]);
   // if($data){
   //    return "Insert succesfully";
   //  }else{
   //    return "Cannot insert data alreadyhere";
   //  }
   // }
   
   // $data= DB::table('players')->insertOrIgnore([
   //    ['name'=>'sudhan',
   //    'team_id'=>2,
   //    'email'=>'abc12@gmail.com',
   //    'health_condition'=>'good',
   //    'number'=>3],[
   //       'name'=>'madhan',
   //       'team_id'=>4,
   //       'email'=>'abc2@gmail.com',
   //       'health_condition'=>'injury',
   //       'number'=>7
   //    ]
   // ]);
   
   // $data= DB::table('players')->updateOrInsert(
   //    ['name'=>'sudhan',
   //    'team_id'=>4,
   //    'email'=>'sudhanmurugan@gmail.com',
   //    'health_condition'=>'good',
   //    'number'=>3]
   // );
   // $data= DB::table('players')->increment('number');
   // $data= DB::table('players')->decrement('number',2);      //2 parameter how many value has been decrease or increase
   // $data= DB::table('players')->where('id',[21,22])->decrement('number',1,["name"=>"sudhan"]); ;
   // if($data){
   //    return " the number column is increased";
   // }else{
   //    return  "Not increased";
   // }
   $data=DB::table('players')->where('team_id',4)->sharedLock()->get();
   // return Response::json($data);
   $shareLock=$data;
   return Response::json($shareLock);
   // $new=DB::table('players')->where('team_id',4)->get();
   // return Response::json($new);
}
}
