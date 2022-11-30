<?php

use App\Http\Controllers\AdminPanelController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\NewsController;
use App\Models\Movie;
use Illuminate\Support\Facades\Auth;
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

Route::post('/test',  [MainController::class,'test']);//test
Route::get('/testjs', function(){
    return view('jstemp');
});


Route::get('/',  [MainController::class,'home']);

Route::get('/about', function(){
    return view('about');
});
Route::get('/films', [MainController::class,'films']);
Route::get('/films/{id}', [MainController::class,'filmsId']);
Route::get('/ticket', [MainController::class,'ticketbuy']);
Route::resource('/news', NewsController::class);

Route::name('user.')->group(function(){
    Route::view('/profile','profile')->middleware('auth')->name('profile');

    Route::get('/login', function(){
        if(Auth::check()){
            return redirect(route('user.profile'));
        }
        return view('login');
    })->name('login');

    Route::post('/login',[AuthController::class,'login']);

    Route::get('/logout', function(){
        Auth::logout();
        return redirect('/');
    })->name('logout');

    Route::get('/registration', function(){
        if(Auth::check()){
            return redirect(route('user.profile'));
        }
        return view('register');
    })->name('registration');

    Route::post('/registration',[AuthController::class,'register']);
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
