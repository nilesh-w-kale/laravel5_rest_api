<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Company;

class Employee extends Model
{
    public function Company() {

    	return $this->belongsTO(Company::class);
    }
}
