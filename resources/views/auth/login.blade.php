<x-login-layout>
    <form action="{{route('login.store')}}" method="POST">
        @csrf
<!-- Email input -->

<x-form.input label="بريد الألكتروني" name="email" placeHolder="" type="email" icon="icon bi bi-envelope" />

<!-- password input -->

<x-form.input label="كلمة المرور" name="password" placeHolder="" type="password" icon="icon bi-eye" />



<!-- forgot link  -->

<div class="col">
    <a href="{{ route('password.request') }}">هل نسيت كلمة المرور؟</a>
</div>

<!--sign up button  -->

<button class="btn  col-12 mb-5 mt-5 btn-lg " type="submit">تسجيل</button>


<div>
    <p
        class="m-2 pb-3 text-center">ليس لديك حساب؟ <a href="{{route('register.create')}}" class=" fw-bold">اشتراك</a>

    </p>

</div>
    </form>
</x-login-layout>
