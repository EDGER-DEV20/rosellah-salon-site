<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!--Favicon Link-->
    <link rel="icon" type="image/x-icon" href="{{asset('images/rose (1).svg')}}" />

    <!--Bootstrap CSS Link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <!--Bootstrap Icons Link-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <!--Lucide Icons Link-->
    <link rel="stylesheet" href="https://unpkg.com/lucide-static@latest/font/lucide.css" />

    <!--Google Fonts Link-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet">

    <!--CSS Link-->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <!--AOS AnimationLink-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!--Swiper Slider Link-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />

    <!--Swiper JS Link-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>

</head>

<body>
    <button id="backToTopBtn" title="Back to Top"><i class="bi bi-arrow-up"></i></button>


    <nav class="navbar navbar-expand-lg bg-body-primary fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{route('index')}}">
                <div class="logo">
                    <div class="logo-icon"><img src="{{asset('images/rose (1).svg')}}" alt="logo">
                    </div>
                    <div class="logo-text">
                        <h5><span>Rosellah</span> Salon</h5>
                    </div>
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="bi bi-list"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-3">
                        <a class="nav-link {{ Route::is('index') ? 'active' : '' }}" aria-current="page" href="{{ route('index') }}">Nyumbani</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link {{Route::is('about') ? 'active' : ''}}" href="{{ route('about') }}">Kuhusu sisi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{Route::is('contacts') ? 'active' : ''}}" href="{{route('contacts')}}">Wasiliana nasi</a>
                    </li>

                </ul>

            </div>
        </div>
    </nav>

    @yield('content')

    <div class="footer">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4">
                <div class="col">
                    <div class="logo">
                        <div class="logo-icon"><img src="{{asset('images/rose (1).svg')}}" alt="logo">
                        </div>
                        <div class="logo-text">
                            <h5><span>Rosellah</span> Salon</h5>
                        </div>
                    </div>
                    <p>
                        Salon bora ya kike inayopatikana jijini dodoma Tanzania, karibuni sana kwa huduma bora na nafuu.
                    </p>
                    <div class="row row-cols-1 footer-time-loc">
                        <div class="col">
                            <div class="footer-icon">
                                <i class="bi bi-calendar-week-fill"></i>
                            </div>
                            <p>
                                <span>Jumatatu - Jumapili</span>,<br />
                                Siku Saba za Wiki.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <h5>Explore</h5>
                    <ul>
                        <li><a href="{{route('index')}}"><i class="bi bi-chevron-right"></i>Nyumbani</a></li>
                        <li><a href="{{route('about')}}"><i class="bi bi-chevron-right"></i>Kuhusu sisi</a></li>
                        <li><a href="{{route('contacts')}}"><i class="bi bi-chevron-right"></i>Wasiliana nasi</a></li>
                        <li><a href="{{route('appointment')}}"><i class="bi bi-chevron-right"></i>Weka Appointment</a></li>
                    </ul>
                </div>
                <div class="col">
                    <h5>Huduma Zetu</h5>
                    <ul>
                        <li><a href="{{route('index', ['#kuset-na-kuosha'])}}"><i class="bi bi-chevron-right"></i>Kuset na Kuosha</a></li>
                        <li><a href="{{ route('index', ['#kupamba-maharusi']) }}"><i class="bi bi-chevron-right"></i>Kupamba Maharusi</a></li>
                        <li><a href="{{ route('index', ['#make-up']) }}"><i class="bi bi-chevron-right"></i>Make-up</a></li>
                        <li><a href="{{ route('index', ['#spa-na-massage']) }}"><i class="bi bi-chevron-right"></i>Spa na Massage</a></li>
                    </ul>
                </div>
                <div class="col">
                    <h5>Mawasiliano Yetu</h5>
                    <div class="row row-cols-1 footer-contacts">
                        <div class="col">
                            <div class="footer-icon">
                                <i class="bi bi-telephone-fill"></i>
                            </div>
                            <div class="footer-contacts-desc">
                                <h6>Namba za simu</h6>
                                <p>
                                    <a href="tel:+255788999000">+255 788 999 000</a>
                                </p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="footer-icon">
                                <i class="bi bi-envelope-fill"></i>
                            </div>
                            <div class="footer-contacts-desc">
                                <h6>Barua pepe</h6>
                                <p>
                                    <a href="mailto:info@rosellahsalon.co.tz">info@rosellahsalon.co.tz</a>
                                </p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="footer-icon">
                                <i class="bi bi-geo-alt-fill"></i>
                            </div>
                            <div class="footer-contacts-desc">
                                <h6>Ofisi Zetu</h6>
                                <p>
                                    Swaswa, Dodoma Tanzania,<br />Mkabala na Bwawani.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-end">
            <div class="container">

                <p>&copy {{ now()->year }}. Rosellah Salon. All Rights Reserved. <span>Designed & Developed by <a href=" https://instagram.com/edger_e_m">Eddie IT</a></span></p>

            </div>
        </div>
    </div>

    <!--Javascript Link-->
    <script src="{{asset('js/js.js')}}"></script>

    <!--Bootstrap Javascript Link-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    <!--Swiper Js Link
    <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>-->

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>