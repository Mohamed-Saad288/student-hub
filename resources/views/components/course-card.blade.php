@props(['courses'])

@if($courses->count())
    @foreach($courses as $course)
<div class="container ">
    <div class="card-container">
        <div class="row">
            <div class="card col-4">
                <h2>{{ $course->name }}</h2>
                <p>{{ $course->description }}</p>
                <span>{{ $course->instructor }}</span>
                <a href="{{ $course->link }}"><button>open</button></a>
            </div>

        </div>
    </div>
</div>
@endforeach
@else
    <p style="text-align: center;color: red; font-weight: bolder">لا يوجد كورسات حاليا حاول لاحقا</p>
@endif
