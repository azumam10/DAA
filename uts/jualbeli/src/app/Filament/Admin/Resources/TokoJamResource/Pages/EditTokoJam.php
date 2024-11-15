<?php

namespace App\Filament\Admin\Resources\TokoJamResource\Pages;

use App\Filament\Admin\Resources\TokoJamResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTokoJam extends EditRecord
{
    protected static string $resource = TokoJamResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
