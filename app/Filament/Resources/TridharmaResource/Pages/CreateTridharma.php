<?php

namespace App\Filament\Resources\TridharmaResource\Pages;

use App\Filament\Resources\TridharmaResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTridharma extends CreateRecord
{
    protected static string $resource = TridharmaResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
