@props(['label', 'name'])

<div>
    @if ($label)
        <x-forms.label :$name :$label />
    @endif

    <div class="mt-0.5">
        {{ $slot }}

        <x-forms.error :error="$errors->first($name)" />
    </div>
</div>
