<x-filament::widget>
    <x-filament::card>
        <x-slot name="heading">
            {{ $widgetData["title"] }}
        </x-slot>
 
        <a href="{{ route('filament.resources.customers.edit', $widgetData['data']['id']) }}">{{ $widgetData["data"]["name"] }}</a>
    </x-filament::card>
</x-filament::widget>