<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DIYToy extends Model
{
    protected $table = 'diy_toys';
    protected $fillable = ['name', 'description', 'image'];
}
