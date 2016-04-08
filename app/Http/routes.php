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
        }else{

            if(Auth::user()->id_role == 1){
                return view('layouts.admin_home');
            }
            elseif (Auth::user()->id_role == 2) {
                return view('layouts.cs_home');
            }
            elseif(Auth::user()->id_role == 3){
                return view('layouts.manajer_home');
            }
            elseif(Auth::user()->id_role == 4){
                return view('layouts.donatur_home');
            }else{
                return view('layouts.login');
            }
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


Route::get('/admin_form_calonanak', function () {
    return view('layouts.admin_form_calonanak');
});

Route::get('/admin_tabel_calonanak', function () {
    return view('layouts.admin_tabel_calonanak');
});

Route::get('/admin_detail_calonanak', function () {
    return view('layouts.admin_detail_calonanak');
});
Route::get('/admin_tabel_anakasuh', function () {
    return view('layouts.admin_tabel_anakasuh');
});
Route::get('/admin_tabel_donatur', function () {
    return view('layouts.admin_tabel_donatur');
});
Route::get('/admin_form_keuangan', function () {
    return view('layouts.admin_form_keuangan');
});

Route::get('/admin_tabel_keuangan', function () {
    return view('layouts.admin_tabel_keuangan');
});
Route::get('/admin_laporan_keuangan', function () {
    return view('layouts.admin_laporan_keuangan');
});

Route::get('/admin_chart_donatur', function () {
    return view('layouts.admin_chart_donatur');
});

Route::get('/admin_chart_calonanak', function () {
    return view('layouts.admin_chart_calonanak');
});
Route::get('/admin_chart_anakasuh', function () {
    return view('layouts.admin_chart_anakasuh');
});

Route::get('/admin_chart_keuangan', function () {
    return view('layouts.admin_chart_keuangan');
});

// Route::get('/home', function () {
//     return view('layouts.home');
// });

//START MANAJER
Route::get('/manajer_home', function () {
    return view('layouts.manajer_home');
});


Route::get('/manajer_tabel_calonanak', function () {
    return view('layouts.manajer_tabel_calonanak');
});

Route::get('/manajer_tabel_anakasuh', function () {
    return view('layouts.manajer_tabel_anakasuh');
});
Route::get('/manajer_tabel_donatur', function () {
    return view('layouts.manajer_tabel_donatur');
});
Route::get('/manajer_tabel_keuangan', function () {
    return view('layouts.manajer_tabel_keuangan');
});
Route::get('/manajer_laporan_keuangan', function () {
    return view('layouts.manajer_laporan_keuangan');
});

Route::get('/manajer_chart_donatur', function () {
    return view('layouts.manajer_chart_donatur');
});

Route::get('/manajer_chart_calonanak', function () {
    return view('layouts.manajer_chart_calonanak');
});
Route::get('/manajer_chart_anakasuh', function () {
    return view('layouts.manajer_chart_anakasuh');
});

Route::get('/manajer_chart_keuangan', function () {
    return view('layouts.manajer_chart_keuangan');
});


//END MANAJER


///START CUSTOMER SERVICE
Route::get('/cs_form_donatur', function () {
    return view('layouts.cs_form_donatur');
});

Route::get('/cs_home', function () {
    return view('layouts.cs_home');
});

// END CUSTOMER

// Route::get('/home2', function () {
//     return view('layouts.home2');
// });

//Route::resource('CalonAnak','CalonAnak_Controller');

Route::get('/about-us',function(){
    return view('');
});