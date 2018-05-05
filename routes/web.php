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
Auth::routes();

Route::middleware(['validateBackHistory'])->group(function () {
	Route::prefix('admin/dashboard')->middleware(['auth'])->group(function () {

		Route::get('/', 'DashboardController@index')->name('admin.index');
		Route::get('reports', 'ReportController@reports')->name('admin.reports');
		Route::get('reports/results', 'ReportController@getReport')->name('admin.reports.results');


	});
});



Route::get('/', 'HomeController@index')->name('home');

//Route::get('/home', 'HomeController@index')->name('home');
Route::post('face/detect','FaceDetectController@index')->name('face.detect');
Route::post('face/detect/store','FaceDetectController@store')->name('face.detect.store');
