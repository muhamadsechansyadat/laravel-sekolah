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
    return redirect()->route('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('index', 'SekolahController@index');

Route::group(['prefix'=>'siswa'],function(){
	Route::get('index', 'SiswaController@index')->name('siswa.index');
	Route::get('autocode', 'SiswaController@autocode');
	Route::post('save', 'SiswaController@save');
	Route::get('edit/{id}', 'SiswaController@edit');
	Route::put('update/{id}', 'SiswaController@update');
	Route::get('delete/{id}', 'SiswaController@delete');
	Route::get('show/{id}', 'SiswaController@show');
	Route::get('download/{foto}', 'SiswaController@download');
});

Route::group(['prefix'=>'jurusan'],function(){
	Route::get('index', 'JurusanController@index')->name('jurusan.index');
	Route::get('create', 'JurusanController@create');
	Route::post('save', 'JurusanController@save');
	Route::get('edit/{id}', 'JurusanController@edit');
	Route::put('update/{id}', 'JurusanController@update');
	Route::get('delete/{id}', 'JurusanController@delete');
});

Route::group(['prefix'=>'rayon'],function(){
	Route::get('index', 'RayonController@index')->name('rayon.index');
	Route::get('create', 'RayonController@create');
	Route::post('save', 'RayonController@save');
	Route::get('edit/{id}', 'RayonController@edit');
	Route::put('update/{id}', 'RayonController@update');
	Route::get('delete/{id}', 'RayonController@delete');
});

Route::group(['prefix'=>'guru'],function(){
	Route::get('index', 'GuruController@index')->name('guru.index');
	Route::get('create', 'GuruController@create');
	Route::post('save', 'GuruController@save');
	Route::get('edit/{id}', 'GuruController@edit');
	Route::put('update/{id}', 'GuruController@update');
	Route::get('delete/{id}', 'GuruController@delete');
	Route::get('show/{id}', 'GuruController@show');
	Route::get('download/{foto}', 'GuruController@download');
});

Route::group(['prefix'=>'kelas'],function(){
	Route::get('index', 'KelasController@index')->name('kelas.index');
	Route::get('create', 'KelasController@create');
	Route::post('save', 'KelasController@save');
	Route::get('edit/{id}', 'KelasController@edit');
	Route::patch('update/{id}', 'KelasController@update');
	Route::get('delete/{id}', 'KelasController@delete');
});

Route::group(['prefix'=>'mapel'],function(){
	Route::get('index', 'MataPelajaranController@index')->name('mapel.index');
	Route::get('create', 'MataPelajaranController@create');
	Route::post('save', 'MataPelajaranController@save');
	Route::get('edit/{id}', 'MataPelajaranController@edit');
	Route::post('update/{id}', 'MataPelajaranController@update');
	Route::get('delete/{id}', 'MataPelajaranController@delete');
});

Route::group(['prefix'=>'stok'],function(){
	Route::get('index', 'StokController@index')->name('mapel.index');
	Route::get('create', 'StokController@create');
	Route::post('save', 'StokController@save');
	Route::get('edit/{id}', 'StokController@edit');
	Route::post('update/{id}', 'StokController@update');
	Route::get('delete/{id}', 'StokController@delete');
});

Route::group(['prefix'=>'buku'],function(){
	Route::get('index', 'BukuController@index')->name('buku.index');
	Route::get('create', 'BukuController@create');
	Route::post('save', 'BukuController@save');
	Route::get('edit/{id}', 'BukuController@edit');
	Route::patch('update/{id}', 'BukuController@update');
	Route::get('delete/{id}', 'BukuController@delete');
});