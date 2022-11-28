<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ChallanInfo;
use App\ChallanDetails;
use App\Biller;
use App\Customer;
use App\BillInfo;
use App\BillDetails;
use App\VoucharInfo;
use App\VoucharDetails;
use Illuminate\Validation\Rule;
use Validator;
use PDF;
use Carbon\Carbon;

class VoucharInfoController extends Controller
{
    
    public function index(Request $request)
    {
        $data['bills'] = BillInfo::where('billing_status','!=',3)->get();
        $paginate = 100;
        $data['items'] = VoucharInfo::orderBy('id','DESC')->paginate($paginate);
        return view('voucherinfo.index',$data)
        ->with('i', ($request->input('page', 1) - 1)*$paginate);
    }

    public function voucherPdfInvoice($id)
    {
        $data = [];
        $data['item']  = VoucharInfo::find($id);
        $data['details'] = VoucharDetails::where('voucher_id',$id)->get();
        //return $stocksmain;
           $customPaper = array(0,0,720,1000); 
            $pdf = PDF::loadView('voucherinfo.voucher_pdf_receipt',$data)->setPaper($customPaper,'portrait');
            $pdf = $pdf->stream(Carbon::today()->toDateString().'voucher.pdf');
    
            return $pdf;
    }

    public function voucherDetailsShow(Request $request)
    {
        $data['details'] = VoucharDetails::where('voucher_id',$request->id)->get();
      //  return $request->all();
        return view('voucherinfo.modal_voucher_details',$data);

    }

    public function getInvoiceByAjax(Request $request)
    {
        $alpha = '10R2';
        $num   = '20000000';
        $last_voucher  = VoucharInfo::orderBy('id','DESC')->first();
       
        if(!empty($last_voucher))
        {
            $voucher_id =  (++$last_voucher->id);
        }else{
            $voucher_id = 1; 
        }
        $data['auto_voucher'] = $autobill_num =  $alpha.($num+$voucher_id);


        $data['bill'] = BillInfo::where('id',$request->invoice_no)->first();
        //return  $data;
        return view('voucherinfo.get_bill_by_ajax',$data);
    }

    public function store(Request $request)
    {
     //   return $request->all();

        $allData = new VoucharInfo();
        $allData->voucher_no = $request->voucher_no;
        $allData->bill_id = $request->bill_id;
        $allData->vendor_id = $request->vendor_id;
        $allData->payment_type = $request->payment_type;
        $allData->bank_name = $request->bank_name ?? '';
        $allData->branch_name = $request->branch_name ?? '';
        $allData->cheque_number = $request->cheque_number ?? '';
        $allData->payment_date = $request->payment_date;
        $allData->remarks = $request->remarks;
        $allData->paid_amount = $request->payable_amount;
        $allData->save();

        $id =  $allData->id;

         $bill = BillInfo::where('id',$request->bill_id)->first();
         $paid_amount = (($bill->paid_amount ?? 0) + $request->payable_amount);
         $due = ($bill->payable_amount - $paid_amount);
         $bill->paid_amount =  $paid_amount;
         $bill->due_amount =  $due ?? 0;
         $bill->billing_status =  $request->billing_status;
         $bill->save();
         if(!empty($request->notes_values))
         {
            foreach($request->notes_values as $key=> $value)
            {
                $detail = new VoucharDetails();
                $detail->voucher_id = $id;
                $detail->bill_id = $request->bill_id;
                $detail->vendor_id = $request->vendor_id;
                $detail->notes_values = $request->notes_values[$key];
                $detail->no_of_notes = $request->no_of_notes[$key];
                $detail->paid_amount = $request->paid_amount[$key];
                $detail->save();

            }
         }

         return redirect()->route('voucherinfo.index')->with('message','Voucher created successfully');

    }

    public function edit($id)
    {
        
        $data['item'] = VoucharInfo::find($id);
        $data['details'] = VoucharDetails::where('voucher_id',$id)->get();
        return view('voucherinfo.edit',$data);
    }


    public function update(Request $request,$id)
    {
     //   return $request->all();

        $allData =  VoucharInfo::find($id);

        $bill_first = BillInfo::where('id',$request->bill_id)->first();
        $bill_first->paid_amount = (($bill_first->paid_amount ?? 0) - ($allData->paid_amount ?? 0));
        $bill_first->save();

        $allData->payment_type = $request->payment_type;
        $allData->bank_name = $request->bank_name ?? '';
        $allData->branch_name = $request->branch_name ?? '';
        $allData->cheque_number = $request->cheque_number ?? '';
        $allData->payment_date = $request->payment_date;
        $allData->remarks = $request->remarks;
        $allData->paid_amount = $request->payable_amount;
        $allData->save();

            $bill = BillInfo::where('id',$request->bill_id)->first();
            $paid_amount = (($bill->paid_amount ?? 0) + $request->payable_amount);
            $due = ($bill->payable_amount - $paid_amount);
            $bill->paid_amount =  $paid_amount;
            $bill->due_amount =  $due ?? 0;
            $bill->billing_status =  $request->billing_status;
            $bill->save();
            VoucharDetails::where('voucher_id',$id)->delete();
   
            if(!empty($request->notes_values))
            {
               foreach($request->notes_values as $key=> $value)
               {
                   $detail = new VoucharDetails();
                   $detail->voucher_id = $id;
                   $detail->bill_id = $request->bill_id;
                   $detail->vendor_id = $request->vendor_id;
                   $detail->notes_values = $request->notes_values[$key];
                   $detail->no_of_notes = $request->no_of_notes[$key];
                   $detail->paid_amount = $request->paid_amount[$key];
                   $detail->save();
   
               }
            }
        
        


        

         return redirect()->route('voucherinfo.index')->with('message','Voucher created successfully');

    }

}
