<?php

namespace App\Filament\Company\Resources\Orders\Pages;

use App\Filament\Company\Resources\Orders\OrderResource;
use Filament\Resources\Pages\CreateRecord;

class CreateOrder extends CreateRecord
{
    protected static string $resource = OrderResource::class;
}
