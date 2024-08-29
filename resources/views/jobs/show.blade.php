<x-layout>
    <section class="pt-6">


        <div class=" mb-3 flex justify-center items-center">

            <x-employer-logo :employer="$job->employer" />
        </div>



        <x-page-heading>{{ $job->title }}</x-page-heading>
        <h4 class=" text-lg text-center mt-2  text-gray-400">
            {{ $job->employer->name }}
        </h4>


        <p class="mt-5 text-center text-base text-gray-400">{{ $job->job_type }} - {{ $job->salary }} </p>


        <a href="/jobs/{{ $job->id }}/edit"
            class="text-center px-4 py-2 bg-blue-600 block rounded-md mt-12 mx-auto w-fit hover:bg-blue-500 transition-colors duration-300">Edit
            Job</a>

    </section>
</x-layout>
