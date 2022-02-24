<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Currency;
use App\Models\Driver;
use App\Providers\RouteServiceProvider;
//use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:drivers'],
            'password' => ['required', 'string', 'min:4', 'confirmed:password_confirmation'],
            'phone_number' => ['required', 'unique:drivers'],
            'gender' => 'required',
            'date_of_birth' => 'required',
            'license' => 'required'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\Driver
     */
    protected function create(array $data)
    {
        //get country from code.
        $country_id = session('country');
        $country = Country::where('id', $country_id)->first();
        $phone_with_code = $country->phone_code.ltrim($data['phone_number'],'0');
        $currency = Currency::where('country_id',$country_id)->first();
        $driver = Driver::create([
            'country_id' => $country_id,
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'phone_number' => $data['phone_number'],
            'phone_with_code' => $phone_with_code,
            'date_of_birth' => $data['date_of_birth'],
            'gender' => $data['gender'],
            'licence_number' => $data['license'],
            'currency' => $currency->currency,
            'status' => 1
        ]);
        //Auth::login($driver);
        return $driver;
    }

    public function redirectPath()
    {
        return url('/home');
    }
}
