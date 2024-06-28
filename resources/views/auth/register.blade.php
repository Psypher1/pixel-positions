<x-layout>
    <section class="pt-6">
        <x-page-heading>Register</x-page-heading>

        <x-forms.form method="POST" action="/auth/register" encytpe="multipar/form-data">
            <x-forms.input label="Name" name="name" />
            <x-forms.input label="Email" name="email" type="email" />
            <x-forms.input label="Password" name="password" type="password" />
            <x-forms.input label="Confirm Password" name="email" type="password_confirm" />

            <x-forms.divider />
            <x-forms.input label="Employer Name" name="employer" />
            <x-forms.input label="Employer Logo" name="logo" type="file" />

            <x-forms.button>Create Account</x-forms.button>

        </x-forms.form>
    </section>
</x-layout>
