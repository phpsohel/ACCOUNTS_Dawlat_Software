

{!! Form::open(['route' => 'billinfo.store', 'method' => 'post', 'files' => true]) !!}
<div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="form-group">
                    <h3 class="text-primary">INVOICE</h3>
                    <input type="text" class="form-control" name="invoice_no" value="{{ $auto_invoice ?? 0 }}"  readonly>
                    <input type="hidden" class="form-control" name="challan_no" value="{{ $challan->challan_no ?? '' }}" >
                    <input type="hidden" class="form-control" name="challan_id"  value="{{$challan->id ?? 0 }}">
                    <input type="hidden" class="form-control" name="vendor_id"  value="{{$challan->vendor_customer_id ?? 0 }}">
                    @if($errors->has('invoice_no'))
                    <span>
                        <span class="text-danger">{{ $errors->first('invoice_no') }}</span>
                    </span>
                    @endif
                    <br class="">
                    <h5>Favour With</h5>
                    <strong class="upper_case">{{ ($challan->customer->name  ?? '').'( '.($challan->customer->customer_code ?? '').' )' }}</strong>
                    <div class="upper_case">{{ $challan->customer->address  ?? '' }}</div>
                    <div class="upper_case">{{ $challan->customer->email  ?? '' }}</div>
                
                    

                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="form-group">
                     <h3 class="text-primary">Billing Date</h3>
                    <div class="">
                        <input type="date" class="form-control" value="{{ date('Y-m-d') }}" name="billing_date" required>
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
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody class="addtbody ">
                            @foreach ($details as $detail)
                            <tr class="">
                                <td>
                                    <input type="hidden" class="" name="details_challan_id[]" value="{{ $detail->id }}">
                                    <textarea name="item_details[]" class="form-control " rows="5" placeholder="" readonly>{{ $challan->challan_no.' | '.$challan->shipping_date.' | '.$detail->item_details ?? '' }}</textarea>
                                </td>
                                <td><input type="text" class="form-control qty"  name="qty[]" value="{{ $detail->qty ?? '' }}" readonly></td>
                                <td><input type="text" class="form-control cost" name="per_qty_cost[]"  onkeyup="cost(this)"></td>
                                <td class=""><input type="text" class="form-control amount" name="amount[]" readonly></td>
                            </tr>
                            @endforeach
                          
                        </tbody>
                        <tfoot class="tfoot active">
                           <tr class="">
                            <td colspan="2"></td>
                            <td colspan="" class="text-right">{{trans('Sub Total')}}</td>
                            <td id="sub_total" class="">
                                <input type="text" name="sub_total" class="form-control sub_total text-right" readonly>
                            </td>
                           </tr>
                           <tr class="">
                            <td colspan="2"></td>
                            <td colspan="" class="text-right">{{trans('Vat (%)')}}</td>
                            <td id="vat" class="d-flex">
                                <input type="text" name="vat" class="form-control vat">
                                <input type="text" name="vat_tk" class="form-control vat_tk text-right" readonly>
                            </td>
                           </tr>
                           <tr class="">
                            <td colspan="2"></td>
                            <td colspan="" class="text-right">{{trans('AIT (%)')}}</td>
                            <td id="ait" class="d-flex">
                                <input type="text" name="ait" class="form-control ait" >
                                <input type="text" name="ait_tk" class="form-control ait_tk text-right" readonly>
                            </td>
                           </tr>
                           <tr class="">
                            <td colspan="2"></td>
                            <td colspan="" class="text-right">{{trans('Duty (%)')}}</td>
                            <td id="duty" class="d-flex">
                                <input type="text" name="duty" class="form-control duty" >
                                <input type="text" name="duty_tk" class="form-control duty_tk text-right" readonly>
                            </td>
                           </tr>
                           <tr class="">
                            <td colspan="2"></td>
                            <td colspan="" class="text-right">{{trans('Charge (%)')}}</td>
                            <td id="charge" class="d-flex">
                                <input type="text" name="charge" class="form-control charge" >
                                <input type="text" name="charge_tk" class="form-control charge_th text-right" readonly>
                            </td>
                           </tr>
                           <tr class="">
                            <td colspan="2"></td>
                            <td colspan="" class="text-right">{{trans('Grand Total')}}</td>
                            <td id="grand_total" class="">
                                <input type="text" name="payable_amount" class="form-control grand_total text-right" readonly>
                            </td>
                           </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>


        {{-- <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>{{trans('file.remarks')}}</label>
        <textarea rows="5" name="note" class="form-control"></textarea>
    </div>
</div>
</div> --}}
<div class="form-group">
<input type="submit" value="{{trans('file.submit')}}" class="btn btn-primary" id="submit-button">
</div>
{!! Form::close() !!}