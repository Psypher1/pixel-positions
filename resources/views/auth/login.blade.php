<x-layout>

    <section class="pt-6">

        <x-page-heading>Log In</x-page-heading>

        <x-forms.form method="POST" action="/login">
            <x-forms.input label="Email" name="email" type="email" placeholder="Email" />
            <x-forms.input label="Password" name="password" type="password" placeholder="Password" />

            <x-forms.button>Log In</x-forms.button>
        </x-forms.form>
    </section>
</x-layout>
