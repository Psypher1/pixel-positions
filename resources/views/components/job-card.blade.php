@props(['job'])

<x-panel class="flex flex-col text-center">
    <p class="self-start text-sm text-gray-400">{{ $job->employer->name }}</p>
    <div class="py-8 ">
        <h3 class="font-semibold group-hover:text-blue-600 text-xl">
            <a href="{{ $job->url }}" target="_blank">
                {{ $job->title }}
            </a>
        </h3>
        <p class="mt-3 text-sm">{{ $job->job_type }} - {{ $job->salary }}</p>
    </div>

    <div class="flex justify-between items-center mt-auto">
        <div>

            @if (count($job->tags) > 0)

                @foreach ($job->tags as $tag)
                    <x-tag :tag="$tag" size="small" />
                @endforeach
            @endif
            {{-- <x-tag size="small"></x-tag> //Its expecting you to pass a tag here also --}}
            {{-- <x-tag size="small">Manager</x-tag>
            <x-tag size="small">Sales</x-tag> --}}
        </div>

        <x-employer-logo :employer="$job->employer" :width="42" />
    </div>
</x-panel>
