@props(['job'])

<x-panel class="flex gap-x-6">
    <div>
        <x-employer-logo :employer="$job->employer" />
    </div>

    <div class="flex-1 flex flex-col">
        <h4 class="self-start text-sm text-gray-400">
            {{ $job->employer->name }}
        </h4>

        <h3 class="group-hover:text-blue-700 text-xl mt-3 font-semibold">
            <a href="{{ $job->url }}" target="_blank">

                {{ $job->title }}
        </h3>
        </a>
        <p class="mt-auto text-sm text-gray-400">{{ $job->job_type }} - {{ $job->salary }} </p>

    </div>

    <div class="flex flex-col">
        <div>
            @foreach ($job->tags as $tag)
                <x-tag :$tag />
            @endforeach
        </div>
        {{-- <x-tag>Sales</x-tag> --}}

        <a href="/jobs/{{ $job->id }}"
            class="mt-auto block text-sm uppercase hover:text-gray-400 self-end text-gray-500">Show Details
            &rarr;</a>
    </div>

</x-panel>
