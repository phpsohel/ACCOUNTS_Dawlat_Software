@extends('layout.main') @section('content')
<section class="forms">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h4>{{trans('file.Add Biller')}}</h4>
                    </div>
                    <div class="card-body">
                        <p class="italic"><small class="text-danger">{{trans('file.The field labels marked with * are required input fields')}}.</small></p>
                        {!! Form::open(['route' => 'biller.store', 'method' => 'post', 'files' => true]) !!}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{trans('file.biller')}} <sup class="text-danger">*</sup></strong> </label>
                                    <input type="text" name="name" value="{{ old('name') }}" required class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{trans('Biller logo')}}</label>
                                    <input type="file" name="image" class="form-control">
                                    @if($errors->has('image'))
                                   <span>
                                       <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{trans('file.Email')}} <sup class="text-danger">*</sup></label>
                                    <input type="email" name="email" value="{{ old('email') }}" placeholder="" required class="form-control">
                                    @if($errors->has('email'))
                                   <span>
                                       <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{trans('Designation')}} <sup class="text-danger">*</sup></label>
                                    <input type="text" name="designation" value="{{ old('designation') }}" required class="form-control">
                                    @if($errors->has('designation'))
                                    <span>
                                        <strong>{{ $errors->first('designation') }}</strong>
                                     </span>
                                     @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{trans('file.Phone Number')}} <sup class="text-danger">*</sup></label>
                                    <input type="text" name="phone_number" value="{{ old('phone_number') }}" required class="form-control">
                                    @if($errors->has('phone_number'))
                                    <span>
                                        <strong>{{ $errors->first('phone_number') }}</strong>
                                     </span>
                                     @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{trans('file.Address')}} <sup class="text-danger">*</sup></label>
                                    <input type="text" name="address" value="{{ old('address') }}" required class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">   
                                <div class="form-group">
                                    <label>{{trans('Website Link')}}</label>
                                    <input type="text" name="website_link" value="{{ old('website_link') }}"  placeholder="" class="form-control">
                                    @if($errors->has('website_link'))
                                   <span>
                                       <strong>{{ $errors->first('website_link') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            {{-- <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{trans('file.VAT Number')}}</label>
                                    <input type="text" name="vat_number" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{trans('file.City')}} *</label>
                                    <input type="text" name="city" required class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{trans('file.State')}}</label>
                                    <input type="text" name="state" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{trans('file.Postal Code')}}</label>
                                    <input type="text" name="postal_code" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{trans('file.Country')}}</label>
                                    <input type="text" name="country" class="form-control">
                                </div>
                            </div> --}}
                            <div class="col-md-12">
                                <div class="form-group mt-4">
                                    <a href="{{ route('biller.index') }}" class="btn btn-info"><i class="fa fa-undo px-2"></i> {{trans('Back')}}</a> 
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