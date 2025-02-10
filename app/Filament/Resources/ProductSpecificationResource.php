<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductSpecificationResource\Pages;
use App\Filament\Resources\ProductSpecificationResource\RelationManagers;
use App\Models\ProductSpecification;
use Filament\Forms;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;

class ProductSpecificationResource extends Resource
{
    protected static ?string $model = ProductSpecification::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-list';

    protected static ?string $navigationGroup = 'Products';

    public static function getNavigationGroup(): ?string
    {
        return __('panel.products');
    }

    public static function getNavigationLabel(): string
    {
        return __('panel.product-specifications');
    }

    public function getTitle(): string|\Illuminate\Contracts\Support\Htmlable
    {
        return __('panel.product-specification');
    }
    public static function getModelLabel(): string
    {
        return  __('panel.product-specification');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make()
                    ->schema([
                        Forms\Components\Select::make('specification_group_id')
                            ->relationship('group', 'name')
                            ->required()
                            ->preload()
                            ->searchable()
                            ->getOptionLabelFromRecordUsing(fn ($record) => $record->name ?? '')
                            ->label(__('panel.specification-groups'))
                            ->createOptionForm([
                                Forms\Components\Tabs::make(__('panel.translations'))
                                    ->tabs([
                                        Forms\Components\Tabs\Tab::make(__('panel.turkish'))
                                            ->schema([
                                                Forms\Components\TextInput::make('name.tr')
                                                    ->required()
                                                    ->label(__('panel.group-name',locale: 'tr')),
                                            ]),
                                        Forms\Components\Tabs\Tab::make(__('panel.english'))
                                            ->schema([
                                                Forms\Components\TextInput::make('name.en')
                                                    ->label(__('panel.group-name',locale: 'en')),
                                            ]),
                                    ]),
                                Forms\Components\TextInput::make('sort')
                                    ->numeric()
                                    ->default(0)
                                    ->label(__('panel.sort')),
                            ]),

                        Forms\Components\Tabs::make(__('panel.translations'))
                            ->tabs([
                                Forms\Components\Tabs\Tab::make(__('panel.turkish'))
                                    ->schema([
                                        Forms\Components\TextInput::make('name.tr')
                                            ->required()
                                            ->label(__('panel.attributes-name',locale: 'tr')),
                                    ]),
                                Forms\Components\Tabs\Tab::make('English')
                                    ->schema([
                                        Forms\Components\TextInput::make('name.en')
                                            ->label(__('panel.attributes-name',locale: 'en')),
                                    ]),
                            ]),

                        Forms\Components\Select::make('type')
                            ->options([
                                'text' => __('panel.text'),
                                'textarea' => __('panel.textarea'),
                                'select' => __('panel.select'),
                                'multiselect' => __('panel.multiselect'),
                                'list' => __('panel.list'),
                                'table' => __('panel.table'),
                                'content' => __('panel.content'),
                            ])
                            ->required()
                            ->live()
                            ->label(__('panel.type')),

                        Forms\Components\Section::make(__('values'))
                            ->schema(fn (Forms\Get $get) => match ($get('type')) {
                                'text' => [
                                    Forms\Components\Repeater::make('values')
                                        ->relationship()
                                        ->schema([
                                            Forms\Components\Tabs::make(__('panel.translations'))
                                                ->tabs([
                                                    Forms\Components\Tabs\Tab::make(__('panel.turkish'))
                                                        ->schema([
                                                            Forms\Components\TextInput::make('value.tr')
                                                                ->placeholder(__('panel.value-exp',locale: 'tr'))
                                                                ->label(__('panel.example-value',locale: 'tr')),
                                                        ]),
                                                    Forms\Components\Tabs\Tab::make(__('panel.english'))
                                                        ->schema([
                                                            Forms\Components\TextInput::make('value.en')
                                                                ->placeholder(__('panel.value-exp',locale: 'en'))
                                                                ->label(__('panel.example-value',locale: 'en')),
                                                        ]),
                                                ]),
                                        ])
                                        ->columns(1)
                                        ->maxItems(1)
                                        ->label(__('panel.example-value')),
                                ],
                                'textarea' => [
                                    Forms\Components\Repeater::make('values')
                                        ->relationship()
                                        ->schema([
                                            Forms\Components\Tabs::make(__('panel.translations'))
                                                ->tabs([
                                                    Forms\Components\Tabs\Tab::make(__('panel.turkish'))
                                                        ->schema([
                                                            Forms\Components\Textarea::make('value.tr')
                                                                ->placeholder(__('panel.textarea-exp',locale: 'tr'))
                                                                ->label(__('panel.example-value',locale: 'tr')),
                                                        ]),
                                                    Forms\Components\Tabs\Tab::make(__('panel.english'))
                                                        ->schema([
                                                            Forms\Components\Textarea::make('value.en')
                                                                ->placeholder(__('panel.textarea-exp',locale: 'en'))
                                                                ->label(__('panel.example-value',locale: 'en')),
                                                        ]),
                                                ]),
                                        ])
                                        ->columns(1)
                                        ->maxItems(1)
                                        ->label(__('panel.example-value')),
                                ],
                                'select', 'multiselect' => [
                                    Forms\Components\Repeater::make('values')
                                        ->relationship()
                                        ->schema([
                                            Forms\Components\Tabs::make(__('panel.translations'))
                                                ->tabs([
                                                    Forms\Components\Tabs\Tab::make(__('panel.turkish'))
                                                        ->schema([
                                                            Forms\Components\TextInput::make('value.tr')
                                                                ->required()
                                                                ->label(__('panel.value',locale: 'tr')),
                                                        ]),
                                                    Forms\Components\Tabs\Tab::make(__('panel.english'))
                                                        ->schema([
                                                            Forms\Components\TextInput::make('value.en')
                                                                ->label(__('panel.value',locale: 'en')),
                                                        ]),
                                                ]),
                                        ])
                                        ->columns(1)
                                        ->label(__('panel.options'))
                                        ->addActionLabel(__('panel.add-new-option'))
                                        ->collapsible()
                                        ->defaultItems(0),
                                ],
                                'list' => [
                                    Forms\Components\Repeater::make('values')
                                        ->relationship()
                                        ->schema([
                                            Forms\Components\Tabs::make(__('panel.translations'))
                                                ->tabs([
                                                    Forms\Components\Tabs\Tab::make(__('panel.turkish'))
                                                        ->schema([
                                                            Forms\Components\TextInput::make('value.tr')
                                                                ->required()
                                                                ->label(__('panel.value',locale: 'tr')),
                                                        ]),
                                                    Forms\Components\Tabs\Tab::make('English')
                                                        ->schema([
                                                            Forms\Components\TextInput::make('value.en')
                                                                ->label(__('panel.value',locale: 'en')),
                                                        ]),
                                                ]),
                                            SpatieMediaLibraryFileUpload::make('image')
                                                ->collection('image')
                                                ->image()
                                                ->imageEditor()
                                                ->label(__('panel.image')),
                                        ])
                                        ->columns(1)
                                        ->label(__('panel.options'))
                                        ->addActionLabel(__('panel.add-new-option'))
                                        ->collapsible()
                                        ->defaultItems(0),
                                ],
                                'table' => [
                                    Forms\Components\Repeater::make('values')
                                        ->relationship()
                                        ->schema([
                                            Forms\Components\Tabs::make(__('panel.translations'))
                                                ->tabs([
                                                    Forms\Components\Tabs\Tab::make(__('panel.turkish'))
                                                        ->schema([
                                                            Forms\Components\TextInput::make('value.tr.label')
                                                                ->required()
                                                                ->label(__('panel.title',locale: 'tr')),
                                                            Forms\Components\Repeater::make('value.tr.items')
                                                                ->schema([
                                                                    Forms\Components\TextInput::make('value')
                                                                        ->required()
                                                                        ->label(__('panel.title',locale: 'tr'))->columnSpan('full'),
                                                                ])
                                                                ->columns(2)
                                                                ->label(__('panel.values'))
                                                                ->addActionLabel(__('panel.add-new-value'))
                                                                ->collapsible()
                                                                ->defaultItems(0),
                                                        ]),
                                                    Forms\Components\Tabs\Tab::make(__('panel.english'))
                                                        ->schema([
                                                            Forms\Components\TextInput::make('value.en.label')
                                                                ->label(__('panel.title',locale:'en')),
                                                            Forms\Components\Repeater::make('value.en.items')
                                                                ->schema([
                                                                    Forms\Components\TextInput::make('value')
                                                                        ->required()
                                                                        ->label(__('panel.title',locale:'en'))->columnSpan('full'),
                                                                ])
                                                                ->columns(2)
                                                                ->label(__('panel.values'))
                                                                ->addActionLabel(__('panel.add-new-value'))
                                                                ->collapsible()
                                                                ->defaultItems(0),
                                                        ]),
                                                ]),
                                        ])
                                        ->columns(1)
                                        ->label(__('panel.tables'))
                                        ->addActionLabel(__('panel.add-new-column'))
                                        ->collapsible()
                                        ->defaultItems(0),
                                ],
                                'content' => [
                                    Forms\Components\Repeater::make('values')
                                        ->relationship()
                                        ->schema([
                                            Forms\Components\Tabs::make(__('panel.translations'))
                                                ->tabs([
                                                    Forms\Components\Tabs\Tab::make(__('panel.turkish'))
                                                        ->schema([
                                                            Forms\Components\RichEditor::make('value.tr')
                                                                ->required()
                                                                ->label(__('panel.content',locale:'tr')),
                                                        ]),
                                                    Forms\Components\Tabs\Tab::make(__('panel.english'))
                                                        ->schema([
                                                            Forms\Components\RichEditor::make('value.en')
                                                                ->label(__('panel.content',locale:'en')),
                                                        ]),
                                                ]),
                                        ])
                                        ->columns(1)
                                        ->label(__('panel.content'))
                                        ->maxItems(1),
                                ],
                                default => [],
                            })
                            ->hidden(fn (Forms\Get $get) => !in_array($get('type'), ['text', 'textarea', 'select', 'multiselect', 'list', 'table', 'content'])),

                        Forms\Components\TextInput::make('sort')
                            ->numeric()
                            ->default(0)
                            ->label(__('panel.sort')),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('group.name')
                    ->formatStateUsing(fn ($state) => $state ?? '')
                    ->searchable()
                    ->sortable()
                    ->label(__('panel.specification-groups')),
                Tables\Columns\TextColumn::make('name')
                    ->formatStateUsing(fn ($state) => $state ?? '')
                    ->searchable()
                    ->sortable()
                    ->label(__('panel.attributes-name')),
                Tables\Columns\TextColumn::make('type')
                    ->formatStateUsing(fn ($state) => match ($state) {
                        'text' => __('panel.text'),
                        'textarea' => __('panel.textarea'),
                        'select' => __('panel.select'),
                        'multiselect' => __('panel.multiselect'),
                        'list' => __('panel.list'),
                        'table' => __('panel.table'),
                        'content' => __('panel.content'),
                        default => $state,
                    })
                    ->searchable()
                    ->sortable()
                    ->label(__('panel.type')),
                Tables\Columns\TextColumn::make('sort')
                    ->numeric()
                    ->sortable()
                    ->label(__('panel.sort')),
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
            ])
            ->defaultSort('sort', 'asc');
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
            'index' => Pages\ListProductSpecifications::route('/'),
            'create' => Pages\CreateProductSpecification::route('/create'),
            'edit' => Pages\EditProductSpecification::route('/{record}/edit'),
        ];
    }
}
