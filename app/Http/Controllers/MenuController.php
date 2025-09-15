<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Models\Menu;

class MenuController extends Controller
{
    // public function index()
    // {
    //     return view('front/menu', [
    //         'title_head' => 'Menu Teras Joglo',
    //         'title_hero' => 'TERAS JOGLO',
    //         'menus' => Menu::all(),
    //         'categories' => Category::all()
    //     ]);
    // }


    // public function detail(Category $category)
    // {
    //     return view('front/menu', [
    //         'title_head' => 'Menu Teras Joglo ' . $category->name,
    //         'title_hero' => 'TERAS JOGLO',
    //         'menus' => Menu::all(),
    //         'put_menu_in_here' => $category->menus,
    //         'categories' => Category::all()
    //     ]);
    // }


    // public function filter(Request $request)
    // {
    //     return response()->json(['hasil' => $request]);
    // }


    public function index(Request $request)
    {
        $requestCategory = $request->query('category');

        if ($request->ajax()) {
            if (!$requestCategory) {
                $menus = Menu::all();
            } else {
                if ($requestCategory == 'diskon') {
                    $menus = Menu::where('is_diskon', true)->get();
                } else {
                    $category = Category::where('slug', $requestCategory)->first();
                    $menus = $category ? Menu::where('category_id', $category->id)->get() : collect();
                }
            }
            return response()->json(['hasil' => $menus]);
        }

        $menus =  Menu::all();
        return view('front/menu', [
            'title_head' => 'Menu Teras Joglo',
            'title_hero' => 'TERAS JOGLO',
            'menus' => $menus,
            'categories' => Category::all()
        ]);
    }
}
