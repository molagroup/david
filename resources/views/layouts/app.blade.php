<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script defer src="{{ asset('js/app.js') }}"  ></script>
   
    <script  src="https://code.jquery.com/jquery-1.12.4.js"></script>

    <script defer src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


<script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>



    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{asset('external/css/bootstrap.min.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700|Work+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('external/fonts/icomoon/style.css')}}">
    <link rel="stylesheet" href="{{asset('external/fonts/flaticon/font/flaticon.css')}}">
  
    <link rel="stylesheet" href="{{asset('external/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('external/css/style.css')}}">
    

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fontawesome-iconpicker/3.2.0/js/fontawesome-iconpicker.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">


</head>
<body>
    

    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <div class="col-2">
                    <h2 class="mb-0 site-logo">
                      <a class="navbar-brand" href="{{ url('/') }}">
                      <img src="{{ URL::asset('images/molapriselogo.png') }}" id="mylogo">
                   </a>
                  </h2>
                  </div>
                {{-- <a class="navbar-brand" href="{{ url('/') }}">
                    
                    <img src="{{ URL::asset('images/molapriselogo.png') }}" id="mylogo">
                    {{ config('app.name', 'Laravel') }}
                </a> --}}
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('employer.register') }}">{{ __('Employer Register') }}</a>
                            </li>
                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('   Job Seeker Register') }}</a>
                                </li>
                            @endif


                        @else

                         @if(Auth::user()->user_type=='employer')

                        <li>
                            <a href="{{route('job.create')}}"><button class="btn btn-secondary">Post a job</button></a>
                        </li>
                        @endif

                        
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                
                                @if(Auth::user()->user_type=='employer')
                                    {{Auth::user()->company->cname}}
                                    
                                
                                @elseif(Auth::user()->user_type=='seeker')
                                    {{Auth::user()->name}}
                                    @else
                                    {{Auth::user()->name}}
                                @endif

                                    <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                @if(Auth::user()->user_type=='employer')
                                <a class="dropdown-item" href="{{ route('company.view') }}"
                                       >
                                        {{ __('Company') }}
                                    </a>
                                    <a class="dropdown-item" href="{{route('my.job')}}">
                                        MyJobs
                                    </a>
                                    <a class="dropdown-item" href="{{route('applicant')}}">Applicants</a>

                                @elseif(Auth::user()->user_type=='seeker')


                                    <a class="dropdown-item" href="{{route('user.profile')}}"
                                       >
                                        {{ __('Profile') }}
                                    </a>

                                    <a class="dropdown-item" href="{{route('home')}}"
                                       >
                                        {{ __('Saved jobs') }}
                                    </a>
                                    @else

                                    
                                 @endif

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>


    

    
</body>

{{-- <br><br>
	<br><br><br>
    <br><br>
	<br><br><br>
    <br><br>
	<br><br><br>
    <br><br><br>
@include('../partials.footer') --}}
@yield('jsplugins')
<script src="{{ asset('./laravel-ckeditor/ckeditor.js') }}"></script>

</html>


