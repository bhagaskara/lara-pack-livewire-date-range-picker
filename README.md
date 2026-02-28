# Livewire Date Range Picker

[![Latest Version on Packagist](https://img.shields.io/packagist/v/lara-pack/livewire-date-range-picker.svg?style=flat-square)](https://packagist.org/packages/lara-pack/livewire-date-range-picker)
[![Total Downloads](https://img.shields.io/packagist/dt/lara-pack/livewire-date-range-picker.svg?style=flat-square)](https://packagist.org/packages/lara-pack/livewire-date-range-picker)
[![License](https://img.shields.io/packagist/l/lara-pack/livewire-date-range-picker.svg?style=flat-square)](https://packagist.org/packages/lara-pack/livewire-date-range-picker)

Komponen Livewire untuk pemilihan rentang tanggal (**Date Range Picker**) yang modern dan mudah diintegrasikan. Paket ini dirancang untuk bekerja secara mulus dengan **Livewire 3** dan **Livewire 4**.

## Fitur ✨

- **Kompatibilitas**: Mendukung Livewire 3 & 4.
- **Dukungan Waktu**: Mendukung pemilih waktu (Time Picker).
- **Kustomisasi**: Konfigurasi lengkap melalui properti (min/max date, format, locale, dll).
- **Responsif**: Bekerja baik di berbagai perangkat.
- **Dukungan Model**: Menggunakan attribute `#[Modelable]` untuk integrasi `wire:model` yang mudah.

## Instalasi 🚀

Instal paket melalui Composer:

```bash
composer require lara-pack/livewire-date-range-picker
```

## Persyaratan 📦

Komponen ini bergantung pada **Bootstrap DateRangePicker**. Anda perlu menyertakan file CSS dan JS berikut di layout Anda (umumnya di `app.blade.php`):

```html
<!-- Dependensi (jQuery, Moment.js, dan DateRangePicker) -->
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

## Penggunaan 🛠️

### Penggunaan Dasar

Tambahkan komponen di file Blade Anda:

```blade
<livewire:lara-pack.livewire-date-range-picker
    wire:model="range"
    class="form-control"
/>
```

> [!TIP]
> Pada **Livewire 4**, jika Anda membutuhkan sinkronisasi data seketika, Anda dapat menggunakan `wire:model.live`. Namun, komponen ini sudah menangani sinkronisasi saat rentang tanggal dipilih.

Di komponen Livewire parent Anda:

```php
public $range = []; // Akan berisi ['YYYY-MM-DD', 'YYYY-MM-DD']
```

### Konfigurasi Lanjutan

Anda dapat menyesuaikan perilaku picker melalui properti yang tersedia:

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
        'separator' => ' sampai ',
        'applyLabel' => 'Simpan',
        'cancelLabel' => 'Batal',
    ]"
/>
```

## Properti yang Tersedia 📝

| Properti           | Tipe      | Default   | Deskripsi                             |
| ------------------ | --------- | --------- | ------------------------------------- |
| `class`            | `string`  | `''`      | Class CSS untuk elemen input.         |
| `disabled`         | `boolean` | `false`   | Menonaktifkan input.                  |
| `minDate`          | `string`  | `null`    | Tanggal minimum.                      |
| `maxDate`          | `string`  | `null`    | Tanggal maksimum.                     |
| `showDropdowns`    | `boolean` | `true`    | Tampilkan dropdown bulan dan tahun.   |
| `timePicker`       | `boolean` | `false`   | Aktifkan pemilihan waktu.             |
| `timePicker24Hour` | `boolean` | `true`    | Gunakan format 24 jam.                |
| `opens`            | `string`  | `'right'` | Arah buka: `left`, `right`, `center`. |
| `drops`            | `string`  | `'down'`  | Arah jatuh: `down`, `up`.             |
| `autoApply`        | `boolean` | `false`   | Langsung terapkan saat pilih rentang. |

## Kontribusi 🤝

Kontribusi sangat disambut! Silakan buka Issue atau kirimkan Pull Request untuk peningkatan fitur atau perbaikan bug.

## Lisensi 📜

Paket ini berlisensi [MIT](LICENSE).
