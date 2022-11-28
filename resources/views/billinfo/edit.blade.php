@extends('layout.main')
@section('content')
@if(session()->has('create_message'))
<div class="alert alert-success alert-dismissible text-center"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>{!! session()->get('create_message') !!}</div>
@endif
@if(session()->has('edit_message'))
<div class="alert alert-success alert-dismissible text-center"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>{{ session()->get('edit_message') }}</div>
@endif
@if(session()->has('import_message'))
<div class="alert alert-success alert-dismissible text-center"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>{!! session()->get('import_message') !!}</div>
@endif
@if(session()->has('not_permitted'))
<div class="alert alert-danger alert-dismissible text-center"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>{{ session()->get('not_permitted') }}</div>
@endif

<section>
    <div class="container">
        <div class="card">
            <div class="card-header">

                {{-- <div class="row">
                    <div class="col-lg-4 col-md-4 offset-md-4">
                        <h4 class="text-center p-2">Approval Challan List</h4>
                        <select required name="challan_no" class="selectpicker form-control challan_no" data-live-search="true" id="" data-live-search-style="begins" title="Select Challan...">
                            @foreach($challans as $challans)
                            <option value="{{$challans->id}}">{{$challans->challan_no ?? ''}}</option>
                            @endforeach
                        </select>
                    </div>
                </div> --}}

            </div>
            <div class="card-body ">
                <h3 class="p-4 text-success text-center">Update Bill Information</h3>

                <br class="">
                {!! Form::open(['route' => ['billinfo.update',$item->id], 'method' => 'put', 'files' => true]) !!}
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <h3 class="text-primary">INVOICE</h3>
                                    <input type="text" class="form-control" name="invoice_no" value="{{ $item->invoice_no ?? 0 }}" readonly>
                                    <input type="hidden" class="form-control" name="challan_no" value="{{ $item->challan_no ?? '' }}">
                                    <input type="hidden" class="form-control" name="challan_id" value="{{$item->challan_id ?? 0 }}">
                                    <input type="hidden" class="form-control" name="vendor_id" value="{{$item->vendor_customer_id ?? 0 }}">
                                    @if($errors->has('invoice_no'))
                                    <span>
                                        <span class="text-danger">{{ $errors->first('invoice_no') }}</span>
                                    </span>
                                    @endif
                                    <br class="">
                                    <h5>Favour With</h5>
                                    <strong class="upper_case">{{ ($item->customer->name  ?? '').'( '.($item->customer->customer_code ?? '').' )' }}</strong>
                                    <div class="upper_case">{{ $item->customer->address  ?? '' }}</div>
                                    <div class="upper_case">{{ $item->customer->email  ?? '' }}</div>



                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <h3 class="text-primary">Billing Date</h3>
                                    <div class="">
                                        <input type="date" class="form-control" value="{{ $item->billing_date ?? '' }}" name="billing_date" required>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">

                                <div class="table-responsive mt-3">
                                    <table id="myTable" class="table table-hover order-list">
                                        <thead>
                                            <tr>
                                                <th width="280px">Description

                                                    (Product Details)</th>
                                                <th>Unit
                                                    ( Single Count)</th>
                                                <th class="">Cost</th>
                                                <th class="text-right">Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody class="addtbody ">
                                            @php
                                                $sub_total = 0;
                                            @endphp
                                            @foreach ($billdetails as $billdetail)
                                            @php
                                                $sub_total += ($billdetail->amount ?? 0);
                                            @endphp

                                            <tr class="">
                                                <td>
                                                    <input type="hidden" class="" name="bill_details_id[]" value="{{ $billdetail->id }}">
                                                    <textarea name="item_details[]" class="form-control " rows="5" placeholder="" readonly>{{ $item->challan_no.' | '. \Carbon\Carbon::parse($item->challan->shipping_date)->format('d M Y').' | '.$billdetail->chadetails->item_details ?? '' }}</textarea>
                                                </td>
                                                <td><input type="text" class="form-control qty" name="qty[]" value="{{ $billdetail->qty ?? '' }}" readonly></td>
                                                <td><input type="text" class="form-control cost" value="{{ $billdetail->per_qty_cost ?? ''}}" name="per_qty_cost[]" onkeyup="cost(this)"></td>
                                                <td class="text-right"><input type="text" class="form-control amount text-right" value="{{ $billdetail->amount ?? ''}}" name="amount[]" readonly></td>
                                            </tr>
                                            @endforeach

                                        </tbody>
                                        <tfoot class="tfoot active">
                                            <tr class="">
                                                <td colspan="2"></td>
                                                <td colspan="" class="text-right">{{trans('Sub Total')}}</td>
                                                <td id="sub_total" class="">
                                                   
                                                    <input type="text" name="sub_total" value=" {{number_format((float)($sub_total ?? 0),2,'.','')}}" class="form-control sub_total text-right" readonly>
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td colspan="2"></td>
                                                <td colspan="" class="text-right">{{trans('Vat ( %)')}}</td>
                                                <td id="vat" class="d-flex"> 
                                                    <input type="text" name="vat" value="{{ $item->vat ?? '' }}" class="form-control vat">
                                                    <input type="text" name="vat_tk" value="{{ $item->vat_tk ?? '' }}" class="form-control vat_tk text-right" readonly>
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td colspan="2"></td>
                                                <td colspan="" class="text-right">{{trans('AIT (%)')}}</td>
                                                <td id="ait" class="d-flex">
                                                    <input type="text" name="ait" value="{{ $item->ait ?? '' }}" class="form-control ait">
                                                    <input type="text" name="ait_tk" value="{{ $item->ait_tk ?? '' }}" class="form-control ait_tk text-right" readonly>
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td colspan="2"></td>
                                                <td colspan="" class="text-right">{{trans('Duty (%)')}}</td>
                                                <td id="duty" class="d-flex">
                                                    <input type="text" name="duty" value="{{ $item->duty ?? '' }}" class="form-control duty">
                                                    <input type="text" name="duty_tk" value="{{ $item->duty_tk ?? "" }}" class="form-control duty_tk text-right" readonly>
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td colspan="2"></td>
                                                <td colspan="" class="text-right">{{trans('Charge (%)')}}</td>
                                                <td id="charge" class="d-flex">
                                                    <input type="text" name="charge" value="{{ $item->charge ?? '' }}" class="form-control charge">
                                                    <input type="text" name="charge_tk" value="{{ $item->charge_tk ?? '' }}" class="form-control charge_th text-right" readonly>
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td colspan="2"></td>
                                                <td colspan="" class="text-right">{{trans('Grand Total')}}</td>
                                                <td id="grand_total" class="">
                                                    <input type="text" name="payable_amount" value="{{ $item->payable_amount ?? '' }}" class="form-control grand_total text-right" readonly>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                  
            <div class="form-group">
                <input type="submit" value="{{trans('Update')}}" class="btn btn-primary" id="submit-button">
            </div>
            {!! Form::close() !!}

        </div>
    </div>
    </div>


</section>
<script type="text/javascript">
    $("ul#sale").siblings('a').attr('aria-expanded', 'true');
    $("ul#sale").addClass("show");
    $("ul#sale #challan-list-menu").addClass("active");

    $(document).on('click', '.challan_data', function() {
        var id = $(this).attr('data-detailid');
        console.log(id);
        $.ajax({
            type: 'get'
            , url: "{{ route('billDetailsShow') }}"
            , dataType: 'HTML'
            , data: {
                id: id
            }
            , 'global': false
            , asyn: true
            , success: function(data) {
                $(".challan_details").html(data)
                console.log(data)
            }
            , error: function(response) {
                console.log(response);
            }
        });
    });


    $(document).on('click', '.challan_no', function() {

        var challan_id = $(".challan_no option:selected").val();
        console.log(challan_id);
        $.ajax({
            type: 'get'
            , url: "{{ route('getApprovedChallanDetails') }}"
            , dataType: 'HTML'
            , data: {
                challan_id: challan_id
            }
            , 'global': false
            , asyn: true
            , success: function(data) {
                $(".approveal_challan_details").html(data)
                console.log(data)
            }
            , error: function(response) {
                console.log(response);
            }
        });
    });



    function calculateSubtotl() {

        let rows = $('.addtbody').find('tr');
        var subtotal = 0;
        if (rows.length && rows[0].innerHTML.match('qty')) {
            $(rows).each(function(i, row) {
                let cost = $(row).find('.cost').val();
                let qty = $(row).find('.qty').val();
                subtotal += (cost * qty);
                $(row).find('.amount').val(cost * qty)
            })
            $('.sub_total').val(subtotal);

        }
    };



    function grandtotal() {
        let subtotalamount = $('.sub_total').val();
        let vat = 0;
        vat = $('.vat').val();
        let total_vat = parseFloat(subtotalamount * vat / 100);
        let ait = 0;
        ait = $('.ait').val();
        let total_ait = parseFloat(subtotalamount * ait / 100);
        let duty = 0;
        duty = $('.duty').val();
        let total_duty = parseFloat(subtotalamount * duty / 100);
        let charge = 0;
        charge = $('.charge').val();
        let total_charge = parseFloat(subtotalamount * charge / 100);
        $('.vat_tk').val(total_vat);
        $('.ait_tk').val(total_ait);
        $('.duty_tk').val(total_duty);
        $('.charge_th').val(total_charge);

        let grandtotal = (parseFloat(subtotalamount) + parseFloat(total_vat) + parseFloat(total_ait) + parseFloat(total_duty) + parseFloat(total_charge));
        console.log(grandtotal);
        $('.grand_total').val(grandtotal);
    }

    $(document).on('keyup', '.cost', function() {
        calculateSubtotl();
        grandtotal();
    });

    $(document).on('keyup', '.vat,.ait,.duty,.charge', function() {


        grandtotal();
        calculateSubtotl();

    });

</script>
@endsection
