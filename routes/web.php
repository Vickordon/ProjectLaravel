<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;


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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [MainController::class, 'home']);

// Route::get('/', function () {
//     // return 'Hello World';
//     return view('main');
// });
Route::get('/contact', function () {
    // return 'Hello World';
    return view('contacts');
});
Route::get('/travel', function () {
    // return 'Hello World';
    return view('travel');
});
Route::get('/contact', function () {
    // return 'Hello World';
    return view('contacts');
});
Route::get('/history', function () {
    // return 'Hello World';
    return view('history');
});
Route::get('/advantage', function () {
    // return 'Hello World';
    return view('advantage');
});
