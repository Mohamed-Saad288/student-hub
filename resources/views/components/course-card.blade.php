@props(['courses'])
@if($courses->count())
    @foreach($courses as $course)

            <div class="container card-div col-lg-4 ">
                <div class="card-container">
                    <div class="">
                        <div class="card ">
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
