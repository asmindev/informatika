<?php

namespace App\Filament\Resources\TridharmaResource\Pages;

use App\Filament\Resources\TridharmaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTridharmas extends ListRecords
{
    protected static string $resource = TridharmaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
