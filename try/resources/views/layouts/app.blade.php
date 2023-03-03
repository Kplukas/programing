<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body class="bg-dark">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-secondary border border-4 border-end-0 border-start-0 border-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <svg width="248.17001190185545" height="34.23034646922144" viewBox="0 0 406 56" class="css-1j8o68f">
                        <defs id="SvgjsDefs1382"></defs>
                        <g id="SvgjsG1383" featurekey="symbolFeature-0" transform="matrix(1.6571969696969697,0,0,1.6571969696969697,0,2)" fill="#111111">
                            <g xmlns="http://www.w3.org/2000/svg" display="none">
                                <rect x="-69.333" y="-18.667" display="inline" fill="#111111" width="473.333" height="236"></rect>
                            </g>
                            <g xmlns="http://www.w3.org/2000/svg" display="none">
                                <g display="inline">
                                    <g>
                                        <polygon fill="#111111" points="32,15.976 15.976,32 0,16.024    "></polygon>
                                    </g>
                                    <g>
                                        <polygon points="23.347,15.989 15.989,23.347 8.653,16.011    "></polygon>
                                    </g>
                                    <g>
                                        <polygon fill="#111111" points="0,16.024 16.024,0 32,15.976    "></polygon>
                                    </g>
                                    <g>
                                        <polygon fill="#111111" points="8.653,16.011 16.011,8.653 23.347,15.989    "></polygon>
                                    </g>
                                </g>
                            </g>
                            <g xmlns="http://www.w3.org/2000/svg" display="none">
                                <g display="inline">
                                    <path fill="#111111" d="M16,1c8.271,0,15,6.729,15,15s-6.729,15-15,15S1,24.271,1,16S7.729,1,16,1 M16,0C7.163,0,0,7.163,0,16    s7.163,16,16,16s16-7.163,16-16S24.837,0,16,0L16,0z"></path>
                                </g>
                                <g display="inline">
                                    <path fill="#111111" d="M13.034,6.153l2.259,2.259L16,9.119l0.707-0.707l2.259-2.259l0.744,0.744l-2.259,2.259l-0.707,0.707    l0.707,0.707l2.259,2.259l-0.744,0.744l-2.259-2.259L16,10.607l-0.707,0.707l-2.259,2.259l-0.744-0.744l2.259-2.259l0.707-0.707    l-0.707-0.707L12.29,6.897L13.034,6.153 M18.966,4.738L16,7.705l-2.966-2.966l-2.158,2.158l2.966,2.966l-2.966,2.966l2.158,2.158    L16,12.021l2.966,2.966l2.158-2.158l-2.966-2.966l2.966-2.966L18.966,4.738L18.966,4.738z"></path>
                                </g>
                                <g display="inline">
                                    <path fill="#111111" d="M13.034,18.427l2.259,2.259L16,21.393l0.707-0.707l2.259-2.259l0.744,0.744l-2.259,2.259l-0.707,0.707    l0.707,0.707l2.259,2.259l-0.744,0.744l-2.259-2.259L16,22.881l-0.707,0.707l-2.259,2.259l-0.744-0.744l2.259-2.259l0.707-0.707    l-0.707-0.707l-2.259-2.259L13.034,18.427 M18.966,17.013L16,19.979l-2.966-2.966l-2.158,2.158l2.966,2.966l-2.966,2.966    l2.158,2.158L16,24.295l2.966,2.966l2.158-2.158l-2.966-2.966l2.966-2.966L18.966,17.013L18.966,17.013z"></path>
                                </g>
                            </g>
                            <g xmlns="http://www.w3.org/2000/svg" display="none">
                                <g display="inline">
                                    <rect x="2" y="2" fill="#111111" width="28" height="28"></rect>
                                </g>
                                <g display="inline">
                                    <g>
                                        <path fill="#111111" d="M16,31.5C7.453,31.5,0.5,24.547,0.5,16S7.453,0.5,16,0.5S31.5,7.453,31.5,16S24.547,31.5,16,31.5z"></path>
                                    </g>
                                    <g>
                                        <g>
                                            <path d="M16,1c8.271,0,15,6.729,15,15s-6.729,15-15,15S1,24.271,1,16S7.729,1,16,1 M16,0C7.163,0,0,7.163,0,16s7.163,16,16,16      s16-7.163,16-16S24.837,0,16,0L16,0z"></path>
                                        </g>
                                    </g>
                                </g>
                                <g display="inline">
                                    <g>
                                        <polygon fill="#111111" points="16,11.314 13.034,14.28 11.582,12.829 14.549,9.863 11.582,6.896 13.034,5.445 16,8.412      18.966,5.445 20.418,6.896 17.451,9.863 20.418,12.829 18.966,14.28    "></polygon>
                                    </g>
                                    <g>
                                        <path d="M13.034,6.153l2.259,2.259L16,9.119l0.707-0.707l2.259-2.259l0.744,0.744l-2.259,2.259l-0.707,0.707l0.707,0.707     l2.259,2.259l-0.744,0.744l-2.259-2.259L16,10.607l-0.707,0.707l-2.259,2.259l-0.744-0.744l2.259-2.259l0.707-0.707l-0.707-0.707     L12.29,6.897L13.034,6.153 M18.966,4.738L16,7.705l-2.966-2.966l-2.158,2.158l2.966,2.966l-2.966,2.966l2.158,2.158L16,12.021     l2.966,2.966l2.158-2.158l-2.966-2.966l2.966-2.966L18.966,4.738L18.966,4.738z"></path>
                                    </g>
                                </g>
                                <g display="inline">
                                    <g>
                                        <polygon fill="#111111" points="16,23.589 13.034,26.555 11.582,25.104 14.549,22.137 11.582,19.171 13.034,17.72 16,20.686      18.966,17.72 20.418,19.171 17.451,22.137 20.418,25.104 18.966,26.555    "></polygon>
                                    </g>
                                    <g>
                                        <path d="M13.034,18.427l2.259,2.259L16,21.393l0.707-0.707l2.259-2.259l0.744,0.744l-2.259,2.259l-0.707,0.707l0.707,0.707     l2.259,2.259l-0.744,0.744l-2.259-2.259L16,22.881l-0.707,0.707l-2.259,2.259l-0.744-0.744l2.259-2.259l0.707-0.707l-0.707-0.707     l-2.259-2.259L13.034,18.427 M18.966,17.013L16,19.979l-2.966-2.966l-2.158,2.158l2.966,2.966l-2.966,2.966l2.158,2.158     L16,24.295l2.966,2.966l2.158-2.158l-2.966-2.966l2.966-2.966L18.966,17.013L18.966,17.013z"></path>
                                    </g>
                                </g>
                            </g>
                            <g xmlns="http://www.w3.org/2000/svg">
                                <g>
                                    <path d="M0,16.024L15.976,32L32,15.976L16.024,0L0,16.024z M15.989,23.347l-7.336-7.336l14.694-0.022L15.989,23.347z"></path>
                                </g>
                            </g>
                        </g>
                        <g id="SvgjsG1384" featurekey="textGroupContainer" transform="matrix(1,0,0,1,405,0)" fill="#111111">
                            <rect xmlns="http://www.w3.org/2000/svg" y="0" height="1" width="1" opacity="0"></rect>
                            <rect xmlns="http://www.w3.org/2000/svg" y="0" x="-332" width="3" height="56"></rect>
                        </g>
                        <g id="SvgjsG1385" featurekey="vMvB0T-0" transform="matrix(1.97348289075841,0,0,1.97348289075841,88.00030816100586,2.0801634151016017)" fill="#111111">
                            <path d="M1.66 6.300000000000001 q1.62 -0.04 2.77 -0.06 t1.85 -0.02 q2.18 0 3.43 0.91 t1.25 2.73 q0 0.88 -0.5 1.64 t-1.28 1.1 q0.5 0.16 0.95 0.51 t0.77 0.82 t0.51 1.02 t0.19 1.13 q0 2.06 -1.31 3.05 t-3.71 0.99 q-0.74 0 -1.96 -0.02 t-2.96 -0.06 l-0.14 -0.14 l0 -13.46 z M6.34 13.98 l-1.66 0 l0 3.9 q0.52 -0.02 1.17 0 t1.21 -0.1 t0.94 -0.58 t0.38 -1.28 q0 -0.78 -0.49 -1.36 t-1.55 -0.58 z M4.68 8.48 l0 3.22 l1.42 0 q0.96 0 1.35 -0.47 t0.39 -1.15 t-0.4 -1.13 t-1.34 -0.45 l-0.81 0 t-0.61 -0.02 z M16.96 15.96 l-0.02 1.44 l0 0.02 q0.92 -0.04 1.48 -0.04 l4.64 0 q0 0.74 -0.06 1.14 q-0.24 1.54 -2.04 1.54 l-5.32 0 q-0.86 0 -1.35 -0.5 t-0.49 -1.36 l0 -11.72 l0.14 -0.14 l8.62 0 q0.12 0.58 0.12 1.26 t-0.28 1.42 l-5.46 0 l0.02 1.44 l0 1.4 q0.52 -0.02 1.36 -0.02 l3.06 0 q0.18 0.56 0.18 1.28 t-0.18 1.32 l-4.42 0 l0 1.52 z M28.6 17.14 q-0.54 0 -0.8 -0.02 l-0.86 2.9 q-0.48 0.12 -1.34 0.12 q-0.96 0 -1.56 -0.22 l-0.1 -0.16 l4.4 -13.42 q0.78 -0.12 1.82 -0.12 q1.18 0 1.88 0.14 l4.32 13.44 q-0.7 0.38 -1.58 0.38 q-1.04 0 -1.46 -0.36 t-0.72 -1.38 l-0.38 -1.32 q-0.26 0.02 -0.78 0.02 l-2.84 0 z M28.540000000000003 14.620000000000001 l0.8 -0.02 l1.46 0 q0.1 0 0.35 0.01 t0.37 0.01 l-0.34 -1.24 q-0.48 -1.68 -1.1 -4.12 l-0.12 0 q-0.16 0.86 -0.96 3.82 z M48.660000000000004 6.34 l0 8.62 q0 2.56 -1.4 3.95 t-4 1.39 t-4.01 -1.39 t-1.41 -3.95 l0 -8.62 l0.14 -0.14 l1.18 0 q1.9 0 1.9 2.04 l0 6.76 q0 1.4 0.5 2.08 t1.7 0.68 t1.7 -0.68 t0.5 -2.08 l0 -8.66 q0.62 -0.12 1.6 -0.12 q0.96 0 1.6 0.12 z M56.68000000000001 8.98 l0.02 1.48 l0 9.54 q-0.68 0.12 -1.62 0.12 t-1.58 -0.12 l0 -11.02 l-1.28 0.02 l-2.06 0 q-0.12 -0.58 -0.12 -1.33 t0.12 -1.33 l9.9 0 q0.16 0.52 0.16 1.26 t-0.4 1.07 t-1.28 0.33 l-0.58 0 l-1.26 -0.02 l-0.02 0 z M66.74000000000001 9.72 l1.34 -3.38 q0.52 -0.12 1.34 -0.12 q0.88 0 1.52 0.24 l0.14 0.16 l-3.88 9.18 l0 4.2 q-0.62 0.12 -1.6 0.12 t-1.6 -0.12 l0 -4.28 l-3.86 -9 q0.92 -0.54 1.76 -0.54 t1.21 0.29 t0.65 0.99 l0.96 2.38 q0.52 1.28 0.9 2.86 l0.12 0 q0.32 -1.26 1 -2.98 z M80.12000000000002 9.06 l0.02 1.56 l0 1.26 l4.28 0 q0.16 0.6 0.16 1.31 t-0.16 1.31 l-4.28 0 l0 5.5 q-0.64 0.12 -1.6 0.12 t-1.6 -0.12 l0 -13.54 l0.14 -0.12 l8.56 0 q0.12 0.5 0.12 1.25 t-0.41 1.11 t-1.29 0.36 l-3.94 0 z M90.42000000000002 16.28 q0.54 1.56 2.18 1.56 q0.82 0 1.33 -0.41 t0.8 -1.04 t0.39 -1.41 t0.1 -1.54 q0 -0.7 -0.05 -1.56 t-0.29 -1.61 t-0.76 -1.26 t-1.52 -0.51 q-0.96 0 -1.47 0.49 t-0.76 1.21 t-0.31 1.53 t-0.06 1.43 q0 0.92 0.09 1.64 t0.33 1.48 z M88.80000000000001 19.04 q-2.14 -1.78 -2.14 -5.86 q0 -1.76 0.41 -3.09 t1.18 -2.23 t1.87 -1.36 t2.48 -0.46 t2.49 0.46 t1.88 1.37 t1.18 2.24 t0.41 3.07 t-0.41 3.07 t-1.18 2.23 t-1.88 1.36 t-2.49 0.46 q-2.28 0 -3.8 -1.26 z M110.60000000000002 10.56 q0 0.66 -0.2 1.25 t-0.53 1.06 t-0.78 0.82 t-0.93 0.53 q1.04 0.38 1.54 1.84 l0.6 1.7 q0.34 1 1 1.48 q-0.3 0.4 -0.9 0.67 t-1.32 0.27 t-1.12 -0.41 t-0.74 -1.43 l-0.72 -2.1 q-0.22 -0.6 -0.59 -0.92 t-1.11 -0.32 l-0.82 0 l0 5 q-0.64 0.12 -1.6 0.12 t-1.58 -0.12 l0 -13.56 l0.14 -0.14 q1.74 -0.04 2.93 -0.06 t1.87 -0.02 q1.1 0 2 0.27 t1.53 0.81 t0.98 1.36 t0.35 1.9 z M103.98000000000002 8.62 l0 3.92 q0.9 0 1.54 -0.03 t1.03 -0.24 t0.59 -0.59 t0.2 -1.1 q0 -1.94 -1.88 -1.94 l-0.83 0 t-0.65 -0.02 z M122.54000000000002 9.72 l1.34 -3.38 q0.52 -0.12 1.34 -0.12 q0.88 0 1.52 0.24 l0.14 0.16 l-3.88 9.18 l0 4.2 q-0.62 0.12 -1.6 0.12 t-1.6 -0.12 l0 -4.28 l-3.86 -9 q0.92 -0.54 1.76 -0.54 t1.21 0.29 t0.65 0.99 l0.96 2.38 q0.52 1.28 0.9 2.86 l0.12 0 q0.32 -1.26 1 -2.98 z M131.00000000000003 16.28 q0.54 1.56 2.18 1.56 q0.82 0 1.33 -0.41 t0.8 -1.04 t0.39 -1.41 t0.1 -1.54 q0 -0.7 -0.05 -1.56 t-0.29 -1.61 t-0.76 -1.26 t-1.52 -0.51 q-0.96 0 -1.47 0.49 t-0.76 1.21 t-0.31 1.53 t-0.06 1.43 q0 0.92 0.09 1.64 t0.33 1.48 z M129.38000000000002 19.04 q-2.14 -1.78 -2.14 -5.86 q0 -1.76 0.41 -3.09 t1.18 -2.23 t1.87 -1.36 t2.48 -0.46 t2.49 0.46 t1.88 1.37 t1.18 2.24 t0.41 3.07 t-0.41 3.07 t-1.18 2.23 t-1.88 1.36 t-2.49 0.46 q-2.28 0 -3.8 -1.26 z M152 6.34 l0 8.62 q0 2.56 -1.4 3.95 t-4 1.39 t-4.01 -1.39 t-1.41 -3.95 l0 -8.62 l0.14 -0.14 l1.18 0 q1.9 0 1.9 2.04 l0 6.76 q0 1.4 0.5 2.08 t1.7 0.68 t1.7 -0.68 t0.5 -2.08 l0 -8.66 q0.62 -0.12 1.6 -0.12 q0.96 0 1.6 0.12 z"></path>
                        </g>
                    </svg>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>


                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @if(!Auth::user())

                        @elseif(Auth::user()->role == 'customer')

                        @elseif(Auth::user()->role == 'admin')
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expand="false" v-pre>
                                Salon
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{route('salon-index')}}">List (admin)</a>
                                <a class="dropdown-item" href="{{route('salon-index2')}}">List (customer)</a>
                                <a class="dropdown-item" href="{{route('salon-create')}}">New</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expand="false" v-pre>
                                Service
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{route('service-index')}}">List (admin)</a>
                                <a class="dropdown-item" href="{{route('service-index2')}}">List (customer)</a>
                                <a class="dropdown-item" href="{{route('service-create')}}">New</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expand="false" v-pre>
                                Master
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{route('master-index')}}">List (admin)</a>
                                <a class="dropdown-item" href="{{route('master-index2')}}">List (customer)</a>
                                <a class="dropdown-item" href="{{route('master-create')}}">New</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expand="false" v-pre>
                                Order
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{route('order-index')}}">List (admin)</a>
                                <a class="dropdown-item" href="{{route('order-index2')}}">My orders</a>
                            </div>
                        </li>
                        @endif
                        @guest

                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @endif

                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
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
</html>
