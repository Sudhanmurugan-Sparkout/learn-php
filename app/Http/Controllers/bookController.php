<?php

namespace App\Http\Controllers;

use App\Models\task\Author;
use Illuminate\Http\Request;
use App\Models\task\book;
use App\Models\task\genre;

class bookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas=Author::with('getBooks')->get();
        // dd($datas);
        return view('books.index',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datas=Author::with('getBooks')->get();
        $genres=genre::all();
        return view('books.create',compact('datas','genres'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store = $request->validate([
            'title' => 'required|string|unique:books,title',
            'status' => 'required',
            'author_id' => 'required',
            'genre_id' => 'required|array', 
            'genre_name'=>'sometimes|unique:genres,name',
            'genre_status'=>'sometimes'
        ]);
        // dd($store);
        $bookObj = new Book();
        $bookObj->title = $store["title"];
        $bookObj->status = $store["status"];
        $bookObj->author_id = $store["author_id"];
        $bookObj->save();
        $bookObj->genres()->attach($store['genre_id']);
        
        $genreobj=new genre();
        $genreobj->name=$store['genre_name'];
        $genreobj->status=$store['genre_status'];
        $genreobj->save();
        return redirect('book');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show=book::find($id);
        return view('books.show',compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {    
        $datas=book::with('genres')->find($id);
        $authors=Author::all();
        $genres=genre::all();
        return view('books.edit',compact('datas','authors','genres'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $store=$request->validate([
         'title'=>'required|string',
         'status'=>'required',
         'genre_id'=>'required|array',
         'author_id'=>'required'
        ]);
     
        $bookObj=Book::find($id);
        $bookObj->title=$store["title"];
        $bookObj->status=$store["status"];
        $bookObj->author_id=$store["author_id"];
        $bookObj->save();
        $bookObj->genres()->sync($store['genre_id']);
        return redirect('book');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,Request $request)
    {
        
        book::find($id)->delete($request->all());
        return redirect('book');
    }
}
