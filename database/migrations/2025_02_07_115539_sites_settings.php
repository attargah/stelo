<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('sites.site_name', 'Stelo');
        $this->migrator->add('sites.site_description', 'Bu web sitesi Penta Yazılım tarafından kodlanmıştır.');
        $this->migrator->add('sites.site_keywords', '');
        $this->migrator->add('sites.site_title_separator', '-');
        $this->migrator->add('sites.site_white_logo', '');
        $this->migrator->add('sites.site_logo', '');
        $this->migrator->add('sites.site_author', 'Penta Yazılım');
        $this->migrator->add('sites.site_email', 'satis@pentayazilim.com');
        $this->migrator->add('sites.site_phone', '+908503026950');
        $this->migrator->add('sites.site_social', []);
    }

    public function down(): void
    {
        $this->migrator->deleteIfExists('sites.site_name',);
        $this->migrator->deleteIfExists('sites.site_description', );
        $this->migrator->deleteIfExists('sites.site_keywords');
        $this->migrator->deleteIfExists('sites.site_title_separator');
        $this->migrator->deleteIfExists('sites.site_white_logo');
        $this->migrator->deleteIfExists('sites.site_logo');
        $this->migrator->deleteIfExists('sites.site_author');
        $this->migrator->deleteIfExists('sites.site_email');
        $this->migrator->deleteIfExists('sites.site_phone');
        $this->migrator->deleteIfExists('sites.site_social');
    }
};
