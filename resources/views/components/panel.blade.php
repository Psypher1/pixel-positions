@php
    $classes = 'p-4 bg-white/5 rounded-xl  border border-transparent hover:border-blue-700 group';
@endphp

<article {{ $attributes(['class' => $classes]) }}>
    {{ $slot }}
</article>
