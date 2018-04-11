@extends('master') @section('title', 'Valley Tech | Projects') @section('content')
<div class="container-fluid">
    <div class="row justify-content-center jumbotron">
        <div class="col-6">
            <p class="text-white">All projects listed here are <b>working web or mobile applications that our developers have created during their time at Valley Tech. Play with them and see what our alumni can do.</p>
            <form method="GET" action="/">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search for projects" aria-label="developers" aria-describedby="basic-addon1" name="full_name">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    @if (strlen($query) > 0)
        <h2 class="mb-4">Search Results for "{{ $query }}"</h2>
    @else
        <h2 class="mb-4">Developers & Designers</h2>
    @endif

    <div class="row student-directory">
        {{-- @foreach($students as $student)
        <div class="col-3">
            <div class="card mb-3">
                <a href="/students/{{ $student->id }}"><img class="card-img-top" src="/img/students/{{ str_replace(" ", "", $student->full_name) }}.jpg" alt="Card image cap"></a>
                <div class="card-body">
                    <a href="/students/{{ $student->id }}"><h5 class="card-title">{{ $student->full_name }}</h5></a>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
        @endforeach --}}
    </div>
</div>
@endsection
