<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Tabs\Tab;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Repeater;
use Illuminate\Support\Str;

class ProductResource extends Resource
{


    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-bag';

    protected static ?string $navigationGroup = 'Products';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Section::make('İçerik')
                    ->schema([
                        Tabs::make('Translations')
                            ->tabs([
                                Tab::make('Türkçe')
                                    ->schema([
                                        TextInput::make('name.tr')
                                            ->required()
                                            ->live(onBlur: true)
                                            ->label('Ürün Adı')
                                            ->afterStateUpdated(function ($state, $set) {
                                                if ($state) {
                                                    $set('slug.tr', Str::slug($state));
                                                }
                                            }),
                                        Textarea::make('description.tr')
                                            ->nullable()
                                            ->label('Açıklama'),
                                        RichEditor::make('content.tr')
                                            ->nullable()
                                            ->label('İçerik'),
                                    ]),
                                Tab::make('English')
                                    ->schema([
                                        TextInput::make('name.en')
                                            ->live(onBlur: true)
                                            ->label('Product Name')
                                            ->afterStateUpdated(function ($state, $set) {
                                                if ($state) {
                                                    $set('slug.en', Str::slug($state));
                                                }
                                            }),
                                        RichEditor::make('description.en')
                                            ->nullable()
                                            ->label('Description'),
                                        RichEditor::make('content.en')
                                            ->nullable()
                                            ->label('Content'),
                                    ]),
                            ])
                    ])->columnSpan(['lg' => 2]),

                Section::make('Bağlantılar')
                    ->schema([
                        TextInput::make('code')
                            ->required()
                            ->unique(ignoreRecord: true)
                            ->label('Ürün Kodu'),
                        Select::make('collections')
                            ->relationship('collections', 'name')
                            ->multiple()
                            ->preload()
                            ->searchable()
                            ->getOptionLabelFromRecordUsing(function ($record) {
                                return $record->getTranslation('name', app()->getLocale());
                            })
                            ->label('Koleksiyonlar'),
                        Tabs::make('Translations')
                            ->tabs([
                                Tab::make('Türkçe')
                                    ->schema([
                                        Forms\Components\TextInput::make('slug.tr')
                                            ->label('Slug')
                                            ->required()
                                            ->afterStateUpdated(function ($state, $set) {
                                                $set('slug.tr', STR::slug($state));
                                            }),
                                    ]),
                                Tab::make('English')
                                    ->schema([
                                        Forms\Components\TextInput::make('slug.en')
                                            ->label('Slug')
                                            ->required()
                                            ->afterStateUpdated(function ($state, $set) {
                                                $set('slug.en', STR::slug($state));
                                            }),
                                    ]),
                            ]),
                        Select::make('labels')
                            ->relationship('labels', 'name')
                            ->multiple()
                            ->preload()
                            ->searchable()
                            ->getOptionLabelFromRecordUsing(function ($record) {
                                return $record->getTranslation('name', app()->getLocale());
                            })
                            ->label('Etiketler'),
                        Repeater::make('attributes')
                            ->relationship()
                            ->collapsed()
                            ->schema([
                                SpatieMediaLibraryFileUpload::make('images')
                                    ->collection('images')
                                    ->image()
                                    ->imageEditor()
                                    ->reorderable()
                                    ->label('Görsel'),
                                Tabs::make('Translations')
                                    ->tabs([
                                        Tab::make('Türkçe')
                                            ->schema([
                                                TextInput::make('title.tr')
                                                    ->label('Özellik Adı')
                                                    ->required(),
                                            ]),
                                        Tab::make('English')
                                            ->schema([
                                                TextInput::make('title.en')
                                                    ->label('Attribute Name'),
                                            ]),
                                    ])
                            ])
                            ->columns(1)
                            ->label('Özellikler')
                            ->addActionLabel('Yeni Özellik Ekle')
                            ->collapsible()
                            ->defaultItems(0),
                    ])->columnSpan(['lg' => 1]),

                Section::make('Ürün Bilgileri')
                    ->schema([

                        SpatieMediaLibraryFileUpload::make('images')
                            ->collection('images')
                            ->multiple()
                            ->image()
                            ->imageEditor()
                            ->reorderable()
                            ->label('Görseller'),

                        SpatieMediaLibraryFileUpload::make('document')
                            ->collection('document')
                            ->acceptedFileTypes(['application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'])
                            ->maxSize(5120)
                            ->label('Dosya'),
                    ])->columnSpan(['lg' => 3]),

                Section::make('Ürün Spesifikasyonları')
                    ->schema([
                        Select::make('groups')
                            ->relationship('groups', 'name')
                            ->multiple()
                            ->preload()
                            ->searchable()
                            ->getOptionLabelFromRecordUsing(fn ($record) => $record->name ?? '')
                            ->label('Özellik Grupları'),
                    ])->columnSpan(['lg' => 3]),

            ])
            ->columns([
                'lg' => 3
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                SpatieMediaLibraryImageColumn::make('images')
                    ->collection('images')
                    ->label('Görseller')
                    ->toggleable(),

                TextColumn::make('code')
                    ->searchable()
                    ->sortable()
                    ->label('Ürün Kodu'),
                TextColumn::make('name')
                    ->searchable()
                    ->sortable()
                    ->label('Ürün Adı'),
                TextColumn::make('collections.name')
                    ->formatStateUsing(function ($state, $record) {
                        return $record->collections->pluck('name')->implode(', ');
                    })
                    ->badge()
                    ->label('Koleksiyonlar'),
                TextColumn::make('labels.name')
                    ->formatStateUsing(function ($state, $record) {
                        return $record->labels->pluck('name')->implode(', ');
                    })
                    ->badge()
                    ->label('Etiketler'),
                TextColumn::make('groups')
                    ->formatStateUsing(function ($state,$record) {
                        return $record->groups->pluck('name')->implode(', ');
                    })
                    ->badge()
                    ->label('Teknik Özellikler'),
                TextColumn::make('created_at')
                    ->dateTime('d.m.Y H:i')
                    ->sortable()
                    ->toggleable()
                    ->since()
                    ->label('Oluşturulma Tarihi'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [

        ];
    }



    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
