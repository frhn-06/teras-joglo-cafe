<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;
use App\Models\Category;
use Cviebrock\EloquentSluggable\Sluggable;

class Menu extends Model
{
    // untuk menulis lug secara otomatis
    use Sluggable;
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }


    protected $fillable = [
        'name',
        'img',
        'user_id',
        'category_id',
        'is_diskon',
        'slug'
    ];

    // untuk mengubah lazi loading menjadi eger loading karena akan ada relasi 
    protected $with = ['category'];

    // relasi ke user
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // relasi ke category
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function getRouteKey()
    {
        return 'slug';
    }
}

// App\Models\Menu::create([
//     'name' => 'kopi arabica',
//     'img' => '/img/menu/kopi.jpg',
//     'user_id' => 1,
//     'category_id' => 2,
// ]);
// App\Models\Menu::create([
//     'name' => 'matcha',
//     'img' => '/img/menu/matcha.jpg',
//     'user_id' => 1,
//     'category_id' => 3,
// ]);
// App\Models\Menu::create([
//     'name' => 'teh hijau',
//     'img' => '/img/menu/teh.jpg',
//     'user_id' => 1,
//     'category_id' => 4,
// ]);
// App\Models\Menu::create([
//     'name' => 'smoothies stroberry',
//     'img' => '/img/menu/smoothies.jpg',
//     'user_id' => 1,
//     'category_id' => 5,
// ]);
// App\Models\Menu::create([
//     'name' => 'frenchfries',
//     'img' => '/img/menu/frenchfries.jpg',
//     'user_id' => 1,
//     'category_id' => 6,
// ]);
// App\Models\Menu::create([
//     'name' => 'ayam bakar',
//     'img' => '/img/menu/ayambakar.jpg',
//     'user_id' => 1,
//     'category_id' => 7,
// ]);
// App\Models\Menu::create([
//     'name' => 'cake oreo',
//     'img' => '/img/menu/cake.jpg',
//     'user_id' => 1,
//     'category_id' => 8,
// ]);
// App\Models\Menu::create([
//     'name' => 'mocktail',
//     'img' => '/img/menu/mocktail.jpg',
//     'user_id' => 1,
//     'category_id' => 1,
// ]);
