<x-competition-layout>
<!-- head -->

@include('_competition-head');


<!-- section one -->

    <x-competition-style>

        <x-competition-card :competitions="$competitions" />


    </x-competition-style>


</x-competition-layout>
<div style="display: flex;align-items: center; justify-content: center;margin-bottom: 10px">{{ $competitions->links() }}</div>
