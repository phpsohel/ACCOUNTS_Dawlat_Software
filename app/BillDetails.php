<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BillDetails extends Model
{
    //

    public function chadetails()
    {
    	return $this->hasOne(ChallanDetails::class,'id','details_challan_id');
    }
}
