<!DOCTYPE html>
<html lang="en">
<head>

    @include('references')

    @yield('head')

    <title>@yield('title')</title>
    
    @hasSection ('meta-tag')
        <meta name="description" content= "@yield('meta-tag')">
    @else
        <meta name="description" content= "@yield('title')">
    @endif

</head>

<body>

    <div class="container" id="client">

        {{-- Header Bar --}}
        <div class="header-bar rounded">
                @include('header-bar')
        </div><br>


        {{-- The Welcome Section --}}
        @section('welcome')
        @show



        {{-- The Content Section --}}
        @hasSection ('content')

            <div class="nav" id="heading-scroller" v-show=false>
                <a v-for="heading in main_headings" :href="'#'+ heading[0]">@{{heading[1]}}</a>
            </div>
            <div data-spy="scroll" data-target="#heading-scroller">

            @section('content')
            @show

            </div>
        @else
        @endif


        {{-- Footer Bar --}}
        <br>
        <div class=" rounded footer-bar">
                @include('footer-bar')
        </div>

    </div>

    @hasSection('welcome')
        <script src="/js/welcome.js"></script>
    @else
        <script src="/js/client.js"></script>
    @endif
    <script src="/js/app.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amita">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quattrocento+Sans">


    {{-- Development content --}}
    <div class="container-fluid" id="develop">

        @section('develop')
        @show

    </div>
    @yield('scripts')

</body>
</html>