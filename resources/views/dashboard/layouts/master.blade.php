<!doctype html>
<html lang="en"  lang="{{App::getLocale()}}" dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    @include('dashboard.layouts.head')
    @yield('css')
</head>

<body>


<!--start wrapper-->
<div class="wrapper">
        <!-- Start Sidebar-->
        @include('dashboard.layouts.sidebar')
        <!-- End Sidebar-->

    <!--Start Top Header-->
        @include('dashboard.layouts.header')
    <!--Start Top Header-->


    <!-- start page content wrapper-->
    <div class="page-content-wrapper">
        <!-- start page content-->
        <div class="page-content">

            <!--start breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">@yield('breadcrumb-title')</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0 align-items-center">
                            <li class="breadcrumb-item"><a href="javascript:;">
                                    <ion-icon name="home-outline"></ion-icon>
                                </a>
                            </li>
                            <!--Start Li BreadCrumb -->
                                @yield('breadcrumb')
                            <!--End Li BreadCrumb -->
                        </ol>
                    </nav>
                </div>
            </div>
            <!--end breadcrumb-->

            <!-- Start Content-->
            @yield('content')
             <!-- End Content-->
        </div>
        <!-- end page content-->
    </div>
    <!--end page content wrapper-->


@include('dashboard.layouts.footer')




</div>
<!--end wrapper-->


<!-- JS Files-->

@include('dashboard.layouts.script')
@yield('js')

</body>

</html>
