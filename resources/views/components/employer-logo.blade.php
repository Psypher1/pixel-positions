@props(['employer', 'width' => 90])

{{-- <img src="{{ asset($employer->logo) }}" alt="" class="rounded-xl" width="{{ $width }}"> --}}
<img src="https://picsum.photos/seed/{{ rand(0, 100000) }}/{{ $width }}" class="rounded-xl block" alt="">
