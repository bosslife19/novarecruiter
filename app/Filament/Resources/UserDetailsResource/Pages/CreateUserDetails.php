<?php

namespace App\Filament\Resources\UserDetailsResource\Pages;

use App\Filament\Resources\UserDetailsResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateUserDetails extends CreateRecord
{
    protected static string $resource = UserDetailsResource::class;
}
