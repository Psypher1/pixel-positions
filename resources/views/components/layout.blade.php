<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="shortcut icon" href="/images/pixel-logo.svg" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@100..900&display=swap" rel="stylesheet">

    <title>Pixel Positions</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>

<body class="font-hanken bg-site-black text-gray-100 ">
    <header class="px-10">
        <nav class="flex justify-between items-center py-4 border-b border-white/20">
            <div>
                <a href="/" class="flex items-center gap-2">
                    {{-- <img src="{{ Vite::asset('resources/images/pixel-logo.svg') }}" width="20" alt=""> --}}
                    {{-- <img class="block" src="{{ asset('images/pixel-logo.svg') }}" width="20"alt="Pixel Positions Logo"> --}}

                    {{-- <img src="{{ Vite::asset('resources/images/og-logo.svg') }}" " alt=""> --}}
                    <img class="block" src="{{ asset('images/og-logo.svg') }}" alt="Pixel Positions Logo">
                    {{-- <span class="block">Pixel Positions</span> --}}
                </a>
            </div>
            <div class="space-x-6 font-semibold">
                <a href="#">Jobs</a>
                <a href="#">Careers</a>
                <a href="#">Salaries</a>
            </div>

            @auth()
                <a href="/jobs/create">Post a job</a>
            @endauth

            @guest
                <div class="space-x-6 font-semibold">
                    <a href="/auth/register">Sign Up</a>
                    <a href="/auth/login">Login</a>
                </div>
            @endguest
        </nav>
    </header>
    <main class="mt-10 px-10 pb-20 max-w-screen-lg  mx-auto">
        {{ $slot }}
    </main>
</body>

</html>
