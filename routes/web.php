<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});
Auth::routes();

    Route::prefix('{city?}')->middleware('city')->group(function() {
    Route::get('/', [App\Http\Controllers\PagesController::class, 'home'])->name('home');
    Route::get('/contacts', [App\Http\Controllers\PagesController::class, 'contacts'])->name('contacts');
//    Route::get('/catalog', App\Http\Livewire\CatalogPages::class)->name('catalog');
    Route::get('/catalog',[App\Http\Controllers\CatalogController::class,'catalog'])->name('catalog');
    Route::get('/catalog/{slug}', [App\Http\Controllers\CatalogController::class, 'object'])->name('object')->missing(function(Request $request){
        return Redirect::route('error.404');
    });
    Route::get('/publish', [App\Http\Controllers\PublishController::class, 'publish'])->name('publish');
    Route::get('/cabinet', [App\Http\Controllers\CabinetController::class, 'cabinet'])->name('cabinet');
    Route::get('/cabinet/{id}/update', [App\Http\Controllers\CabinetController::class, 'editUser'])->name('update.user');
    Route::post('/cabinet/{id}/change-password', [App\Http\Controllers\CabinetController::class, 'editPassword'])->name('change.password');
    Route::get('/error',function (){
        return view('errors.404');
    })->name('error.404');
});



