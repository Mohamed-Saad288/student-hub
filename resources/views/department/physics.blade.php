<x-department-layout title="قسم الفيزياء" >


    <!-- head -->
    <section class="head">
        <div class="About col-lg-8  container  mt-5 mb-5  p-5">
            <h1 class="m-2 mb-4 p-2 text-center">قسم الفيزياء</h1>
            <h5 dir="rtl">رسالة البرامج</h5>
            <p dir="rtl">تقديم مستوي مميز في التعليم لاعداد كوادر مؤهلة وقادرة علي المنافسة في سوق العمل وتساعم بفعالية في خدمة المجتمع من خلال برامج أكاديمية وإنتاج علمي مميز</p>
            <hr class="hr hr-blurry" />
        </div>
    </section>



    <!-- section one -->
    <section class="depart container ">
        <div class="row  " >
            <div class="item col-lg-6">
                <img src="image/38a3c65c-6676-467f-8298-1930a6f33f6f.jpg" class="w-100 " alt="user1">
                <a href="{{ route('physics.program3') }}" dir="ltr" class="btn">المزيد</a>
                <P dir="rtl"> برنامج فيزياء</P>
            </div>

            <div class="item col-lg-6">
                <img src="image/31ebd0b8-2c09-4fc3-a0af-38e32f92da6d.jpg" class="w-100" alt="user1">
                <a href="{{ route('physics.program2') }}" dir="ltr" class="btn">المزيد</a>
                <P dir="rtl"> برنامج كيمياء و فيزياء</P>
            </div>

            <hr class="hr hr-blurry" />
        </div>

        <h3 class="m-2 mb-4 p-2 pb-5 text-center">قسم فيزياء (خاصةً)</h3>
        <div class="row justify-content-center " >
            <div class="item col-lg-8">
                <img src="image/328b37b7-c79b-44f0-aeb6-53f27108103e.jpg" class="w-100" alt="user1">
                <div>
                    <a href="{{ route('physics.program1') }}" dir="ltr" class="btn">المزيد</a>
                    <P dir="rtl"> برنامج فيزياء الطبية (خاصةً)</P>
                </div>

            </div>

        </div>
    </section>


    <!-- section two -->
    <section class="info container">
        <div class="row container">
            <div dir="rtl">
                <h4 dir="rtl">مجالات سوق العمل لخريجي برنامج قسم الفيزياء:</h4>

                <div class="job row">
                    <!-- Flexbox for demo purpose -->
                    <div class="d-flex ">

                        <!-- Element on the left -->
                        <div class="px-4 col-lg-6">
                            <h5>برنامح برنامج فيزياء </h5>
                            <ul >
                                <li>مصانع الأجهزة الكهربية</li>
                                <li>شركات الألكترونيات</li>
                                <li>هيئة الطاقة الذرية</li>
                                <li>مراكز البحث العلمي</li>
                                <li>العمل الأكاديمي</li>
                                <li>تدريس الفيزياء بعد الدبلومة التربوية</li>
                            </ul>
                        </div>

                        <!-- Vertical divider -->
                        <div class="vr mt-4 col-2" style="height: 200px;"></div>

                        <!-- Element on the left -->
                        <div class="px-4 col-lg-6">
                            <h5>برنامح برنامج كيمياء و فيزياء</h5>
                            <ul >
                                <li>مراكز بحوث الإشعاع</li>
                                <li>معاهد علوم الليزر</li>
                                <li>المعاهد الطبية</li>
                                <li>المراكز البحثية</li>
                            </ul>
                        </div>

                    </div>

                    <div class="job row">
                        <!-- Flexbox for demo purpose -->
                        <div class="d-flex ">

                            <!-- Element on the left -->
                            <div class="px-4 col-lg-6">
                                <h5>برنامج برنامج فيزياء الطبية (خاصةً)</h5>
                                <ul >
                                    <li>مراكز التصوير الإشعاعي</li>
                                    <li>المستشفيات والمراكز الصحية</li>
                                    <li>شركات المعدّات الطبية</li>
                                    <li>استخراج اليورانيوم وصناعاته</li>
                                    <li>المختبرات العلمية والبحثية</li>
                                    <li>المفاعلات</li>
                                    <li>مصانع العدسات</li>
                                    <li>ضبط وضمان الجودة</li>
                                    <li>التعليم</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </section>




    <!-- footer -->


</x-department-layout>
