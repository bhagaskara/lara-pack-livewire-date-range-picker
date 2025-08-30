<div wire:ignore>
    <input type="text" class="{{ $class }}" id="{{ $objId }}" value="{{ $pickedDate }}"
        @disabled($disabled)>
</div>

@script
    <script>
        const objId = "#{{ $objId }}";
        const minDate = "{{ $minDate }}";
        const maxDate = "{{ $maxDate }}";
        const maxSpan = "{{ $maxSpan }}";
        const showDropdowns = {{ $showDropdowns ? 'true' : 'false' }};
        const timePicker = {{ $timePicker ? 'true' : 'false' }};
        const timePickerIncrement = {{ $timePickerIncrement }};
        const timePicker24Hour = {{ $timePicker24Hour ? 'true' : 'false' }};
        const timePickerSeconds = {{ $timePickerSeconds ? 'true' : 'false' }};
        const opens = "{{ $opens }}";
        const drops = "{{ $drops }}";
        const autoApply = {{ $autoApply ? 'true' : 'false' }};
        const locale = @json($locale);

        $(() => {
            let config = {};

            if (minDate) {
                config.minDate = minDate;
            }

            if (maxDate) {
                config.maxDate = maxDate;
            }

            if (maxSpan) {
                config.maxSpan = maxSpan;
            }

            if (showDropdowns) {
                config.showDropdowns = showDropdowns;
            }

            if (timePicker) {
                config.timePicker = timePicker;
            }

            if (timePickerIncrement) {
                config.timePickerIncrement = timePickerIncrement;
            }

            if (timePicker24Hour) {
                config.timePicker24Hour = timePicker24Hour;
            }

            if (timePickerSeconds) {
                config.timePickerSeconds = timePickerSeconds;
            }

            if (opens) {
                config.opens = opens;
            }

            if (drops) {
                config.drops = drops;
            }

            if (autoApply) {
                config.autoApply = autoApply;
            }

            if (locale) {
                config.locale = locale;
            }

            $(objId).daterangepicker(config, (start, end, label) => {
                @this.set('pickedDate', `${start.format('YYYY-MM-DD')} - ${end.format('YYYY-MM-DD')}`);
            });
        });
    </script>
@endscript
