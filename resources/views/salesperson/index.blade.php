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
            <a href="{{route('salesperson.create')}}" class="btn btn-info"><i class="dripicons-plus"></i> {{trans('Add Sales Person')}}</a>&nbsp;
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="table-responsive">
                        <table  class="table table-bordered table-sm table-striped text-nowrap">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>{{trans('file.name')}}</th>
                                    <th>{{trans('file.Phone Number')}}</th>
                                    <th>{{trans('file.Address')}}</th>
                                    <th class="not-exported">{{trans('file.action')}}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($sales as $key=>$sale)
                                <tr>
                                    <td>{{ ++$i}}</td>
                                    <td>{{ $sale->name ?? '' }}</td>
                                    <td>{{ $sale->phone_number ?? ''}}</td>
                                    <td>{{ $sale->address ?? ''}}</td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{trans('file.action')}}
                                                <span class="caret"></span>
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <ul class="dropdown-menu edit-options dropdown-menu-right dropdown-default" user="menu">
                                             
                                                <li> 
                                                    <a href="{{ route('salesperson.edit', $sale->id) }}" class="btn btn-link"><i class="dripicons-document-edit"></i> {{trans('file.edit')}}</a>
                                                </li>
                                              
                                          
                                                <li>
                                                    <a class="btn btn-link" data-toggle="modal" data-target="#myModal{{ $sale->id }}"> <i class="fa fa-trash"></i>Delete
                                                    </a>
                                                </li>
                                              
                                            
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                @include('salesperson.deleted_modal')
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{ $sales->links() }}
                </div>
            </div>
        </div>
     </div>
    </div>
  
  
</section>
@endsection