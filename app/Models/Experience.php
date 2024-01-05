<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Experience extends Model
{
    use HasFactory, Sluggable;

    protected $table = 'experiences';

    protected $fillable = [
        'title', 'slug', 'type', 'description', 'start_year', 'end_year'
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
