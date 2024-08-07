<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!---->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- stylesheet -->
    <link rel="stylesheet" href="assets/css/Home.css">
    <!--normalize sheet-->
    <link rel="stylesheet" href="assets/css/normalize.css">
    <!--font-awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- bootstrap icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css" integrity="sha512-dPXYcDub/aeb08c63jRq/k6GaKccl256JQy/AnOq7CAnEZ9FzSL9wSbcZkMp4R26vBsMLFYH4kQ67/bbV8XaCQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css -->

    <!--font sheet  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">


    <!-- swiper css -->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <!--title of page-->
    <title>Home</title>
    <link rel="icon"  type="image/x-icon" href="image/new.png">




</head>
<body>

<div class="loading-screen" id="loading-screen">
    <img class="loader" src="image/new.png" alt="image">
</div>

<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light flex-div">
    <a class="navbar-brand mx-5" href="/">Student<span>Hub</span></a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" aria-controls="navbarSupportedContent">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <div class="nav-middle flex-div">
            <div class="search-box flex-div">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('courses.index') }}"> شرح</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('locations') }}">الأماكن</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://myu.mans.edu.eg/">المنصة الطلابية</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#depart"> الأقسام العلمية</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#section2">الرعاية</a>
                    </li>
                    <li class="nav-item">
                        @auth()
                            @can('admin')
                                <a  class="nav-link" href="/admin">Admin</a>
                            @endcan
                        @endauth
                    </li>
                    <li class="nav-item">
                        <div class="nav-right flex-div ">
                            <div class="navbar-collapse" id="navbarText">
                                @auth()
                                    <form action="{{route('logout')}}" method="POST">
                                        @csrf
                                        <button class=" btn btn-lg" type="submit">تسجيل خروج</button>
                                    </form>
                                @else
                                    <a  class="btn1 " href="{{ route('login') }}" role="button" type="submit">تسجيل دخول</a>
                                @endauth
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</nav>

{{ $slot }}

<!-- footer -->
<x-flash-message />
<section class="footer">
    <!-- Footer -->
    <footer class=" foot text-center text-white" style="background-color: #080808;">
        <div class="container col-12 p-4 pb-0">
            <section class="foot-h">
                <h2 class="fw-bold mb-2 ">Student<span>Hub</span></h2>
                <p class="short mr-2 ml-2">الرحلة الأكاديمية هي فرصة لتوسيع آفاقك وتطوير مهاراتك. استثمر وقتك وجهدك في التعلم بشكل فعّال، ولا تتردد في استكشاف ميادين جديدة، فالتحديات هي فرص للنمو والتقدم."</p>
            </section>
            <section class="location">
                <p>
                    <i class="bi bi-geo-alt"></i>
                    Mansoura University, Faculty of  Science, Dakahlia Governorate, Egypt.
                </p>
            </section>
        </div>
        <hr>
        <!-- Copyright -->
        <div class="container text-center pb-2" >
            Copyright© 2024
            <a class="text-white" href="#">All Rights Reserved by Glitch Hunters Team.</a>
        </div>
        <!-- Copyright -->
    </footer>
</section>



<!-- swiper js -->
<script src="assets/js/swiper-bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<!-- javaScript -->
<script src="assets/js/home.js"></script>
<!-- bootstrap -->
<script src="assets/js/cdnjs.cloudflare.com_ajax_libs_popper.js_1.11.0_umd_popper.min.js"></script>
<script src="assets/js/code.jquery.com_jquery-3.7.1.min.js"></script>
<script src="assets/js/bootstrap.js"></script>
</body>
</html>
