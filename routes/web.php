<?php

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
    return view('welcome');
});


Route::get('/login','AuthController@login')->name('login');
Route::post('/postlogin','AuthController@postlogin');
Route::get('/logout','AuthController@logout');

Route::group(['middleware' => ['auth','CheckRole:admin']],function(){
	Route::get('/siswa','SiswaController@index');
	Route::post('/siswa/create','SiswaController@create');
	Route::get('/siswa/{id}/edit','SiswaController@edit');
	Route::get('/siswa/{id}/update','SiswaController@update');
	Route::get('/siswa/{id}/delete','SiswaController@delete');
	Route::get('/siswa/{id}/profile','SiswaController@profile');

	Route::get('/guru','GuruController@index');
	Route::post('/guru/create','GuruController@create');
	Route::get('/guru/{id}/edit','GuruController@edit');
	Route::get('/guru/{id}/update','GuruController@update');
	Route::get('/guru/{id}/delete','GuruController@delete');
	Route::get('/guru/{id}/profile','GuruController@profile');
});


Route::group(['middleware' => ['auth','CheckRole:admin,siswa,guru']],function(){
	Route::get('/dashboard','DashboardController@index');

});





Route::get('/home', function () {
    return view('home');
});

Route::get('/profile', function () {
	return view('profile');
});

Route::get('/contact', function () {
	return view('contact');
});






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout', 'Auth\LoginController@logout');



//
//Rombel RPL
//
Route::get('/RPL', function (){
	return view('RPL');
});

//Rombel RPL X
Route::get('/RPL_X_1', function (){
return view('RPL_X_1');
});

//Route::get('/RPL/RPL_X_1', 'HomeController@rombel');

Route::get('/RPL_X_2', function (){
return view('RPL_X_2');
});
Route::get('/RPL_X_3', function (){
return view('RPL_X_3');
});
Route::get('/RPL_X_4', function (){
return view('RPL_X_4');
});
//Rombel RPL XI
Route::get('/RPL_XI_1', function (){
return view('RPL_XI_1');
});
Route::get('/RPL_XI_2', function (){
return view('RPL_XI_2');
});
Route::get('/RPL_XI_3', function (){
return view('RPL_XI_3');
});
Route::get('/RPL_XI_4', function (){
return view('RPL_XI_4');
});
//Rombel RPL XII
Route::get('/RPL_XII_1', function (){
return view('RPL_XII_1');
});
Route::get('/RPL_XII_2', function (){
return view('RPL_XII_2');
});
Route::get('/RPL_XII_3', function (){
return view('RPL_XII_3');
});
Route::get('/RPL_XII_4', function (){
return view('RPL_XII_4');
});




//
//Rombel TKJ
//
Route::get('/TKJ', function (){
	return view('TKJ');
});

//Rombel TKJ X
Route::get('/TKJ_X_1', function (){
	return view('TKJ_X_1');
});
Route::get('/TKJ_X_2', function (){
	return view('TKJ_X_2');
});
Route::get('/TKJ_X_3', function (){
	return view('TKJ_X_3');
});
Route::get('/TKJ_X_4', function (){
	return view('TKJ_X_4');
});
//Rombel TKJ XI
Route::get('/TKJ_XI_1', function (){
	return view('TKJ_XI_1');
});
Route::get('/TKJ_XI_2', function (){
	return view('TKJ_XI_2');
});
Route::get('/TKJ_XI_3', function (){
	return view('TKJ_XI_3');
});
Route::get('/TKJ_XI_4', function (){
	return view('TKJ_XI_4');
});
//Rombel TKJ XII
Route::get('/TKJ_XII_1', function (){
	return view('TKJ_XII_1');
});
Route::get('/TKJ_XII_2', function (){
	return view('TKJ_XII_2');
});
Route::get('/TKJ_XII_3', function (){
	return view('TKJ_XII_3');
});
Route::get('/TKJ_XII_4', function (){
	return view('TKJ_XII_4');
});




//
//Rombel OTKP
//
Route::get('/OTKP', function (){
	return view('OTKP');
});


//Rombel OTKP X
Route::get('/OTKP_X_1', function (){
	return view('OTKP_X_1');
});
Route::get('/OTKP_X_2', function (){
	return view('OTKP_X_2');
});
//Rombel OTKP XI
Route::get('/OTKP_XI_1', function (){
	return view('OTKP_XI_1');
});
Route::get('/OTKP_XI_2', function (){
	return view('OTKP_XI_2');
});
//Rombel OTKP XII
Route::get('/OTKP_XII_1', function (){
	return view('OTKP_XII_1');
});
Route::get('/OTKP_XII_2', function (){
	return view('OTKP_XII_2');
});




//
//Rombel MMD
//
Route::get('/MMD', function (){
	return view('MMD');
});

//Rombel MMD X
Route::get('/MMD_X_1', function (){
	return view('MMD_X_1');
});
Route::get('/MMD_X_2', function (){
	return view('MMD_X_2');
});
//Rombel MMD XI
Route::get('/MMD_XI_1', function (){
	return view('MMD_XI_1');
});
Route::get('/MMD_XI_2', function (){
	return view('MMD_XI_2');
});
//Rombel OTKP XII
Route::get('/MMD_XII_1', function (){
	return view('MMD_XII_1');
});
Route::get('/MMD_XII_2', function (){
	return view('MMD_XII_2');
});



//
//Rombel BDP
//
Route::get('/BDP', function (){
	return view('BDP');
});


//Rombel BDP X
Route::get('/BDP_X_1', function (){
	return view('/BDP_X_1');
});
Route::get('/BDP_X_2', function (){
	return view('BDP_X_2');
});
//Rombel BDP XI
Route::get('/BDP_XI_1', function (){
	return view('BDP_XI_1');
});
Route::get('/BDP_XI_2', function (){
	return view('BDP_XI_2');
});
//Rombel BDP XII
Route::get('/BDP_XII_1', function (){
	return view('BDP_XII_1');
});
Route::get('/BDP_XII_2', function (){
	return view('BDP_XII_2');
});




//
//Rombel TBG
//
Route::get('/TBG', function (){
	return view('TBG');
});

//Rombel TBG X
Route::get('/TBG_X_1', function (){
	return view('TBG_X_1');
});
Route::get('/TBG_X_2', function (){
	return view('TBG_X_2');
});
//Rombel TBG XI
Route::get('/TBG_XI_1', function (){
	return view('TBG_XI_1');
});
Route::get('/TBG_XI_2', function (){
	return view('TBG_XI_2');
});
//Rombel TBG XII
Route::get('/TBG_XII_1', function (){
	return view('TBG_XII_1');
});
Route::get('/TBG_XII_2', function (){
	return view('TBG_XII_2');
});




//
//Rombel HTL 
//
Route::get('/HTL', function (){
	return view('HTL');
});

//Rombel HTL X
Route::get('/HTL_X_1', function (){
	return view('HTL_X_1');
});
Route::get('/HTL_X_2', function (){
	return view('HTL_X_2');
});
//Rombel HTL XI
Route::get('/HTL_XI_1', function (){
	return view('HTL_XI_1');
});
Route::get('/HTL_XI_2', function (){
	return view('HTL_XI_2');
});
//Rombel HTL XII
Route::get('/HTL_XII_1', function (){
	return view('HTL_XII_1');
});
Route::get('/HTL_XII_2', function (){
	return view('HTL_XII_2');
});





Route::get('/TambahSiswa', function (){
	return view('TambahSiswa');
});



//Kehadiran Siswa
Route::get('/KehadiranSiswa', function (){
	return view('KehadiranSiswa');
});


//Absensi Kelas X
Route::get('/XAbsensi', function (){
	return view('XAbsensi');
});


Route::resource('/siswa','SiswaController');
Route::resource('/guru','GuruController');

Route::get('/search','SiswaController@search')->name('siswa.search');


