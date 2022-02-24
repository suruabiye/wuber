<?php

namespace App\Http\Controllers;

use Ferdous\OtpValidator\Object\OtpRequestObject;
use Ferdous\OtpValidator\Object\OtpValidateRequestObject;
use Ferdous\OtpValidator\OtpValidator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OtpController extends Controller
{
    public function confirmationPage()
    {
        return view('product.checkout-page');
    }

    public function requestForOtp(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'string', 'email', 'max:255', 'unique:drivers'],
            'phone_number' => ['required', 'unique:drivers'],
        ]);
        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $client_req = '007';
        $number = $request->input('phone_number');
        $purchase_type = $request->input('request_type');
        $email = $request->input('email');
        $country = $request->input('country');

        $otp_req = OtpValidator::requestOtp(
            new OtpRequestObject($client_req, $purchase_type, $number, $email)
        );

        if($otp_req['code'] === 201){
            // Store user data in global session variable to be retrieved later
            session([
                'email' => $email,
                'country' => $country,
                'phone' => $number
            ]);

            return view('auth.otp-page')->with($otp_req);
        }

        return redirect()->back()->withInput()->with([
            'message' => $otp_req['message']
        ]);
    }

    public function validateOtp(Request $request)
    {
        $uniqId = $request->input('uniqueId');
        $otp = $request->input('otp');
        $data['resp'] = [
            200 => 'Order Confirmed !!!',
            204 => 'Too Many Try, are you human !!!',
            203 => 'Invalid OTP given',
            404 => 'Request not found'
        ];
        $data['validate'] =  OtpValidator::validateOtp(
            new OtpValidateRequestObject($uniqId,$otp)
        );

        if($data['validate']['code'] === 200){
            // Retrieve user data stored in session
            $email = session('email');
            $phone = session('phone');
            return redirect()->route('register');
        }

        return redirect()->back()->withInput()->with([
            'message' => $data['validate']['message']
        ]);
//        return view('auth.otp-success-fail-page')->with($data)->with([
//            'message' => $data['validate']['message']
//        ])->with(compact('uniqId'));

    }

    public function resendOtp(Request $request)
    {
        $uniqueId = $request->input('uniqueId');
        $otp_req = OtpValidator::resendOtp($uniqueId);

        if(isset($otp_req['code']) && $otp_req['code'] === 201){
            return view('auth.otp-page')->with($otp_req);
        }

        return redirect()->back()->withInput()->with([
            'message' => $otp_req['message']
        ]);
    }
}
