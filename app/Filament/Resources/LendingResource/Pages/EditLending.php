<?php

namespace App\Filament\Resources\LendingResource\Pages;

use App\Filament\Resources\LendingResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLending extends EditRecord
{
    protected static string $resource = LendingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
