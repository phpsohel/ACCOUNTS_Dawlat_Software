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

class LedgerController extends Controller
{
    public function index(Request $request)
    {
        $data['customers'] = Customer::orderBy('id','DESC')->get();
        $paginate = 100;
        $data['items'] = $items = BillInfo::orderBy('id','DESC')->with('voucher')->paginate($paginate);
        $data['total_payable'] = BillInfo::sum('payable_amount');
        $data['total_paid'] = BillInfo::sum('paid_amount');
       // return $items;
        return view('ledgerinfo.index',$data)
        ->with('i', ($request->input('page', 1) - 1)*$paginate);
    }

    public function store(Request $request)
    {
        //return $request->all();
    

        $data = [];
        // Custome Date wise searching

        if(!empty($request->from_date))
        {
          //  return "input";
            $from_date = Carbon::parse($request->from_date)->format('Y-m-d');
            $to_date = Carbon::parse($request->to_date)->format('Y-m-d');
           
            $data['vendor'] = $vendor  = Customer::where('id',$request->customer_id)->first();
            $data['items'] = $bill  = BillInfo::where('vendor_id',$vendor->id)->whereBetween('billing_date',array($from_date,$to_date))
            ->get();
            $data['total_payable'] = BillInfo::where('vendor_id',$request->customer_id)->whereBetween('billing_date',array($from_date,$to_date))->sum('payable_amount');
            $data['total_paid'] = BillInfo::where('vendor_id',$request->customer_id)->whereBetween('billing_date',array($from_date,$to_date))->sum('paid_amount');
           // return  $data;
        
            //return $stocksmain;
                $customPaper = array(0,0,720,1000); 
                $pdf = PDF::loadView('ledgerinfo.ledger_pdf_report',$data)->setPaper($customPaper,'portrait');
                $pdf = $pdf->stream(Carbon::today()->toDateString().'ledger.pdf');
        
                return $pdf;
        }

        
            // Fixed Today , One Month , 3 month and 6 month Date wise searching

        if(!empty($request->from_date_text)){

            $from_date_text = Carbon::parse($request->from_date_text)->format('Y-m-d');
            $to_date_text = Carbon::parse($request->to_date_text)->format('Y-m-d');
          
            //return "text";
            
            $data['vendor'] = $vendor  = Customer::where('id',$request->customer_id)->first();
            $data['items'] = $bill  = BillInfo::where('vendor_id',$vendor->id)->whereBetween('billing_date',array($from_date_text,$to_date_text))
            ->get();
            $data['total_payable'] = BillInfo::where('vendor_id',$request->customer_id)->whereBetween('billing_date',array($from_date_text,$to_date_text))->sum('payable_amount');
            $data['total_paid'] = BillInfo::where('vendor_id',$request->customer_id)->whereBetween('billing_date',array($from_date_text,$to_date_text))->sum('paid_amount');
           // return  $data;
        
            //return $stocksmain;
                $customPaper = array(0,0,720,1000); 
                $pdf = PDF::loadView('ledgerinfo.ledger_pdf_report',$data)->setPaper($customPaper,'portrait');
                $pdf = $pdf->stream(Carbon::today()->toDateString().'ledger.pdf');
        
                return $pdf;
        }
        
       
    }

}
