@extends('layout.main') @section('content')
<section class="forms">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h4>{{trans('file.Update Biller')}}</h4>
                    </div>
                    <div class="card-body">
                        <p class="italic"><small class="text-danger">{{trans('file.The field labels marked with * are required input fields')}}.</small></p>
                        {!! Form::open(['route' => ['biller.update', $lims_biller_data->id], 'method' => 'put', 'files' => true]) !!}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{trans('file.biller')}} <sup class="text-danger">*</sup></strong> </label>
                                    <input type="text" name="name" value="{{$lims_biller_data->name}}" required class="form-control">
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
                                    <input type="email" name="email" value="{{$lims_biller_data->email}}" required class="form-control">
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
                                    <input type="text" name="designation" value="{{ old('designation',$lims_biller_data->designation) }}" required class="form-control">
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
                                    <input type="text" name="phone_number" value="{{$lims_biller_data->phone_number}}" required class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{trans('file.Address')}} <sup class="text-danger">*</sup></label>
                                    <input type="text" name="address" value="{{$lims_biller_data->address}}" required class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">   
                                <div class="form-group">
                                    <label>{{trans('Website Link')}}</label>
                                    <input type="text" name="website_link" value="{{ old('website_link',$lims_biller_data->website_link ?? '') }}"  placeholder="www.example@example.com" class="form-control">
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
                                    <input type="text" name="vat_number" value="{{$lims_biller_data->vat_number}}" class="form-control">
                                </div>
                            </div>
                             <div class="col-md-6">   
                                <div class="form-group">
                                    <label>{{trans('file.Company Name')}} <sup class="text-danger">*</sup></label>
                                    <input type="text" name="company_name" value="{{$lims_biller_data->company_name}}" required class="form-control">
                                    @if($errors->has('company_name'))
                                   <span>
                                       <strong>{{ $errors->first('company_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{trans('file.City')}} *</label>
                                    <input type="text" name="city"  value="{{$lims_biller_data->city}}" required class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{trans('file.State')}}</label>
                                    <input type="text" name="state" value="{{$lims_biller_data->state}}" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{trans('file.Postal Code')}}</label>
                                    <input type="text" name="postal_code" value="{{$lims_biller_data->postal_code}}" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{trans('file.Country')}}</label>
                                    <input type="text" name="country" value="{{$lims_biller_data->country}}" class="form-control">
                                </div>
                            </div> --}}
                            <div class="col-md-12">
                                <div class="form-group mt-3">
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
</script>
@endsection
