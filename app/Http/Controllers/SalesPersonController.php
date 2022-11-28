<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\SalesPerson;

class SalesPersonController extends Controller
{
    public function index(Request $request)
    {
        $paginate= 100;
        $data['sales'] = SalesPerson::orderBy('id','DESC')->where('soft_deleted',1)->paginate($paginate);
       // return $data;
        return view('salesperson.index',$data)
            ->with('i', ($request->input('page', 1) - 1)*$paginate);

    }

    public function create()
    {
       // return "ok";
        $data['item'] = new SalesPerson();
        return view('salesperson.create_update',$data);
    }

    public function store(Request $request)
    {
        $allData = New SalesPerson();
        $allData->name = $request->name;
        $allData->phone_number = $request->phone_number;
        $allData->address = $request->address;
        $allData->added_by = Auth()->user()->id;
        $allData->save();

        return redirect()->route('salesperson.index')->with('create_message','Sales Person Created Successfully');
    }

    public function edit($id)
    {
       // return "ok";
        $data['item'] =  SalesPerson::find($id);
        return view('salesperson.create_update',$data);
    }


    public function update(Request $request,$id)
    {
        $allData =  SalesPerson::find($id);
        $allData->name = $request->name;
        $allData->phone_number = $request->phone_number;
        $allData->address = $request->address;
        $allData->edited_by = Auth()->user()->id;
        $allData->save();

        return redirect()->route('salesperson.index')->with('create_message','Sales Person Updated Successfully');
    }

    public function destroy($id)
    {
        SalesPerson::where('id',$id)->update(['soft_deleted'=>0]);
     

        return redirect()->route('salesperson.index')->with('create_message','Sales Person Deleted Successfully');
    }


}
