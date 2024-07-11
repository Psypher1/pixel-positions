@props(['tag', 'size' => 'base'])
{{-- tag that's supposed to be passed isn't getting here --}}
@php
    $classes = 'bg-white/10 font-semibold rounded-xl hover:bg-white/25 transition-colors duration-300';

    if ($size === 'base') {
        $classes .= ' px-5 py-1 text-sm';
    }

    if ($size === 'small') {
        $classes .= ' px-3 py-1 text-xxs';
    }
@endphp

{{-- <a href="/tags/" class="{{ $classes }}">{{ $slot }}</a> --}}
<a href="/tags/{{ strtolower($tag->name) }}" class="{{ $classes }}">{{ $tag->name }}</a>
