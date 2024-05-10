<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\book;

class BookAuthorController extends Controller
{
    function authorShow(int $id){
        $book=book::find($id);
        $authors=$book->getauthors;
        return view('Relationship.authorShow',compact('book','authors'));
    }
}
