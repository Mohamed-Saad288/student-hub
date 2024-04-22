<x-layout>

<!-- head -->

    @include('_head');

<!-- section one -->
<x-post-header >

    <!-- post style -->

     <x-post-style>

         <x-post-card :posts="$posts" />

    </x-post-style>

    <!-- end post style -->

</x-post-header>


<!-- section two -->
<section id="section2" class="our-section pb-5">
    <div class="row ">
        <div class="point1 text-center mt-5 mb-5  col-2">
            <img  src="image/Group 15.png">
        </div>
        <div class="About col-lg-8 text-center  mt-5 mb-5  p-5">
            <h1 class="m-2 mb-4 p-2">رعاية الطلاب</h1>
            <p>هيكل تنظيمي لرعاية الطلاب كلية العلوم جامعة المنصورة</p>
        </div>
        <div class="point1 text-center mt-5 mb-5  col-2">
            <img src="image/Group 15.png">
        </div>
    </div>
    <div class="container ">
        <div class="row text-center">
            <div class="item col-lg-3">
                <img src="image/Ellipse 5.png" alt="user1">
                <P> <a href="Sports.html">اللجنة الرياضية</a></P>
            </div>
            <div class="item col-lg-3">
                <img src="image/Ellipse 12.png" alt="user2">
                <P><a href="cultural_committee.html">اللجنة الثقافية</a></P>
            </div>
            <div class="item col-lg-3">
                <img src="image/Ellipse 7.png" alt="user3">
                <P><a href="science_committe.html">اللجنة العلمية</a></P>
            </div>
            <div class="item col-lg-3">
                <img src="image/Ellipse 8.png" alt="user3">
                <P><a href="social_committee.html">اللجنة الاجتماعية</a></P>
            </div>
            <div class="item col-lg-3">
                <img src="image/Ellipse 9.png" alt="user1">
                <P><a href="Art-committee.html">اللجنة الفنية</a></P>
            </div>
            <div class="item col-lg-3">
                <img src="image/Ellipse 10.png" alt="user2">
                <P><a href="travel_commitee.html"> لجنة الجوالة والخدمة العامة</a></P>
            </div>
            <div class="item col-lg-3">
                <img src="image/Ellipse 11.png" alt="user3">
                <P><a href="family_committee.html">الاسر الطلابية</a></P>
            </div>
            <div class="item col-lg-3">
                <img src="image/WhatsApp Image 2024-04-18 at 8.42.24 PM.jpeg" alt="user3">
                <P><a href="takaful-committee.html">صندوق التكافل</a></P>
            </div>
        </div>
    </div>
</section>

<!-- section three -->
<section id="depart" class="book pb-5">
    <div class="row ">
        <div class="point1 text-center mt-5 mb-5  col-2">
            <img  src="image/Group 15.png">
        </div>
        <div class="About col-lg-8 text-center  mt-5 mb-5  p-5">
            <h1 class="m-2 mb-4 p-2">الاقسام العلمية</h1>
        </div>
        <div class="point1 text-center mt-5 mb-5  col-2">
            <img src="image/Group 15.png">
        </div>
    </div>
    <div class="container">
        <div class="row ">
            <div class="item col-lg-3">
                <img src="image/Rectangle 164.png" alt="user1">
                <P> قسم الفيزياء</P>

                <a href="physics.html" dir="ltr" class="btn">المزيد</a>
            </div>
            <div class="item col-lg-4">
                <img src="image/Rectangle 161.png" alt="user2">
                <P> قسم الكيمياء</P>
                <a href="chemistry.html" dir="ltr" class="btn">المزيد</a>
            </div>
            <div class="item col-lg-3">
                <img src="image/Rectangle 159.png" alt="user3">
                <P> قسم الرياضيات</P>

                <a href="mathematics.html" dir="ltr" class="btn">المزيد</a>
            </div>
            <div class="item col-lg-3">
                <img src="image/Rectangle 163.png" alt="user3">
                <P> قسم علم الحيوان</P>

                <a href="zoology.html" dir="ltr" class="btn">المزيد</a>
            </div>
            <div class="item col-lg-4">
                <img src="image/Rectangle 160.png" alt="user1">
                <P> قسم الجيولوجيا</P>

                <a href="goelogy.html" dir="ltr" class="btn">المزيد</a>
            </div>
            <div class="item col-lg-3">
                <img src="image/Rectangle 165.png" alt="user2">
                <P>قسم النبات</P>

                <a href="plant.html" dir="ltr" class="btn">المزيد</a>
            </div>
        </div>
    </div>
</section>


</x-layout>
