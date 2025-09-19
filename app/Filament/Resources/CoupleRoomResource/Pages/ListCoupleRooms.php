<?php

namespace App\Filament\Resources\CoupleRoomResource\Pages;

use App\Filament\Resources\CoupleRoomResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCoupleRooms extends ListRecords
{
    protected static string $resource = CoupleRoomResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
