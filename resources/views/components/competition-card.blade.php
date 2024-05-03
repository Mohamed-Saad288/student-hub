@props(['competitions'])

@if($competitions->count())
    @foreach($competitions as $competition)

        <div class="card" style="width: 18rem;">
            <img class="imgg" src="{{ asset($competition->image) ?
                asset('storage/' . $competition->image) :
                 asset('image/top-view-islamic.jpg') }}"
                 class="card-img-top" alt="...">

            <div class="card-body" id="com-title">
                <h5 class="card-title pt-3 pm-3" dir="rtl">أعــلان</h5>
                <p class="card-text">{{ $competition->description }}</p>
                <a href="{{route('student.create',$competition->slug)}}" class="btn btn-primary">تسجيل</a>
            </div>
            <div>
                <p class="time pt-3" style="float: right;">{{ $competition->created_at->diffForHumans() }}</p>

                <p class="mx-2 pt-3">Student<span>Hub</span>
                    <img  src="image/Ellipse 13.png">
                </p>
            </div>
        </div>

{{--<div class="row col-12" id="card-com">--}}
{{--    <div class="col-6">--}}
{{--        <img--}}
{{--            class="ing"--}}
{{--            src="{{ asset($competition->image) ?--}}
{{--                asset('storage/' . $competition->image) :--}}
{{--                 asset('image/top-view-islamic.jpg') }}"--}}
{{--            alt="Competition Image">--}}

{{--        <p class="time pt-3" style="float: right;">{{ $competition->created_at->diffForHumans() }}</p>--}}

{{--        <p class="mx-2 pt-3">Student<span>Hub</span>--}}
{{--            <img  src="image/Ellipse 13.png">--}}
{{--        </p>--}}
{{--    </div>--}}
{{--    <div class="txt col-6" dir="rtl">--}}
{{--        <br>--}}
{{--        <div class="com-title">--}}
{{--            <h1>اعـــلان</h1>--}}
{{--            <p>{{ $competition->description }}</p>--}}
{{--        </div>--}}
{{--        <a href="{{route('student.create',$competition->slug)}}"  class="btn btn-primary mt-5">تسجيل</a>--}}
{{--    </div>--}}
{{--</div>--}}
    @endforeach
@else
    <p style="text-align: center;color: red; font-weight: bolder">لا يوجد مسابقات حاليا حاول لاحقا</p>
@endif
