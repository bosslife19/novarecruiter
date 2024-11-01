<?php

namespace App\Filament\Resources\UserDetailsResource\Pages;

use App\Filament\Resources\UserDetailsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUserDetails extends ListRecords
{
    protected static string $resource = UserDetailsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
