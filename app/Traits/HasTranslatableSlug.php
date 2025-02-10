<?php

namespace App\Traits;

trait HasTranslatableSlug
{

    public static function bootHasTranslatableSlug()
    {
        static::saving(function ($model) {
            $locales = config('app.available_locales', ['tr', 'en']);

            foreach ($locales as $locale) {
                $slug = $model->getTranslation('slug', $locale, false);
                if ($slug) {
                    $originalSlug = $slug;
                    $counter = 1;

                    while (static::where('id', '!=', $model->id)
                        ->whereRaw("JSON_EXTRACT(slug, '$." . $locale . "') = ?", [$slug])
                        ->exists()) {
                        $slug = $originalSlug . '-' . $counter;
                        $counter++;
                    }

                    $model->setTranslation('slug', $locale, $slug);
                }
            }
        });
    }
}
