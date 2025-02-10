<?php

namespace App\Models;

use App\Traits\HasTranslatableSlug;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Translatable\HasTranslations;

class ProductCollection extends Model implements HasMedia
{
    use InteractsWithMedia, HasTranslatableSlug, HasTranslations;

    public array $translatable = [
        'name',
        'description',
        'content',
        'slug'
    ];

    protected $fillable = [
        'name',
        'description',
        'content'
    ];

    protected $casts = [
        'slug' => 'array',
        'name' => 'array',
        'description' => 'array',
        'content' => 'array'
    ];

    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class, 'product_collection');
    }

}
