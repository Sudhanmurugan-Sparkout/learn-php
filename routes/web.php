<?php

use App\Http\Controllers\BookAuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CookieController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\fallbackController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MOnthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\QueryBuilderController;
use App\Http\Controllers\RawQueryController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\studentsController;
use App\Http\Controllers\userController;
use App\Models\author;
use App\Models\book;
use App\Models\client;
use App\Models\company;
use App\Models\eloquent;
use Illuminate\Http\Request;
use App\Models\employee;
use Doctrine\DBAL\Driver\Middleware;
use Illuminate\Support\Facades\Response;
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
Route::view('/', 'welcome')->name('welcome');   // we can also use view directly and also name of the route 

Route::get('/home{name?}', function ($name = null) {   // we can also get data from url
    echo $name;
    return view('home', ['name' => $name]);
})->whereAlphaNumeric('name'); //->where('name','[0-9a-zA-Z]+');  

Route::get('home', function () {
    return view("home");
});
Route::get('about', function () {   // we can also use redirect the page
    return redirect('/');
});
Route::post('getall', function (Request $request) {
    dd($request->all());
});
Route::get('userdata', function () {
    return view('userdata');
});
Route::prefix('/home')->group(function () {      //we cannot use group for single route prefix
    Route::view('/message', 'welcome');
});
Route::fallback(fallbackController::class);

Route::get('/userdetails', [userController::class, 'get_details']);

//crud opreration routes below

Route::get('student', [studentsController::class, 'index'])->name('student.index');
Route::get('student/create', [studentsController::class, 'create'])->name('student.create');
Route::post('student/create', [studentsController::class, 'store'])->name('student.store');
Route::get('student/{id}/edit', [studentsController::class, 'edit'])->name('student.edit');
Route::put('student/{id}/update', [studentsController::class, 'update'])->name('student.update');
Route::get('student/{id}/delete', [studentsController::class, 'destroy'])->name('student.delete');

//CRUD use resource

Route::resource('course', CourseController::class);
Route::resource('product', ProductController::class);

//eloquent model learning route


Route::get('eloquent', function () {
    return eloquent::all();
});
Route::get('eloquent/create', function () {
    return eloquent::create([
        'name' => "two values",
        'lastName' => "murugan",
        'age' => 3,

    ]);
});

//eloquent relation ship (one To one)

Route::get('/companies', function () {
    // $data= company::find(1);
    // dd($data->getEmployee);
    $data = company::with(['getEmployee', 'getClient'])->whereId(1)->first();
    return Response::json($data);
});

Route::get('/employees/{id}', [CompanyController::class, 'showEmployee']);


Route::get('/employees', function () {
    $data = employee::with('getuser')->whereId(2)->first();
    return Response::json($data);
});

Route::get('/clients', function () {
    $data = client::with('getCompany')->whereId(1)->first();
    return Response::json($data);
});

//Eloquent relationship(one To many)

Route::get('/company-records', function () {
    $datas = company::with(['getemployees.', 'getclients'])->whereId(1)->first();
    return Response::json($datas);
});
Route::get('clients/{id}', [CompanyController::class, 'showClient']);

//Eloquent relationship(many To many)

Route::get('/author-books', function () {
    $data = author::with('getbook')->whereId(1)->get();
    return Response::json($data);
});

Route::get('/book-authors', function () {
    $data = book::with('getauthors')->whereId(3)->get();
    return Response::json($data);
});

Route::get('/book-authors/{id}', [BookAuthorController::class, 'authorShow']);

//Db raw queries

Route::get('/raw-queries', [RawQueryController::class, 'index']);
Route::get('/raw-queries/create', [RawQueryController::class, 'create']);
Route::get('/raw-queries/update/{id}', [RawQueryController::class, 'update']);
Route::get('/raw-queries/delete/{id}', [RawQueryController::class, 'delete']);

//Query Builder 

Route::get('/query-builder', [QueryBuilderController::class, 'index']);

//Collections 

Route::get('/collections', [CollectionController::class, 'index']);

//middleware

Route::get('/month/{month}', MOnthController::class)->middleware('month');
// Route::get('/month/{month}',MOnthController::class)->middleware('month:2');  also give value to middleware

//File upload 

Route::view('/car', 'carFileUpload');
Route::post('/car/upload', [CarController::class, 'store'])->name('car.upload');
Route::get('/car/show', [CarController::class, 'show']);

Route::view('/image', 'imageFileUpload');
Route::post('/image/upload', [ImageController::class, 'store'])->name('image.upload');

//session

Route::get('session', function () {
    if (session()->has('user')) {
        return view('sessionShow');
    } else {
        return view('sessionForm');
    }
});
Route::post('session/store', [SessionController::class, 'store'])->name('session.store');
Route::get('session/logout',function(){
        if(session()->has('user')){
            session()->forget('user');
        }
        return view('sessionForm');
})->name('logout');

//cookies

Route::view('cookies','CookieForm');
Route::post('cookie/store',[CookieController::class,'setCookies'])->name('cookie.store');

//Authendication

Route::get('register',[RegisterController::class,'index']);
Route::post('register/store',[RegisterController::class,'store'])->name('register.store');

Route::get('login',[LoginController::class,'index']);
Route::post('login/post',[LoginController::class,'store'])->name('login.store');





