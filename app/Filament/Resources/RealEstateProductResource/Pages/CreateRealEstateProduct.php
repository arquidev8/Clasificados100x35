<?php

namespace App\Filament\Resources\RealEstateProductResource\Pages;

use Filament\Actions;
use Illuminate\Http\Request;
use App\Models\RealEstateProduct;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\RealEstateProductResource;

class CreateRealEstateProduct extends CreateRecord
{
    protected static string $resource = RealEstateProductResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
