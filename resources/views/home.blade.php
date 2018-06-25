@extends('master') @section('title', 'Valley Tech | Alumni Home') @section('content')
<div class="container-fluid">
    <div class="row justify-content-center jumbotron jumbotron-alumni">
        <div class="col-md-8 mt-5">
            <p class="text-white searchtext mb-5">Ernesto has a karate trophy. Engaging, passionate, and motivated.<br /> Find your next Valley Tech developer or designer to join your team.</p>
            <form method="GET" action="/">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search for developers" aria-label="developers" aria-describedby="basic-addon1" name="full_name">
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
        <h2 class="mb-4 vta-header">DEVELOPERS & DESIGNERS</h2>
    @endif

    <div class="row student-directory">
        @foreach($students as $student)
        <div class="col-lg-3 col-md-6">
            <div class="card mb-3">
                <a href="/students/{{ $student->id }}"><img class="card-img-top" src="/img/students/{{ str_replace(" ", "", $student->full_name) }}.jpg" alt="Card image cap"></a>
                <div class="card-body">
                    <a href="/students/{{ $student->id }}"><h5 class="card-title">{{ $student->full_name }}</h5></a>
                    <p>
                        <span class="specialization">{{ $student->specialization['title'] }}</span>
                    </p>
                    <p class="card-text"><em>"{{ $student->quote or "The only way to do great work is to love what you do. – Steve Jobs" }}"</em></p>
                    <p class="card-text"><small class="text-muted">Graduated {{ $student->season_cohort['graduation_month'] }}</small></p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
