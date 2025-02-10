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



    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Genel Ayarlar')
                    ->schema([
                        TextInput::make('site_name')
                            ->required()
                            ->label('Site Adı'),

                        Textarea::make('site_description')
                            ->label('Site Açıklaması'),

                        Textarea::make('site_keywords')
                            ->label('Site Anahtar Kelimeleri')
                            ->helperText('Virgül ile ayırarak yazınız'),

                        TextInput::make('site_title_separator')
                            ->label('Sayfa Başlığı Ayırıcı')
                            ->placeholder('Örnek: |, -, >')
                            ->maxLength(5),
                    ]),

                Section::make('Logo Ayarları')
                    ->schema([
                        FileUpload::make('site_logo')
                            ->image()
                            ->imageEditor()
                            ->directory('site-settings')
                            ->visibility('public')
                            ->preserveFilenames()
                            ->maxSize(5120)
                            ->label('Site Logo'),

                        FileUpload::make('site_white_logo')
                            ->image()
                            ->imageEditor()
                            ->directory('site-settings')
                            ->visibility('public')
                            ->preserveFilenames()
                            ->maxSize(5120)
                            ->label('Site Beyaz Logo'),
                    ]),

                Section::make('İletişim Bilgileri')
                    ->schema([
                        TextInput::make('site_author')
                            ->label('Site Sahibi'),

                        TextInput::make('site_email')
                            ->email()
                            ->label('E-posta Adresi'),

                        TextInput::make('site_phone')
                            ->tel()
                            ->label('Telefon Numarası'),
                    ]),

                Section::make('Sosyal Medya')
                    ->schema([
                        Repeater::make('site_social')
                            ->schema([
                                TextInput::make('platform')
                                    ->required()
                                    ->label('Platform')
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
                                    ->label('URL'),

                                TextInput::make('icon')
                                    ->label('İkon')
                                    ->placeholder('fab fa-facebook')
                            ])
                            ->columns(3)
                            ->defaultItems(0)
                            ->reorderableWithButtons()
                            ->collapsible()
                            ->label('Sosyal Medya Hesapları')
                            ->addActionLabel('Yeni Hesap Ekle'),
                    ]),
            ]);
    }
}
