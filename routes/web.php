<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ModelController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\RegistrationController;
use App\Models\MyModel;
use Illuminate\Support\Facades\Route;
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

Route::resource('/', HomeController::class);
Route::resource('/home', HomeController::class);

Route::resource('/model', ModelController::class);
Route::get('/getModel', [ModelController::class, 'showModel']);
Route::get('model/{model}/delete', [ModelController::class, 'delete'])->name('model.delete');

Route::get('/about', [AboutController::class,"index"]);
Route::get('/contacts', [ContactsController::class, "index"]);
Route::get('/school', [SchoolController::class, "index"]);
Route::resource('form', FormController::class);

Route::resource('admin', AdminController::class);
Route::post("admin/{id}/delete", [AdminController::class, "delete"])->name('admin.delete');
Route::get("/casting", [AdminController::class, "casting"]);

Route::resource('registration', RegistrationController::class);

Route::get("showModel/{id}", [AdminController::class, "getModel"])->name('admin.getModel');

Route::resource('portfolio', PortfolioController::class);
Route::get('gallery/{id}', [AdminController::class, "gallery"])->name('admin.gallery');
Route::get("portfolio/{portfolio}/delete", [PortfolioController::class, "delete"])->name('portfolio.delete');
