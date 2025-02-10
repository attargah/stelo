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

    public static function getNavigationGroup(): ?string
    {
        return __('panel.products');
    }

    public static function getNavigationLabel(): string
    {
        return __('panel.product-collections');
    }

    public function getTitle(): string|\Illuminate\Contracts\Support\Htmlable
    {
        return __('panel.product-collection');
    }
    public static function getModelLabel(): string
    {
        return  __('panel.product-collection');
    }

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
                            ->label(__('panel.image')),

                        Forms\Components\Tabs::make(__('panel.translations'))
                            ->tabs([
                                Forms\Components\Tabs\Tab::make(__('panel.turkish'))
                                    ->schema([
                                        Forms\Components\TextInput::make('name.tr')
                                            ->required()
                                            ->label(__('panel.collection-name',locale: 'tr'))
                                            ->live(onBlur: true)
                                            ->afterStateUpdated(function ($state, $set) {
                                                if ($state) {
                                                    $set('slug.tr', Str::slug($state));
                                                }
                                            }),
                                        Forms\Components\TextInput::make('slug.tr')
                                            ->label(__('panel.slug',locale: 'tr'))
                                            ->required()
                                            ->reactive()
                                            ->afterStateUpdated(function ($state, $set) {
                                                $set('slug.tr', STR::slug($state));
                                            }),
                                        Forms\Components\Textarea::make('description.tr')

                                            ->label(__('panel.description',locale: 'tr')),
                                        Forms\Components\RichEditor::make('content.tr')

                                            ->label(__('panel.content',locale: 'tr')),
                                    ]),
                                Forms\Components\Tabs\Tab::make(__('panel.english'))
                                    ->schema([
                                        Forms\Components\TextInput::make('name.en')
                                            ->label(__('panel.collection-name', locale: 'tr'))
                                            ->live(onBlur: true)
                                            ->afterStateUpdated(function ($state, $set) {
                                                if ($state) {
                                                    $set('slug.en', Str::slug($state));
                                                }
                                            }),
                                        Forms\Components\TextInput::make('slug.en')
                                            ->label(__('panel.slug', locale: 'tr'))
                                            ->required()
                                            ->reactive()
                                            ->afterStateUpdated(function ($state, $set) {
                                                $set('slug.en', STR::slug($state));
                                            }),
                                        Forms\Components\RichEditor::make('description.en')
                                            ->label(__('panel.description', locale: 'tr')),
                                        Forms\Components\RichEditor::make('content.en')
                                            ->label(__('panel.content', locale: 'tr')),
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
                    ->label(__('panel.image')),
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable()
                    ->label(__('panel.collection-name')),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->label(__('panel.created_at')),
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
