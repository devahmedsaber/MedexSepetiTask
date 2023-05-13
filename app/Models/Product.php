<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = ['category_id', 'title', 'description', 'price', 'image', 'tag', 'added_by', 'total_views',
        'is_promoted', 'status', 'created_at', 'updated_at'];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id', 'id')->withDefault();
    }
}
