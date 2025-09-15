<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Menu;
use Illuminate\Support\Facades\Auth;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\Redis;

class DashboardMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard/menu', [
            'title_head' => 'Menu Teras Joglo',
            'menus' => Menu::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard/menu-add', [
            'title_head' => 'Add Menu | Teras Joglo',
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:30',
            'category_id' => 'required',
            'img' => 'required|mimes:jpg,png,jpeg,webp',
            'is_diskon' => 'required'
        ]);
        $slug = SlugService::createSlug(Menu::class, 'slug', $validated['name']);
        $validated['created_at'] = now();
        $validated['updated_at'] = now();
        $validated['user_id'] = Auth::user()->id;
        $validated['img'] = $request->file('img')->store('menu-file');
        $validated['slug'] = $slug;

        Menu::create($validated);
        return redirect('/dashboard/menu')->with('successAdd', 'Data menu berhasil ditambahkan !');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $slug)
    {
        return view('dashboard/menu-edit', [
            'title_head' => 'Edit Menu | Teras Joglo',
            'menu' => Menu::where('slug', $slug)->first(),
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $slug)
    {
        $validated = $request->validate([
            'name' => 'required|max:30',
            'category_id' => 'required',
            'img' => 'mimes:jpg,png,jpeg,webp',
            'is_diskon' => 'required'
        ]);
        $validated['updated_at'] = now();

        if ($request->file('img')) {
            $validated['img'] = $request->file('img')->store('menu-file');
            Storage::delete($request->oldImg);
        }

        Menu::where('slug', $slug)->update($validated);
        return redirect('dashboard/menu')->with('successEdit', 'Data berhasil diubah !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $slug)
    {
        Menu::where('slug', $slug)->delete();
        return redirect('dashboard/menu')->with('successDelete', 'Data menu berhasil dihapus !');
    }



    // public function checkSlug(Request $request)
    // {
    //     $slug = SlugService::createSlug(Menu::class, 'slug', $request);
    //     return response()->json(['slug' => $slug]);
    // }
}
