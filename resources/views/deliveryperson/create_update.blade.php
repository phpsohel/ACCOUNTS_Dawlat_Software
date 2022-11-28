@extends('layout.main') @section('content')
<section class="forms">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h4>{{trans('Delivery Person')}}</h4>
                    </div>
                    <div class="card-body">

                        <p class="italic"><small class="text-danger">{{trans('file.The field labels marked with * are required input fields')}}.</small></p>
                        @if(($item->id))
                        {!! Form::open(['route' => ['deliveryperson.update',$item->id], 'method' => 'put', 'files' => true]) !!}
                        @else
                        {!! Form::open(['route' => 'deliveryperson.store', 'method' => 'post', 'files' => true]) !!}

                        @endif
                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{trans('Name')}} <sup class="text-danger">*</sup></strong> </label>
                                    <input type="text" name="name" value="{{ old('name',$item->name) }}" required class="form-control">
                                </div>
                            </div>
                       
                        
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{trans('file.Phone Number')}} <sup class="text-danger">*</sup></label>
                                    <input type="text" name="phone_number" value="{{ old('phone_number',$item->phone_number) }}" required class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{trans('file.Address')}} <sup class="text-danger">*</sup></label>
                                    <input type="text" name="address" value="{{ old('address',$item->address) }}" required class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mt-4">
                                    <a href="{{ route('deliveryperson.index') }}" class="btn btn-info"><i class="fa fa-undo px-2"></i> {{trans('Back')}}</a> 
                                    <input type="submit" value="{{trans('file.submit')}}" class="btn btn-primary">
                                </div>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
    $("ul#people").siblings('a').attr('aria-expanded','true');
    $("ul#people").addClass("show");
    $("ul#people #biller-create-menu").addClass("active");
</script>
@endsection