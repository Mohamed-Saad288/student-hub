<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--title of page-->
    <title>LogIn</title>
    <link rel="icon"  type="image/x-icon" href="image/new.png">

    <!---->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- stylesheet -->
    <link rel="stylesheet" href="assets/css/login.css">

    <!--normalize sheet-->
    <link rel="stylesheet" href="assets/css/normalize.css">
    <!--font-awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- bootstrap icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css" integrity="sha512-dPXYcDub/aeb08c63jRq/k6GaKccl256JQy/AnOq7CAnEZ9FzSL9wSbcZkMp4R26vBsMLFYH4kQ67/bbV8XaCQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

</head>
<body>
<!--start login-->


<section class="all vh-100 gradient-custom">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center algn-items-centeri h-100" dir="rtl">
            <div class="col">
                <div class="card" style="border-radius: 1rem;">
                    <div class="card-body p-5 pm-0 pt-0 pb-0 ">

                        <div class="mb-md-5 mt-md-5 ">
                            <div class="card-title mb-4 text-center">
                                <h2 class="fw-bold mb-3 mt-0 ">Student<span>Hub</span></h2>
                                <p>قم بتسجيل الدخول لتستمتع بتدفق لا نهاية له من الإلهام من العالم من حولك</p>
                            </div>

                            {{$slot}}

                        </div>


                    </div>
                </div>
            </div>
            <div class="hello col text-white text-center fw-bold ">
                <h1>مرحبا من جديد</h1>
            </div>
        </div>
    </div>
</section>


<!--end login-->



<script src="assets/js/cdnjs.cloudflare.com_ajax_libs_popper.js_1.11.0_umd_popper.min.js"></script>
<script src="assets/js/code.jquery.com_jquery-3.7.1.min.js"></script>
<script src="assets/js/bootstrap.js"></script>
</body>
</html>
