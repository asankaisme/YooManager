<?php

namespace App\Models;

use App\Models\Assets;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = [
        'category_name'
    ];

    public function Assets()
    {
        return $this->hasMany(Assets::class);
    }
}
