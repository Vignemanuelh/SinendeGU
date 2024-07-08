<!--begin::Javascript-->
@vite(['resources/sass/app.scss', 'resources/js/app.js'])
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>

<script>var hostUrl = "assets/";</script>
<!--begin::Global Javascript Bundle(used by all pages)-->
<script src="/assets/plugins/global/plugins.bundle.js"></script>
<script src="/assets/js/scripts.bundle.js"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Page Vendors Javascript(used by this page)-->
<script src="/assets/plugins/custom/datatables/datatables.bundle.js"></script>
<script src="/assets/plugins/custom/vis-timeline/vis-timeline.bundle.js"></script>
<script src="{{ asset('https://cdn.amcharts.com/lib/5/index.js') }}"></script>
<script src="{{ asset('https://cdn.amcharts.com/lib/5/xy.js') }}"></script>
<script src="{{ asset('https://cdn.amcharts.com/lib/5/percent.js') }}"></script>
<script src="{{ asset('https://cdn.amcharts.com/lib/5/radar.js') }}"></script>
<script src="{{ asset('https://cdn.amcharts.com/lib/5/themes/Animated.js') }}"></script>
<!--end::Page Vendors Javascript-->
<!--begin::Page Custom Javascript(used by this page)-->
<script src="/assets/js/widgets.bundle.js"></script>
<script src="/assets/js/custom/widgets.js"></script>
<script src="/assets/js/custom/apps/chat/chat.js"></script>
<script src="/assets/js/custom/utilities/modals/upgrade-plan.js"></script>
<script src="/assets/js/custom/utilities/modals/create-app.js"></script>
<script src="/assets/js/custom/utilities/modals/create-campaign.js"></script>
<script src="/assets/js/custom/utilities/modals/create-project/type.js"></script>
<script src="/assets/js/custom/utilities/modals/create-project/budget.js"></script>
<script src="/assets/js/custom/utilities/modals/create-project/settings.js"></script>
<script src="/assets/js/custom/utilities/modals/create-project/team.js"></script>
<script src="/assets/js/custom/utilities/modals/create-project/targets.js"></script>
<script src="/assets/js/custom/utilities/modals/create-project/files.js"></script>
<script src="/assets/js/custom/utilities/modals/create-project/complete.js"></script>
<script src="/assets/js/custom/utilities/modals/create-project/main.js"></script>
<script src="/assets/js/custom/utilities/modals/users-search.js"></script>
<!--end::Page Custom Javascript-->
<script src="{{asset("https://code.jquery.com/jquery-3.6.0.min.js")}}"></script>
<script src="{{asset("https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js")}}"></script>
<script>
    $(document).ready(function() {
        $('.select2').select2();
    });
</script>
<!--end::Javascript-->
