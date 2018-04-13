@extends('master') @section('title') Valley Tech | {{ $student->full_name }} @endsection @section('content')
<div class="container-fluid student-banner mb-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col mt-5">
                <h1 class="student-name">{{ $student->full_name }}</h1>
                <p class="student-graduation-day">Graduated {{ $student->season_cohort['graduation_month'] }}</p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p class="student-quote text-white text-center">"{{ $student->quote or "The only way to do great work is to love what you do. – Steve Jobs"}}"</p>
            </div>
        </div>
    </div>
    <a href="/" alt="Back to Student Directory" title="Back to Student Directory"><i class="fas fa-arrow-alt-square-left back-arrow fa-3x"></i></a>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <img src="/img/students/{{ str_replace(" ", "", $student->full_name) }}.jpg" alt="{{ $student->full_name }}" title="{{ $student->full_name }}" class="img-fluid mb-3" />
            <p class="text-center"><span class="student-specialization">{{ $student->specialization['title'] }}</span></p>
            <a href="tel:{{ $student->phone }}"><p class="student-phone text-center mb-2">{{ $student->phone }}</p></a>

            @if (!empty($student->homepage))
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <a class="primary-link" href="{{ $student->homepage }}">
                            <i class="fas fa-browser"></i>
                        </a>
                        <a class="primary-link" href="http://www.{{ $student->homepage }}">
                            <span class="student-media ml-2">Portfolio</span>
                        </a>
                    </div>
                </div>
            @endif

            <div class="row justify-content-center">
                <div class="col-md-6">
                    <a class="primary-link" href="https://linkedin.com/{{ $student->linkedin }}">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a class="primary-link" href="https://linkedin.com/{{ $student->linkedin }}">
                        <span class="student-media ml-2">LinkedIn</span>
                    </a>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-6">
                    <a class="primary-link" href="https://github.com/{{ $student->github }}">
                        <i class="fab fa-github"></i>
                    </a>
                    <a class="primary-link" href="https://github.com/{{ $student->github }}">
                        <span class="student-media ml-2">Github</span>
                    </a>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-6">
                    <a class="primary-link" href="mailto:{{ $student->email }}">
                        <i class="fal fa-envelope-square"></i>
                    </a>
                    <a class="primary-link" href="mailto:{{ $student->email }}">
                        <span class="student-media ml-2">Email</span>
                    </a>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-6">
                    <a class="primary-link" href="/assets/{{ str_replace(" ", "", $student->full_name) }}.pdf">
                        <i class="fas fa-file-alt"></i>
                    </a>
                    <a class="primary-link" href="/assets/{{ str_replace(" ", "", $student->full_name) }}.pdf">
                        <span class="student-media ml-2">Resume</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-9 col-md-6">
            @if (!empty($student->video))
                <div class="row mb-4">
                    <div class="col">
                        <iframe width="100%" height="450px" src="{{ $student->video}}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                </div>
            @endif
            <div class="row">
                <div class="col">
                    @foreach($student->studentAnswers as $response)
                    <p class="question">{{ $response->question->question }}</p>
                    <p class="answer">{{ $response->answer }}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
