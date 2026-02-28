# Livewire Date Range Picker

[![Latest Version on Packagist](https://img.shields.io/packagist/v/lara-pack/livewire-date-range-picker.svg?style=flat-square)](https://packagist.org/packages/lara-pack/livewire-date-range-picker)
[![Total Downloads](https://img.shields.io/packagist/dt/lara-pack/livewire-date-range-picker.svg?style=flat-square)](https://packagist.org/packages/lara-pack/livewire-date-range-picker)
[![License](https://img.shields.io/packagist/l/lara-pack/livewire-date-range-picker.svg?style=flat-square)](https://packagist.org/packages/lara-pack/livewire-date-range-picker)

A modern and easy-to-integrate **Date Range Picker** component for Livewire. This package is designed to work seamlessly with both **Livewire 3** and **Livewire 4**.

## Features ✨

- **Compatibility**: Supports Livewire 3 & 4.
- **Time Support**: Built-in support for time selection.
- **Customizable**: Fully configurable via properties (min/max date, format, locale, etc.).
- **Responsive**: Works perfectly on various devices and screen sizes.
- **Modelable**: Uses the `#[Modelable]` attribute for seamless `wire:model` integration.

## Installation 🚀

Install the package via Composer:

```bash
composer require lara-pack/livewire-date-range-picker
```

## Requirements 📦

This component depends on **Bootstrap DateRangePicker**. You need to include the following CSS and JS files in your layout (typically in `app.blade.php`):

```html
<!-- Dependencies (jQuery, Moment.js, and DateRangePicker) -->
<script
  type="text/javascript"
  src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"
></script>
<script
  type="text/javascript"
  src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"
></script>
<script
  type="text/javascript"
  src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"
></script>
<link
  rel="stylesheet"
  type="text/css"
  href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css"
/>
```

## Usage 🛠️

### Basic Usage

Add the component to your Blade view:

```blade
<livewire:lara-pack.livewire-date-range-picker
    wire:model="range"
    class="form-control"
/>
```

> [!TIP]
> In **Livewire 4**, if you require instant data synchronization, you can use `wire:model.live`. However, this component already handles synchronization automatically when a date range is selected.

In your parent Livewire component:

```php
public $range = []; // Will contain ['YYYY-MM-DD', 'YYYY-MM-DD']
```

### Advanced Configuration

You can customize the picker's behavior through the following properties:

```blade
<livewire:lara-pack.livewire-date-range-picker
    wire:model="range"
    class="form-control"
    :showDropdowns="true"
    :timePicker="true"
    opens="center"
    :autoApply="true"
    :locale="[
        'format' => 'DD/MM/YYYY',
        'separator' => ' to ',
        'applyLabel' => 'Apply',
        'cancelLabel' => 'Cancel',
    ]"
/>
```

## Available Properties 📝

| Property           | Type      | Default   | Description                                   |
| ------------------ | --------- | --------- | --------------------------------------------- |
| `class`            | `string`  | `''`      | CSS class for the input element.              |
| `disabled`         | `boolean` | `false`   | Disables the input.                           |
| `minDate`          | `string`  | `null`    | Minimum selectable date.                      |
| `maxDate`          | `string`  | `null`    | Maximum selectable date.                      |
| `showDropdowns`    | `boolean` | `true`    | Show year and month select dropdowns.         |
| `timePicker`       | `boolean` | `false`   | Enable time selection.                        |
| `timePicker24Hour` | `boolean` | `true`    | Use 24-hour format for the time picker.       |
| `opens`            | `string`  | `'right'` | Open direction: `left`, `right`, or `center`. |
| `drops`            | `string`  | `'down'`  | Drop direction: `down` or `up`.               |
| `autoApply`        | `boolean` | `false`   | Apply the range immediately upon selection.   |

## Contributing 🤝

Contributions are highly welcome! Feel free to open an Issue or submit a Pull Request for any feature enhancements or bug fixes.

## License 📜

This package is licensed under the [MIT License](LICENSE).
