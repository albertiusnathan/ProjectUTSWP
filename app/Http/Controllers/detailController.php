<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;
use App\Models\Detail;

class detailController extends Controller
{
    public function getBookDetails(){
        $details = Category::join('books', 'books.category_id', '=', 'categories.id')->join('details', 'details.book_id', '=', 'books.id')
        ->get(['books.title', 'categories.category', 'details.author', 'details.publisher', 'details.year', 'details.description']);

        return view('bookdetails')->with('details',$details);
    }
}
