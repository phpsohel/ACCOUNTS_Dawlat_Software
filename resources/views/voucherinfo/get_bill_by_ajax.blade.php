

{!! Form::open(['route' => 'voucherinfo.store', 'method' => 'post', 'files' => true]) !!}
<div class="row">
    <div class="col-md-12">
        <strong class="upper_case">{{ ($bill->customer->name  ?? '').'( '.($bill->customer->customer_code ?? '').' )' }}</strong>
        <div class="row">
       
            <div class="col-lg-6 col-md-6">
              
                <div class="form-group">
               
                    <h3 class="text-primary">Voucher No</h3>
                    <input type="text" class="form-control" name="voucher_no" value="{{ $auto_voucher ?? '' }}"  readonly>
                    <input type="hidden" class="form-control" name="bill_id" value="{{ $bill->id ?? '' }}" >
                   
                    <input type="hidden" class="form-control" name="vendor_id"  value="{{$bill->vendor_id ?? 0 }}">
                    @if($errors->has('voucher_no'))
                    <span>
                        <span class="text-danger">{{ $errors->first('voucher_no') }}</span>
                    </span>
                    @endif

                </div>
                <div class="form-group">
                    <label>{{trans('Payment Type')}} </label>
                    <select name="payment_type" id="" class="form-control payment_type">
                        <option value="1" class="">Cash</option>
                        <option value="2" class="">Bank / Cheque</option>
                    </select>
                </div>
                <div class="form-group bank_name" style="display: none">
                    <label>{{trans('Bank Name')}} </label>
                    <input type="text" class="form-control" name="bank_name" value="{{ old('bank_name') }}">
                </div>
                <div class="form-group branch_name" style="display: none">
                    <label>{{trans('Branch Name')}} </label>
                    <input type="text" class="form-control" name="branch_name" value="{{ old('branch_name') }}">
                </div>
                <div class="form-group cheque_number" style="display: none">
                    <label>{{trans('Cheque Number')}} </label>
                    <input type="text" class="form-control" name="cheque_number" value="{{ old('cheque_number') }}">
                </div>

            </div>
            <div class="col-lg-6 col-md-6">

                <div class="form-group">
                     <h3 class="text-info">Due Amount   ( {{ ($bill->payable_amount ?? 0) - ($bill->paid_amount?? 0) }} )</h3>
                </div>
                <div class="form-group">
                    <h3 class="text-primary">Payment Date</h3>
                   <div class="">
                       <input type="date" class="form-control" value="{{ date('Y-m-d') }}" name="payment_date" required>
                   </div>

               </div>
                <div class="form-group">
                    <label class="text-primary">Status </label>
                   <div class="">
                        <select name="billing_status" id="" class=" form-control billing_status">
                            <option value="1" class="">Pending</option>
                            <option value="2" class="">Pertially Paid</option>
                            <option value="3" class="">Paid</option>
                        </select>
                   </div>

               </div>


                <div class="form-group">
                    <label>{{trans('Remarks')}} </label>
                    
                    <textarea  class="form-control" id="" cols="" style="border:1px solid gray" rows="3" name="remarks"></textarea>
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
                          <tr class="">
                            <td class=""><input type="text" class="form-control notes_values" name="notes_values[]" ></td>
                            <td class=""><input type="text" class="form-control no_of_notes" name="no_of_notes[]" ></td>
                            <td class=""><input type="text" class="form-control paid_amount text-right" name="paid_amount[]" readonly></td>
                            <td class=""></td>
                          </tr>
                        </tbody>
                        <tfoot class="tfoot active">
                           <tr class="">
                            <td colspan="1"></td>
                            <td colspan="" class="text-right">{{trans('Grand Total')}}</td>
                            <td id="grand_total" >
                                
                                <input type="text" name="payable_amount" class="form-control grand_total text-right mx-2" readonly>
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

<script class="">

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