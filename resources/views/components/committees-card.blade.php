@props(['name' , 'image' , 'url'])

<div class="item col-lg-3">
    <img src="{{ $image }}" alt="user1">
    <P> <a href="{{ $url }}">{{ $name }}</a></P>
</div>
