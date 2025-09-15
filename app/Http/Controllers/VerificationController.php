<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class VerificationController extends Controller
{
    public function verification()
    {
        return view('verification/verification', [
            'title_head' => 'verifikasi',
        ]);
    }

    public function verification_validator(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required|min:5|confirmed',
        ]);

        $tuju = User::where('email', $validated['email'])->first();
        if (!$tuju) {
            return redirect()->back()->with('errorEmail', 'email tidak ada / belum terdaftar !');
        }

        $tuju->update(['password' => Hash::make($validated['password'])]);
        return redirect('/login')->with('successUpdatePassword', 'password berhasil diubah !');
    }
}
