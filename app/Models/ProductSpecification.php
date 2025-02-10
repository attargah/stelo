<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Translatable\HasTranslations;

class ProductSpecification extends Model
{
    use HasTranslations,HasRoles;

    public array $translatable = [
        'name'
    ];
    protected $fillable = [
        'specification_group_id',
        'name',
        'type',
        'options',
        'sort'
    ];

    protected $casts = [
        'name' => 'array',
        'options' => 'array',
        'sort' => 'integer'
    ];

    public function group(): BelongsTo
    {
        return $this->belongsTo(ProductSpecificationGroup::class, 'specification_group_id');
    }

    public function values(): HasMany
    {
        return $this->hasMany(ProductSpecificationValue::class, 'specification_id');
    }
}
