<?php

namespace App\Filament\Company\Resources\Adverts\Pages;

use App\Filament\Company\Resources\Adverts\AdvertResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditAdvert extends EditRecord
{
    protected static string $resource = AdvertResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
