@props(['label', 'name'])

@php
    $defaults = [
        'type' => 'text',
        'id' => $name,
        'name' => $name,
        'class' =>
            'rounded-xl bg-white/5 px-5 py-4 w-full outline-none border border-gray-500  focus:ring-blue-500 focus:border-blue-500 placeholder:text-gray-600',
        'value' => old($name),
    ];
    $classes =
        'block rounded-xl bg-white/5 px-5 py-4 w-full outline-none border border-gray-500  focus:ring-blue-500 focus:border-blue-500';
@endphp

<x-forms.field :$label :$name>
    <input {{ $attributes($defaults) }}>
</x-forms.field>
