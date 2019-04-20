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

Auth::routes();

/*
** LARAVEL DEFAULT ROUTE as Named Route
*/
Route::get('/home', 'HomeController@index')->name('home');

/*
**	DEFAULT TEST ROUTE as Named Route
*/
Route::get('/hello', 'HelloController@index')->name('justhello');
Route::get('/sayhello', 'HelloController@say')->name('sayhello');

/*
** ADDING NAMED ROUTE TO REDIRECT ON DEFAULT ROUTE
*/
Route::get('/say-name-route', 'HelloController@sayNameRoute');
Route::get('/just-hello-name-route', 'HelloController@helloNameRoute');

/*
**	Get Current Route Info
*/
Route::get('/current-route','HelloController@accessCurrentRoute');


/*
** Match Or Any
*/
Route::match(['get', 'post'], '/match-route', 'HelloController@matchRouteMethod');

Route::any('/any-route', 'HelloController@anyRouteMethod');


/*
** Only View Route
*/
Route::view('/view-only', 'viewOnly');
Route::view('/view-only-param', 'viewOnlyParam', ['param1'=>'1 value', 'param2'=>'2 value']);


/*
** Route with parameter
*/
Route::get('/route-with-param/{id}', 'HelloController@routeWithParam');


/*	
**	Route with Optional Parameter
*/
Route::get('/route-with-optional-param/{param?}','HelloController@routeWithOptionparam');


/*	
**	Group Route : Prefix
*/
Route::prefix('kale')->group(function(){

	Route::get('/route-group-prefix', 'HelloController@routeGroupPrefix');
});



/*
** Group Route : Middleware & Register in Kernel.php
*/
Route::middleware('CustomMiddleware')->group(function() {

	Route::get('/route-group-middleware', 'HelloController@routeGroupMiddleware');
});


/*
** Group Route : Namespace for other Directory Controller
*/
Route::namespace('company')->group( function() {

	Route::get('/route-group-namespace','CompanyController@index');
});


/*
** Group Route with Array
*/

Route::group(['middleware'=>'CustomMiddleware', 'prefix'=>'array', 'namespace'=>'company'], function() {

		Route::get('/route-group-array','CompanyController@routeGroupArray');
});


/*
**	Created Controller & Model for Company
*/
Route::get('/my-company', 'company\CompanyController@getCompanyListJson');


/*
** Route to Insert/ Datain Table
*/
Route::get('/add-new-company', 'company\CompanyController@addCompany');
Route::get('/update-company', 'company\CompanyController@deleteCompany');
Route::get('/delete-company', 'company\CompanyController@deleteCompany');
Route::get('/destroy-company', 'company\CompanyController@destroyCompany');


/*
** Route to Insert/ with Middleware
*/
Route::middleware('web')->group(function() {

	Route::prefix('middleware')->group(function() {

		Route::get('/add-new-company', 'company\CompanyController@addCompany');
	});
});

Route::get('/company', 'company\CompanyController@getJoinEmployee');
Route::get('/employee', 'EmployeeController@index');











