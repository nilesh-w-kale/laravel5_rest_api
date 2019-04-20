<?php

namespace App\Http\Controllers;

//use App\HTTP\Controllers\Controller;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;


Class HelloController extends Controller {

	public function index() {

		return view('hello');
	}
	public function say() {

		return view('say');
	}
	public function sayNameRoute() {

		return redirect()->route('sayhello');
	}
	public function helloNameRoute() {

		return redirect()->route('justhello');
	}
	public function accessCurrentRoute(){

		//return Route::current()->uri();
	}
	public function matchRouteMethod() {

		return 'Match get route added';
	}
	public function anyRouteMethod(){

		return 'Any get route added';
	}
	public function routeWithParam($id) {

		return 'Route with parameter and param value is : '.$id;
	}
	public function routeWithOptionparam($param='optional value') {

		return 'Route with optional parameter and param value is : '.$param;
	}
	public function routeGroupPrefix() {

		return 'This is the Group Route for prefix';
	}
	public function routeGroupMiddleware() {

		return 'This is the Group Route for Custom Middleware';
	}
}