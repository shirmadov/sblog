<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
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

    if(\Auth()->check()){
        return view('user.index');
    }else{
        return view('main.index');
    }

});

Route::get('/test', [BlogController::class, 'test']);
Route::get('/set_cache', [BlogController::class, 'setCache']);

//Route::get('/editor', function(){
//    return view('user.editor.editor');
//})->name('editor');

Route::prefix('editor')->middleware(['auth'])->group(function(){
   Route::get('/', [BlogController::class,'index'])->name('editor');
   Route::post('/create_line', [BlogController::class,'createLine'])->name('create_line');
});



Route::get('/dashboard', function () {
    return view('user.index');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
