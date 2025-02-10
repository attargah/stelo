<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Translatable\HasTranslations;

class ProductAttribute extends Model implements HasMedia
{
    use InteractsWithMedia, HasTranslations,HasRoles;

    public array $translatable = [
        'title',
    ];


    protected $fillable = [
        'product_id',
        'title',
    ];

    protected $casts = [
        'title' => 'array',
    ];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
