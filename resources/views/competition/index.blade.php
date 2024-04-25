<x-competition-layout>
<!-- head -->

@include('_competition-head');


<!-- section one -->

    <x-competition-style>

        <x-competition-card :competitions="$competitions" />


    </x-competition-style>

</x-competition-layout>
