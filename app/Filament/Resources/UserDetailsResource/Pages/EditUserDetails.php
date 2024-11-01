<?php

namespace App\Filament\Resources\UserDetailsResource\Pages;

use App\Filament\Resources\UserDetailsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUserDetails extends EditRecord
{
    protected static string $resource = UserDetailsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
