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

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make()
                    ->schema([
                        Forms\Components\Tabs::make('Translations')
                            ->tabs([
                                Forms\Components\Tabs\Tab::make('Türkçe')
                                    ->schema([
                                        Forms\Components\TextInput::make('name.tr')
                                            ->required()
                                            ->label('Etiket Adı'),
                                    ]),
                                Forms\Components\Tabs\Tab::make('English')
                                    ->schema([
                                        Forms\Components\TextInput::make('name.en')
                                            ->label('Label Name'),
                                    ]),
                            ]),
                        Forms\Components\ColorPicker::make('color')
                            ->required()
                            ->label('Renk'),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name.tr')
                    ->searchable()
                    ->sortable()
                    ->label('Etiket Adı'),
                Tables\Columns\ColorColumn::make('color')
                    ->label('Renk'),
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
            'index' => Pages\ListProductLabels::route('/'),
            'create' => Pages\CreateProductLabel::route('/create'),
            'edit' => Pages\EditProductLabel::route('/{record}/edit'),
        ];
    }
}
