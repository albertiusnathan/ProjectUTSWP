<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;
use App\Models\Detail;

class bookController extends Controller
{
    public function getBooks(){
        $books = Category::join('books', 'books.category_id', '=', 'categories.id')->join('details', 'details.book_id', '=', 'books.id')
        ->get(['books.title', 'categories.category', 'details.author', 'details.publisher', 'details.year', 'books.id']);

        return view('books', compact('books'));
    }

    public function show(Book $books){

        return view('bookdetails', compact('books'));
    }
}
