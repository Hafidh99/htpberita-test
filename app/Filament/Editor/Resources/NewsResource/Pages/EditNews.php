<?php

namespace App\Filament\Editor\Resources\NewsResource\Pages;

use App\Filament\Editor\Resources\Editor\NewsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditNews extends EditRecord
{
    protected static string $resource = \App\Filament\Editor\Resources\NewsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
