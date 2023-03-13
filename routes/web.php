<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controller\MailController;

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

Route::get('/', [App\Http\Controllers\IndexController::class, 'index']);
Route::get('/single/{id}', [App\Http\Controllers\IndexController::class, 'single']);
Route::post('/single', [App\Http\Controllers\IndexController::class, 'store']);
Route::get('/VenteForm', [App\Http\Controllers\VenteController::class, 'VenteForm']);
Route::post('/VenteForm', [App\Http\Controllers\VenteController::class, 'store']);
Route::get('/admin/{id}/edite', [App\Http\Controllers\IndexController::class, 'edite']);
Route::put('/admin/{id}/edite', [App\Http\Controllers\IndexController::class, 'update']);
Route::get('/achat', [App\Http\Controllers\AchatController::class, 'achat']);
Route::get('/admin/ajouter', [App\Http\Controllers\AdminController::class, 'ajouter']);
Route::Post('/admin/ajouter', [App\Http\Controllers\AdminController::class, 'store']);
Route::get('/admin/ProduitClient', [App\Http\Controllers\AdminController::class, 'ProduitClient']);
Route::get('/admin/Produit', [App\Http\Controllers\AdminController::class, 'Produit']);
Route::get('/admin/home', [App\Http\Controllers\AdminController::class, 'home']);
Route::get('/admin/commande', [App\Http\Controllers\AdminController::class, 'commande']);
Route::delete('/admin/{id}', [App\Http\Controllers\AdminController::class, 'delete']);



Route::get('/send-email', [App\Http\Controllers\MailController::class, 'sendEmail']);

Auth::routes();
