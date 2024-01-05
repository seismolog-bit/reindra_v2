<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Portfolio extends Model
{
    use HasFactory, Sluggable;

    protected $table = 'portfolios';

    protected $fillable = [
        'title', 'slug', 'image', 'description', 'year', 'tech', 'portfolio_categories', 'views', 'url'
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
