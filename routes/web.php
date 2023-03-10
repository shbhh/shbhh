<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group whichs
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login',[AdminController::class, 'login'] )->name('login');
Route::post('/login',[AdminController::class, 'login'] );

Route::group(['middleware' => 'auth'], function () { 
    Route::get('/home',[AdminController::class, 'dashboard'] );
    Route::get('/logout',[AdminController::class, 'logout'] );
    
    Route::group(['prefix' => 'leads'], function(){
        Route::get('/add-lead', [AdminController::class, 'add_lead']);
        Route::post('/add-lead', [AdminController::class, 'add_lead']);
        Route::get('/manage-leads', [AdminController::class, 'manage_leads']);
        Route::get('/delete-lead/{id}', [AdminController::class, 'delete_lead']);
        Route::get('/edit-lead/{id}', [AdminController::class, 'edit_lead']);
                Route::post('/edit-lead/{id}', [AdminController::class, 'edit_lead']);
    });
   
}); 
