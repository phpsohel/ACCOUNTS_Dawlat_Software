<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChallanInfo extends Model
{
    //

    public function biller()
    {
    	return $this->belongsTo('App\Biller');
    }

    public function chadetails()
    {
    	return $this->hasMany(ChallanDetails::class,'challan_id','id')->select('id','challan_id','po_number','item_details','qty');
    }

    public function customer()
    {
    	return $this->belongsTo(Customer::class,'vendor_customer_id');
    }

    public function sales()
    {
    	return $this->belongsTo(SalesPerson::class,'sales_person_id');
    }

    public function delivery()
    {
    	return $this->belongsTo(DeliveryPerson::class,'delivery_person_id');
    }
}
