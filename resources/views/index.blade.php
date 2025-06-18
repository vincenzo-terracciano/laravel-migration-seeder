@extends('layouts.master')

@section('content')
    <h2 class="text-center mb-4">Departing Trains</h2>

    <div class="row g-4">
        @foreach ($trains as $train)
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h3 class="card-title">{{ $train->company }}</h3>
                        <div class="card-text">
                            <ul class="list-unstyled">
                                <li>
                                    
                                    <strong>From:</strong> {{ $train->departure_station }}
                                </li>
                                <li>

                                    <strong>To:</strong> {{ $train->arrival_station }}
                                </li>
                                <li>

                                    <strong>Departure:</strong> {{ \Carbon\Carbon::parse($train->departure_time)->format('d/m/Y H:i') }}
                                </li>
                                <li>

                                    <strong>Arrival:</strong> {{ \Carbon\Carbon::parse($train->arrival_time)->format('d/m/Y H:i') }}
                                </li>
                                <li>
                                    
                                    <strong>Code:</strong> {{ $train->train_code }}
                                </li>
                                <li>

                                    <strong>Carriage:</strong> {{ $train->carriages }}
                                </li>
                                <li>
                                    
                                    <strong>On Time:</strong> {{ $train->is_on_time ? '✔️' : '❌' }}
                                </li>
                                <li>

                                    <strong>Cancelled:</strong> {{ $train->is_cancelled ? '✔️' : '❌' }}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection