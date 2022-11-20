<!--end::Main-->
<script>var hostUrl = "assets/dashboard/";</script>
<script src="{{ asset("assets/dashboard/plugins/global/plugins.bundle.js") }}"></script>
<script src="{{ asset("assets/dashboard/js/custom/widgets.js") }}"></script>
<script src="{{ asset("assets/dashboard/js/custom/apps/chat/chat.js") }}"></script>
<script src="{{ asset("assets/dashboard/js/custom/modals/create-app.js") }}"></script>
<script src="{{ asset("assets/dashboard/js/custom/modals/upgrade-plan.js") }}"></script>
<!-- Start Datatables -->
<script src="{{ asset("assets/dashboard/js/datatables.min.js") }}"></script>
<script src="{{ asset("assets/dashboard/js/jquery.dataTables.min.js") }}"></script>
<script src="{{ asset("assets/dashboard/js/dataTables.buttons.min.js") }}"></script>
<script src="{{url('vendor/datatables/buttons.server-side.js')}}"></script>
<script src="{{ asset("assets/dashboard/js/buttons.html5.min.js") }}"></script>
<script src="{{ asset("assets/dashboard/js/buttons.colVis.min.js") }}"></script>
<!-- End DataTables -->

<script src="{{ asset("assets/dashboard/js/scripts.bundle.js") }}"></script>
<script src="{{ asset("assets/dashboard/js/customFun.js") }}"></script>
<!--end::Page Custom Javascript-->
<!--end::Javascript-->
@stack('js')

</body>
<!--end::Body-->
</html>