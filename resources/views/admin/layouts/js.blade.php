
<!-- Plugin js for this page -->
<script src="/cms/assets/vendors/chart.js/Chart.min.js"></script>
<script src="/cms/assets/vendors/progressbar.js/progressbar.min.js"></script>
<script src="/cms/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
<script src="/cms/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="/cms/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
<script src="/cms/assets/js/jquery.cookie.js" type="text/javascript"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="/cms/assets/js/off-canvas.js"></script>
<script src="/cms/assets/js/hoverable-collapse.js"></script>
<script src="/cms/assets/js/misc.js"></script>
<script src="/cms/assets/js/settings.js"></script>
<script src="/cms/assets/js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="/cms/assets/js/dashboard.js"></script>
<!-- End custom js for this page -->
<script src="/cms/assets/vendors/js/vendor.bundle.base.js"></script>
<!-- sweet alert js -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!-- end sweet alert -->
<script>
@if (session('status'))
swal("{{ session('status') }}","{{ session('statuscode') }}",  "success");
    @endif
</script>
@yield('scripts')