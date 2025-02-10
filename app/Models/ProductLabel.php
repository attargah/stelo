<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Translatable\HasTranslations;

class ProductLabel extends Model
{
    use HasTranslations,HasRoles;

    public array $translatable = [
        'name'
    ];

    protected $fillable = [
        'name',
        'color'
    ];



    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class, 'product_label');
    }
}
