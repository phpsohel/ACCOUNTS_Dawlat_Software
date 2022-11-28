<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VoucharInfo extends Model
{
    //

    public function customer()
    {
    	return $this->hasOne(Customer::class,'id','vendor_id');
    }

    public function bill()
    {
    	return $this->hasOne(BillInfo::class,'id','bill_id');
    }
}
