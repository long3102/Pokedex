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

Route::prefix('admin')->group(function () {
    Route::any('/login', [\App\Http\Controllers\Backend\AuthController::class, 'login'])
        ->name('admin.login');

    Route::any('/logout', [\App\Http\Controllers\Backend\AuthController::class, 'logout'])
        ->name('admin.logout');

    Route::group(['middleware' => ['backend']], function () {
        Route::any('/', [\App\Http\Controllers\Backend\IndexController::class, 'index'])
            ->name('backend.dashboard.index');
        //Ajax
        Route::any('/ajax/uploadImage', [\App\Http\Controllers\Backend\AjaxController::class, 'uploadImage'])
            ->name('backend.ajax.uploadImage');

        //Pokemons
        Route::any('/pokemons', [\App\Http\Controllers\Backend\PokemomController::class, 'index'])
            ->name('backend.pokemons.index');
        Route::any('/pokemons/create', [\App\Http\Controllers\Backend\PokemomController::class, 'create'])
            ->name('backend.pokemons.create');
        Route::any('/pokemons/store', [\App\Http\Controllers\Backend\PokemomController::class, 'store'])
            ->name('backend.pokemons.store');
        Route::any('/pokemons/edit/{id}', [\App\Http\Controllers\Backend\PokemomController::class, 'edit'])
            ->name('backend.pokemons.edit');
        Route::any('/pokemons/update/{id}', [\App\Http\Controllers\Backend\PokemomController::class, 'update'])
            ->name('backend.pokemons.update');
        Route::any('/pokemons/delete/{id}', [\App\Http\Controllers\Backend\PokemomController::class, 'delete'])
            ->name('backend.pokemons.delete');


    });


});

