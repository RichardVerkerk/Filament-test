<?php

namespace App\Filament\Pages;

use App\Filament\Resources\CustomerResource;
use Filament\Pages\Dashboard as BasePage;

class Dashboard extends BasePage
{

    public static string $resource = CustomerResource::class;

    protected function getHeaderWidgetsColumns(): int | array
    {
        return 3;
    }

    protected function getHeaderWidgets(): array
    {
        return [
            CustomerResource\Widgets\CustomerOverview::class,
        ];
    }
}
