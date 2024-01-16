<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class ThemeCategory extends Model
{
    use HasFactory, Sluggable;

    protected $table = 'theme_categories';

    protected $fillable = [
        'title', 'slug'
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function themes()
    {
        return $this->hasMany(Theme::class, 'theme_category', 'id');
    }
}
