<x-layout>
    <section class="pt-6">
        <x-page-heading>Register</x-page-heading>

        <x-forms.form method="POST" action="/auth/register" enctype="multipart/form-data">
            <x-forms.input label="Name" name="name" placeholder="Name" />
            <x-forms.input label="Email" name="email" type="email" placeholder="Email" />
            <x-forms.input label="Password" name="password" type="password" placeholder="Password" />
            <x-forms.input label="Confirm Password" name="password_confirmation" type="password"
                placeholder="Confirm Password" />

            <x-forms.divider />

            <x-forms.input label="Employer Name" name="employer" placeholder="Employer Name" />
            <x-forms.input label="Employer Logo" name="logo" type="file" />

            <x-forms.button>Create Account</x-forms.button>

        </x-forms.form>
    </section>
</x-layout>
