@include('layouts.headcontent')

    <body>

        @include('layouts.navcontent')

        <div class="content text-center">
            @yield('content')
        </div>

        @include('layouts.footercontent')


    </body>

</html>
