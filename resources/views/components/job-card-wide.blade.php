@props(['job'])

<x-panel class="flex gap-x-6">
    <div>
        <x-employer-logo />
    </div>

    <div class="flex-1 flex flex-col">
        <a class="self-start text-sm text-gray-400">
            <h3>Keystone Inc</h3>
        </a>

        <h3 class="group-hover:text-blue-700 text-xl mt-3 font-semibold">Seles Lead</h3>
        <p class="mt-auto text-sm text-gray-400">Hybrid - $100 000</p>

    </div>

    <div class="">
        @foreach ($job->tags as $tag)
            <x-tag :$tag>Sales</x-tag>
        @endforeach
        {{-- <x-tag>Sales</x-tag> --}}

    </div>
</x-panel>
