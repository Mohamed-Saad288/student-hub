<x-department-layout title="قسم الرياضيات" >



    <!-- head -->
    <section class="head">
        <div class="About col-lg-8  container  mt-5 mb-5  p-5">
            <h1 class="m-2 mb-4 p-2 text-center">قسم الرياضيات</h1>
            <h5 dir="rtl">رسالة البرامج</h5>
            <p dir="rtl">إعداد خريج متميز فى مجال الرياضيات والإحصاء وعلوم الحاسب مؤهل للمنافسة فى سوق العمل المحلى والأقليمى وقادر على إجراء بحث علمى متطور لخدمة المجتمع وتنمية البيئة.</p>
            <hr class="hr hr-blurry" />
        </div>
    </section>



    <!-- section one -->
    <section class="depart container ">
        <div class="row ">
            <div class="item col-lg-6">
                <img src="image/Rectangle 172.png" class="w-100" alt="user1">
                <div>
                    <a href="{{ route('math.program1') }}" dir="ltr" class="btn">المزيد</a>
                    <P dir="rtl"> برنامج الرياضيات</P>
                </div>
            </div>

            <div class="item col-lg-6">
                <img src="image/Rectangle 171.png" class="w-100" alt="user1">
                <div>
                    <a href="{{ route('math.program2') }}" dir="ltr" class="btn">المزيد</a>
                    <P dir="rtl"> برنامج احصاء وعلوم الحاسب</P>
                </div>
            </div>


            <hr class="hr hr-blurry" />

        </div>
    </section>


    <!-- section two -->
    <section class="info container">
        <div class="row ">
            <div dir="rtl">
                <h4 dir="rtl">مجالات سوق العمل لخريجي برنامج قسم الرياضيات:</h4>
                <div class="container">
                    <div class="job row">
                        <!-- Flexbox for demo purpose -->
                        <div class="d-flex ">

                            <!-- Element on the left -->
                            <div class="px-4 col-lg-6">
                                <h5>برنامح الاحصاء وعلوم الحاسب</h5>
                                <ul >
                                    <li> العمل في مراكز البحوث</li>
                                    <li>العمل في مراكز الاحصاء والتحليل </li>
                                    <li> العمل في هيئة الارصاد الجوية</li>
                                    <li>العمل في الشركات والبنوك (محلل احصاء)</li>
                                    <li>العمل في شركات البرمجة (مبرمج حاسب الي)</li>
                                </ul>
                            </div>

                            <!-- Vertical divider -->
                            <div class="vr mt-4 col-2" style="height: 200px;"></div>

                            <!-- Element on the left -->
                            <div class="px-4 col-lg-6">
                                <h5>برنامج الرياضة</h5>
                                <ul >
                                    <li>مدرس رياضيات</li>
                                    <li>خبير إحصائي في جهاز التعبئة والإحصاء</li>
                                    <li>باحث احصائئ</li>
                                    <li>محلل بيانات</li>
                                    <li>مراكز الإحصاء والمتابعه</li>
                                </ul>
                            </div>

                        </div>
                    </div>

                </div>


            </div>
        </div>
    </section>




</x-department-layout>
