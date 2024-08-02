@extends('layouts.app')

@section('auth')            
            
    

    @include('layouts.navbars.auth.sidebar')
    {{--<main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">--}}
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"  data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        @include('layouts.navbars.auth.nav')    
        <div class="page-wrapper">

            @yield('content')
        </div>
        @include('layouts.footers.auth.footer')
    </div>
    {{--</main>--}}
    
@endsection