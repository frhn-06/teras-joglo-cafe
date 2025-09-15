<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController
{
    public function index()
    {
        return view('front/about', [
            'title_head' => 'About Teras Joglo',
            'title_hero' => 'TERAS JOGLO',
            'about_hero' => About::about_hero(),
            'about_tentang' => About::about_tentang(),
            'about_mengapa' => About::about_mengapa(),
            'about_tujuan' => About::about_tujuan()
        ]);
    }
}
