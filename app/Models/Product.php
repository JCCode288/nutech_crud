<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "stock",
        "product_price",
        "image_path",
        "uploader_id",
        "category_id"
    ];

    public function category():BelongsTo
    {
            return $this->belongsTo(Category::class);
    }

    public function uploader():BelongsTo
    {
            return $this->belongsTo(User::class);
    }

    public function selling_price()
    {
            return ($this->product_price*0.3) + $this->product_price;
    }
}
