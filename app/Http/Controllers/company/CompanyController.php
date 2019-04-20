<?php

namespace App\Http\Controllers\company;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Company;
use Illuminate\Support\Facades\DB;

class CompanyController extends Controller
{
    public function index() {

		return 'This is the Group Route for Namespace Company';
	}
	public function routeGroupArray() {

		return 'This is the Group Route with Array Attribute';
	}
	public function getCompanyListJson() {

		//return $company = Company::all();

		$companyObj = new Company;
		return $companyObj->employee();
	}
	public function addCompany() {

    	/*
    	$company = new Company;
    	$company->name = 'Comapny One';
    	$company->address = 'Gopal Nagar, Nagpur';
    	$company->phone = '+91 45789 521154';
    	$company->detail = 'This is my insert company data';
    	*/

    	/*
    	OR with Constructor
		
    	$company = new Company(
    	[
	    	'name' => 'Comapny Four',
	    	'address' => 'Gopal Nagar, Nagpur',
	    	'phone' => '+91 45789 521154',
	    	'detail' => 'This is my insert company data'
		]);
    	$company->save();
    	*/


    	/*
    	OR with fill
		*/
    	$company = new Company(
    	[
	    	'name' => 'Comapny Five',
	    	'address' => 'Gopal Nagar, Nagpur'
		]);

		$company->fill(
			[
	    	'phone' => '+91 45789 521154',
	    	'detail' => 'This is my insert company data'
	    	]
	    );
    	$company->save();
    }
	public function updateCompany() {

		$company = Company::find(106);

		$company->fill([
				'name' => 'Updated Company Five',
		    	'address' => 'Updated Gopal Nagar, Nagpur',
		    	'phone' => '+91 45789 521154',
		    	'detail' => 'Updated This is my insert company data'
			]);
		$company->save();

	}
	public function deleteCompany() {

		$company = Company::find(106);
		/*
		** Do the Log tracking or 
		** Auditing before delete
		*/
		$company->delete();

	}
	public function destroyCompany() {
		
		Company::destroy(105);
	}

	public function getJoinEmployee() {

		/*
		$company = Company::where('id', 1)->first();
		$employees = $company->employees;

		return view('company')->with('employees', $employees);
		*/

		return $product = DB::table('products')->get();
	}
}
