<x-layout>

    <div class="space-y-16">
        <section class="text-center  pt-6">
            <h1 class="font-bold text-4xl">Let's Find Your Next Job</h1>
            {{-- <form action="" class="mt-6 max-w-xl mx-auto">
                <input type="text" placeholder="Construction Worker..."
                    class="block rounded-xl bg-white/5 px-5 py-4 w-full outline-none border border-gray-500  focus:ring-blue-500 focus:border-blue-500">
            </form> --}}
            <x-forms.form action="/search" class="mt-6">
                <x-forms.input :label="false" name="q" placeholder="Construction Worker..." />
            </x-forms.form>
        </section>
        <section class="pt-10">
            <x-section-heading>
                Top Jobs
            </x-section-heading>
            <div class="grid gap-8 grid-cols-3 mt-3">
                @foreach ($featuredJobs as $job)
                    <x-job-card :job="$job" />
                    {{-- <x-job-card-wide :$job /> --}}
                @endforeach
                {{-- <x-job-card
                     /> .
                {{-- <x-job-card />
                <x-job-card /> --}}
            </div>
        </section>
        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="mt-4 space-x-2">


                {{-- tags array is being arriving here --}}


                @foreach ($tags as $tag)
                    <x-tag :tag="$tag" />
                @endforeach
                {{-- <x-tag>Sales</x-tag>
                <x-tag>Sales</x-tag>
                <x-tag>Sales</x-tag>
                <x-tag>Sales</x-tag>
                <x-tag>Sales</x-tag>
                <x-tag>Sales</x-tag>
                <x-tag>Sales</x-tag>
                <x-tag>Sales</x-tag>
                <x-tag>Sales</x-tag> --}}
            </div>
        </section>
        <section>
            <x-section-heading>Recent Jobs</x-section-heading>
            <div class="mt-4 space-y-6">
                @foreach ($jobs as $job)
                    {{-- <x-job-card-wide :$job /> --}}
                    <x-job-card-wide :job="$job" />
                @endforeach
                {{-- <x-job-card-wide />
                <x-job-card-wide /> --}}
            </div>
        </section>
    </div>


</x-layout>
