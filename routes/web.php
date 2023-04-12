<?php

use App\Http\Controllers\BookSearchController;
use App\Http\Controllers\BookUpdateController;
use App\Http\Controllers\DemoDataController;
use App\Http\Controllers\IndoorOutdoorBooController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\RequestForBooksController;
use App\Http\Controllers\RequestFromLibraryController;
use App\Http\Controllers\RequestFromPersonController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BooksController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
   return view('welcome');
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/books', [BooksController::class, 'index'])->name('books');
    Route::get('/create-books', [BooksController::class, 'create'])->name('books.create');


    Route::get('/book-search', [BookSearchController::class, 'index'])->name('books_search');
    Route::get('/book-update', [BookUpdateController::class, 'index'])->name('books_update');
    Route::get('/books/order', [OrderController::class, 'index'])->name('books_order');

    Route::get('/demo-data', [DemoDataController::class, 'index'])->name('demo_data');

    Route::get('/request/books/library', [RequestFromLibraryController::class, 'index'])->name('request_from_library');
    Route::get('/request/books/person', [RequestFromPersonController::class, 'index'])->name('request_from_person');

    Route::get('/request/books', [RequestForBooksController::class, 'index'])->name('book_request');

    Route::get('/indoor/books', [IndoorOutdoorBooController::class, 'indoor'])->name('book_indoor');
    Route::get('/outdoor/books', [IndoorOutdoorBooController::class, 'outdoor'])->name('book_outdoor');
});
