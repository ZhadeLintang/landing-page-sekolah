<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

</head>
<body>

<header class="navbar">
    <div class="nav-container">
        <div class="logo">
            <img src="{{ asset('logo-smk-prestasi-prima.png') }}" alt="Logo Sekolah">
            <span>SMK PRESTASI PRIMA</span>
        </div>

    </div>
</header>

<main>
    @yield('content')
</main>

</body>
</html>
