<?php

namespace App\Models;

use App\Traits\HasTranslatableSlug;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Translatable\HasTranslations;

class Product extends Model implements HasMedia
{
    use InteractsWithMedia, HasTranslatableSlug, HasTranslations,HasRoles;

    public array $translatable = [
        'name',
        'description',
        'content',
        'slug'
    ];

    protected $fillable = [
        'code',
        'name',
        'description',
        'content',
    ];

    protected $casts = [
        'slug' => 'array',
        'name' => 'array',
        'description' => 'array',
        'content' => 'array'
    ];

    public static function boot(): void
    {
        parent::boot();

        self::bootHasTranslatableSlug();
    }

    public function labels(): BelongsToMany
    {
        return $this->belongsToMany(ProductLabel::class, 'product_label');
    }

    public function collections(): BelongsToMany
    {
        return $this->belongsToMany(ProductCollection::class, 'product_collection');
    }

    public function specification_groups(): HasMany
    {
        return $this->hasMany(ProductSpecificationGroup::class, 'product_id');
    }

    public function groups(): BelongsToMany
    {
        return $this->belongsToMany(ProductSpecificationGroup::class, 'product_specification_group', 'product_id', 'specification_group_id')
            ->withTimestamps();
    }

    public function attributes(): HasMany
    {
        return $this->hasMany(ProductAttribute::class);
    }

    public function scopeBySlug($query, $slug)
    {
        return $query->whereJsonContains("slug->{$this->getLocale()}", $slug);
    }

    public function relatedProducts(): BelongsToMany
    {
        return $this->belongsToMany(Product::class, 'related_products', 'product_id', 'related_product_id');
    }
}
