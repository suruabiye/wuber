@extends('layouts.auth')
@section('content')
    <section class="section-padding p-t-0 signup-section user-access-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="account-access sign-up">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#" class="active"><h3>Become a Driver</h3></a>
                            </li>
                        </ul>

                        <div class="tab-pane active">
                            <form method="POST" class="needs-validation" action="{{route('requestForOtp')}}" method="post" novalidate class="user-access-form">
                                @csrf
                                @if(session('message'))
                                    <p class="alert {{ session('alert-class', 'alert-info') }}">{{ session('message') }}</p>
                                @endif
                                <div class="form-group">
                                    <select name="country" class="form-control @error('country') is-invalid @enderror">
                                        @foreach($countries as $country)
                                            <option value="{{ $country->id }}">{{ $country->short_name . ' (' . $country->phone_code . ')' }}</option>
                                        @endforeach
                                    </select>
                                    @error('country')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="text" name="phone_number" class="form-control @error('phone_number') is-invalid @enderror"
                                           value="{{ old('phone_number') }}" placeholder="Phone number">
                                    @error('phone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                                           value="{{ old('email') }}" placeholder="Email"  autocomplete="email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <input id="become-driver" name="request_type" type="hidden" value="become-driver">
                                <button type="submit" class="button button-dark btn-block">Verify</button>
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
