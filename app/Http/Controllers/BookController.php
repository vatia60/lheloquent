<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Phone;

class BookController extends Controller
{
    public function index ()
    {
        $book = Book::all();
        $phone = Phone::all();
        return view('book',compact('book'));
    }
}
