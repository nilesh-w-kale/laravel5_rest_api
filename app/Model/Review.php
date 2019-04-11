<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Prodcut;

class Review extends Model
{
    public function product() {

    	return $this->belongsTO(Product::class);
    }
}
