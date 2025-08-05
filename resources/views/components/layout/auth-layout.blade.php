@props(['title', 'form_title'])

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300..700&family=Merienda:wght@300..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Savate:ital,wght@0,200..900;1,200..900&display=swap"
        rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>{{ $title }}</title>
</head>

<body>
    <div class="max-w-xl mx-auto mt-10 rounded-xl shadow-xl p-16">
        <h1 class="font-bold text-4xl">
            {{ $form_title }}
        </h1>

        <hr class="h-1 bg-gray-300 rounded-xl border-none my-6" />
        {{ $slot }}
    </div>
</body>

</html>
