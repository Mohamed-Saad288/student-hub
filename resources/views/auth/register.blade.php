<x-register-layout>
    <form method="POST" action="{{route('register.store')}}">
        @csrf
        <!-- Name input -->

        <x-form.input label="الاسم" name="name" placeHolder="" type="text" icon="icon bi bi-person" />

        <!-- Email input -->

        <x-form.input label="البريد الالكتروني" name="email" placeHolder="" type="email" icon="icon bi bi-envelope" />

        <!-- password input -->

        <x-form.input label="كلمه المرور" name="password" placeHolder="" type="password" icon="icon bi-eye" />
        <p style="font-size: 12px;color: gray;font-weight: bolder">يجب أن تكون كلمة المرور 10 على الأقل، ويجب أن تحتوي على حرف صغير واحد على الأقل، وحرف كبير واحد على الأقل، ورقم واحد على الأقل، ويجب أن تحتوي على حرف خاص  </p>

        <!--confirm password input -->

        <x-form.input label="تأكيد كلمه المرور" name="password_confirmation" placeHolder="" type="password" icon="icon bi-eye" />

        <!--sign up button  -->

        <button class="btn col-12 mb-1 mt-1 btn-lg " type="submit">تسجيل</button>

        <!-- signin link  -->

        <div >
            <p class="m-2 pb-3 text-center">هل لديك حساب؟<a href="{{ route('login.store') }}" class=" fw-bold">سجل الأن</a></p>
        </div>
    </form>
</x-register-layout>


