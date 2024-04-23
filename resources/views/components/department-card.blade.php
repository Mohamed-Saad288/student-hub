@props(['name' , 'image' , 'style_css' => 'item col-lg-3' , 'route'])
<div class="{{ $style_css }}">
    <img src="{{ $image }}" alt="user1">
    <P>{{ $name }}</P>

    <a href="physics.html" dir="ltr" class="btn">المزيد</a>
</div>
