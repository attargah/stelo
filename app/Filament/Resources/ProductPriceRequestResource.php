<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductPriceRequestResource\Pages;
use App\Filament\Resources\ProductPriceRequestResource\RelationManagers;
use App\Models\ProductPriceRequest;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProductPriceRequestResource extends Resource
{
    protected static ?string $model = ProductPriceRequest::class;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-cart';

    protected static ?string $navigationGroup = 'Products';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->required()->label('Name'),
                TextInput::make('email')->email()->required()->label('Email'),
                TextInput::make('phone')->numeric()->required()->label('Phone'),
                Select::make('product_id')
                    ->relationship('product', 'name')
                    ->required()
                    ->label('Product')
                    ->preload()
                    ->getOptionLabelFromRecordUsing(fn ($record) => $record->name['tr'] ?? ''),
                TextArea::make('note')->required()->label('Note'),
                TextInput::make('ip_address')->required()->disabled()->label('IP Address')->default(request()->ip()),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->searchable(),
                TextColumn::make('email')->searchable(),
                TextColumn::make('phone')->searchable(),
                TextColumn::make('product.name.tr')->label('Product name')->searchable()
                    ->url(fn ($record) => route('filament.admin.resources.products.edit', $record->product_id))
                ->openUrlInNewTab(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->label('Oluşturulma Tarihi'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageProductPriceRequests::route('/'),
        ];
    }
}
