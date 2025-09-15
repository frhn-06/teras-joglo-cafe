<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;


class CekAdminController extends Controller
{
    public function cek(Request $request)
    {
        $adminData = Admin::all();
        $password_in_data = $adminData[0]->password;
        if (Hash::check($request->password_admin, $password_in_data)) {
            return redirect('/dashboard');
        }
        return redirect($request->page);


        // return $request;
        // if ($request->password_admin == $adminData['password']) {
        //     return view('/dashboard');
        // }
    }
}
