<?php

namespace App\Filament\Resources\CustomerResource\Widgets;

use App\Models\Customer;
use Filament\Widgets\Widget;

class CustomerOverview extends Widget
{
    public $widgetData;

    protected static string $view = 'filament.resources.customer-resource.widgets.customer-overview';

    protected int | string | array $columnSpan = 1;
 
    public function mount(): void
    {
        $this->widgetData = [
            'title' => "Latest added customer",
            'data' => $this->customerData(),
        ];
    }

    private function customerData()
    {
        $data = Customer::latest()->first();

        return $data;
    }
}
