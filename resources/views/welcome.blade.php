<x-layout>
    <div class="space-y-10">
        <section>
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
