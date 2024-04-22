<x-login-layout>
    <form action="{{route('login.store')}}" method="POST">
        @csrf
<!-- Email input -->

<x-form.input label="Email" name="email" placeHolder="Enter Your Email" type="email" icon="icon bi bi-envelope" />

<!-- password input -->

<x-form.input label="Password" name="password" placeHolder="Enter Your Password" type="password" icon="icon bi-eye" />



<!-- forgot link  -->

<div class="col">
    <a href="#!">Forgot password?</a>
</div>

<!--sign up button  -->

<button class="btn  col-12 mb-5 mt-5 btn-lg " type="submit">Login</button>


<div>
    <p
        class="m-2 pb-3 text-center">Don't have an account? <a href="{{route('register.create')}}" class=" fw-bold">Sign Up</a>

    </p>

</div>
    </form>
</x-login-layout>
