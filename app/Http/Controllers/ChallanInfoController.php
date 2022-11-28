<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ChallanInfo;
use App\ChallanDetails;
use App\Biller;
use App\Customer;
use App\DeliveryPerson;
use App\SalesPerson;
use App\BillInfo;
use Illuminate\Validation\Rule;
use Validator;
use PDF;
use Carbon\Carbon;

class ChallanInfoController extends Controller
{
    public function index(Request $request)
    {
        $paginate= 100;
        $data['items'] = ChallanInfo::orderBy('id','DESC')->where('soft_deleted',1)->paginate($paginate);
       // return $data;
        return view('challaninfo.index',$data)
            ->with('i', ($request->input('page', 1) - 1)*$paginate);
    }

    public function approvedChallanList(Request $request)
    {

        $paginate= 100;
        $data['items'] = ChallanInfo::orderBy('id','DESC')->where('soft_deleted',1)->where(['admin_approval_status'=>2,'bill_approval_status'=>1])->paginate($paginate);
       // return $data;
        return view('challaninfo.approved_challan_list',$data)
            ->with('i', ($request->input('page', 1) - 1)*$paginate);
    }



    public function Challanpdf($id)
    {
       
        $data = [];
        $data['challan'] = $stocksmain = ChallanInfo::find($id);
        $data['challandetails'] = ChallanDetails::where('challan_id',$id)->get();
        //return $stocksmain;
           $customPaper = array(0,0,720,1000); 
            $pdf = PDF::loadView('challaninfo.challan_pdf_report',$data)->setPaper($customPaper,'portrait');
            $pdf = $pdf->stream(Carbon::today()->toDateString().'challan.pdf');
    
            return $pdf;
    }

    public function challanDetailsShow(Request $request)
    {
        $data['details'] = $items = ChallanDetails::where('challan_id',$request->id)->get();
      
        return view('challaninfo.modal_challan_details',$data);
    }

    public function pendingChallan(Request $request)
    {
        
        $paginate= 100;
        $data['items'] = ChallanInfo::orderBy('id','DESC')->where('soft_deleted',1)->where('admin_approval_status',1)->paginate($paginate);
       // return $data;
        return view('challaninfo.pending_challan_list',$data)
            ->with('i', ($request->input('page', 1) - 1)*$paginate);
    }

    public function approvedChallan(Request $request,$id)
    {
        $item = ChallanInfo::find($id);
        $item->admin_approval_status = 2;
        $item->admin_approval_date = date('Y-m-d');
        $item->approval_id =Auth()->user()->id;
        $item->save();
        return  back()->with('create_message','Challan Approved successfully');
    }

    public function getVendorSalesPerson(Request  $request)
    {
        $salsperson = Customer::where('id',$request->vendor_customer)->first();
        return $salsperson->sales_person;
    }
  


    public function create()
    {
       
        $alpha = 'CHA2';
        $num   = '20000000';
        $last_cha  = ChallanInfo::orderBy('id','DESC')->first();
       
        if(!empty($last_cha))
        {
            $chal_id =  (++$last_cha->id);
        }else{
            $chal_id = 1; 
        }
        $data['autochallan_num'] = $autochallan_num =  $alpha.($num+$chal_id);
     
        $data['billars'] = Biller::where('is_active', true)->get();
        $data['deliverypersons'] = DeliveryPerson::where('soft_deleted', true)->get();
        $data['customers'] = Customer::where('is_active', true)->get();
        $data['salespersons'] = SalesPerson::where('soft_deleted', 1)->get();
        return view('challaninfo.create',$data);
    }


    public function store(Request $request)
    {
        
        //return $request->all();
        // $this->validate($request, [
        //     'challan_no' => [
        //         'max:255',
        //             Rule::unique('challan_infos')->where(function ($query) {
        //             return $query->where('is_active', 1);
        //         }),
        //     ]
        // ]);

       
        $allData = new ChallanInfo();
        $allData->challan_no = $request->challan_no;
        $allData->sales_person = $request->sales_person;
        $allData->delivery_person = $request->delivery_person;
        $allData->vendor_customer_id = $request->vendor_customer_id;
        $allData->biller_id = $request->biller_id;
       // $allData->sales_person_id = $request->sales_person_id;
       // $allData->delivery_person_id = $request->delivery_person_id;
        $allData->delivery_place = $request->delivery_place;
        $allData->shipping_date = $request->shipping_date;
        $allData->shipping_item = $request->shipping_item;
        $allData->addedby_id = Auth()->user()->id;
        $allData->save();

        $id = $allData->id;
        if(!empty($request->qty)){
            foreach ($request->qty as $key => $value) {

                $data = new ChallanDetails();
                $data->challan_id = $id;
                $data->challan_no = $request->challan_no;
                $data->po_number = $request->po_number[$key];
                $data->po_number = $request->po_number[$key];
                $data->item_details = $request->item_details[$key];
                $data->qty = $request->qty[$key];
                $data->save();
          }
        }
     
        return redirect()->route('challaninfo.index')->with('create_message','Challan created successfully');


    }
    public function edit($id)
    {
       
        $data['item'] = ChallanInfo::find($id);
        $data['details'] = ChallanDetails::where('challan_id',$id)->get();
        $data['billars'] = Biller::where('is_active', true)->get();
        $data['deliverypersons'] = DeliveryPerson::where('soft_deleted', true)->get();
        $data['customers'] = Customer::where('is_active', true)->get();
        $data['salespersons'] = SalesPerson::where('soft_deleted', 1)->get();
        return view('challaninfo.edit',$data);
    }

    public function update(Request $request,$id)
    {
       // return $request->all();
        $allData =  ChallanInfo::find($id);
        $allData->vendor_customer_id = $request->vendor_customer_id;
        $allData->biller_id = $request->biller_id;
        $allData->sales_person = $request->sales_person;
        $allData->delivery_person = $request->delivery_person;
        // $allData->sales_person_id = $request->sales_person_id;
        // $allData->delivery_person_id = $request->delivery_person_id;
        $allData->delivery_place = $request->delivery_place;
        $allData->shipping_date = $request->shipping_date;
        $allData->shipping_item = $request->shipping_item;
        $allData->addedby_id = Auth()->user()->id;
        $allData->save();

        ChallanDetails::where('challan_id',$id)->delete();

        if(!empty($request->qty)){
            foreach ($request->qty as $key => $value) {

                $data = new ChallanDetails();
                $data->challan_id = $id;
                $data->challan_no = $allData->challan_no;
                $data->po_number = $request->po_number[$key];
                $data->po_number = $request->po_number[$key];
                $data->item_details = $request->item_details[$key];
                $data->qty = $request->qty[$key];
                $data->save();
          }
        }

        return redirect()->route('challaninfo.index')->with('edit_message','Challan Updated successfully');
    }

    public function destroy(Request $request,$id)
    {
        $data = ChallanInfo::find($id);
        $data->soft_deleted =0;
        $data->save();
        return redirect()->route('challaninfo.index')->with('import_message','Challan Deleted successfully');
    }
}
