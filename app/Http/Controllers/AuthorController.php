<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\task\Author;
use App\Models\task\Authorprofile;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas=Author::all();
        return view('index',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $author=$request->validate([
            'name'=>'required|string|max:30|min:3|unique:authors,name',
            'email'=>'required|email|unique:authors,email',
            'password'=>'required|string|min:6|max:15',
            'status'=>'required|boolean',
            'phone'=>'required|string|min:10|',
             'address'=>'required|string|min:10|max:100',
        ]);

        $authorObj = new Author();
        $authorObj->name = $author['name'];
        $authorObj->email = $author['email'];
        $authorObj->password =encrypt($author['password']);
        $authorObj->status = $author['status'];
        $authorObj->save();
       
        $authorProfileObj=new Authorprofile();
        $authorProfileObj->author_id=$authorObj->id;
        $authorProfileObj->phone=$author['phone'];
        $authorProfileObj->address=$author['address'];
        $authorProfileObj->save();
        return redirect('author');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=Author::with('getProfile')->whereId($id)->first();
        return view('show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=Author::with('getProfile')->whereId($id)->first();
        return view('edit',compact('data'));
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
       
        $update=$request->validate([
            'name'=>'required|string|max:30|min:3',
            'email'=>'required|email',
            'status'=>'required|boolean',
            'phone'=>'required|string|min:10|',
             'address'=>'required|string|min:10|max:100',
        ]);
       
        $authorObj = Author::find($id);
        $authorObj->name = $update['name'];
        $authorObj->email = $update['email'];
        $authorObj->status = $update['status'];
        $authorObj->save();
       
        $authorProfileObj=Authorprofile::where('author_id',$id)->first();
        $authorProfileObj->phone=$update['phone'];
        $authorProfileObj->address=$update['address'];
        $authorProfileObj->save();
        return redirect('author');
       
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        Author::find($id)->delete($request->all());
        return redirect('author');
    }
}
