<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;
use App\Models\Detail;

class nonFictController extends Controller
{
    public function getNonFicts(){
        $nonfict = Category::join('books', 'books.category_id', '=', 'categories.id')->join('details', 'details.book_id', '=', 'books.id')
        ->get(['books.title', 'categories.category', 'details.author', 'details.publisher', 'details.year'])->where('category.category' -> 'Non-fiksi');

        return view('books')->with('books',$nonfict);
    }
}
