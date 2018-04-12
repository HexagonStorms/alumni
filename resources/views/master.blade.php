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
    <link href="/css/fontawesome-all.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="/css/app.css" />
    <title>@yield('title')</title>

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <a class="navbar-brand" href="/"><img src="/img/VTA-logo.png" width="175px" alt="Valley Technical Academy Logo" title="Valley Technical Academy" /></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">

                <!-- <li class="nav-item">
                    <a class="nav-link" href="/">Alumni</a>
                </li> -->
                <!-- <li class="nav-item">
                    <a class="nav-link" href="/projects">Projects</a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link" href="http://valleytechrgv.com">Back to Main Site</a>
                </li>
            </ul>
        </div>
    </nav>
    @yield('content')

    <footer class="footer container-fluid pb-3 pt-5 px-5 mt-5">
        <div class="row ">
            <div class="col">
                <a class="white-link mr-3" href="https://www.facebook.com/valleytechrgv/"><i class="fab fa-facebook fa-2x"></i></a>
                <a class="white-link mr-3" href="https://twitter.com/valleytechrgv"><i class="fab fa-twitter-square fa-2x"></i></a>
                <a class="white-link mr-3" href="https://www.instagram.com/valleytechrgv/"><i class="fab fa-instagram fa-2x"></i></a>
                <a class="white-link mr-3" href="https://www.linkedin.com/in/valley-technical-academy-b97239149"><i class="fab fa-linkedin fa-2x"></i></i></a>
            </div>
            <div class="col text-right">
                <a class="grey-link" href="http://www.valleytechnicalacademy.com/terms-of-service/">Terms of Service</a>
                <a class="grey-link" href="http://www.valleytechnicalacademy.com/privacy/">Privacy Policy</a>
                <p>© {{ date("Y") }} Valley Technical Academy. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="/js/app.js"></script>
    @yield('bottomscript')
</body>

</html>
