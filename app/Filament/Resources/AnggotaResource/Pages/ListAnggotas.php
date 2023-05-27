<?php

namespace App\Filament\Resources\AnggotaResource\Pages;

use App\Filament\Resources\AnggotaResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAnggotas extends ListRecords
{
    protected static string $resource = AnggotaResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
