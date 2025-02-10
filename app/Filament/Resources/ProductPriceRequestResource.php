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

    public static function getNavigationGroup(): ?string
    {
        return __('panel.forms');
    }

    public static function getNavigationLabel(): string
    {
        return __('panel.product-price-requests');
    }

    public function getTitle(): string|\Illuminate\Contracts\Support\Htmlable
    {
        return __('panel.product-price-request');
    }
    public static function getModelLabel(): string
    {
        return  __('panel.product-price-request');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->required()->label(__('panel.name')),
                TextInput::make('email')->email()->required()->label(__('panel.email')),
                TextInput::make('phone')->numeric()->required()->label(__('panel.phone')),
                Select::make('product_id')
                    ->relationship('product', 'name')
                    ->required()
                    ->label(__('panel.product-name'))
                    ->preload()
                    ->getOptionLabelFromRecordUsing(fn ($record) => $record->name ?? ''),
                TextArea::make('note')->required()->label(__('panel.note')),
                TextInput::make('ip_address')->required()->disabled()->label(__('panel.ip-address'))->default(request()->ip()),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->searchable()->label(__('panel.name')),
                TextColumn::make('email')->searchable()->label(__('panel.email')),
                TextColumn::make('phone')->searchable()->label(__('panel.phone')),
                TextColumn::make('product.name')->label(__('panel.product-name'))->searchable()
                    ->url(fn ($record) => route('filament.admin.resources.products.edit', $record->product_id))
                ->openUrlInNewTab(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->label(__('panel.created_at')),
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
