<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Application</title>

    @livewireStyles
    <link href="{{ mix('css/app.css') }}" rel="stylesheet"> <!-- Include your app CSS -->
</head>

<body>
    <div class="container">
        @yield('content') <!-- Content from other views will be injected here -->
    </div>

    @livewireScripts
    <script src="{{ mix('js/app.js') }}"></script> <!-- Include your app JS -->
</body>

</html>