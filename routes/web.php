<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactsController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

//Home Page 
Route::get('/home', [HomeController::class,'index'])->middleware(['auth'])->name('home');
//add contact
Route::post('/home/create', [HomeController::class,'store']);
//Search contact
Route::post('/home/search', [HomeController::class,'search']);
//Edit contact
Route::get('/contact/{contacts}', [ContactsController::class,'edit'])->middleware(['auth'])->name('contact');
Route::post('/contact/{contacts}', [ContactsController::class, "update"]);
//Delete contact
Route::delete('/contact/{contacts}', [ContactsController::class, "remove"]);


//MYSQL Answers
//1. Select 'ProductName', 'QuantityPerUnit' FROM 'PRODUCT'
//2. Select 'ProductID', 'ProductName' FROM 'PRODUCT' ORDER BY CURRENT_DATE() 
//3. Select 'ProductName', max('UnitPrice'), min('UnitPrice') FROM 'PRODUCT'
//4. Select 'ProductName', 'UnitPrice' FROM 'PRODUCT' GROUP BY UnitPrice HAVING AVG(UnitPrice) < UnitPrice
//5. Select 'ProductID', 'ProductName', 'UnitPrice' FROM 'PRODUCT' WHERE 'UnitPrice' < 20 ORDER BY CURRENT_DATE()
//6. Select 'ProductName', 'UnitsOnOrder', 'UnitsInStock' FROM 'PRODUCT' WHERE 'UnitsInStock' < 'UnitsOnOrder'
require __DIR__.'/auth.php';
