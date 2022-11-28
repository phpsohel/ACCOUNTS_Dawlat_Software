<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\DeliveryPerson;

class DeliveryPersonController extends Controller
{
    public function index(Request $request)
    {
        $paginate= 100;
        $data['deliveries'] = DeliveryPerson::orderBy('id','DESC')->where('soft_deleted',1)->paginate($paginate);
       // return $data;
        return view('deliveryperson.index',$data)
            ->with('i', ($request->input('page', 1) - 1)*$paginate);

    }

    public function create()
    {
       // return "ok";
        $data['item'] = new DeliveryPerson();
        return view('deliveryperson.create_update',$data);
    }

    public function store(Request $request)
    {
        $allData = New DeliveryPerson();
        $allData->name = $request->name;
        $allData->phone_number = $request->phone_number;
        $allData->address = $request->address;
        $allData->added_by = Auth()->user()->id;
        $allData->save();

        return redirect()->route('deliveryperson.index')->with('create_message','Delivery Person Created Successfully');
    }

    public function edit($id)
    {
       // return "ok";
        $data['item'] =  DeliveryPerson::find($id);
        return view('deliveryperson.create_update',$data);
    }


    public function update(Request $request,$id)
    {
        $allData =  DeliveryPerson::find($id);
        $allData->name = $request->name;
        $allData->phone_number = $request->phone_number;
        $allData->address = $request->address;
        $allData->edited_by = Auth()->user()->id;
        $allData->save();

        return redirect()->route('deliveryperson.index')->with('create_message','Delivery Person Updated Successfully');
    }

    public function destroy($id)
    {
        DeliveryPerson::where('id',$id)->update(['soft_deleted'=>0]);
     

        return redirect()->route('deliveryperson.index')->with('create_message','Delivery Person Deleted Successfully');
    }
}
