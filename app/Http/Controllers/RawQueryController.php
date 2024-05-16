<?php

namespace App\Http\Controllers;

use App\Models\rawQuery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;


class RawQueryController extends Controller
{
    function index(){
       $data=DB::select('select*from raw_queries where name=?',["sudhan"]);
       return Response::json($data);
    }
    
    function create(){
        $data=DB::insert('insert into raw_queries(name,phone,age) values(?,?,?)',["jegan",234321,22]);
      if($data){
        return "Insert successfully";
      }else{
        return "Data cannot insert";
      }
    }

    function update(int $id){
        $update =DB::update('update raw_queries set name=? where id=?',["sandy",$id]);
        if($update){
            return "Update successfully";
          }else{
            return "Data cannot Update";
          }
    }

    function delete(int $id){
        $delete=rawQuery::find($id)->delete();
        if($delete){
            return "delete successfully";
          }else{
            return "Data cannot delete";
          }
    }
}
