<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index(){
        $booksTable = book::all();
        
        return view('index' , ['book' => $booksTable]);
    }
}
