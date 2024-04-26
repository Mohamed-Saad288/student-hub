
<x-post-layout>

<!-- section one -->
<div class="container posts-content">
    <div class="row">
        <div class="col w-70 ">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="media mb-3">
                        <div class="flex-div">
                            <h2>Student<span>Hub</span></h2>
                        </div>
                    </div>

                    <p>
                        {{ $post->description }}
                    </p>
                    <!-- <a href="javascript:void(0)" class="ui-rect ui-bg-cover" style="background-image: url('image/Rectangle\ 53.png');"></a> -->
                    <div class="image">
                        <img
                            src="{{ asset($post->image) ?
                            asset('storage/' . $post->image) :
                             asset('image/top-view-islamic.jpg') }}"
                            class="card-img-top"
                            alt="Post Image">
                    </div>
                </div>
                <div class="card-footer">
                    <!-- <a href="javascript:void(0)" class="d-inline-block text-muted ml-3">
                        <strong>12</strong> <small class="align-middle">Comments</small>
                    </a> -->
                </div>
            </div>
        </div>
    </div>
</div>


</x-post-layout>




