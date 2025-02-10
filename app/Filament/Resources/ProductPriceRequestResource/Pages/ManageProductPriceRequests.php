<?php

namespace App\Filament\Resources\ProductPriceRequestResource\Pages;

use App\Filament\Resources\ProductPriceRequestResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageProductPriceRequests extends ManageRecords
{
    protected static string $resource = ProductPriceRequestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
