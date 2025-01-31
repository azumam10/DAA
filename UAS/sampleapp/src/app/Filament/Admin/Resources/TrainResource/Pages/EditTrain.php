<?php

namespace App\Filament\Admin\Resources\TrainResource\Pages;

use App\Filament\Admin\Resources\TrainResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTrain extends EditRecord
{
    protected static string $resource = TrainResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
