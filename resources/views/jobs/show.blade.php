<x-layout>
    <section class="mt-6">

        <x-page-heading>{{ $job->title }}</x-page-heading>
        <p class="text-center text-gray-400 mt-3">{{ $job->employer->name }}</p>
        <p class="text-center text-xl mt-3">{{ $job->salary }}</p>

        <div>
            <a href="/jobs/{{ $job->id }}/edit">Edit Job</a>
        </div>
    </section>

</x-layout>
