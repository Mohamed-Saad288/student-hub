<form method="POST" action="{{ route('password.update') }}" style="max-width: 400px; margin: 0 auto; padding: 20px; background-color: #f9f9f9; border-radius: 8px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);">
    @csrf
    <div style="margin-bottom: 20px;">
        <label for="email" style="display: block; font-weight: bold; color: #333;">Email</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
        @error('email')
        <span style="color: red;">{{ $message }}</span>
        @enderror
    </div>
    <div style="margin-bottom: 20px;">
        <label for="password" style="display: block; font-weight: bold; color: #333;">New Password</label>
        <input id="password" type="password" name="password" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
        @error('password')
        <span style="color: red;">{{ $message }}</span>
        @enderror
    </div>
    <div style="margin-bottom: 20px;">
        <label for="password_confirmation" style="display: block; font-weight: bold; color: #333;">Confirm Password</label>
        <input id="password_confirmation" type="password" name="password_confirmation" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
    </div>
    <div>
        <button type="submit" style="background-color: #ff6600; color: #fff; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;">Reset Password</button>
    </div>
</form>
