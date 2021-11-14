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
    return view('welcome');
});

Route::get('/company', 'CompanyController@view')->name('company.index');
Route::get('/companies', 'CompanyController@getCompanyData')->name('company.data');
Route::get('/addcompany', 'CompanyController@view')->name('company.view');
Route::post('/addcompany', 'CompanyController@store')->name('company.store');
Route::delete('/addcompany/{id}', 'CompanyController@destroy')->name('company.destroy');
Route::get('/addcompany/{id}/edit', 'CompanyController@edit')->name('company.edit');
