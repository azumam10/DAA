<?php

namespace App\Filament\Admin\Resources\PassengerResource\Pages;

use App\Filament\Admin\Resources\PassengerResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPassenger extends EditRecord
{
    protected static string $resource = PassengerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
