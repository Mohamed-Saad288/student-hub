@props(['name' , 'image' , 'style_css' => 'item col-lg-4' , 'url'])
<div class="{{ $style_css }}">
    <img src="{{ $image }}" alt="user1">
    <P>{{ $name }}</P>

    <a href="{{ $url }}" dir="ltr" class="btn">المزيد</a>
</div>
