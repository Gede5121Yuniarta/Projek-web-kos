<?php

use App\Http\Controllers\DetailController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AlamatController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


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

Route::get('/',[HomeController::class,'index']);
Route::get('/about',[AboutController::class,'show']);
Route::get('/alamat',[AlamatController::class,'show']);

// Route::get('/detail',[DetailController::class,'show']);
// Route::get('/detail/{id}',[HomeController::class,'detailPackage'])->name('detail');
Route::get('/detail/{id}', [DetailController::class, 'detailPackage'])->name('detail');


Route::group(['middleware'=>'auth'], function () {
    Route::resource('product',ProductController::class);
});
// Route::get('/product',[ProductController::class,'index']);

// percobaan
Route::get('/home',function(){
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
