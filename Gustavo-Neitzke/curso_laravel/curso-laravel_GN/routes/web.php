<?php

use App\Http\Controllers\JogosController;
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

// Route::view('/jogos','jogos');

// Route::get('/jogos', function(){
//     return "Curso de laravel do Gustavo";
// });

// Route::view('/jogos','jogos',['name'=>'GTA']);


// Route::get('/jogos/{name?}', function ($name = null) {
//         return view('jogos',['nomeJogo'=>$name]);
//      })

//      ->where('name', '[A-Za-z]+')
//      ;


    // Route::get('/jogos/{id?}', function ($id = null) {
    //     return view('jogos',['idJogo'=>$id]);
    //  })->where('id', '[0-9]+');




//  Route::get('/jogos/{id?}/{name?}', function ($id = null, $name = null) {
//         return view('jogos',['idJogo'=>$id, 'nomeJogo'=>$name]);
//      })->where(['id', '[0-9]+', 'name', '[A-Za-z]+']);




// Route::get('/jogos',[JogosController::class, 'index']);





// Route::get('/home', function () {
//     return view('welcome');
// })->name('hame-index');

Route::prefix('jogos')->group(function(){
    Route::get('/', [JogosController::class, 'index'])->name('jogos-index');
    Route::get('/create', [JogosController::class, 'create'])->name('jogos-create');
    Route::post('/', [JogosController::class, 'store'])->name('jogos-store');
    Route::get('/{id}/edit', [JogosController::class, 'edit'])->where('id','[0-9]+')->name('jogos-edit');
    Route::put('/{id}', [JogosController::class, 'update'])->where('id','[0-9]+')->name('jogos-update');
    Route::delete('/{id}', [JogosController::class, 'destroy'])->where('id','[0-9]+')->name('jogos-destroy');

});

Route::fallback(function(){
    return "Erro !";
});
