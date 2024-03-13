<?php


use App\Models\Product;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoryController;

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
Route::get('categories', [App\Http\Controllers\CategoryController::class, 'index']);
Route::get('categories/create', [App\Http\Controllers\CategoryController::class, 'create']);
Route::post('categories/create', [App\Http\Controllers\CategoryController::class, 'store']);


Route::get('products', function(){
    return Product::get();
});

Route::get('product/create', [App\Http\Controllers\ProductController::class, 'create']);
Route::post('product/create', [App\Http\Controllers\ProductController::class, 'store']);

// Route::get('product-create', function(){
//     return Product::create([
//         'name' => 'man pant style',
//         'description' => 'man pant description',
//         'small_description'  => 'man pant small description',
//         'original_price'  => '599',
//         'price'  => '549',
//         'stock'  => '40',
//         'is_active'  => '1'
//     ]);
// });


Route::get('/', function () {
    return view('frontend.index');
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
