<?php

namespace App\Filament\Resources\RealEstateProductResource\Pages;

use App\Filament\Resources\RealEstateProductResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRealEstateProducts extends ListRecords
{
    protected static string $resource = RealEstateProductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
