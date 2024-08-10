<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', $lang ?? app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Livewire Test' }}</title>

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/css/custom.css', 'resources/js/app.js'])
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    </head>
    <body>
        {{ $slot }}
        <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
        <script>
            window.addEventListener('close-modal', event => {
                document.getElementById('modal-cross').click();

            });
        </script>
    </body>
</html>
