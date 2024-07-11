<x-layout>
    <section class="pt-6">
        <x-page-heading>Post A Job</x-page-heading>

        <x-forms.form method="POST" action="/jobs">
            <x-forms.input label="Title" name="title" placeholder="Title" />
            <x-forms.input label="Salary" name="salary" placeholder="$200 000" />
            <x-forms.input label="Location" name="location" placeholder="Location" />

            <x-forms.select label="Job Type" name="job_type">
                <option>Full Time</option>
                <option>Part Time</option>
                <option>Contract</option>
            </x-forms.select>

            <x-forms.input label="URL" name="url" placeholder="https://keystoneinc.com" />
            <x-forms.checkbox label="Featured (Costs Extra)" name="featured" />

            <x-forms.divider />
            <x-forms.input label="Tags (comma separated)" name="tags" placeholder="admin, frontend, marketing" />


            {{-- <select name="job_type" id="" class="bg-gray-800 block px-5 py-4 rounded-xl w-full">
                <option class="bg-gray-800 text-gray-300 px-5 py-4" value="Full Time">Full Time</option>
                <option class="bg-gray-800 text-gray-300 px-5 py-4" value="Part Time">Part Time</option>
                <option class="bg-gray-800 text-gray-300 px-5 py-4" value="Contract">Contract</option>
            </select> --}}



            <x-forms.button>Publish</x-forms.button>
        </x-forms.form>
    </section>
</x-layout>
