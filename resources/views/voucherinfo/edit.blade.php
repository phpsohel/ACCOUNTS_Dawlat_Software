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
            <h4 class="">Update Voucher</h4>
        </div>
        <div class="card-body invoice_details">
         {!! Form::open(['route' => ['voucherinfo.update',$item->id], 'method' => 'put', 'files' => true]) !!}
                <div class="row">
                    <div class="col-md-12">
                        <strong class="upper_case">{{ ($item->customer->name  ?? '').'( '.($item->customer->customer_code ?? '').' )' }}</strong>
                        <div class="row">
                    
                            <div class="col-lg-6 col-md-6">
                            
                                <div class="form-group">
                            
                                    <h3 class="text-primary">Voucher No</h3>
                                    <input type="text" class="form-control" name="voucher_no" value="{{ $item->voucher_no ?? '' }}"  readonly>

                                    <input type="hidden" class="form-control" name="bill_id" value="{{ $item->bill_id ?? '' }}" >
                   
                                    <input type="hidden" class="form-control" name="vendor_id"  value="{{$item->vendor_id ?? 0 }}">

                        
                                    @if($errors->has('voucher_no'))
                                    <span>
                                        <span class="text-danger">{{ $errors->first('voucher_no') }}</span>
                                    </span>
                                    @endif

                                </div>
                                <div class="form-group">
                                    <label>{{trans('Payment Type')}} </label>
                                    <select name="payment_type" id="" class="form-control payment_type">
                                        <option value="1" {{ $item->payment_type == 1 ? "Selected":'' }}>Cash</option>
                                        <option value="2" {{ $item->payment_type == 2 ? "Selected":'' }}>Bank / Cheque</option>
                                  
                                    </select>
                                </div>
                                @if($item->payment_type == 2)
                                <div class="form-group bank_name">
                                    <label>{{trans('Bank Name')}} </label>
                                    <input type="text" class="form-control" name="bank_name" value="{{ old('bank_name',$item->bank_name ?? '') }}">
                                </div>
                                <div class="form-group branch_name">
                                    <label>{{trans('Branch Name')}} </label>
                                    <input type="text" class="form-control" name="branch_name" value="{{ old('branch_name',$item->branch_name ?? '') }}">
                                </div>
                                <div class="form-group cheque_number">
                                    <label>{{trans('Cheque Number')}} </label>
                                    <input type="text" class="form-control" name="cheque_number" value="{{ old('cheque_number',$item->cheque_number ?? '') }}">
                                </div>
                                @endif

                            </div>
                            <div class="col-lg-6 col-md-6">

                                <div class="form-group">
                                    <h3 class="text-info">Due Amount   ( {{ ($item->bill->payable_amount ?? 0) - ($item->bill->paid_amount?? 0) }} )</h3>
                                </div>
                                <div class="form-group">
                                    <h3 class="text-primary">Payment Date</h3>
                                <div class="">
                                    <input type="date" class="form-control" value="{{ $item->payment_date ?? '' }}" name="payment_date" required>
                                </div>

                            </div>
                                <div class="form-group">
                                    <label class="text-primary">Status </label>
                                <div class="">
                                        <select name="billing_status" id="" class=" form-control billing_status">
                                            <option value="1" {{ $item->bill->billing_status == 1 ? "Selected":'' }}>Pending</option>
                                            <option value="2" {{ $item->bill->billing_status == 2 ? "Selected":'' }}>Pertially Paid</option>
                                            <option value="3" {{ $item->bill->billing_status == 3 ? "Selected":'' }}>Paid</option>
                                        </select>
                                </div>

                            </div>


                                <div class="form-group">
                                    <label>{{trans('Remarks')}} </label>
                                    <textarea  class="form-control" id="" cols="" style="border:1px solid gray" rows="3" name="remarks">{!! $item->remarks ?? '' !!}</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">

                                <div class="table-responsive mt-3">
                                    <table id="myTable" class="table table-hover order-list">
                                        <thead>
                                            <tr>
                                                <th width="280px">Notes</th>
                                                <th>Unit </th>
                                                <th class="text-right">Amount</th>
                                                <th class="">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class="addtbody_append">
                                            @php
                                                $total = 0;
                                            @endphp
                                            @foreach ($details as $detail)
                                            @php
                                                $total += ($detail->paid_amount ?? 0);
                                            @endphp
                                            <tr class="">
                                                <td class=""><input type="text" class="form-control notes_values" value="{{ $detail->notes_values ?? '' }}" name="notes_values[]" ></td>
                                                <td class=""><input type="text" class="form-control no_of_notes" name="no_of_notes[]"  value="{{ $detail->no_of_notes ?? '' }}"></td>
                                                <td class=""><input type="text" class="form-control paid_amount text-right" name="paid_amount[]" value="{{ $detail->paid_amount ?? '' }}" readonly></td>
                                                <td class=""></td>
                                            </tr>
                                            @endforeach
                                    
                                        </tbody>
                                        <tfoot class="tfoot active">
                                        <tr class="">
                                            <td colspan="1"></td>
                                            <td colspan="" class="text-right">{{trans('Grand Total')}}</td>
                                            <td id="grand_total" >
                                                
                                                <input type="text" name="payable_amount" class="form-control grand_total text-right mx-2" value="{{number_format((float)($total ?? 0),2,'.','')}}" readonly>
                                            </td>
                                            <td class=""><p  class="btn btn-primary text-white mr-2 new_add_colum">+</p></td>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    
                <div class="form-group">
                <input type="submit" value="{{trans('file.submit')}}" class="btn btn-primary" id="submit-button">
                </div>
                {!! Form::close() !!}
          
        </div>
     </div>
    </div>
  
  
</section>
<script type="text/javascript">
    $("ul#sale").siblings('a').attr('aria-expanded','true');
    $("ul#sale").addClass("show");
    $("ul#sale #challan-list-menu").addClass("active");

    tinymce.init({
      selector: 'textarea',
      height: 20,
      plugins: [
        'advlist autolink lists link image charmap print preview anchor textcolor',
        'searchreplace visualblocks code fullscreen',
        'insertdatetime media table contextmenu paste code wordcount'
      ],
      toolbar: 'insert | undo redo |  formatselect | bold italic backcolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat',
      branding:false
    }); 

       
    $(document).on('click', '.payment_type', function() {

            var payment_type = $(".payment_type option:selected").val();
            if(payment_type == 2)
            {
                $(".bank_name").show();
                $(".branch_name").show();
                $(".cheque_number").show();
            }
            if(payment_type == 1){
                $(".bank_name").hide();
                $(".branch_name").hide();
                $(".cheque_number").hide(); 
            }
        });



</script>

<script class="">
    $(document).ready(function() {

var addBtn = $('.new_add_colum');
$(addBtn).click(function() {
    var maxField = 40;
    var wrapper = $('.addtbody_append');
    var x = 1;
    var fieldHtml = '<tr class=""><td class=""><input type="text" class="form-control notes_values"  name="notes_values[]" ></td><td class=""><input type="text" class="form-control no_of_notes" name="no_of_notes[]" ></td><td class=""><input type="text" class="form-control paid_amount text-right" name="paid_amount[]" readonly></td><th><button type="button" class="btn btn-danger btn-sm  remove">X</button></th></tr>';
    if (x < maxField) {
        x++;
        $(wrapper).append(fieldHtml);
    }
})
});

$('tbody').on('click', '.remove', function() {
$(this).parent().parent().remove();
grandTotal();

});

  
    $(document).on("keyup",".notes_values,.no_of_notes",function(){
        
      let notes_values =  $(this).parent().parent().find('.notes_values').val();
      let no_of_notes =   $(this).parent().parent().find('.no_of_notes').val();
      let subamount = parseFloat(notes_values)*parseFloat(no_of_notes);
      if(!subamount) subamount=0;
      $(this).parent().parent().find('.paid_amount').val(subamount);
       
      grandTotal();
    });

    function grandTotal()
    {
        let amount = 0;
        let rows = $('.paid_amount');
        $.each(rows, (i, row) => {
            let value = $(row).val();
            if (!value) value = 0;
            amount += parseFloat(value)
        })
        $('.grand_total').val(amount)
    };


</script>
@endsection