@props(['name' , 'image' , 'url'])

<div class="item col-lg-3">
    <a href="{{ $url }}">
        <img src="{{ $image }}" alt="user1">
        <P> {{ $name }}</P>
    </a>
</div>
