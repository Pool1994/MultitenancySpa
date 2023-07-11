<?php

use App\Http\Controllers\Landlord\Web\Auth\RegisterController;
use App\Http\Controllers\Landlord\Web\HomeController as WebHomeController;
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

// Route::get('{any?}', function() {
//     return view('application');
// })->where('any', '.*');
Route::get("/",[WebHomeController::class,'index'])->name("home");
Route::get('/sigunp',[RegisterController::class,'index']);
Route::post('/sigunp',[RegisterController::class,'store'])->name("signup");
Route::get("prueba",function(){
     return response()->json($_SERVER);
});
Route::get('/admin/{any?}', function() {
     return view('application');
})->where('any', '.*');