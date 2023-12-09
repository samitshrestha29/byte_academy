<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomePageController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/urls', function () {
    return view('urls');
});


Route::group(['prefix' => 'blog'], function () {

});


Route::middleware('test')->get('/middleware-test', function () {
    return 'hey';
});


Route::get('/', [HomePageController::class, 'index'])->name('home');

Route::get('contact', [ContactController::class, 'index']);

Route::post('/submit-contact', [ContactController::class, 'store'])->name('contact.submit');