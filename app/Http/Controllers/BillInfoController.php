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
use App\BillDetails;
use App\VoucharInfo;
use App\VoucharDetails;
use Illuminate\Validation\Rule;
use Validator;
use PDF;

use Carbon\Carbon;

class BillInfoController extends Controller
{
    //


    public function index(Request $request)
    {
        $paginate= 100;
        $data['challans'] = ChallanInfo::orderBy('id','DESC')->where('soft_deleted',1)->where(['admin_approval_status'=>2,'bill_approval_status'=>1])->paginate($paginate);

        $data['items'] = BillInfo::orderBy('id','DESC')->where('soft_deleted',1)->paginate($paginate);
      //  return $data;
        return view('billinfo.index',$data)
            ->with('i', ($request->input('page', 1) - 1)*$paginate);
    }


    public function billDetailsShow(Request $request)
    {
        $data['details'] = $details = BillDetails::where('bill_id',$request->id)->get();
        $data['item'] = $item = BillInfo::where('id',$request->id)->first();
      
        return view('billinfo.modal_bill_details',$data);
    }

    public function billWiseVoucherDetails(Request $request)
    {
       
        $data['voucherdetails'] = VoucharInfo::where('bill_id',$request->bill_id)->get();
        
        return view('billinfo.bill_voucher_details_modal',$data);
      
        
    
    }


    public function getApprovedChallanDetails(Request $request)
    {
        
        $alpha = '10B2';
        $num   = '20000000';
        $last_bill  = BillInfo::orderBy('id','DESC')->first();
       
        if(!empty($last_bill))
        {
            $chal_id =  (++$last_bill->id);
        }else{
            $chal_id = 1; 
        }
        $data['auto_invoice'] = $autobill_num =  $alpha.($num+$chal_id);

       
        $data['challan'] = $challan = ChallanInfo::where(['id'=>$request->challan_id])->first();
        $data['details'] = ChallanDetails::where('challan_id',$request->challan_id)->get();
        return view('billinfo.get_approval_challan_for_bill',$data);
       
    }

    public function billPdfInvoice($id)
    {
        $data = [];
        $data['bill'] = $stocksmain = BillInfo::find($id);
        $data['billdetails'] = BillDetails::where('bill_id',$id)->get();
        //return $stocksmain;
           $customPaper = array(0,0,720,1000); 
            $pdf = PDF::loadView('billinfo.bill_pdf_invoice',$data)->setPaper($customPaper,'portrait');
            $pdf = $pdf->stream(Carbon::today()->toDateString().'bill.pdf');
    
            return $pdf;
    }


    public function store(Request $request)
    {
       // return $request->all();
        $alldata = new BillInfo();
        $alldata->invoice_no = $request->invoice_no;
        $alldata->challan_no = $request->challan_no;
        $alldata->vendor_id = $request->vendor_id;
        $alldata->challan_id = $request->challan_id;
        $alldata->payable_amount = $request->payable_amount;
        $alldata->vat = $request->vat ?? 0;
        $alldata->vat_tk = $request->vat_tk ?? 0;
        $alldata->billing_date = $request->billing_date;
        $alldata->ait = $request->ait ?? 0;
        $alldata->ait_tk = $request->ait_tk ?? 0;
        $alldata->duty = $request->duty ?? 0;
        $alldata->duty_tk = $request->duty_tk ?? 0;
        $alldata->charge = $request->charge ?? 0;
        $alldata->charge_tk = $request->charge_tk ?? 0;
        $alldata->addedby_id = Auth()->user()->id;
        $alldata->save();
        $id = $alldata->id;
          $challan =  ChallanInfo::where('id',$request->challan_id)->first();
          $challan->bill_approval_status = 2;
          $challan->bill_approval_date = $request->billing_date;
          $challan->save();

     
        if(!empty($request->qty)){
            foreach ($request->qty as $key => $value) {

                $data = new BillDetails();
                $data->bill_id = $id;
                $data->invoice_no = $request->invoice_no;
                $data->vendor_id = $request->vendor_id;
                $data->challan_id = $request->challan_id;
                $data->details_challan_id = $request->details_challan_id[$key];
                $data->qty = $request->qty[$key];
                $data->per_qty_cost = $request->per_qty_cost[$key];
                $data->amount = $request->amount[$key];
                $data->addedby_id = Auth()->user()->id;
                $data->save();
          }
        }
     
        return back()->with('create_message','Bill created successfully');
    }

    public function edit($id)
    {
       
       $data['item'] = BillInfo::where('id',$id)->first();
       $data['billdetails'] = BillDetails::where('bill_id',$id)->get();
       // return $data;
        return view('billinfo.edit',$data);
    }

    public function update(Request $request,$id)
    {
        //return $request->all();

        $alldata = BillInfo::find($id);
        $alldata->payable_amount = $request->payable_amount;
        $alldata->vat = $request->vat ?? 0;
        $alldata->vat_tk = $request->vat_tk ?? 0;
        $alldata->billing_date = $request->billing_date;
        $alldata->ait = $request->ait ?? 0;
        $alldata->ait_tk = $request->ait_tk ?? 0;
        $alldata->duty = $request->duty ?? 0;
        $alldata->duty_tk = $request->duty_tk ?? 0;
        $alldata->charge = $request->charge ?? 0;
        $alldata->charge_tk = $request->charge_tk ?? 0;
        $alldata->addedby_id = Auth()->user()->id;
        $alldata->save();

         
        if(!empty($request->bill_details_id)){
            foreach ($request->bill_details_id as $key => $value) {

                $data =  BillDetails::where('id',$request->bill_details_id[$key])->first();
                $data->per_qty_cost = $request->per_qty_cost[$key];
                $data->amount = $request->amount[$key];
                $data->addedby_id = Auth()->user()->id;
                $data->save();
          }
        }

        return redirect()->route('billinfo.index')->with('create_message','Bill updated successfully');
    }
}
