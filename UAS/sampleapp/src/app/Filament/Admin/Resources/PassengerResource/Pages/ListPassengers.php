<?php

namespace App\Filament\Admin\Resources\PassengerResource\Pages;

use App\Filament\Admin\Resources\PassengerResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPassengers extends ListRecords
{
    protected static string $resource = PassengerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
