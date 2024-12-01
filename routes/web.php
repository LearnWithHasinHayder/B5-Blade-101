<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\SiteController;

use App\Http\Controllers\DemoController;
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/about',[AboutController::class, 'about']); //get post put patch delete
Route::get('/about/me',[AboutController::class, 'aboutMe']); //get post put patch delete
Route::get('/download',[FileController::class, 'download']); //get post put patch delete
Route::get('/download/invoice/{invoiceId}',[FileController::class, 'downloadInvoice']); //get post put patch delete
// Route::get('/download/invoice/{invoiceId}/type',[FileController::class, 'downloadInvoice']); //get post put patch delete
Route::get('/download/invoice/{invoiceId}/type/{fileType?}',[FileController::class, 'downloadInvoice']); //get post put patch delete
Route::get('/download/invoice',[FileController::class, 'error']); //get post put patch delete
// Route::get('/download/invoice/{invoiceId}/type/{fileType}',[FileController::class, 'downloadInvoiceWithType']); 

Route::get('/invoice/{invoiceId}',[InvoiceController::class, 'invoice']); //get post put patch delete
Route::get('/misc',[InvoiceController::class, 'requestExample']); //get post put patch delete

Route::get('/tasks',[TaskController::class, 'index']); //get post put patch delete
Route::get('/tasks/{taskId}',[TaskController::class, 'show']); //get post put patch delete

Route::get("/",[SiteController::class, 'home'])->name('home') ; //get post put patch delete
Route::get("/menux",[SiteController::class, 'menu'])->name('menu'); //get post put patch delete
Route::get("/about",[SiteController::class, 'about'])->name('about'); //get post put patch delete
Route::get("/reservations",[SiteController::class, 'reservations'])->name('res') ; //get post put patch delete

// Route::view("/", "site.home");
// Route::view("/about", "site.about");

Route::get("/demo/logic",[DemoController::class, 'logic']); //get post put patch delete
Route::get("/demo/data",[DemoController::class, 'data']); //get post put patch delete
Route::get("/demo/home",[DemoController::class, 'home']); //get post put patch delete
Route::get("/demo/about",[DemoController::class, 'about']); //get post put patch delete