@extends('master')
@section('title')
Valley Tech | {{ $student->first_name }} {{ $student->last_name }}
@endsection
@section('content')

    <div class="container">
        <div class="row">
            <div class="col">
                <h3>{{ $student->first_name }} {{ $student->last_name }}</h3>
                <p>Graduated {{ $student->season_cohort['graduation_month'] }}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <img src="/img/students/{{ $student->first_name }}{{ $student->last_name }}.jpg" alt="{{ $student->first_name }} {{ $student->last_name }}" title="{{ $student->first_name }} {{ $student->last_name }}" class="img-fluid" />
            </div>
            <div class="col-md-9">

            </div>
        </div>
    </div>

@endsection
