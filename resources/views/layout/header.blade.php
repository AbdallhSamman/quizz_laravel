<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">




    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
    crossorigin="anonymous"
  />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link
      href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{asset('css/style-main.css')}}" />
    <link rel="icon" href="images/logoquiz.png">
    <title>Quizlet</title>
    {{-- <script defer src="{{asset('script.js')}}"></script>  --}}
  </head>
  <body>
    
        <nav class="navbar navbar-expand-lg bg-white navbar-light navbar-background">
          <div class="container">
            <a class="navbar-brand" href="{{ route('index') }}"><img
              src="images/logoquiz.png"
              alt="Quizlet-Logo"
              class="nav__logo"
              designer="Awni"
              id="logo"
              data-version-number="3.0"
            /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto mb-2 mb-lg-0 d-flex justify-content-around">
                <li class="nav-item px-5">
                  <a class="nav-link active fw-bold text-dark mx-2 h3" aria-current="page" href="{{ route('index') }}">Home</a>
                </li>
               
                <li class="nav-item px-5">
                  <a class="nav-link h3 fw-bold  mx-2" href="{{ route('exams.index') }}">Exams</a>
                </li>
                <li class="nav-item px-5">
                  <a class="nav-link h3 fw-bold mx-2" href="html/contactus.html">Contact US</a>
                </li>




                 <!-- Right Side Of Navbar -->
                
                  <!-- Authentication Links -->
                  @guest
                                @if (Route::has('login'))
                                <li class="nav-item mr-4">
                                    <a class="nav-link text-white sign-my" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                @endif

                                @if (Route::has('register'))
                                <li class="nav-item mr-4">
                                    <a class="nav-link text-white sign-my" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                                @endif
                                @else
                                <li>
                                    <a class="p-5 text-white" role="button" style="padding-right:40px !important;">
                                        {!! "Welocme, " . "<span style='color:#FFA801'>".Auth::user()->name."</span>" !!}
                                    </a>
                                </li>
                                <div>
                                    <a class="" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <button class="btn btn-danger mr-5">
                                            {{ __('Logout') }}
                                        </button>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                                @endguest
              </ul>
            </div>
          </div>
        </nav>