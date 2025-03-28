<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'category',
        'image_path',
        'user_id',
        'slug'
    ];

    protected $dates = ['created_at'];

    // Relationship to user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Get the route key name (for using slugs in URLs)
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
