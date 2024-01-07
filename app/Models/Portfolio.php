<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Portfolio extends Model
{
    use HasFactory, Sluggable;

    protected $table = 'portfolios';

    protected $casts = [
        'portfolio_categories' => 'array',
    ];

    protected $dates = ['year'];

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

    public function portfolioCategories()
    {
        return $this->belongsToMany(Category::class, 'portfolio_categories', 'portfolio_id', 'portfolio_category_id');
    }

    public function category()
    {
        return $this->belongsTo(PortfolioCategory::class, 'portfolio_categories');
    }
}
