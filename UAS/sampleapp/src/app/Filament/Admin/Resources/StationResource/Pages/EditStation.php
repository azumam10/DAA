<?php

namespace App\Filament\Admin\Resources\StationResource\Pages;

use App\Filament\Admin\Resources\StationResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditStation extends EditRecord
{
    protected static string $resource = StationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
