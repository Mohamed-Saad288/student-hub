<div style="text-align: center; margin-bottom: 20px;">
    <h3 style="color: grey; font-weight: bold;">Don't Worry if You Forgot Your Password</h3>
</div>

<form method="POST" action="{{ route('password.email') }}" style="max-width: 400px; margin: 0 auto; padding: 20px; background-color: #f9f9f9; border-radius: 8px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);">
    @csrf
    <div style="margin-bottom: 20px;">
        <label for="email" style="display: block; font-weight: bold; color: #333;">Email</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
        @error('email')
        <span style="color: red;">{{ $message }}</span>
        @enderror
    </div>
    <div>
        <button type="submit" style="background-color: #ff6600; color: #fff; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;">Send Password Reset Link</button>
    </div>
</form>


