<?php

namespace App\Filament\Resources\RealEstateProductResource\Pages;

use App\Filament\Resources\RealEstateProductResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRealEstateProduct extends EditRecord
{
    protected static string $resource = RealEstateProductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
