<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductCollectionResource\Pages;
use App\Filament\Resources\ProductCollectionResource\RelationManagers;
use App\Models\ProductCollection;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Illuminate\Support\Str;

class ProductCollectionResource extends Resource
{
    protected static ?string $model = ProductCollection::class;

    protected static ?string $navigationIcon = 'heroicon-o-squares-2x2';

    protected static ?string $navigationGroup = 'Products';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make()
                    ->schema([
                        SpatieMediaLibraryFileUpload::make('image')
                            ->collection('image')
                            ->image()
                            ->imageEditor()
                            ->label('Görsel'),

                        Forms\Components\Tabs::make('Translations')
                            ->tabs([
                                Forms\Components\Tabs\Tab::make('Türkçe')
                                    ->schema([
                                        Forms\Components\TextInput::make('name.tr')
                                            ->required()
                                            ->label('Koleksiyon Adı')
                                            ->live(onBlur: true)
                                            ->afterStateUpdated(function ($state, $set) {
                                                if ($state) {
                                                    $set('slug.tr', Str::slug($state));
                                                }
                                            }),
                                        Forms\Components\TextInput::make('slug.tr')
                                            ->label('Slug')
                                            ->required()
                                            ->reactive()
                                            ->afterStateUpdated(function ($state, $set) {
                                                $set('slug.tr', STR::slug($state));
                                            }),
                                        Forms\Components\RichEditor::make('description.tr')

                                            ->label('Açıklama'),
                                        Forms\Components\RichEditor::make('content.tr')

                                            ->label('İçerik'),
                                    ]),
                                Forms\Components\Tabs\Tab::make('English')
                                    ->schema([
                                        Forms\Components\TextInput::make('name.en')
                                            ->label('Collection Name')
                                            ->live(onBlur: true)
                                            ->afterStateUpdated(function ($state, $set) {
                                                if ($state) {
                                                    $set('slug.en', Str::slug($state));
                                                }
                                            }),
                                        Forms\Components\TextInput::make('slug.en')
                                            ->label('Slug')
                                            ->required()
                                            ->reactive()
                                            ->afterStateUpdated(function ($state, $set) {
                                                $set('slug.en', STR::slug($state));
                                            }),
                                        Forms\Components\RichEditor::make('description.en')
                                            ->label('Description'),
                                        Forms\Components\RichEditor::make('content.en')
                                            ->label('Content'),
                                    ]),
                            ])
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                SpatieMediaLibraryImageColumn::make('image')
                    ->collection('image')
                    ->label('Görsel'),
                Tables\Columns\TextColumn::make('name.tr')
                    ->searchable()
                    ->sortable()
                    ->label('Koleksiyon Adı'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
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
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProductCollections::route('/'),
            'create' => Pages\CreateProductCollection::route('/create'),
            'edit' => Pages\EditProductCollection::route('/{record}/edit'),
        ];
    }
}
