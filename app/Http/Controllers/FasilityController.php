<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FasilityController
{
    public function index()
    {
        return view('front/fasilities', [
            'title_head' => 'Fasilitas Teras Joglo',
            'title_hero' => 'TERAS JOGLO'
        ]);
    }
}
