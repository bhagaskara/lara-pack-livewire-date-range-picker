<?php

namespace LaraPack\LivewireDateRangePicker;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class LivewireDateRangePickerProvider extends ServiceProvider
{
    public function boot()
    {
        // Daftarkan Livewire component
        Livewire::component('lara-pack.livewire-date-range-picker', Input::class);

        // Muat file view dari folder "resources/views"
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'lara-pack.livewire-date-range-picker');
    }
}