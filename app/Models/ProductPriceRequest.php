<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductPriceRequest extends Model
{

    protected $fillable = [
        'product_id',
        'name',
        'phone',
        'email',
        'note',
        'ip_address',
    ];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class,'product_id');
    }


}
