<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Translatable\HasTranslations;

class ProductSpecificationGroup extends Model
{
    use HasTranslations,HasRoles;

    public array $translatable = [
        'name'
    ];

    protected $fillable = [
        'name',
        'sort'
    ];

    protected $casts = [
        'name' => 'array',
        'sort' => 'integer'
    ];

    public function specifications(): HasMany
    {
        return $this->hasMany(ProductSpecification::class, 'specification_group_id');
    }
}
