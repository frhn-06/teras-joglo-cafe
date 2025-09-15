<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Neew;

class NeewController
{
    public function index()
    {
        return view('front/neews', [
            'title_head' => 'Blog Teras Joglo',
            'title_hero' => 'JOGLO NEWS',
            'neews' => Neew::simplePaginate(12)
        ]);
    }

    public function detail(Neew $neew)
    {
        return view('front/neews-detail', [
            'title_head' => $neew->title,
            'neew' => $neew
        ]);
    }
}
