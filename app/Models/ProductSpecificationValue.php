<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Translatable\HasTranslations;

class ProductSpecificationValue extends Model implements HasMedia
{
    use InteractsWithMedia,HasTranslations,HasRoles;

    public array $translatable = [
        'value'
    ];
    protected $fillable = [
        'specification_id',
        'value'
    ];

    protected $casts = [
        'value' => 'array'
    ];

    public function specification(): BelongsTo
    {
        return $this->belongsTo(ProductSpecification::class, 'specification_id');
    }

}
