<?php

namespace App\Filament\Resources\CoupleRoomResource\Pages;

use App\Filament\Resources\CoupleRoomResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCoupleRoom extends EditRecord
{
    protected static string $resource = CoupleRoomResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
