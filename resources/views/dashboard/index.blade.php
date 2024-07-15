<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!--begin::Head-->
@include('partials.dashboard.head')
<!--end::Head-->
<!--begin::Body-->
<body id="kt_body"
      class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed"
      style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
<!--begin::Main-->
<!--begin::Root-->
<div class="">
    <!--begin::Page-->
    <div class="page d-flex flex-row flex-column-fluid">
        <!--begin::Aside-->
        @include('partials.dashboard.aside')
        <!--end::Aside-->
        <!--begin::Wrapper-->
        <div class="wrapper d-flex flex-column flex-row-fluid pt-75" id="kt_wrapper">
            <!--begin::Header-->
            @include('partials.dashboard.header')
            <!--end::Header-->

            @if(session('error'))
                <div style="color: red;">
                    {{ session('error') }}
                </div>
            @endif
            <!--begin::Content-->
            <main class="py-4">
                @yield('content')
            </main>
            <!--end::Content-->

            <!--begin::Footer-->
            @include('partials.dashboard.footer')
            <!--end::Footer-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>
<!--end::Root-->
<!--end::Main-->

<!--begin::Scrolltop-->
@include('partials.dashboard.scrolltop')
<!--end::Scrolltop-->

@include('partials.dashboard.scripts')
</body>
<!--end::Body-->
</html>
