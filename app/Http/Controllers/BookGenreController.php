<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\task\book;

class BookGenreController extends Controller
{
    function getGenre(){
        $books=book::with('genres')->get();
        return view('genre.index',compact('books'));
    }
}
