<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="The Valley Technical Academy's Alumni Page. Browse the latest projects our students have created using the skills they learned in our program. Learn more about their background, skills, and passion for development." />
    <meta name="keywords" content="Valley Tech, Valley Technical Academy, alumni, web development, mobile development, career training, rgv, rio grande valley, tech school">
    <meta name="author" content="Josue Plaza">
    <link rel="stylesheet" type="text/css" href="/css/app.css" />
    <title>Valley Tech | Student Projects</title>

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><img src="/img/VTA-logo.png" width="175px" alt="Valley Technical Academy Logo" title="Valley Technical Academy" /></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                {{--
                <li class="nav-item">
                    <a class="nav-link" href="#">Projects</a>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link" href="#">Alumni</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Main Site</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <div class="col jumbotron">
            </div>
        </div>
        <div class="row student-directory">
            @foreach($students as $student)
                <div class="col-4">
                    <div class="card mb-3">
                        <img class="card-img-top" src="{{ $student->image }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{ $student->first_name }} {{ $student->last_name }}</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script src="/js/app.js"></script>
</body>

</html>
