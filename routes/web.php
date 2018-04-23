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

Route::get('dashboard', 'DashboardController@index');
//Route::get('catalogo', 'CatalogoController@index');
Route::get('catalog', 'CatalogoController@index');

Route::get('distributors', 'DistributorsController@index');
Route::post('create','DistributorsController@insert');
Route::get('authors', 'AuthorsController@index');
Route::post('addauthor', 'AuthorsController@insert');
Route::get('branch', 'BranchOfficesController@index');
Route::post('addbranch', 'BranchOfficesController@insert');
Route::get('publishers', 'PublishersController@index');
Route::post('addpublishers','PublishersController@insert');
Route::get('books', 'BooksController@index');
Route::post('addbook', 'BooksController@insert');
route::get('map', 'MapController@index');

Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});
