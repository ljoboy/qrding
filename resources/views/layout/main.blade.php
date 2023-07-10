@extends('../layout/base')

@section('body')
    <body class="py-5">
        @yield('content')
        @include('../layout/components/dark-mode-switcher')

        <!-- BEGIN: JS Assets-->
        @vite('resources/js/app.js')
        <!-- END: JS Assets-->

        @yield('script')
    </body>
@endsection
