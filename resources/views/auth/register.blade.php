<x-register-layout>
    <form method="POST" action="{{route('register.store')}}">
        @csrf
        <!-- Name input -->

        <x-form.input label="Name" name="name" placeHolder="Enter Your Name" type="text" icon="icon bi bi-person" />

        <!-- Email input -->

        <x-form.input label="Email" name="email" placeHolder="Enter Your Email" type="email" icon="icon bi bi-envelope" />

        <!-- password input -->

        <x-form.input label="Password" name="password" placeHolder="Enter Your Password" type="password" icon="icon bi-eye" />

        <!--confirm password input -->

        <x-form.input label="Confirm Password" name="password_confirmation" placeHolder="Confirm Password" type="password" icon="icon bi-eye" />

        <!--sign up button  -->

        <button class="btn col-12 mb-5 mt-5 btn-lg " type="submit">Register</button>

        <!-- signin link  -->

        <div >
            <p class="m-2 pb-3 text-center">Already have an account?<a href="login.html" class=" fw-bold">Sign in now</a></p>
        </div>
    </form>
</x-register-layout>


