<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class SiteSettings extends Settings
{
    public string $site_name;

    public ?string $site_description = null;

    public ?string $site_keywords = null;

    public ?string $site_logo = null;
    public ?string $site_white_logo = null;
    public ?string $site_title_separator = null;

    public ?string $site_author = null;

    public ?string $site_email = null;

    public ?string $site_phone = null;

    public ?array $site_social = [];

    public static function group(): string
    {
        return 'sites';
    }
}
