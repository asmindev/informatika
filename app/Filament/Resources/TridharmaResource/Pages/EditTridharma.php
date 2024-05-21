<?php

namespace App\Filament\Resources\TridharmaResource\Pages;

use App\Filament\Resources\TridharmaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTridharma extends EditRecord
{
    protected static string $resource = TridharmaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
