<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bootcamp SMK 46</title>


    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <style>
        /* CSS tambahan */
        #loading {
            transition: opacity 0.5s ease;
        }
    </style>


    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-gray-300 max-w-[430px] mx-auto">
    <div class="text-black bg-gray-50">
        <div id="loading">
            @include('includes.splash')
        </div>
        <div class="flex flex-col min-h-screen page">
            {{-- @include('includes.navigation') --}}

            <main class="w-full">
                @yield('section')
            </main>

            {{-- <footer class="py-6 mt-auto text-sm text-center text-black bg-white">
                <p>your footer here</p>
            </footer> --}}
        </div>
    </div>

    <script>
        const wait = (delay = 0) =>
            new Promise(resolve => setTimeout(resolve, delay));

        const setVisible = (elementOrSelector, visible) => {
            const element = typeof elementOrSelector === 'string' ?
                document.querySelector(elementOrSelector) :
                elementOrSelector;
            if (element) {
                element.style.display = visible ? 'block' : 'none';
            }
        };

        const setOpacity = (elementOrSelector, opacity) => {
            const element = typeof elementOrSelector === 'string' ?
                document.querySelector(elementOrSelector) :
                elementOrSelector;
            if (element) {
                element.style.opacity = opacity;
            }
        };

        setVisible('.page', false);
        setVisible('#loading', true);

        document.addEventListener('DOMContentLoaded', () =>
            wait(1000).then(() => {
                setOpacity('#loading', 0); // Fade out loading
                wait(500).then(() => { // Wait for opacity transition to finish
                    setVisible('.page', true);
                    setVisible('#loading', false);
                });
            }));
    </script>
    </script>
</body>

</html>
