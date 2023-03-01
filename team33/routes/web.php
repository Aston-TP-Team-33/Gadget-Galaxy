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

Route::get('/', function () {
    return view('homepage');
});

Route::get('/homepage', function () {
    return view('homepage');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/product', [App\Http\Controllers\ProductsController::class, 'index'])->name('productsPage');

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/userAccount', function () {
    return view('userAccount');
});





Route::get('/logout', 'App\Http\Controllers\HomeController@logout');

Route::get('/home', function () {
    return view('homepage');
});

Auth::routes();

/*User and Admin redirect linking sysytem*/

Route::middleware(['auth', 'AdminAccess:user'])->group(function () {
  
    Route::get('/userAccount', [App\Http\Controllers\HomeController::class, 'index'])->name('userAccount');
    
});
  

Route::middleware(['auth', 'AdminAccess:admin'])->group(function () {
  
    Route::get('/admin', [App\Http\Controllers\HomeController::class, 'admin'])->name('adminAccount');
});





/*To handle basket and more in the User Account*/
Route::post('/home/{id}', 'App\Http\Controllers\BasketController@basket');  /*1*/
Route::post('update/{id}', [App\Http\Controllers\BasketController::class, 'update']); /*2*/
Route::post('updatequantity/{id}', [App\Http\Controllers\ProductsController::class, 'updatequantity']);  /*for admin still to do*/
Route::post('updateStatus/{id}', [App\Http\Controllers\BasketController::class, 'updateStatus']);
Route::post('remove/{id}', [App\Http\Controllers\BasketController::class, 'remove']);
Route::post('checkout', [App\Http\Controllers\BasketController::class, 'addToOrders']);
Route::get('/adminAccount', [App\Http\Controllers\HomeController::class, 'admin']);
Route::get('/contactForm', 'App\Http\Controllers\QueriesController@contactForm');
