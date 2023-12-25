 {{--<x-app-layout>
 
</x-app-layout>--}}

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="/cms/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/cms/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="/cms/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="/cms/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="/cms/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="/cms/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="/cms/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="/cms/assets/images/favicon.png" />
    admin/
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
     @include('admin.layouts.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('admin.layouts.header')
        <!-- partial -->
        <div class="main-panel">
        @yield('content')
        <!-- partial:partials/_footer.html -->
     @include('admin.layouts.footer')
        <!-- partial -->
      </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.layouts.js')
    <!-- endinject -->
  </body>
</html>