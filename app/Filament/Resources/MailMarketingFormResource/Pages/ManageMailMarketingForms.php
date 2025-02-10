<?php

namespace App\Filament\Resources\MailMarketingFormResource\Pages;

use App\Filament\Resources\MailMarketingFormResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageMailMarketingForms extends ManageRecords
{
    protected static string $resource = MailMarketingFormResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
