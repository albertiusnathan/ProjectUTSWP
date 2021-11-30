<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\bookController;
use \App\Http\Controllers\detailController;

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

Route::get('/', [bookController::class, 'getBooks']);

Route::resource('books', bookController::class);

Route::get('/contact', function(){
    return view('contact');
});

//Route::get('/details', [detailController::class, 'getBookDetails']);

// Route::get('/', function (){
//     return 'books';
// });
