<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;

class Assets extends Model
{
    protected $table = 'assets';

    protected $fillable = [
        'asset_name',
        'asset_description',
        'serial_no',
        'fa_no',
        'category_id',
        'isActive'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
