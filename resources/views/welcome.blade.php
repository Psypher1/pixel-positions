<x-layout>

    <div class="space-y-10">
        <section class="text-center  pt-6">
            <h1 class="font-bold text-4xl">Let's Find Your Next Job</h1>
            <form action="" class="mt-6">
                <input type="text" placeholder="Construction Worker..."
                    class="rounded-xl bg-white/5 px-5 py-4 w-full border border-white/10 max-w-xl outline-none">
            </form>
        </section>
        <section class="pt-10">
            <x-section-heading>
                Top Jobs
            </x-section-heading>
            <div class="grid gap-8 grid-cols-3 mt-3">

                <x-job-card />
                <x-job-card />
                <x-job-card />
            </div>
        </section>
        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="mt-4 space-x-2">
                <x-tag>Sales</x-tag>
                <x-tag>Sales</x-tag>
                <x-tag>Sales</x-tag>
                <x-tag>Sales</x-tag>
                <x-tag>Sales</x-tag>
                <x-tag>Sales</x-tag>
                <x-tag>Sales</x-tag>
                <x-tag>Sales</x-tag>
                <x-tag>Sales</x-tag>
                <x-tag>Sales</x-tag>
            </div>
        </section>
        <section>
            <x-section-heading>Recent Jobs</x-section-heading>
            <div class="mt-4 space-y-6">
                <x-job-card-wide />
                <x-job-card-wide />
                <x-job-card-wide />
            </div>
        </section>
    </div>
</x-layout>
