<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('assets/images/SMA.svg') }}">
    <title>Modeling school</title>
    <style>
        .menu ul li:nth-child(5n+4) a {
            font-weight: 600;
            border-bottom: 2px solid black;
        }
    </style>
</head>

<body>
    <section class="showcase">

    {{-- @section('showcase') --}}
    <header>
        <h2 class="logo">SOKUR model agency</h2>
        <div class="toggle"></div>
    </header>
    <video src="{{ asset('assets/videos/pexels-cottonbro-7871212.mp4') }}" muted loop autoplay></video>
    <div class="overlay"></div>
    @yield('content')
    <ul class="social">
        <li><a href="https://www.instagram.com/"><img src="{{ asset('assets/images/instagram.png') }}" alt=""></a></li>
        <li><a href="https://www.facebook.com/"><img src="{{ asset('assets/images/facebook.png') }}" alt=""></a></li>
        <li><a href="https://www.twitter.com/"><img src="{{ asset('assets/images/twitter.png') }}" alt=""></a></li>
    </ul>
</section>


    <div class="menu">
        <ul>
            <li><a href="home">Models</a></li>
            <li><a href="about">About us</a></li>
            <li><a href="form">Become a model</a></li>
            <li><a href="school">School</a></li>
            <li><a href="contacts">Contacts</a></li>
        </ul>
    </div>
    <script>
        const menuToggle = document.querySelector('.toggle')
        const showcase = document.querySelector('.showcase')
        menuToggle.addEventListener('click', () => {
            menuToggle.classList.toggle('active')
            showcase.classList.toggle('active')
        })
    </script>
</body>

</html>
