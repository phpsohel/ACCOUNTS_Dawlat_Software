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
        <div class="row">
            <div class="col-md-12">
                <form class="card p-4" action="{{ route('ledgerinfo.store') }}" method="POST" id="myForm">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-2 ">
                            <p class="form-control today_date" placeholder="Today">Today</p>
                        </div>
                        <div class="form-group col-md-2 ">

                            <p  class="form-control one_month_date" >Last 1 Month</p>
                        </div>
                        <div class="form-group col-md-2 ">

                            <p  class="form-control 3month_date" >Last 3 Month</p>

                        </div>
                        <div class="form-group col-md-3 ">

                            <p  class="form-control 6month_date" >Last 6 Month</p>

                        </div>
                        <div class="form-group col-md-3 ">
                            <select required name="customer_id" class="selectpicker form-control customer_id" data-live-search="true" id="" data-live-search-style="begins" title="Select Vendor Name"
                            >
                                @foreach($customers as $customer)
                                <option value="{{$customer->id}}">{{$customer->name. '('.$customer->customer_code.' )'}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-4 ">
                            <label for="">From Date</label>
                            <input type="date" class="form-control from_to_date_default" name="from_date" placeholder="">
                            <input type="text" class="form-control from_date" name="from_date_text" placeholder="" style="display: none" readonly>
                        </div>
                        <div class="form-group col-md-4 ">
                            <label for="">To Date</label>
                            <input type="date" class="form-control from_to_date_default" name="to_date" placeholder="">
                            <input type="text" class="form-control to_date" name="to_date_text" placeholder="" style="display: none" readonly>
                        </div>
                        <div class="form-group d-flex col-md-4 mt-4" >
                           
                            <button type="submit" class="form-control btn btn-primary text-white t mt-2 mx-2">Search</button>
                            <a  class="btn btn-warning  mt-2 mx-2 form-control reset_from_to_date"  style="background-color: rgb(234, 237, 26)">Reset</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- <div class="container">
    <div class="card">
        <div class="card-body invoice_details">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="table-responsive">
                        <table  class="table table-bordered table-sm table-striped text-nowrap">
                            <thead>
                                <tr class="">
                                    <th class="text-left"><span class="text-danger"> {{  ($total_paid ?? 0) - ( $total_payable?? 0)}} BDT</span> 
                                        <br class="">
                                        A077 Mr Baker
                                    </th>
                                    <th class="" colspan="6"></th>
                                
                                </tr>
                                <tr>
                                    <th>SL</th>
                                    <th>Date</th>
                                    <th>Title Order</th>
                                    <th>Particulars</th>
                                    <th>Received By</th>
                                    <th class="text-success text-right">Total Sales <br>{{  $total_payable ?? ""}}</th>
                                    <th class="text-primary text-right">Received <br>{{ $total_paid ?? '' }}</th>
                                </tr>
                            </thead>
                            <tbody>
                               
                                @forelse ($items as $key=>$item )  
                              
                               
                                <tr>
                                    <td>{{ ++$i}}</td>
                                    <td>{{ $item->billing_date ?? '' }}</td>
                                    <td>
                                        Delivery <br>
                                        {{ $item->challan->challan_no ?? ''}}
                                    </td>
                                  
                                    <td>
                                        @foreach ($item->challan->chadetails as $detail)
                                            {{ $detail->item_details  }} <br>
                                        @endforeach
                                    
                                    
                                    </td>
                                    <td class="">
                                        @if($item->voucher)
                                            @if($item->voucher->payment_type== 1)
                                            Cash 
                                            @else
                                            {{ $item->voucher->bank_name ?? '' }} ,
                                            {{ $item->voucher->bank_name ?? '' }} ,
                                            {{ $item->voucher->voucher->cheque_number ?? '' }} ,

                                            @endif
                                        @endif


                                    </td>
                                    <td class="text-success text-right">{{ $item->payable_amount ?? 0}} </td>
                                    <td class="text-primary text-right">{{ $item->paid_amount ?? 0}}</td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="14" class="text-center text-danger"><h5>No data available in table.</h5></td>
                                    
                                   </tr>
                                @endforelse()
                            </tbody>
                        </table>
                    </div>
                    {{ $items->links() }}
                </div>
            </div>
        </div>
     </div>
    </div> --}}
  
  
</section>
<script type="text/javascript">
    $("ul#sale").siblings('a').attr('aria-expanded','true');
    $("ul#sale").addClass("show");
    $("ul#sale #challan-list-menu").addClass("active");
  
    
    $(document).on('click', '.today_date', function() {
        
        $(".from_to_date_default").hide();
        $(".from_date").show();
        $(".to_date").show();
   
        var currentdate = new Date();
        var from_date = currentdate.toLocaleDateString();
        var to_date = currentdate.toLocaleDateString();
        $(".from_date").val(from_date);
        $(".to_date").val(to_date);
        console.log(currentdate.toLocaleDateString());

        $(".today_date").css({"background-color": "green", "color": "white"});
        $(".one_month_date").css({"background-color": "gray", "color": "white"});
        $(".3month_date").css({"background-color": "gray", "color": "white"});
        $(".6month_date").css({"background-color": "gray", "color": "white"});
    

        });

        $(document).on('click', '.one_month_date', function() {
        
        $(".from_to_date_default").hide();
        $(".from_date").show();
        $(".to_date").show();
        var currentdate = new Date();
        var todate = new Date();

        var date = new Date(currentdate.setDate(currentdate.getDate() - 31));
        var from_date =  date.toLocaleDateString();
        var to_date = todate.toLocaleDateString();
        $(".from_date").val(from_date);
        $(".to_date").val(to_date);

        $(".today_date").css({"background-color": "gray", "color": "white"});
        $(".one_month_date").css({"background-color": "green", "color": "white"});
        $(".3month_date").css({"background-color": "gray", "color": "white"});
        $(".6month_date").css({"background-color": "gray", "color": "white"});

        });



  
    
    $(document).on('click', '.3month_date', function() {
 
        $(".from_to_date_default").hide();
        $(".from_date").show();
        $(".to_date").show();

        var currentdate = new Date();
        var d = new Date(currentdate);
        d.setMonth(d.getMonth() - 3);
         var threemonth_date = d.toLocaleDateString();
         var to_date = currentdate.toLocaleDateString();
       
         $(".from_date").val(threemonth_date);
        $(".to_date").val(to_date);

        $(".today_date").css({"background-color": "gray", "color": "white"});
        $(".one_month_date").css({"background-color": "gray", "color": "white"});
        $(".3month_date").css({"background-color": "green", "color": "white"});
        $(".6month_date").css({"background-color": "gray", "color": "white"});

    });

    $(document).on('click', '.6month_date', function() {
        
        $(".from_to_date_default").hide();
        $(".from_date").show();
        $(".to_date").show();

        var currentdate = new Date();
        var d = new Date(currentdate);
        d.setMonth(d.getMonth() - 6);
        var sixmonth_date = d.toLocaleDateString();
        var to_date = currentdate.toLocaleDateString();

        $(".from_date").val(sixmonth_date);
        $(".to_date").val(to_date);

        $(".today_date").css({"background-color": "gray", "color": "white"});
        $(".one_month_date").css({"background-color": "gray", "color": "white"});
        $(".3month_date").css({"background-color": "gray", "color": "white"});
        $(".6month_date").css({"background-color": "green", "color": "white"});

    });

    $(document).on('click', '.reset_from_to_date', function() {
        
        $(".from_to_date_default").show();
        $(".from_date").hide();
        $(".to_date").hide();

        $(".today_date").css({"background-color": "gray", "color": "white"});
        $(".one_month_date").css({"background-color": "gray", "color": "white"});
        $(".3month_date").css({"background-color": "gray", "color": "white"});
        $(".6month_date").css({"background-color": "gray", "color": "white"});

    });




</script>
@endsection