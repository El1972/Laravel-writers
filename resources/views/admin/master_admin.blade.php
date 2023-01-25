<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CelestialUI Admin</title>
    <!-- base:css -->
    <link rel="stylesheet" href="{{asset('/backend/vendors/typicons.font/font/typicons.css')}}">
    <link rel="stylesheet" href="{{asset('/backend/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject --> 
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('/backend/css/vertical-layout-light/style.css')}}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{asset('/backend//backend/images/favicon.png')}}" />
  </head>
  <body>
    

    
    @include('admin_layout.header')



    @yield('content')

    
      
      <!-- partial -->
      
    <!-- container-scroller -->
    <!-- base:js -->
    <script src="{{asset('/backend/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{asset('/backend/js/off-canvas.js')}}"></script>
    <script src="{{asset('/backend/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('/backend/js/template.js')}}"></script>
    <script src="{{asset('/backend/js/settings.js')}}"></script>
    <script src="{{asset('/backend/js/todolist.js')}}"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <script src="/backend/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="/backend/vendors/chart.js/Chart.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->
    <script src="/backend/js/dashboard.js"></script>
    <!-- End custom js for this page-->
  </body>
</html>






