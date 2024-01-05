<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Theme extends Model
{
    use HasFactory, Sluggable;

    protected $table = 'themes';

    protected $fillable = [
        'title', 'slug', 'url', 'image', 'theme_categories', 'theme_tags'
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
