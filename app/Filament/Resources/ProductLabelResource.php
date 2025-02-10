<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductLabelResource\Pages;
use App\Filament\Resources\ProductLabelResource\RelationManagers;
use App\Models\ProductLabel;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProductLabelResource extends Resource
{
    protected static ?string $model = ProductLabel::class;

    protected static ?string $navigationIcon = 'heroicon-o-tag';

    protected static ?string $navigationGroup = 'Products';

    public static function getNavigationGroup(): ?string
    {
        return __('panel.products');
    }

    public static function getNavigationLabel(): string
    {
        return __('panel.product-labels');
    }

    public function getTitle(): string|\Illuminate\Contracts\Support\Htmlable
    {
        return __('panel.product-label');
    }
    public static function getModelLabel(): string
    {
        return  __('panel.product-label');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make()
                    ->schema([
                        Forms\Components\Tabs::make(__('panel.translations'))
                            ->tabs([
                                Forms\Components\Tabs\Tab::make(__('panel.turkish'))
                                    ->schema([
                                        Forms\Components\TextInput::make('name.tr')
                                            ->required()
                                            ->label(__('panel.label-name',locale: 'tr')),
                                    ]),
                                Forms\Components\Tabs\Tab::make(__('panel.english'))
                                    ->schema([
                                        Forms\Components\TextInput::make('name.en')
                                            ->label(__('panel.label-name',locale: 'en')),
                                    ]),
                            ]),
                        Forms\Components\ColorPicker::make('color')
                            ->required()
                            ->label(__('panel.color')),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable()
                    ->label(__('panel.label-name')),
                Tables\Columns\ColorColumn::make('color')
                    ->label(__('panel.color')),
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
            'index' => Pages\ListProductLabels::route('/'),
            'create' => Pages\CreateProductLabel::route('/create'),
            'edit' => Pages\EditProductLabel::route('/{record}/edit'),
        ];
    }
}
