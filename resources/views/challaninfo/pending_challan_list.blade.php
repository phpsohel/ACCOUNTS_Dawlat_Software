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
            {{-- <a href="{{route('challaninfo.create')}}" class="btn btn-info"><i class="dripicons-plus"></i> {{trans('Add Challan')}}</a>&nbsp; --}}
        </div>
        <div class="card-body">
            <h5 class="">All Pending Challan</h5>
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
                                             
                                                <li> 
                                                  
                                                    <a class="btn btn-link" data-toggle="modal" data-target="#approved{{ $item->id }}"> <i class="fa fa-hand-o-right"></i>Approve
                                                    </a>
                                                </li>
                                              
                                             
                                            
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                @include('challaninfo.approved_modal')
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
</script>
@endsection