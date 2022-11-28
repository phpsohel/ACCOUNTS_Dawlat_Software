<div id="bill_voucher_details_{{$item->id  }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
    <div role="document" class="modal-dialog" >
      <div class="modal-content">
        <div class="container mt-3 pb-2 border-bottom">
            <div class="row">
                <div class="col-md-3">
                
                </div>
                <div class="col-md-6">
                    <h3 id="exampleModalLabel" class="modal-title text-center container-fluid">{{$general_setting->site_title}}</h3>
                </div>
                <div class="col-md-3">
                    <button type="button" id="close-btn" data-dismiss="modal" aria-label="Close" class="close d-print-none"><span aria-hidden="true"><i class="dripicons-cross"></i></span></button>
                </div>
                <div class="col-md-12 text-center">
                    <i style="font-size: 15px;">{{trans('Bill Wise Voucher Details')}}</i>
                </div>
            </div>
        </div>
        <div class="" id="dvContainer">
            <div  class="modal-body">
                <div class="row">

                    <div class="col-md-6"> 
                        <div class="text-success"><h4 class="">Invoice</h4></div>
                        <strong class="">{{ $item->invoice_no  ?? '' }}</strong>
                        <div class="upper_case"> {{ \Carbon\Carbon::parse($item->billing_date)->format('d F Y')}}</div>
                        <div class="upper_case">{{ \Carbon\Carbon::parse($item->billing_date)->format('l')}}</div>
                       <div class=""> Challan No {{ $item->challan_no ?? ''}}</div>
                       <div class="">{{ $item->customer->address  ?? '' }}</div>
                       <div class="">Vendor Name : {{ ($item->challan->customer->name ?? '').'('.($item->challan->customer->customer_code ?? '').')'}}</div>
                       <div class="">Contact Number : {{ $item->challan->customer->phone_number ?? '' }}</div>
                    
                    </div>
                </div>
            </div>
            <br>
            <div class="bill_voucher_details">
                
            </div>
        
            <div id="item-footer" class="modal-body"></div>
        </div>
      </div>
    </div>
</div>