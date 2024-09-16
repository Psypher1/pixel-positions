@php

    $tagNames = $job->tags->pluck('name')->toArray();
    $tagsString = implode(', ', $tagNames);
@endphp

<x-layout>
    <section class="pt-6">
        <x-page-heading>Update Job</x-page-heading>

        <x-forms.form method="POST" action="/jobs/{{ $job->id }}">
            @method('PATCH')
            <x-forms.input label="Title" name="title" value="{{ $job->title }}" placeholder="Title" />
            <x-forms.input label="Salary" name="salary" value="{{ $job->salary }}" placeholder="$200 000" />

            {{-- <x-forms.input label="Location" name="location" placeholder="Location" /> --}}

            <x-forms.select label="Location" name="location" value="{{ $job->location }}">
                <option>On Site</option>
                <option>Remote</option>
                <option>Hybrid</option>
            </x-forms.select>
            <x-forms.select label="Job Type" name="job_type" value="{{ $job->job_type }}">
                <option>Full Time</option>
                <option>Part Time</option>
                <option>Contract</option>
            </x-forms.select>

            <x-forms.input label="URL" name="url" value="{{ $job->url }}"
                placeholder="https://keystoneinc.com" />
            <x-forms.checkbox label="Featured (Costs Extra)" name="featured" />

            <x-forms.divider />
            <x-forms.input label="Tags (comma separated)" name="tags" value="{{ $tagsString }}"
                placeholder="admin, frontend, marketing" />

            <x-forms.button>Publish</x-forms.button>
        </x-forms.form>
    </section>
</x-layout>
