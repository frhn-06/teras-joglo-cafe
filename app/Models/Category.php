<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;


class Category extends Model
{
    protected $fillable = [
        'name',
        'slug'
    ];

    // relasi 
    public function menus(): HasMany
    {
        return $this->hasMany(Menu::class, 'category_id');
    }
}


// App\Models\Category::create([
//     'name' => 'Specials',
//     'slug' => Str::slug('Specials')
// ]);
// App\Models\Category::create([
//     'name' => 'Coffee',
//     'slug' => Str::slug('Coffee')
// ]);
// App\Models\Category::create([
//     'name' => 'Non-Coffee',
//     'slug' => Str::slug('Non-Coffee')
// ]);
// App\Models\Category::create([
//     'name' => 'Tea',
//     'slug' => Str::slug('Tea')
// ]);
// App\Models\Category::create([
//     'name' => 'Juices & Smoothies',
//     'slug' => Str::slug('Juices & Smoothies')
// ]);
// App\Models\Category::create([
//     'name' => 'Snacks',
//     'slug' => Str::slug('Snacks')
// ]);
// App\Models\Category::create([
//     'name' => 'Main Course',
//     'slug' => Str::slug('Main Course')
// ]);
// App\Models\Category::create([
//     'name' => 'Desserts',
//     'slug' => Str::slug('Desserts')
// ]);
