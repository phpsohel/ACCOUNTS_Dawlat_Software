@extends('layout.main') @section('content')
@if(session()->has('not_permitted'))
  <div class="alert alert-danger alert-dismissible text-center"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>{{ session()->get('not_permitted') }}</div> 
@endif
<section class="forms">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h4>{{trans('file.Addvendor')}}</h4>
                    </div>
                    <div class="card-body">
                        <p class="italic"><small class="text-danger">{{trans('file.The field labels marked with * are required input fields')}}.</small></p>
                        {!! Form::open(['route' => 'customer.store', 'method' => 'post', 'files' => true]) !!}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{trans('file.Code')}} <sup class="text-danger">*</sup></strong> </label>
                                    <input type="text" id="customer_code" name="customer_code" value="{{ old('customer_code') }}" required class="form-control" onkeyup='saveValue(this);'>
                                    @if($errors->has('customer_code'))
                                    <span>
                                        <span  class="text-danger">{{ $errors->first('customer_code') }}</span  >
                                     </span>
                                     @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{trans('file.vendorname')}} <sup class="text-danger">*</sup></strong> </label>
                                    <input type="text" id="company_name" name="company_name" value="{{ old('company_name') }}" required class="form-control" onkeyup='saveValue(this);'>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{trans('Vendor Contact Person')}} <sup class="text-danger">*</sup></label>
                                    <input type="text" name="name" value="{{ old('name') }}" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{trans('Contact Person Designation')}} <sup class="text-danger">*</sup></label>
                                    <input type="text" name="designation" value="{{ old('designation') }}" class="form-control" required>
                                </div>
                                @if($errors->has('designation'))
                                <span>
                                    <span  class="text-danger">{{ $errors->first('designation') }}</span  >
                                 </span>
                                 @endif
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Brand Name <sup class="text-danger">*</sup></label>
                                    <input type="text" name="brand_name" value="{{ old('brand_name') }}" placeholder="" class="form-control" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{trans('file.Email')}} <sup class="text-danger">*</sup></label>
                                    <input type="email" name="email" value="{{ old('email') }}" placeholder="" class="form-control" required>
                                    @if($errors->has('email'))
                                   <span>
                                       <span  class="text-danger">{{ $errors->first('email') }}</span>
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
                                       <span  class="text-danger">{{ $errors->first('phone_number') }}</span  >
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
                                    <label>{{trans('Sales Person')}}</label>
                                    <input type="text" name="sales_person" value="{{ old('sales_person') }}" class="form-control">
                                </div>
                            </div>
                            {{--
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{trans('file.City')}} <sup class="text-danger">*</sup></label>
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
                            <div class="col-md-6 mt-3">
                                <div class="form-group">
                                    <label>{{trans('file.Add User')}}</label>&nbsp;
                                    <input type="checkbox" name="user" value="1" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{trans('file.Country')}}</label>
                                    <input type="text" name="country" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6 user-input">
                                <div class="form-group">
                                    <label>{{trans('file.UserName')}} <sup class="text-danger">*</sup></label>
                                    <input type="text" name="name" class="form-control">
                                    @if($errors->has('name'))
                                   <span>
                                       <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div> --}}
                            <div class="col-md-6 user-input">
                                <div class="form-group">
                                    <label>{{trans('file.Password')}} <sup class="text-danger">*</sup></label>
                                    <input type="password" name="password" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="pos" value="0">
                            <a href="{{ route('customer.index') }}" class="btn btn-info"><i class="fa fa-undo px-2"></i> Back</a>
                            <input type="submit" value="{{trans('file.submit')}}" class="btn btn-primary">
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
    $("ul#people #customer-create-menu").addClass("active");

    $(".user-input").hide();

    $('input[name="user"]').on('change', function() {
        if ($(this).is(':checked')) {
            $('.user-input').show(300);
            $('input[name="name"]').prop('required',true);
            $('input[name="password"]').prop('required',true);
        }
        else{
            $('.user-input').hide(300);
            $('input[name="name"]').prop('required',false);
            $('input[name="password"]').prop('required',false);
        }
    });

    //$("#name").val(getSavedValue("name"));
    //$("#customer-group-id").val(getSavedValue("customer-group-id"));

    function saveValue(e) {
        var id = e.id;  // get the sender's id to save it.
        var val = e.value; // get the value.
        localStorage.setItem(id, val);// Every time user writing something, the localStorage's value will override.
    }
    //get the saved value function - return the value of "v" from localStorage. 
    function getSavedValue  (v){
        if (!localStorage.getItem(v)) {
            return "";// You can change this to your defualt value. 
        }
        return localStorage.getItem(v);
    }
</script>
@endsection