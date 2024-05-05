<x-course-layout />

    <!-- course card -->
<div class="cards-div d-flex justify-content-evenly flex-wrap col-lg-12">

    <x-course-card :courses="$courses" />

</div>
<div style="display: flex;align-items: center; justify-content: center;margin-bottom: 10px">{{ $courses->links() }}</div>
