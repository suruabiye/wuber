@extends('layouts.auth')

@section('content')
    <section class="section-padding p-t-0 signup-section user-access-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="account-access sign-up">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#" class="active"><h3>Download our driver app to use our platform</h3></a>
                            </li>
                        </ul>

                        <div class="tab-pane active">
                            <div class="form-group">
                                Click <a href="#">here</a> to download our app
                            </div>
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
