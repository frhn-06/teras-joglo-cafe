<?php

namespace App\Http\Controllers;

use App\Models\Neew;
use App\Models\Menu;
use Illuminate\Http\Request;

class DashboardController
{
    public function index()
    {
        return view('dashboard/home', [
            'title_head' => 'Dashboard Teras Joglo',
            'menus' => Menu::all()->count(),
            'neews' => Neew::all()->count()
        ]);
    }
}
