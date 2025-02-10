<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Permission\Traits\HasRoles;

class ProductPriceRequest extends Model
{
    use HasRoles;
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
