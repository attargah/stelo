<?php

namespace App\Filament\Pages;

use App\Settings\SiteSettings;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Pages\SettingsPage;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;

class PageSettings extends SettingsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';
    protected static ?string $navigationGroup = 'Settings';
    protected static ?string $title = 'Site Ayarları';
    protected static ?string $navigationLabel = 'Site Ayarları';
    protected static string $settings = SiteSettings::class;

    protected function getSettingsClass(): string
    {
        return SiteSettings::class;
    }

    public static function getNavigationGroup(): ?string
    {
        return __('panel.settings');
    }

    public static function getNavigationLabel(): string
    {
        return __('panel.site-settings');
    }

    public function getTitle(): string|\Illuminate\Contracts\Support\Htmlable
    {
        return __('panel.site-settings');
    }


    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make(__('panel.general-settings'))
                    ->schema([
                        TextInput::make('site_name')
                            ->required()
                            ->label(__('panel.site-name')),

                        Textarea::make('site_description')
                            ->label(__('panel.site-description')),

                        Textarea::make('site_keywords')
                            ->label(__('panel.site-keywords'))
                            ->helperText(__('panel.site-keywords-placeholder')),

                        TextInput::make('site_title_separator')
                            ->label(__('panel.site-title-separator'))
                            ->placeholder(__('panel.site-title-separator-placeholder'))
                            ->maxLength(5),
                    ]),

                Section::make(__('panel.logo-settings'))
                    ->schema([
                        FileUpload::make('site_logo')
                            ->image()
                            ->imageEditor()
                            ->directory('site-settings')
                            ->visibility('public')
                            ->preserveFilenames()
                            ->maxSize(5120)
                            ->label(__('panel.site-logo')),

                        FileUpload::make('site_white_logo')
                            ->image()
                            ->imageEditor()
                            ->directory('site-settings')
                            ->visibility('public')
                            ->preserveFilenames()
                            ->maxSize(5120)
                            ->label(__('panel.site-white-logo')),
                    ]),

                Section::make(__('panel.contact-informations'))
                    ->schema([
                        TextInput::make('site_author')
                            ->label(__('panel.site_author')),

                        TextInput::make('site_email')
                            ->email()
                            ->label(__('panel.site_email')),

                        TextInput::make('site_phone')
                            ->tel()
                            ->label(__('panel.site_phone')),
                    ]),

                Section::make(__('panel.social-media'))
                    ->schema([
                        Repeater::make('site_social')
                            ->schema([
                                TextInput::make('platform')
                                    ->required()
                                    ->label(__('panel.platform'))
                                    ->datalist([
                                        'Facebook',
                                        'Twitter',
                                        'Instagram',
                                        'LinkedIn',
                                        'YouTube',
                                    ]),

                                TextInput::make('url')
                                    ->required()
                                    ->url()
                                    ->label(__('panel.url')),

                                TextInput::make('icon')
                                    ->label(__('panel.icon'))
                                    ->placeholder('fab fa-facebook')
                            ])
                            ->columns(3)
                            ->defaultItems(0)
                            ->reorderableWithButtons()
                            ->collapsible()
                            ->label(__('panel.social_media_accounts'))
                            ->addActionLabel(__('panel.add-new-account')),
                    ]),
            ]);
    }
}
