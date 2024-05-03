<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!---->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- stylesheet -->
    <link rel="stylesheet" href="assets/css/form.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
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
    <title>Form</title>
    <link rel="icon"  type="image/x-icon" href="image/new.png">




</head>
<body>


<!-- head -->
<section class="head text-center">
    <div class="container">
        <a href="/">
            <h1 data-aos="fade-up">Student<span>Hub</span></h1>
        </a>
    </div>
</section>




<!--start login-->
<section class="all vh-100 gradient-custom">
    <div class="container py-5 ">
        <div class="d-flex justify-content-center algn-items-centeri h-100">
            <div class="col-10">
                <div class="card" style="border-radius: 1rem;">
                    <div class="card-body p-5 pb-0 " id="bost-card">

                        <div class="mb-md-5 mt-md-5 ">


                            <form action="{{ route('student.store',$competition->id) }}" method="POST">
                                @csrf
                            <!-- Full name input -->
                            <div class="form-outline form-white mb-4">
                                <label class="form-label"  for="typeName">الاسم</label>
                                <div class="input-container">
                                    <i class="icon bi bi-person"></i>
                                    <input type="text" id="typeName" name="name" value="{{ old('name') }}" class="form-control input-field form-control-lg" placeholder="" />
                                </div>
                               @error('name')
                                <p style="font-size: 13px;color: red;margin-top: 3px">{{$message}}</p>
                                @enderror
                            </div>

                            <!-- level dropdown -->
                            <div class=" form-outline form-white mb-4 ">
                                <label class="form-label" for="typeselect">المستوى</label>
                                <select class="form-select" dir="ltr" name="level" id="typeselect" aria-label="Default select example">
                                    <option selected></option>
                                    <option value=1>الاول</option>
                                    <option value=2>الثاني</option>
                                    <option value=3>الثالث</option>
                                    <option value=4>الرابع</option>
                                </select>
                                @error('level')
                                <p style="font-size: 13px;color: red;margin-top: 3px">{{$message}}</p>
                                @enderror
                            </div>


                            <!-- level dropdown -->
                                <div class="form-outline form-white mb-4">
                                    <label class="form-label"  for="typeName">القسم</label>
                                    <div class="input-container">
                                        <i class="icon bi bi-person"></i>
                                        <input type="text" id="typeName" name="department" value="{{ old('department') }}" class="form-control input-field form-control-lg" placeholder="" />
                                    </div>
                                    @error('department')
                                    <p style="font-size: 13px;color: red;margin-top: 3px">{{$message}}</p>
                                    @enderror
                                </div>

                            <!-- College Id input -->
                            <div class="form-outline form-white mb-4">
                                <label class="form-label" for="typeID">الرقم التعريفي للكليه</label>
                                <div class="input-container">
                                    <i class="icon bi bi-file-person"></i>
                                    <input type="number" id="typeID" name="college_id" value="{{ old('college_id') }}" class="form-control input-field form-control-lg" placeholder="" maxlength="14"/>
                                </div>
                                @error('college_id')
                                <p style="font-size: 13px;color: red;margin-top: 3px">{{$message}}</p>
                                @enderror
                            </div>

                            <!-- Phone Number input -->
                            <div class="form-outline form-white mb-4">
                                <label class="form-label" for="typeNo">رقم الهاتف</label>
                                <div class="input-container">
                                    <i class="icon bi bi-file-person"></i>
                                    <input dir="rtl" type="tel" id="typeNo" name="phone" value="{{ old('phone') }}" class="form-control input-field form-control-lg" placeholder="" maxlength="14"/>
                                </div>
                                @error('phone')
                                <p style="font-size: 13px;color: red;margin-top: 3px">{{$message}}</p>
                                @enderror
                            </div>

                            <!--sign up button  -->
                                <button class="btn  col-12 mb-5 mt-5 btn-lg "  type="submit">تسجيل</button>
                            </form>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!--end login-->


<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<script src="assets/js/cdnjs.cloudflare.com_ajax_libs_popper.js_1.11.0_umd_popper.min.js"></script>
<script src="assets/js/code.jquery.com_jquery-3.7.1.min.js"></script>
<script src="assets/js/bootstrap.js"></script>
</body>
</html>
