<?php

namespace LaraPack\LivewireDateRangePicker;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Modelable;
use Livewire\Component;
use Livewire\WithFileUploads;

class Input extends Component
{
    use WithFileUploads;

    public $objId;

    #[Modelable]
    public $value;

    public $pickedDate;

    // Config HTML
    public $class = '';
    public $disabled = false;

    // Config
    public $minDate;
    public $maxDate;
    public $maxSpan;
    public $showDropdowns = true;
    public $timePicker = false;
    public $timePickerIncrement = 1;
    public $timePicker24Hour = true;
    public $timePickerSeconds = false;
    public $opens = 'right';
    public $drops = 'down';
    public $autoApply = false;
    public $locale = [
        "format" => "DD/MM/YYYY",
        "separator" => " s.d ",
        "applyLabel" => "Terapkan",
        "cancelLabel" => "Batal",
        "fromLabel" => "Dari",
        "toLabel" => "Ke",
        "customRangeLabel" => "Kustom",
        "weekLabel" => "M",
        "daysOfWeek" => [
            "Min",
            "Sen",
            "Sel",
            "Rab",
            "Kam",
            "Jum",
            "Sab"
        ],
        "monthNames" => [
            "Januari",
            "Februari",
            "Maret",
            "April",
            "Mei",
            "Juni",
            "Juli",
            "Agustus",
            "September",
            "Oktober",
            "November",
            "Desember"
        ],
        "firstDay" => 1
    ];

    public function render(): View
    {
        return view('lara-pack.livewire-date-range-picker::input');
    }

    public function mount()
    {
        $this->objId = 'date-range-picker-' . Str::uuid()->toString();
        if ($this->value) {
            $startDate = Carbon::parse($this->value[0])->format("d/m/Y");
            $endDate = Carbon::parse($this->value[1])->format("d/m/Y");
            $this->pickedDate = "{$startDate} " . $this->locale['separator'] . " {$endDate}";
        }
    }

    public function updatedPickedDate($value)
    {
        $this->value = explode(' - ', $value);
    }
}
