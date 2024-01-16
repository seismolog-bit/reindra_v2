<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Theme extends Model
{
    use HasFactory, Sluggable;

    protected $table = 'themes';

    protected $casts = [
        'theme_tags' => 'array',
    ];

    protected $fillable = [
        'title', 'slug', 'url', 'image', 'theme_category', 'theme_tags', 'description'
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function category()
    {
        return $this->belongsTo(ThemeCategory::class, 'theme_category', 'id');
    }

    public function themeTags()
    {
        return $this->belongsToMany(ThemeTag::class, 'theme_tags', 'theme_id', 'theme_tag_id');
    }
}
