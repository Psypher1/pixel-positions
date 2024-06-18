<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Pixel Positions</title>
</head>

<body>
    <header>
        <nav>
            <div>
                <a href="/">
                    {{-- <img src="{{ Vite::asste('resources/images/logo.svg') }}" alt=""> --}}
                    Pixel Positions
                </a>
            </div>
            <div>
                <a href="">Jobs</a>
                <a href="">Careers</a>
                <a href="">Salaries</a>
            </div>
            <div>post a job</div>
        </nav>
    </header>
    <main>
        {{ $slot }}
    </main>
</body>

</html>
