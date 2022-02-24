@extends('layouts.auth')

@section('content')
    <section class="section-padding p-t-0 signup-section user-access-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="account-access sign-up">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#" class="active"><h3>Sign up to Ride</h3></a>
                            </li>
                        </ul>

                        <div class="tab-pane active">
                            <form method="POST" action="{{ route('register') }}" class="user-access-form">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}"
                                                   aria-describedby="first_name" placeholder="First Name" autocomplete="first_name" autofocus>
                                            @error('first_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" name="last_name" class="form-control @error('last_name') is-invalid @enderror" id="last_name"
                                                   aria-describedby="last_name" value="{{ old('last_name') }}" placeholder="Last Name">
                                            @error('last_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                                               name="password" placeholder="Password" autocomplete="password">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="password" class="form-control" placeholder="Confirm password"
                                               name="password_confirmation" autocomplete="password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" value="{{ session('email') }}" disabled autocomplete="email">
                                    <input type="hidden" name="email" class="form-control @error('email') is-invalid @enderror"
                                           value="{{ old('email', session('email')) }}" placeholder="Email"  autocomplete="email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" value="{{ session('phone') }}" disabled>
                                    <input type="hidden" name="phone_number" class="form-control @error('phone_number') is-invalid @enderror"
                                           value="{{ old('phone', session('phone')) }}">
                                    @error('phone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="input-group date" data-provide="datepicker">
                                    <input type="date" name="date_of_birth" class="form-control @error('date_of_birth') is-invalid @enderror"
                                        value="{{ old('date_of_birth') }}" />
                                    @error('date_of_birth')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <select name="gender" class="form-control @error('gender') is-invalid @enderror">
                                        <option value="1">Male</option>
                                        <option value="2">Female</option>
                                    </select>
                                    @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="text" name="license" class="form-control @error('licence') is-invalid @enderror"
                                           value="{{ old('license') }}" placeholder="License Number">
                                    @error('licence')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <button type="submit" class="button button-dark btn-block">Sign in Now</button>
                            </form>
                            <p class="acclink text-center">Go Back
                                <a href="index.html">  <b>Home
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
    <script>
        $('.datepicker').datepicker({
            format: 'mm/dd/yyyy',
            startDate: '-3d'
        });
    </script>
@endsection
