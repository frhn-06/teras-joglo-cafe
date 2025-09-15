<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Neew;
use Illuminate\Http\Request;

class HomeController
{
    public function index()
    {
        return view('front/home', [
            'title_head' => 'Teras Joglo Cafe\'',
            'title_hero' => 'TERAS JOGLO',
            'body_hero' => 'Dari aroma Kopi Tradisional hingga suasana Joglo, kami hadirkan pengalaman ngopi yang berbeda.',
            'about_in_home' => About::about_hero(),
            'neews_in_home' => Neew::all()
        ]);
    }
}
