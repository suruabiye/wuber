@extends('layouts.auth')

@section('content')
    <section class="section-padding p-t-0 signup-section user-access-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="account-access sign-up">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#" class="active"><h3>OTP Validation</h3></a>
                            </li>
                        </ul>

                        <div class="tab-pane active">
                            <form class="card p-2" action="{{route('validateOtp')}}" method="post">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="otp" id="otp" placeholder="" value="" required>
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-secondary">Submit</button>
                                    </div>
                                </div>
                                <div>Expire In <span id="timer"></span></div>
                                {!! csrf_field() !!}
                                <input id="uniqueId" name="uniqueId" type="hidden" value="{{$uniqueId}}">
                            </form>
                            <form class="needs-validation" action="{{route('resendOtp')}}" method="post" novalidate>
                                {!! csrf_field() !!}
                                <input id="uniqueId" name="uniqueId" type="hidden" value="{{$uniqueId}}">
                                <button class="btn btn-success" type="submit">Resend OTP</button>
                            </form>
                            <p class="acclink text-center">Go Back
                                <a href="{{ url('/') }}">  <b>Home
                                        <i class="icofont">double_right</i></b>
                                </a>
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script src="{{ asset('js/otp-timer.js')}}"></script>
@endsection
