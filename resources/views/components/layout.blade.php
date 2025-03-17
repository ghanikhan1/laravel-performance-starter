<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Title</title>
    {{--    AOS Animation  --}}
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>

    {{--    Fonts   --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Raleway:wght@100..900&display=swap"
        rel="stylesheet">

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>
<body>

<div>
    {{--    <div>--}}
    {{--        <img src="{{ Vite::asset('resources/assets/images/testimonial1.png') }}">--}}
    {{--    </div>--}}
    {{--    <x-alpine-starter />--}}
    <main>
        {{ $slot }}
    </main>
</div>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
</body>
</html>
