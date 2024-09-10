@props(['job'])

<x-panel class="flex gap-x-6">
    <div>
        <x-employer-logo />
    </div>

    <div class="flex-1 flex flex-col">
        <p class="self-start text-sm text-gray-400">
            {{ $job->employer->name }}
        </p>

        <h3 class="group-hover:text-blue-700 text-xl mt-3 font-semibold">
            <a href="{{ $job->url }}" target="_blank">
                {{ $job->title }}
            </a>
        </h3>
        <p class="mt-auto text-sm text-gray-400">{{ $job->job_type }} - {{ $job->salary }} </p>

    </div>

    <div class="flex flex-col justify-between">
        <div>

            @foreach ($job->tags as $tag)
                <x-tag :$tag>Sales</x-tag>
            @endforeach
        </div>
        {{-- <x-tag>Sales</x-tag> --}}

        <a href="/jobs/{{ $job->id }}" class="self-end text-sm text-gray-500">Show Details &rarr;</a>
    </div>

</x-panel>
