@props(['posts'])
@if($posts->count())
    @foreach($posts as $post)
<div class="card swiper-slide">
    <div class="image-content">
        <span class="overlay"></span>
        <div class="card-image">
            <img
                src="{{ asset($post->image) ?
                asset('storage/' . $post->image) :
                 asset('image/Rectangle 53.png') }}"
                class="card-img-top"
                alt="Post Image">
        </div>
        <div class="card-body ">
            <p class="time " style="float: right;color: grey">{{ $post->created_at->diffForHumans() }}</p>
            <p>Student<span>Hub</span>
                <img src="image/Ellipse 13.png">
            </p>
            <h5 class="card-title" dir="rtl">الاعلان</h5>
            <p class="card-text" dir="rtl">{{ $post->description }}</p>
            <div class="card-footer">

            </div>
        </div>
    </div>
</div>
    @endforeach
@endif
