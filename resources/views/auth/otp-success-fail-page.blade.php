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
                            @if(session('message'))
                                <p class="alert {{ session('alert-class', 'alert-info') }} d-block">{{ session('message') }}</p>
                            @endif
                            @if($validate['code'] === 200)
                                <span class="invalid-feedback d-block" role="alert">{{ $validate['message'] }}</span>
                            @elseif($validate['code'] === 203 || $validate['code'] === 404)
                                <span class="invalid-feedback d-block" role="alert">{{ $validate['message'] }}</span>
                                @if(isset($validate['resendId']))
                                    <form class="needs-validation" action="{{route('validateOtp')}}" method="post" novalidate>
                                        <div class="form-group">
                                            <label for="otp">Enter OTP</label>
                                            <input type="text" class="form-control" name="otp" id="otp" placeholder="" value="" required>
                                            <div class="invalid-feedback">
                                                Enter OTP.
                                            </div>
                                        </div>
                                        <hr class="mb-4">
                                        {!! csrf_field() !!}
                                        <input id="uniqueId" name="uniqueId" type="hidden" value="{{$validate['resendId']}}">
                                        <button class="btn btn-primary btn-lg btn-block" type="submit">Retry</button>
                                    </form>
                                @endif
                            @else
                                {{$resp[$validate['code']]}}
                            @endif
                            <p class="acclink text-center">Go Back
                                <a href="{{ route('home') }}">  <b>Home
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
