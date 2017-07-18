@extends('layouts.auth')

@section('content')
<div class="container">



    <div class="middle-box text-center loginscreen   animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">Investor DNA</h1>

            </div>
            <h3>Create an account</h3>
            <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}


                <div class="form-group">
                        <select class="form-control" id="role" name="role" onchange="role_changed(this);">
                            {{--<option value="">Select Account Type</option>--}}
                            <option value="advisor">Advisor</option>

                            @if (old('role') == 'firm')
                                <option value="firm" selected>Firm</option>
                            @else
                                <option value="firm">Firm</option>
                            @endif
                        </select>
                </div>


                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

                        <input id="name" placeholder="Name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                        @if ($errors->has('name'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                        @endif
                </div>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                        <input id="email" placeholder="Email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                </div>

                <div class="form-group{{ $errors->has('mobile_number') ? ' has-error' : '' }}">

                        <input id="mobile_number" placeholder="Mobile" type="text" class="form-control" name="mobile_number" value="{{ old('mobile_number') }}" required>

                        @if ($errors->has('mobile_number'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('mobile_number') }}</strong>
                                    </span>
                        @endif
                </div>

                <div class="form-group{{ $errors->has('company_position') ? ' has-error' : '' }}">

                        <input id="company_position" placeholder="Company Position" type="text" class="form-control" name="company_position" value="{{ old('company_position') }}" required>

                        @if ($errors->has('company_position'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('company_position') }}</strong>
                                    </span>
                        @endif
                </div>



                <div id="div_advisor">

                    <div class="form-group{{ $errors->has('firm_code') && old('role') == 'advisor' ? ' has-error' : '' }}">

                            <input id="firm_code" placeholder="Firm Code" type="text" class="form-control" name="firm_code" value="{{ old('firm_code') }}" required>

                            @if ($errors->has('firm_code') && old('role') == 'advisor')
                                <span class="help-block">
                                            <strong>{{ $errors->first('firm_code') }}</strong>
                                        </span>
                            @endif
                    </div>

                </div>

                <div id="div_firm" style="display:none">

                    <div class="form-group{{ $errors->has('firm_name') && old('role') == 'firm' ? ' has-error' : '' }}">

                            <input id="firm_name" placeholder="Firm Name" type="text" class="form-control" name="firm_name" value="{{ old('firm_name') }}">

                            @if ($errors->has('firm_name') && old('role') == 'firm')
                                <span class="help-block">
                                            <strong>{{ $errors->first('firm_name') }}</strong>
                                        </span>
                            @endif
                    </div>

                    <div class="form-group{{ $errors->has('address') && old('role') == 'firm' ? ' has-error' : '' }}">

                            <input id="address" placeholder="Address" type="text" class="form-control" name="address" value="{{ old('address') }}">

                            @if ($errors->has('address') && old('role') == 'firm')
                                <span class="help-block">
                                            <strong>{{ $errors->first('address') }}</strong>
                                        </span>
                            @endif
                    </div>

                    <div class="form-group{{ $errors->has('suburb') && old('role') == 'firm' ? ' has-error' : '' }}">

                            <input id="suburb" placeholder="Suburb" type="text" class="form-control" name="suburb" value="{{ old('suburb') }}">

                            @if ($errors->has('suburb') && old('role') == 'firm')
                                <span class="help-block">
                                            <strong>{{ $errors->first('suburb') }}</strong>
                                        </span>
                            @endif
                    </div>

                    <div class="form-group{{ $errors->has('state') && old('role') == 'firm' ? ' has-error' : '' }}">

                            <input id="state" placeholder="State" type="text" class="form-control" name="state" value="{{ old('state') }}">

                            @if ($errors->has('state') && old('role') == 'firm')
                                <span class="help-block">
                                            <strong>{{ $errors->first('state') }}</strong>
                                        </span>
                            @endif
                    </div>

                    <div class="form-group{{ $errors->has('postcode') && old('role') == 'firm' ? ' has-error' : '' }}">

                            <input id="postcode" placeholder="Postcode" type="text" class="form-control" name="postcode" value="{{ old('postcode') }}">

                            @if ($errors->has('postcode') && old('role') == 'firm')
                                <span class="help-block">
                                            <strong>{{ $errors->first('postcode') }}</strong>
                                        </span>
                            @endif
                    </div>

                    <div class="form-group{{ $errors->has('firm_website') && old('role') == 'firm' ? ' has-error' : '' }}">

                            <input id="firm_website" placeholder="Website" type="text" class="form-control" name="firm_website" value="{{ old('firm_website') }}">

                            @if ($errors->has('firm_website') && old('role') == 'firm')
                                <span class="help-block">
                                            <strong>{{ $errors->first('firm_website') }}</strong>
                                        </span>
                            @endif
                    </div>

                    <div class="form-group{{ $errors->has('firm_phone') && old('role') == 'firm' ? ' has-error' : '' }}">

                            <input id="firm_phone" placeholder="Firm Phone Number" type="text" class="form-control" name="firm_phone" value="{{ old('firm_phone') }}">

                            @if ($errors->has('firm_phone') && old('role') == 'firm')
                                <span class="help-block">
                                            <strong>{{ $errors->first('firm_phone') }}</strong>
                                        </span>
                            @endif
                    </div>

                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                        <input id="password" placeholder="Password" type="password" class="form-control" name="password" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                </div>

                <div class="form-group">

                        <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" required>
                </div>




                <div class="form-group">
                    <div class="checkbox i-checks"><label> <input type="checkbox"><i></i>I Agree to the Terms & Conditions </label></div>
                </div>





                <button type="submit" class="btn btn-primary block full-width m-b">Register</button>

                <p class="text-muted text-center"><small>Already have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="{{ url('/login') }}">Login</a>


            </form>
            <script>
                @if (old('role') == 'firm')
                    show_firm();
                @endif
            </script>
            <p class="m-t"> <small>Investor DNA &copy; 2017</small> </p>
        </div>
    </div>

</div>
@endsection