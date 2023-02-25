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

Route::get('/product', function () {
    return view('product');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/userAccount', function () {
    return view('userAccount');
});



Route::get('/adminAccount', function () {
    return view('adminAccount');
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
