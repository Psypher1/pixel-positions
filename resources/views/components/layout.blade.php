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
            <div>logo
                <a href="/">
                    <img src="{{ Vite::asste('resources/images/logo.svg') }}" alt="">
                </a>
            </div>
            <div>links</div>
            <div>post a job</div>
        </nav>
    </header>
    <main>
        {{ slot }}
    </main>
</body>

</html>
