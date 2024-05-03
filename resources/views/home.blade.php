<x-layout>

<!-- head -->

    @include('_head');

<!-- Post Header -->

<x-post-header >

    <!-- post style -->

     <x-post-style>

         <!-- post card -->

         <x-post-card :posts="$posts" />

         <!-- end post card -->

    </x-post-style>

    <!-- end post style -->

</x-post-header>

<!-- end post header -->

<!-- committees style -->

<x-committees-style>

    <!-- committees cards -->

    <x-committees-card name="اللجنة الرياضية" image="image/Ellipse 5.png" url="/sports"/>

    <x-committees-card name="اللجنة الثقافية" image="image/Ellipse 12.png" url="/cultural"/>

    <x-committees-card name="اللجنة العلمية" image="image/Ellipse 7.png" url="/science"/>

    <x-committees-card name="اللجنة الاجتماعية" image="image/Ellipse 8.png" url="/social"/>

    <x-committees-card name="اللجنة الفنية" image="image/Ellipse 9.png" url="/art"/>

    <x-committees-card name="لجنة الجوالة والخدمة العامة" image="image/Ellipse 10.png" url="/travel"/>

    <x-committees-card name="الاسر الطلابية" image="image/Ellipse 11.png" url="/family"/>

    <x-committees-card name="صندوق التكافل" image="image/WhatsApp Image 2024-04-18 at 8.42.24 PM.jpeg" url="/takeful"/>

    <!-- end committees cards -->


</x-committees-style>

<!-- end committees style -->

<!-- department style -->

<x-department-style class="col-lg-12">

    <!-- department cards -->

    <x-department-card name="قسم الفيزيا" image="image/Rectangle 164.png"/>

    <x-department-card name="قسم الكيمياء" image="image/Rectangle 161.png" style_css="item col-lg-4"/>

    <x-department-card name="قسم الرياضيات" image="image/Rectangle 159.png"/>

    <x-department-card name="قسم علم الحيوان" image="image/Rectangle 163.png"/>

    <x-department-card name="قسم الجيولوجيا" image="image/Rectangle 160.png" style_css="item col-lg-4"/>

    <x-department-card name="قسم النبات" image="image/Rectangle 165.png"/>

    <!-- end department cards -->


</x-department-style>

<!-- end department style -->

</x-layout>
