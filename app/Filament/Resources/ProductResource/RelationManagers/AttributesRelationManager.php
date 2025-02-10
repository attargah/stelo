<?php

namespace App\Filament\Resources\ProductResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;

class AttributesRelationManager extends RelationManager
{

    protected static string $relationship = 'attributes';

    protected static ?string $title = 'Özellikler';

    public static function getTitle(Model $ownerRecord, string $pageClass): string
    {
        return __('panel.attributes');
    }

    public function getTableRecordTitle(?Model $record): string
    {
        return $record->title['tr'] ?? '';
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Tabs::make(__('panel.attributes'))
                    ->tabs([
                        Forms\Components\Tabs\Tab::make(__('panel.attributes'))
                            ->schema([
                                Forms\Components\TextInput::make('title.tr')
                                    ->label(__('panel.attributes-name',locale: 'tr'))
                                    ->required(),
                            ]),
                        Forms\Components\Tabs\Tab::make('English')
                            ->schema([
                                Forms\Components\TextInput::make('title.en')
                                    ->label(__('panel.attributes-name',locale: 'en')),
                            ]),
                    ])
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title.tr')
                    ->label(__('panel.attributes-name')),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
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
}
