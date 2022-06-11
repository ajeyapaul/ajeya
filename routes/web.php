<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\HomePageController;

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

Route::get('/', HomePageController::class)->name('home');

Auth::routes();
//require __DIR__.'/auth.php';

Route::get('/home', function () {
    return view('home');
});//->name('home');

Route::prefix('admin')->name('admin.')->middleware('auth')->namespace('App\Http\Controllers\Admin')->group( function () {

    Route::redirect('/', '/admin/dashboard', 301);
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);
    Route::resource('/users', UserController::class);
    Route::resource('/permissions', PermissionsController::class);
    Route::resource('/roles', RolesController::class);

});


/*
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'App\Http\Controllers\Admin', 'middleware' => ['auth']], function () {

    Route::redirect('/', '/admin/dashboard', 301);
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);
    Route::resource('/users', UserController::class);
    Route::resource('/permissions', PermissionsController::class);
    Route::resource('/roles', RolesController::class);

});
*/

Route::group(['as' => 'frontend.', 'namespace' => 'App\Http\Controllers\Frontend', 'middleware' => ['auth']], function () {

    Route::get('/home', 'HomeController@index')->name('home');

});
