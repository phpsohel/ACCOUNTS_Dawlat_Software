<div id="challan_{{$quotation->id  }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
    <div role="document" class="modal-dialog" >
      <div class="modal-content">
        <div class="container mt-3 pb-2 border-bottom">
            <div class="row">
                <div class="col-md-3">
                    {{-- <button id="table_print" type="button" class="btn btn-default btn-sm"><i class=""></i> {{trans('file.Print')}}</button> --}}
                    {{ Form::open(['route' => 'quotation.sendmail', 'method' => 'post', 'class' => 'sendmail-form'] ) }}
                        <input type="hidden" name="quotation_id">
                        <button class="btn btn-default btn-sm d-print-none" disabled><i class="dripicons-mail"></i> {{trans('file.Email')}}</button>
                    {{ Form::close() }}
                </div>
                <div class="col-md-6">
                    <h3 id="exampleModalLabel" class="modal-title text-center container-fluid">{{$general_setting->site_title}}</h3>
                </div>
                <div class="col-md-3">
                    <button type="button" id="close-btn" data-dismiss="modal" aria-label="Close" class="close d-print-none"><span aria-hidden="true"><i class="dripicons-cross"></i></span></button>
                </div>
                <div class="col-md-12 text-center">
                    <i style="font-size: 15px;">{{trans('file.challandetails')}}</i>
                </div>
            </div>
        </div>
        <div class="" id="dvContainer">
            <div  class="modal-body">
                <div class="row">

                    <div class="col-md-6"> 
                        <div>Forwarded</div>
                        <strong class="">{{ $quotation->customer->company_name  ?? '' }}</strong>
                       <div class="">{{ $quotation->customer->address  ?? '' }}</div>
                       <div class="">Contact Person : {{ $quotation->customer->name ?? '' }}</div>
                       <div class="">Contact Number : {{ $quotation->customer->phone_number ?? '' }}</div>
                       <div class="">Delivery Place : {{ $quotation->delivery_place ?? '' }}</div>
                    </div>


                    <div class="col-md-6">
                        <div class="bg-dark text-white text-center">Shipping Challan</div>
                       
                        <div class="">Enlisted      : {{ $quotation->customer->created_at  ?? '' }}</div>
                       
                        <div class="">Shipping Item : {{ $quotation->shipping_item  ?? '' }}</div>
                       
                        <div class="">Shipping Date  : {{ $quotation->shipping_date  ?? '' }}</div>
                       
                        <div class="">Sales Person  : {{ $quotation->sales_person  ?? '' }}</div>
                    </div>
                </div>
            </div>
            <br>
            <div class="challan_details">
                
            </div>
        
            <div id="quotation-footer" class="modal-body"></div>
        </div>
      </div>
    </div>
</div>