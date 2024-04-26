@props(['competitions'])

@if($competitions->count())
    @foreach($competitions as $competition)
<div class="row">
    <div class="col-6">
        <img
            class="ing"
            src="{{ asset($competition->image) ?
                asset('storage/' . $competition->image) :
                 asset('image/top-view-islamic.jpg') }}"
            alt="Competition Image">

        <p class="time " style="float: right;padding-right: 60px;">{{ $competition->created_at->diffForHumans() }}</p>

        <p class="mx-2">Student<span>Hub</span>
            <img  src="image/Ellipse 13.png">
        </p>
    </div>
    <div class="txt col-6 mt-5" dir="rtl">
        <br>
        <p>اعلان</p>
        <p>{{ $competition->description }}</p>
        <a href="{{route('student.create',$competition->slug)}}"  class="btn btn-primary">تسجيل</a>
    </div>
</div>
    @endforeach
@else
    <p style="text-align: center;color: red; font-weight: bolder">لا يوجد مسابقات حاليا حاول لاحقا</p>
@endif
