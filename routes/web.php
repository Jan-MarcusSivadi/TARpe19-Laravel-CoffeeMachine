<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoffeeMachineController;


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
Route::get("/kohviautomaat", [CoffeeMachineController::class, "index"]);
Route::get("/kohviautomaat/{machine}/decrement", [CoffeeMachineController::class, "decrement"])->name('coffeeMachine.decrement');

Route::get("/admin", [CoffeeMachineController::class, "admin"]);
Route::get("/kohviautomaat/{machine}/increment", [CoffeeMachineController::class, "increment"])->name('coffeeMachine.increment');

Route::get('/', function () {
    return view('welcome');
});

