@extends('../layout/' . $layout)

@section('head')
    <title>Error Page - QRding</title>
@endsection

@section('content')
    <div class="container">
        <!-- BEGIN: Error Page -->
        <div class="error-page flex flex-col lg:flex-row items-center justify-center h-screen text-center lg:text-left">
            <div class="-intro-x lg:mr-20">
                <img alt="Not found!" class="h-48 lg:h-auto" src="{{ asset('build/assets/images/error-illustration.svg') }}">
            </div>
            <div class="text-white mt-10 lg:mt-0">
                <div class="intro-x text-8xl font-medium">404</div>
                <div class="intro-x text-xl lg:text-3xl font-medium mt-5">Oops. Cette page est introuvable.</div>
                <div class="intro-x text-lg mt-3">Vous avez peut-être saisi une adresse incorrecte ou la page a peut-être été déplacée.</div>
                <a href="{{ route('dashboard') }}" class="intro-x btn py-3 px-4 text-white border-white dark:border-darkmode-400 dark:text-slate-200 mt-10">Retour à la page d'accueil</a>
            </div>
        </div>
        <!-- END: Error Page -->
    </div>
@endsection
