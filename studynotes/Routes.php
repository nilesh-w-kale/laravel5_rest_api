<?php
/*
**	STUDY NOTES
**	https://eloquentbyexample.com/
*/

ROUTE: 	ROUTE::get($url, $method)
--------------------------------------
"Both Web/API routes managed or map via RouteServiceProvider and the

Prefix for API route "/api/..." default assign
Prefix we can add into web route as well 

Web route middleware is web &
API route middleware is API bydefault

Web route are not stateless manage the session & csrf data 
API route are sateless"

ROUTE: Basic =>  URL & Clouser Functions
--------------------------------------
URL & Clouser Functions

Route::get('/url', function() {
})

ROUTE: Default => URL & Controller with Method
--------------------------------------
URL & method (controller name@method name)

Route::get('/url', 'controller-name@metho-name CaseSensitive')


ROUTE: HTTP(API) => URL & Controller with Method
--------------------------------------
URL & method (controller name@method name)

"Any HTML forms pointing to POST, PUT, or DELETE routes 
that are defined in the web routes file should include a CSRF token field"

Route::get($url, 'controller-name@metho-name');
Route::post($url, 'controller-name@metho-name');
Route::put($url, 'controller-name@metho-name');
Route::patch($url, 'controller-name@metho-name');
Route::delete($url, 'controller-name@metho-name');
Route::option($url, 'controller-name@metho-name'); ?

ROUTE: HTTP(Match and any) => URL & Controller with Method
--------------------------------------
Verbs, / & method (controller name@method name)

Route::match(['get','post'], $url, 'controller-name@metho-name')
Route::any($url, 'controller-name@metho-name')


ROUTE: Redirect => here & there
--------------------------------------
URL here & URL there & Optional=> Status code 301/302
301: permanently 
302: temporary

Route::redirect('/here', '/there');
Route::redirect('/here', '/there', 301);
oute::permanentRedirect('/here', '/there'); Always 301


ROUTE: View only => URL & View Name
--------------------------------------
URL & View Name & Optonal data to view ['key'=>'value']

Route::view($url, 'view name')
Route::view($url, 'view name', ['param1'=>'value', 'param2'=>'value'])


ROUTE: Parameter => URL & Clouser function OR controller
--------------------------------------
URL & Clouser Functions with {Parameter}
Names of the callback / controller arguments do not matter.

Route::get('/url{id}', function($id) {
})

You may define as many route parameters as required by your route:

Route::get('posts/{post}/comments/{comment}', function ($postId, $commentId) {

});

ROUTE: Parameter => URL & Clouser function OR controller
--------------------------------------
URL & Clouser Functions with {Parameter?}

Route::get('user/{name?}', function ($name = null) {
    return $name;
});

Route::get('user/{name?}', function ($name = 'John') {
    return $name;
});


ROUTE: Named => URL & Clouser function OR controller & Name of Route
--------------------------------------
"URL & Clouser function OR controller & Name of Route"

Route::get($url, 'controller-name@method-name')->name('nick name of route');

Used Named Route : 

$url = route('nick name of route'); Get URL
return redirect()->route('nick name of route'); Redirect to Route



ROUTE: Group => Group & Route
--------------------------------------
"Group Route cretes for multiple attributes like 

Group Array Attribute:

	Route::group(['middleware'=>'CustomMiddleware', 'prefix'=>'array', 'namespace'=>'company'], function() {
		Route::get('/route-group-array','CompanyController@routeGroupArray');
	});

1. Middleware : 
		Create new miidleware via artisan
		Register your middleware on Kernal.php 
		in routeMiddleware.

		Route::middleware('name of middleware')->group(function () {
		    Route::get($url, 'controller-name@metho-name')
		});

		Other way to write in Class Constructor:	
		$this->Middleware(
			['middleware name', 'second middleware'], 
			[
				'except'=>'Class method name don't require middleware'
				or
				'only'=>'Class method name only require middleware'
		]);

2. Namespace
		Create new Controller via artisan
		add namespace in route and closure method

		Route::namespace('namespace name')->group(function () {
		    Route::get($url, 'controller-name@metho-name')
		});

3. Prefix : 
		Add Prefix as kale so URL = '/nilesh/kale/..'

		Route::prefix('name of prefix')->group(function () {
		    Route::get($url, 'controller-name@metho-name')
		});

4. name

5. sub-domain : ?"


Form Method Spoofing
--------------------------------------

"HTML forms do not support PUT, PATCH or DELETE actions. 
So, when defining PUT, PATCH or  DELETE routes 
that are called from an HTML form, 
you will need to add a hidden _method field to the form. 
The value sent with the _method field will be 
used as the HTTP request method:"

<form action="/foo/bar" method="POST">
    <input type="hidden" name="_method" value="PUT">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
</form>
You may use the @method Blade directive to generate the _method input:

<form action="/foo/bar" method="POST">
    @method('PUT')
    @csrf
</form>
