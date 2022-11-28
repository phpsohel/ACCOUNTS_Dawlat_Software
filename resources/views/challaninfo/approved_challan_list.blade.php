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
                <div class="row">
                    <div class="col-lg-4 col-md-4 offset-md-4">
                        <h4 class="text-center p-2">Approval Challan List</h4>
                        {{-- <select required name="challan_no" class="selectpicker form-control challan_no" data-live-search="true" id="" data-live-search-style="begins" title="Select Challan...">
                            @foreach($items as $item)
                            <option value="{{$item->id}}">{{$item->challan_no ?? ''}}</option>
                            @endforeach
                        </select> --}}
                    </div>
                </div>
        </div>


        <div class="card-body approveal_challan_details">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="table-responsive">
                        <table  class="table table-bordered table-sm table-striped text-nowrap">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Date</th>
                                    <th>Challan No</th>
                                    <th>Vendor Name</th>
                                    <th>Billar</th>
                                    <th>Challan</th>
                                    <th>Status</th>
                                    <th class="not-exported">{{trans('file.action')}}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($items as $key=>$item )  
                               
                                <tr>
                                    <td>{{ ++$i}}</td>
                                    <td>{{ $item->created_at ?? '' }}</td>
                                    <td>{{ $item->challan_no ?? ''}}</td>
                                    <td>{{ $item->customer->name ?? ''}}</td>
                                    <td>{{ $item->biller->name ?? ''}}</td>
                                    <td><a href="{{ route('Challanpdf',$item->id) }}" class="" target="_blank"> Challan</a>
                                    </td>
                                    <td>
                                        @if($item->admin_approval_status == 1)
                                        <span class="text-primary">Pending</span>
                                        @else
                                        <span class="text-success">Approved</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{trans('file.action')}}
                                                <span class="caret"></span>
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <ul class="dropdown-menu edit-options dropdown-menu-right dropdown-default" user="menu">
                                                <li>
                                                    <a class="btn btn-link challan_data "   data-toggle="modal" data-target="#challan_{{$item->id  }}" data-detailid="{{$item->id  }}"><i class="fa fa-eye"></i>  {{trans('file.View')}}</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                @include('challaninfo.deleted_modal')
                                @include('challaninfo.challan_modal')
                                @empty
                                <tr>
                                    <td colspan="8" class="text-center text-danger"><h5>No data available in table.</h5></td>
                                    
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
    </div>
  
  
</section>
<script type="text/javascript">
    $("ul#sale").siblings('a').attr('aria-expanded','true');
    $("ul#sale").addClass("show");
    $("ul#sale #challan-list-menu").addClass("active");

    $(document).on('click', '.challan_data', function() {
        var id = $(this).attr('data-detailid');
       console.log(id);
       $.ajax({
           type: 'get',
           url: "{{ route('challanDetailsShow') }}",
           dataType: 'HTML',
           data: {
               id: id
           },
           'global': false,
           asyn: true,
           success: function(data) {
               $(".challan_details").html(data)
               console.log(data)
           },
           error: function(response) {
               console.log(response);
           }
       });
   });


   $(document).on('click', '.challan_no', function() {
    
         var challan_id = $(".challan_no option:selected").val();
       console.log(challan_id);
       $.ajax({
           type: 'get',
           url: "{{ route('getApprovedChallanDetails') }}",
           dataType: 'HTML',
           data: {
            challan_id:challan_id
           },
           'global': false,
           asyn: true,
           success: function(data) {
               $(".approveal_challan_details").html(data)
               console.log(data)
           },
           error: function(response) {
               console.log(response);
           }
       });
   });

  

   function calculateSubtotl() {

        let rows = $('.addtbody').find('tr');
        var subtotal = 0;
        if(rows.length && rows[0].innerHTML.match('qty')) {
        $(rows).each(function(i, row) {
          let cost = $(row).find('.cost').val();
          let qty = $(row).find('.qty').val();
          subtotal += (cost*qty);
          $(row).find('.amount').val(cost * qty)
        })
        $('.sub_total').val(subtotal);
       
    }
    };

  

    function grandtotal()
    {
        let subtotalamount = $('.sub_total').val();
        let vat = 0;
        vat = $('.vat').val();
        let total_vat = parseFloat(subtotalamount*vat/100);
        let ait = 0;
        ait = $('.ait').val();
        let total_ait = parseFloat(subtotalamount*ait/100);
        let duty = 0;
        duty = $('.duty').val();
        let total_duty = parseFloat(subtotalamount*duty/100);
        let charge = 0;
         charge = $('.charge').val();
        let total_charge = parseFloat(subtotalamount*charge/100);
      
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