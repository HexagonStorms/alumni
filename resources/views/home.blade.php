@extends('master')
@section('title', 'Valley Tech | Alumni Home')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col jumbotron">
        </div>
    </div>
    <div class="row student-directory">
        @foreach($students as $student)
            <div class="col-3">
                <div class="card mb-3">
                    <a href="/students/{{ $student->id }}"><img class="card-img-top" src="/img/students/{{ $student->first_name }}{{ $student->last_name }}.jpg" alt="Card image cap"></a>
                    <div class="card-body">
                        <a href="/students/{{ $student->id }}"><h5 class="card-title">{{ $student->first_name }} {{ $student->last_name }}</h5></a>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
