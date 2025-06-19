@extends('layouts.master')

@section('content')
    <h2 class="text-center mb-4">Departing Trains</h2>

    <div class="row g-4">
        @foreach ($trains as $train)
            <div class="col-12 col-md-6 col-lg-4">
                
                <x-card :train="$train" />

            </div>
        @endforeach
    </div>
@endsection