<?php

namespace App\Http\Controllers;

use App\Models\Neew;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class DashboardNeewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard/neew', [
            'title_head' => 'Teras Joglo News',
            'neews' => Neew::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard/neew-add', [
            'title_head' => 'Add News | Teras joglo'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:100',
            'img' => 'required|mimes:jpg,jpeg,png,webp',
            'body' => 'required'
        ]);
        $validated['slug'] = SlugService::createSlug(Neew::class, 'slug', $validated['title']);
        $validated['created_at'] = now();
        $validated['updated_at'] = now();
        $validated['author_id'] = Auth::id();
        $validated['img'] = $request->file('img')->store('news-file');

        Neew::create($validated);
        return redirect('/dashboard/news')->with('successAdd', 'Data News berhasil ditambahkan !');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        $neew = Neew::where('slug', $slug)->first();
        return view('dashboard/neew-show', [
            'title_head' => $neew->title . ' | Teras Joglo News',
            'neew' => $neew
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $slug)
    {
        return view('dashboard/neew-edit', [
            'title_head' => 'Edit News | Teras Joglo',
            'neew' => Neew::where('slug', $slug)->first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $slug)
    {
        $validated = $request->validate([
            'title' => 'required|max:100',
            'img' => 'mimes:jpg,jpeg,png,webp',
            'body' => 'required'
        ]);
        $validated['updated_at'] = now();
        if ($request->file('img')) {
            Storage::delete($request['old-img']);
            $validated['img'] = $request->file('img')->store('news-file');
        }

        Neew::where('slug', $slug)->update($validated);
        return redirect('dashboard/news')->with('successEdit', 'Data News berhasil diubah !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $slug)
    {
        Neew::where('slug', $slug)->delete();
        return redirect('dashboard/news')->with('successDelete', 'Data News Berhasil dihapus !');
    }



    // public function checkSlug(Request $request)
    // {
    //     $slug = SlugService::createSlug(Neew::class, 'slug', $request);
    //     return response()->json(['slug' => $slug]);
    // }
}
