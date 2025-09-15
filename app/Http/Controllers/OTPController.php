<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserOTP;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\UseUse;

class OTPController extends Controller
{

    public function verification($user_id)
    {
        $user = User::find($user_id);
        return view('otp/otp-verification', compact('user'));
    }

    public function validation($user_id, Request $request)
    {
        $otp = UserOTP::where('otp_code', $request->otp_code)->first();
        if (!$otp) {
            return redirect()->back()->with('error_code', 'OTP CODE tidak ditemukan.');
        } else {
            $otpKadaluarsa = $otp->where('expired_at', '<=', now())->first();
            if ($otpKadaluarsa) {
                return redirect()->back()->with('error_kadaluarsa', 'OTP CODE sudah kadaluarsa.');
            }
        }

        $otp->user->email_verified_at = now();
        $otp->user->save();
        Auth::login($otp->user);
        $otp->delete();
        return redirect('/dashboard');
    }

    public function verification_ulang($user_id, Request $request)
    {
        UserOTP::where('expired_at', '<=', now())->delete();
        $user = User::where('id', $user_id)->first();
        $otp_baru['user_id'] = $user->id;
        $otp_baru['otp_code'] = rand(100000, 9999999);
        $otp_baru['expired_at'] = now()->addMinutes(5);
        UserOTP::create($otp_baru);

        event(new Registered($user));
        return view('otp/otp-verification', compact('user'));
    }
}
