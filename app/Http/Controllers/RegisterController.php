<?php

namespace App\Http\Controllers;

use App\Events\OTPVerification;
use Illuminate\Http\RedirectResponse;
use App\Models\User;
use App\Models\UserOTP;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class RegisterController extends Controller
{
    public function index()
    {
        return view('loginandregister/register', [
            'title_head' => 'Registrasi Teras Joglo'
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        // return $request;
        $validated = $request->validate([
            'name' => 'required|max:16',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|confirmed',
        ]);

        $validated['password'] = Hash::make($validated['password']);
        $validated['created_at'] = now();
        $validated['updated_at'] = now();

        $user = User::create($validated);



        $otp['user_id'] = $user->id;
        $otp['otp_code'] = rand(100000, 9999999);
        $otp['expired_at'] = now()->addMinutes(5);

        UserOTP::create($otp);

        event(new Registered($user));
        // event(new OTPVerification($user));

        return redirect()->route('otp-verification', $user->id);

        // $login['email'] = $validated['email'];
        // $login['password'] = $request->password;
        // Auth::attempt($login);
        // $request->session()->regenerate();
        // return redirect('/dashboard');
    }
}
