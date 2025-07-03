<?php

namespace App\Filament\Editor\Resources\NewsResource\Pages;

use App\Filament\Editor\Resources\Editor\NewsResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateNews extends CreateRecord
{
    protected static string $resource = \App\Filament\Editor\Resources\NewsResource::class;
}
