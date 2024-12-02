@include('includes.header')
@include('layouts.navigation')

<body class="d-flex justify-content-center align-items-center">
    <div class="container-fluid mx-5 mt-5">
        <div class="row ">

            @yield('aside')
            <div class="col-md-8  p-0">

                @include('includes.navbar')

                @yield('content1')

            </div>
        </div>
        @yield('content2')

        @include('includes.footer')
    </div>
</body>

</html>
