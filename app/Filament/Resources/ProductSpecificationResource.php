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
                            ->getOptionLabelFromRecordUsing(fn ($record) => $record->name['tr'] ?? '')
                            ->label('Özellik Grubu')
                            ->createOptionForm([
                                Forms\Components\Tabs::make('Translations')
                                    ->tabs([
                                        Forms\Components\Tabs\Tab::make('Türkçe')
                                            ->schema([
                                                Forms\Components\TextInput::make('name.tr')
                                                    ->required()
                                                    ->label('Grup Adı'),
                                            ]),
                                        Forms\Components\Tabs\Tab::make('English')
                                            ->schema([
                                                Forms\Components\TextInput::make('name.en')
                                                    ->label('Group Name'),
                                            ]),
                                    ]),
                                Forms\Components\TextInput::make('sort')
                                    ->numeric()
                                    ->default(0)
                                    ->label('Sıralama'),
                            ]),

                        Forms\Components\Tabs::make('Translations')
                            ->tabs([
                                Forms\Components\Tabs\Tab::make('Türkçe')
                                    ->schema([
                                        Forms\Components\TextInput::make('name.tr')
                                            ->required()
                                            ->label('Özellik Adı'),
                                    ]),
                                Forms\Components\Tabs\Tab::make('English')
                                    ->schema([
                                        Forms\Components\TextInput::make('name.en')
                                            ->label('Specification Name'),
                                    ]),
                            ]),

                        Forms\Components\Select::make('type')
                            ->options([
                                'text' => 'Metin',
                                'textarea' => 'Uzun Metin',
                                'select' => 'Seçim',
                                'multiselect' => 'Çoklu Seçim',
                                'list' => 'Liste',
                                'table' => 'Tablo',
                                'content' => 'İçerik',
                            ])
                            ->required()
                            ->live()
                            ->label('Tip'),

                        Forms\Components\Section::make('Değerler')
                            ->schema(fn (Forms\Get $get) => match ($get('type')) {
                                'text' => [
                                    Forms\Components\Repeater::make('values')
                                        ->relationship()
                                        ->schema([
                                            Forms\Components\Tabs::make('Translations')
                                                ->tabs([
                                                    Forms\Components\Tabs\Tab::make('Türkçe')
                                                        ->schema([
                                                            Forms\Components\TextInput::make('value.tr')
                                                                ->placeholder('Örnek: 100x50x30 cm')
                                                                ->label('Örnek Değer'),
                                                        ]),
                                                    Forms\Components\Tabs\Tab::make('English')
                                                        ->schema([
                                                            Forms\Components\TextInput::make('value.en')
                                                                ->placeholder('Example: 100x50x30 cm')
                                                                ->label('Example Value'),
                                                        ]),
                                                ]),
                                        ])
                                        ->columns(1)
                                        ->maxItems(1)
                                        ->label('Örnek Değer'),
                                ],
                                'textarea' => [
                                    Forms\Components\Repeater::make('values')
                                        ->relationship()
                                        ->schema([
                                            Forms\Components\Tabs::make('Translations')
                                                ->tabs([
                                                    Forms\Components\Tabs\Tab::make('Türkçe')
                                                        ->schema([
                                                            Forms\Components\Textarea::make('value.tr')
                                                                ->placeholder('Örnek açıklama metni...')
                                                                ->label('Örnek Değer'),
                                                        ]),
                                                    Forms\Components\Tabs\Tab::make('English')
                                                        ->schema([
                                                            Forms\Components\Textarea::make('value.en')
                                                                ->placeholder('Example description text...')
                                                                ->label('Example Value'),
                                                        ]),
                                                ]),
                                        ])
                                        ->columns(1)
                                        ->maxItems(1)
                                        ->label('Örnek Değer'),
                                ],
                                'select', 'multiselect' => [
                                    Forms\Components\Repeater::make('values')
                                        ->relationship()
                                        ->schema([
                                            Forms\Components\Tabs::make('Translations')
                                                ->tabs([
                                                    Forms\Components\Tabs\Tab::make('Türkçe')
                                                        ->schema([
                                                            Forms\Components\TextInput::make('value.tr')
                                                                ->required()
                                                                ->label('Değer'),
                                                        ]),
                                                    Forms\Components\Tabs\Tab::make('English')
                                                        ->schema([
                                                            Forms\Components\TextInput::make('value.en')
                                                                ->label('Value'),
                                                        ]),
                                                ]),
                                        ])
                                        ->columns(1)
                                        ->label('Seçenekler')
                                        ->addActionLabel('Yeni Seçenek Ekle')
                                        ->collapsible()
                                        ->defaultItems(0),
                                ],
                                'list' => [
                                    Forms\Components\Repeater::make('values')
                                        ->relationship()
                                        ->schema([
                                            Forms\Components\Tabs::make('Translations')
                                                ->tabs([
                                                    Forms\Components\Tabs\Tab::make('Türkçe')
                                                        ->schema([
                                                            Forms\Components\TextInput::make('value.tr')
                                                                ->required()
                                                                ->label('Değer'),
                                                        ]),
                                                    Forms\Components\Tabs\Tab::make('English')
                                                        ->schema([
                                                            Forms\Components\TextInput::make('value.en')
                                                                ->label('Value'),
                                                        ]),
                                                ]),
                                            SpatieMediaLibraryFileUpload::make('image')
                                                ->collection('image')
                                                ->image()
                                                ->imageEditor()
                                                ->label('Görsel'),
                                        ])
                                        ->columns(1)
                                        ->label('Liste Öğeleri')
                                        ->addActionLabel('Yeni Öğe Ekle')
                                        ->collapsible()
                                        ->defaultItems(0),
                                ],
                                'table' => [
                                    Forms\Components\Repeater::make('values')
                                        ->relationship()
                                        ->schema([
                                            Forms\Components\Tabs::make('Translations')
                                                ->tabs([
                                                    Forms\Components\Tabs\Tab::make('Türkçe')
                                                        ->schema([
                                                            Forms\Components\TextInput::make('value.tr.label')
                                                                ->required()
                                                                ->label('Başlık'),
                                                            Forms\Components\Repeater::make('value.tr.items')
                                                                ->schema([
                                                                    Forms\Components\TextInput::make('value')
                                                                        ->required()
                                                                        ->label('Title')->columnSpan('full'),
                                                                ])
                                                                ->columns(2)
                                                                ->label('Değerler')
                                                                ->addActionLabel('Yeni Değer Ekle')
                                                                ->collapsible()
                                                                ->defaultItems(0),
                                                        ]),
                                                    Forms\Components\Tabs\Tab::make('English')
                                                        ->schema([
                                                            Forms\Components\TextInput::make('value.en.label')
                                                                ->label('Title'),
                                                            Forms\Components\Repeater::make('value.en.items')
                                                                ->schema([
                                                                    Forms\Components\TextInput::make('value')
                                                                        ->required()
                                                                        ->label('Title')->columnSpan('full'),
                                                                ])
                                                                ->columns(2)
                                                                ->label('Values')
                                                                ->addActionLabel('Add New Item')
                                                                ->collapsible()
                                                                ->defaultItems(0),
                                                        ]),
                                                ]),
                                        ])
                                        ->columns(1)
                                        ->label('Tablolar')
                                        ->addActionLabel('Yeni Sütun Ekle')
                                        ->collapsible()
                                        ->defaultItems(0),
                                ],
                                'content' => [
                                    Forms\Components\Repeater::make('values')
                                        ->relationship()
                                        ->schema([
                                            Forms\Components\Tabs::make('Translations')
                                                ->tabs([
                                                    Forms\Components\Tabs\Tab::make('Türkçe')
                                                        ->schema([
                                                            Forms\Components\RichEditor::make('value.tr')
                                                                ->required()
                                                                ->label('İçerik'),
                                                        ]),
                                                    Forms\Components\Tabs\Tab::make('English')
                                                        ->schema([
                                                            Forms\Components\RichEditor::make('value.en')
                                                                ->label('Content'),
                                                        ]),
                                                ]),
                                        ])
                                        ->columns(1)
                                        ->label('İçerik')
                                        ->maxItems(1),
                                ],
                                default => [],
                            })
                            ->hidden(fn (Forms\Get $get) => !in_array($get('type'), ['text', 'textarea', 'select', 'multiselect', 'list', 'table', 'content'])),

                        Forms\Components\TextInput::make('sort')
                            ->numeric()
                            ->default(0)
                            ->label('Sıralama'),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('group.name')
                    ->formatStateUsing(fn ($state) => $state['tr'] ?? '')
                    ->searchable()
                    ->sortable()
                    ->label('Özellik Grubu'),
                Tables\Columns\TextColumn::make('name')
                    ->formatStateUsing(fn ($state) => $state['tr'] ?? '')
                    ->searchable()
                    ->sortable()
                    ->label('Özellik Adı'),
                Tables\Columns\TextColumn::make('type')
                    ->formatStateUsing(fn ($state) => match ($state) {
                        'text' => 'Metin',
                        'textarea' => 'Uzun Metin',
                        'select' => 'Seçim',
                        'multiselect' => 'Çoklu Seçim',
                        'list' => 'Liste',
                        'table' => 'Tablo',
                        'content' => 'İçerik',
                        default => $state,
                    })
                    ->searchable()
                    ->sortable()
                    ->label('Tip'),
                Tables\Columns\TextColumn::make('sort')
                    ->numeric()
                    ->sortable()
                    ->label('Sıralama'),
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
