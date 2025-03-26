<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CareGuide extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'content',
        'image_path',
        'category'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
