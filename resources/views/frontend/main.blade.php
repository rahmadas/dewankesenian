<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Dewan Kesenian Blambangan</title>
    <!-- link to css -->
    <link rel="stylesheet" href="/css/home.css">
    <!-- link to css -->
    <link rel="stylesheet" href="/css/berita.css">
    <!-- link to css -->
    <link rel="stylesheet" href="/css/kontak.css">
    <!-- link to css -->
    <link rel="stylesheet" href="/css/pengurus.css">
    <!-- link to css -->
    <link rel="stylesheet" href="/css/refrensi.css">
    <!-- link Faficon -->
    <link rel="shortcut icon" href="/pic/favicon.ico">
    <!-- Box Icons -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <!-- link boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</head>

<body>





    <!-- navbar -->
    @include('frontend.partials.navbar')


    <header>

        @include('frontend.layouts.home')
        {{--  --}}
        @include('frontend.layouts.berita')
        {{--  --}}
        @include('frontend.layouts.pengurus')
        {{--  --}}
        @include('frontend.layouts.kontak')
        {{--  --}}
        @include('frontend.layouts.refrensi')

    </header>



    <br>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <br>





    @include('frontend.partials.footer')
</body>

</html>