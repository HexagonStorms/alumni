@extends('master') @section('title', 'Valley Tech | Projects') @section('content')
<div class="container-fluid">
    <div class="row justify-content-center jumbotron jumbotron-projects">
        <div class="col-md-8 mt-5">
            <p class="text-white mt-5">
                <span class="headline mt-3">Take a look at what we've built.</span><br>
                <span class="subline">Working applications our developers & designers created at Valley Tech.</span>
            </p>
            <form method="GET" action="/projects">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search for projects" aria-label="developers" aria-describedby="basic-addon1" name="name">
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
        <h2 class="mb-4">Browse Apps</h2>
    @endif

    <div class="row student-directory">
        @foreach($projects as $project)
        <div class="col-lg-3 col-md-6">
            <div class="card mb-3">
                <a href="/projects/{{ $project->id }}"><img class="card-img-top" src="{{ $project->image_path }}" alt="Card image cap"></a>
                <div class="card-body">
                    <a href="/projects/{{ $project->id }}"><h5 class="card-title">{{ $project->name }}</h5></a>
                    <p class="card-text">{{ $project->summary }}</p>
                    <p>
                        <div class="row">
                            @foreach($project->projectStudents as $ps)
                                <div class="col-sm-6 mt-3 text-center">
                                    <a class="no-underline" href="/students/{{$ps->student_id}}">
                                        <img class="img-fluid collaborator" src="/img/students/{{ str_replace(" ", "", $ps->student->full_name) }}.jpg" title="{{$ps->student->full_name}}" alt="{{$ps->student->full_name}}" />
                                        <p >{{$ps->student->full_name}}</p>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </p>

                    {{-- @if (strlen($project->url) > 0)
                        <a href="{{ $project->url }}" class="btn btn-primary">View</a>
                    @endif --}}
                    <a href="{{ $project->github }}" class=" ml-2 btn btn-secondary"><i class="fab fa-github"></i> Github</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
