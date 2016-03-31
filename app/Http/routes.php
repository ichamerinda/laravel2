<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('layouts.home');
// });

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/



Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::group(['middleware' => 'web'], function () {
    Route::auth();
});

Route::group(['middleware' => 'web','auth'], function () { 
    
    Route::get('/', function () {
        return redirect('/home');
    });
    
    Route::get('/home',function(){

        if(!Auth::check())
        {
            return view('layouts.dashboard');
        }

        if(Auth::user()->id_role == 1){
            return view('layouts.Manajer_home');
        }
        elseif (Auth::user()->id_role == 2) {
            return view('layouts.CustomerService_home');
        }
        elseif(Auth::user()->id_role == 3){
            return view('layouts.Admin_home');
        }
        elseif(Auth::user()->id_role == 4){
            return view('layouts.Donatur_home');
        }
    });
});


//icha


Route::get('/dashboard', function () {
    return view('layouts.dashboard');
});

Route::get('/register2', function () {
    return view('layouts.register');
});


Route::get('/form_anak', function () {
    return view('layouts.form_calonanak');
});

Route::get('/tabel_calonanak', function () {
    return view('layouts.tabel_calonanak');
});

Route::get('/tabel_anakasuh', function () {
    return view('layouts.tabel_anakasuh');
});
Route::get('/tabel_donatur', function () {
    return view('layouts.tabel_donatur');
});
Route::get('/form_keuangan', function () {
    return view('layouts.form_keuangan');
});

Route::get('/tabel_keuangan', function () {
    return view('layouts.tabel_keuangan');
});
Route::get('/laporan_keuangan', function () {
    return view('layouts.laporan_keuangan');
});

Route::get('/chart_donatur', function () {
    return view('layouts.chart_donatur');
});

Route::get('/chart_calonanak', function () {
    return view('layouts.chart_calonanak');
});
Route::get('/chart_anakasuh', function () {
    return view('layouts.chart_anakasuh');
});

Route::get('/chart_keuangan', function () {
    return view('layouts.chart_keuangan');
});

// Route::get('/home', function () {
//     return view('layouts.home');
// });


// Route::get('/home2', function () {
//     return view('layouts.home2');
// });

//Route::resource('CalonAnak','CalonAnak_Controller');

Route::get('/about-us',function(){
    return view('');
});