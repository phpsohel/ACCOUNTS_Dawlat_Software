<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BillInfo extends Model
{
    //

    public function challan()
    {
    	return $this->hasOne(ChallanInfo::class,'id','challan_id');
    }

    public function voucher()
    {
    	return $this->hasOne(VoucharInfo::class,'bill_id','id');
    }


    public function customer()
    {
    	return $this->hasOne(Customer::class,'id','vendor_id');
    }
}
