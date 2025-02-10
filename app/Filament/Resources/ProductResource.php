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

    public static function getNavigationGroup(): ?string
    {
        return __('panel.products');
    }
    public static function getNavigationLabel(): string
    {
        return __('panel.products');
    }

    public function getTitle(): string|\Illuminate\Contracts\Support\Htmlable
    {
        return __('panel.product');
    }
    public static function getModelLabel(): string
    {
        return  __('panel.product');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Section::make(__('panel.content'))
                    ->schema([
                        Tabs::make(__('panel.translations'))
                            ->tabs([
                                Tab::make(__('panel.turkish'))
                                    ->schema([
                                        TextInput::make('name.tr')
                                            ->required()
                                            ->live(onBlur: true)
                                            ->label(__('panel.product-name',locale: 'tr'))
                                            ->afterStateUpdated(function ($state, $set) {
                                                if ($state) {
                                                    $set('slug.tr', Str::slug($state));
                                                }
                                            }),
                                        Textarea::make('description.tr')
                                            ->nullable()
                                            ->label(__('panel.description',locale: 'tr')),
                                        RichEditor::make('content.tr')
                                            ->nullable()
                                            ->label(__('panel.content',locale: 'tr')),
                                    ]),
                                Tab::make(__('panel.english'))
                                    ->schema([
                                        TextInput::make('name.en')
                                            ->live(onBlur: true)
                                            ->label(__('panel.product-name',locale: 'en'))
                                            ->afterStateUpdated(function ($state, $set) {
                                                if ($state) {
                                                    $set('slug.en', Str::slug($state));
                                                }
                                            }),
                                        RichEditor::make('description.en')
                                            ->nullable()
                                            ->label(__('panel.description',locale: 'en')),
                                        RichEditor::make('content.en')
                                            ->nullable()
                                            ->label(__('panel.content',locale: 'en')),
                                    ]),
                            ])
                    ])->columnSpan(['lg' => 2]),

                Section::make(__('panel.connections'))
                    ->schema([
                        TextInput::make('code')
                            ->required()
                            ->unique(ignoreRecord: true)
                            ->label(__('panel.product-code')),
                        Forms\Components\Select::make('related_products')
                            ->label('Related Products')
                            ->multiple()
                            ->relationship('relatedProducts', 'name')
                            ->options(
                                Product::all()->pluck('name', 'id')
                            )
                            ->required(),
                        Select::make('collections')
                            ->relationship('collections', 'name')
                            ->multiple()
                            ->preload()
                            ->required()
                            ->searchable()
                            ->getOptionLabelFromRecordUsing(function ($record) {
                                return $record->name;
                            })
                            ->label(__('panel.collections')),
                        Tabs::make(__('panel.translations'))
                            ->tabs([
                                Tab::make(__('panel.turkish'))
                                    ->schema([
                                        Forms\Components\TextInput::make('slug.tr')
                                            ->label(__('panel.slug',locale: 'tr'))
                                            ->required()
                                            ->afterStateUpdated(function ($state, $set) {
                                                $set('slug.tr', STR::slug($state));
                                            }),
                                    ]),
                                Tab::make(__('panel.english'))
                                    ->schema([
                                        Forms\Components\TextInput::make('slug.en')
                                            ->label(__('panel.slug',locale: 'en'))
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
                            ->label(__('panel.labels')),
                        Repeater::make('attributes')
                            ->relationship()
                            ->collapsed()
                            ->schema([
                                SpatieMediaLibraryFileUpload::make('images')
                                    ->collection('images')
                                    ->image()
                                    ->imageEditor()
                                    ->reorderable()
                                    ->label(__('panel.image')),
                                Tabs::make(__('panel.translations'))
                                    ->tabs([
                                        Tab::make(__('panel.turkish'))
                                            ->schema([
                                                TextInput::make('title.tr')
                                                    ->label(__('panel.attributes-name',locale: 'tr'))
                                                    ->required(),
                                            ]),
                                        Tab::make(__('panel.english'))
                                            ->schema([
                                                TextInput::make('title.en')
                                                    ->label(__('panel.attributes-name',locale: 'en')),
                                            ]),
                                    ])
                            ])
                            ->columns(1)
                            ->label(__('panel.attributes'))
                            ->addActionLabel(__('panel.add-new-attribute'))
                            ->collapsible()
                            ->defaultItems(0),
                    ])->columnSpan(['lg' => 1]),

                Section::make(__('panel.product-informations'))
                    ->schema([

                        SpatieMediaLibraryFileUpload::make('images')
                            ->collection('images')
                            ->multiple()
                            ->image()
                            ->imageEditor()
                            ->reorderable()
                            ->label(__('panel.images')),

                        SpatieMediaLibraryFileUpload::make('document')
                            ->collection('document')
                            ->acceptedFileTypes(['application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'])
                            ->maxSize(5120)
                            ->label(__('panel.file')),
                    ])->columnSpan(['lg' => 3]),

                Section::make(__('panel.product-specifications'))
                    ->schema([
                        Select::make('groups')
                            ->relationship('groups', 'name')
                            ->multiple()
                            ->preload()
                            ->searchable()
                            ->getOptionLabelFromRecordUsing(fn ($record) => $record->name ?? '')
                            ->label(__('panel.specification-groups')),

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

                TextColumn::make('code')
                    ->searchable()
                    ->sortable()
                    ->label(__('panel.product-code')),
                TextColumn::make('name')
                    ->searchable()
                    ->sortable()
                    ->label(__('panel.product-name')),
                TextColumn::make('collections.name')
                    ->formatStateUsing(function ($state, $record) {
                        return $record->collections->pluck('name')->implode(', ');
                    })
                    ->badge()
                    ->label(__('panel.collections')),
                TextColumn::make('labels.name')
                    ->formatStateUsing(function ($state, $record) {
                        return $record->labels->pluck('name')->implode(', ');
                    })
                    ->badge()
                    ->label(__('panel.labels')),
                TextColumn::make('groups')
                    ->formatStateUsing(function ($state,$record) {
                        return $record->groups->pluck('name')->implode(', ');
                    })
                    ->badge()
                    ->label(__('panel.specification-groups')),
                TextColumn::make('created_at')
                    ->dateTime('d.m.Y H:i')
                    ->sortable()
                    ->toggleable()
                    ->since()
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
