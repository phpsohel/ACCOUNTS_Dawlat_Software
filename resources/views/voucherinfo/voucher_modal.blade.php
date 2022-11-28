<div id="voucher_{{$item->id  }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
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
                    <i style="font-size: 15px;">{{trans('Voucher Details')}}</i>
                </div>
            </div>
        </div>
        <div class="" id="dvContainer">
            <div  class="modal-body">
                <div class="row">

                    <div class="col-md-6"> 
                        <div class="text-success"><h4 class="">Voucher No ( {{ $item->voucher_no  ?? '' }} )</h4></div>
                       
                        <div class="upper_case"> {{ \Carbon\Carbon::parse($item->payment_date)->format('d F Y')}}</div>
                        <div class="upper_case">{{ \Carbon\Carbon::parse($item->payment_date)->format('l')}}</div>
                       <div class="">Vendor Name : {{ ($item->customer->name ?? '').'('.($item->customer->customer_code ?? '').')'}}</div>
                       @if($item->payment_type == 1)
                            <div class="">Payment by : Cash</div>
                       @endif
                    
                    </div>
                    <div class="col-md-6">
                        @if($item->payment_type == 2)
                            <div class="">Bank Name - {{ $item->bank_name ?? '' }}</div>
                            <div class="">Branch Name - {{ $item->branch_name ?? '' }}</div>
                            <div class="">Cheque Number - {{ $item->cheque_number ?? '' }}</div>
                        @else
                              
                        @endif
                    </div>
                </div>
            </div>
            <br>
            <div class="voucher_details">
                
            </div>
        
            <div id="item-footer" class="modal-body"></div>
        </div>
      </div>
    </div>
</div>