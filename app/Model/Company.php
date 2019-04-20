<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Employee;

class Company extends Model
{
    /*
    ** Custom Table
    protected $table = 'custom_table';
	protected $primaryKey = 'custom_id'

	Add Timestamp as Public to don't insert
	public $timestamp = false;
    */
    
    protected $fillable = ['name', 'address', 'phone', 'detail'];
    /*
    OR
    protected $guarded = [];
    */

    public function employees() {

    	return $this->hasMany(Employee::class);
    }
}
