<?php

use App\Http\Controllers\fallbackController;
use App\Http\Controllers\studentsController;
use App\Http\Controllers\userController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('layout.baselayout');
// });
Route::view('/','welcome')->name('welcome');   // we can also use view directly and also name of the route 

Route::get('/home{name?}',function($name=null){   // we can also get data from url
    echo $name;
   return view('home',['name'=>$name]);
})->whereAlphaNumeric('name');//->where('name','[0-9a-zA-Z]+');  

Route::get('home',function(){
    return view("home");
});
Route::get('about',function(){   // we can also use redirect the page
     return redirect('/');
} );
Route::post('getall',function(Request $request){
    dd ($request->all());
});
Route::get('userdata',function(){
    return view('userdata');
});
Route::prefix('/home')->group(function(){      //we cannot use group for single route prefix
    Route::view('/message','welcome');
});
Route::fallback(fallbackController::class);

Route::get('/userdetails',[userController::class,'get_details']);

//crud opreration routes below

Route::get('student',[studentsController::class,'index']);
Route::get('student/create',[studentsController::class,'create']);
Route::post('student/create',[studentsController::class,'store']);
