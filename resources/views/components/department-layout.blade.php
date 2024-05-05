@props(['title'])
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!---->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- stylesheet -->
    <link rel="stylesheet" href="assets/css/mathematics.css">
    <!--normalize sheet-->
    <link rel="stylesheet" href="assets/css/normalize.css">
    <!--font-awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- bootstrap icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css" integrity="sha512-dPXYcDub/aeb08c63jRq/k6GaKccl256JQy/AnOq7CAnEZ9FzSL9wSbcZkMp4R26vBsMLFYH4kQ67/bbV8XaCQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css -->

    <!--font sheet  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!--title of page-->
    <title>{{ $title }}</title>
    <link rel="icon"  type="image/x-icon" href="image/new.png">




</head>
<body>
<!-- navbar-->
<nav class="flex-div">
    <div class="nav-left flex-div">
        <a class="navbar-brand " href="/">Student<span>Hub</span></a>

    </div>

    <div class="nav-right flex-div ">
        <div class="navbar-collapse" id="navbarText">
            @auth()
                <h6>{{ auth()->user()->name }}</h6>
            @else
                <a  class="btn1 " href="{{ route('login') }}" role="button" type="submit">تسجيل دخول</a>
            @endauth
        </div>
    </div>
</nav>
{{ $slot }}

<!-- footer -->
<section class="footer">
    <!-- Footer -->
    <footer class=" foot text-center text-white" style="background-color: #080808;">
        <div class="container col-6 p-4 pb-0">
            <section class="foot-h">
                <h2 class="fw-bold mb-2 ">Student<span>Hub</span></h2>
                <p class="short">الرحلة الأكاديمية هي فرصة لتوسيع آفاقك وتطوير مهاراتك. استثمر وقتك وجهدك في التعلم بشكل فعّال، ولا تتردد في استكشاف ميادين جديدة، فالتحديات هي فرص للنمو والتقدم."</p>
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
        <div class="text-center pb-2" >
            Copyright© 2024
            <a class="text-white" href="#">All Rights Reserved by Glitch Hunters Team.</a>
        </div>
        <!-- Copyright -->
    </footer>
</section>

<script src="assets/js/cdnjs.cloudflare.com_ajax_libs_popper.js_1.11.0_umd_popper.min.js"></script>
<script src="assets/js/code.jquery.com_jquery-3.7.1.min.js"></script>
<script src="assets/js/bootstrap.js"></script>
</body>
</html>
