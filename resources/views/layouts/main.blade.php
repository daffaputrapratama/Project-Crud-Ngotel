<!DOCTYPE html>

<html class="loading "
  lang="en" data-textdirection="ltr"
  >

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
  <meta name="csrf-token" content="wFMIRrBE8ESaanvon6KA74PBCS7vUybUSZY6RuhW">
  <meta name="description"
    content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
  <meta name="keywords"
    content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
  <meta name="author" content="PIXINVENT">
  <title>Dashboard Analytics - Vuexy - Bootstrap HTML & Laravel admin template</title>
  <link rel="apple-touch-icon" href="http://127.0.0.1:8000/images/ico/favicon-32x32.png">
  <link rel="shortcut icon" type="image/x-icon" href="http://127.0.0.1:8000/images/logo/favicon.ico">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
    rel="stylesheet">

  
  <!-- BEGIN: Vendor CSS-->
  <link rel="stylesheet" href="http://127.0.0.1:8000/vendors/css/vendors.min.css" />

  <!-- vendor css files -->
  <link rel="stylesheet" href="http://127.0.0.1:8000/vendors/css/charts/apexcharts.css">
  <link rel="stylesheet" href="http://127.0.0.1:8000/vendors/css/extensions/toastr.min.css">
  <link rel="stylesheet" href="http://127.0.0.1:8000/vendors/css/tables/datatable/dataTables.bootstrap5.min.css">
  <link rel="stylesheet" href="http://127.0.0.1:8000/vendors/css/tables/datatable/responsive.bootstrap5.min.css">
<!-- END: Vendor CSS-->

<!-- BEGIN: Theme CSS-->
<link rel="stylesheet" href="http://127.0.0.1:8000/css/core.css" />
<link rel="stylesheet" href="http://127.0.0.1:8000/css/base/themes/dark-layout.css" />
<link rel="stylesheet" href="http://127.0.0.1:8000/css/base/themes/bordered-layout.css" />
<link rel="stylesheet" href="http://127.0.0.1:8000/css/base/themes/semi-dark-layout.css" />


<!-- BEGIN: Page CSS-->
  <link rel="stylesheet" href="http://127.0.0.1:8000/css/base/core/menu/menu-types/vertical-menu.css" />


  <!-- Page css files -->
  <link rel="stylesheet" href="http://127.0.0.1:8000/css/base/plugins/charts/chart-apex.css">
  <link rel="stylesheet" href="http://127.0.0.1:8000/css/base/plugins/extensions/ext-component-toastr.css">
  <link rel="stylesheet" href="http://127.0.0.1:8000/css/base/pages/app-invoice-list.css">
  
<!-- laravel style -->
<link rel="stylesheet" href="http://127.0.0.1:8000/css/overrides.css" />

<!-- BEGIN: Custom CSS-->

  
  <link rel="stylesheet" href="http://127.0.0.1:8000/css/style.css" />

  {{-- css index --}}
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">    
	<!-- Site CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../assets/css/custom.css"> 

    <!--[if lt IE 9]
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->
  

<body class="vertical-layout vertical-menu-modern navbar-floating    footer-static default"
data-open="click"
data-menu="vertical-menu-modern"
data-col="default"
data-framework="laravel"
data-asset-path="http://127.0.0.1:8000/">
  <!-- BEGIN: Header-->
 

<!-- END: INI UNTUK NAVBAR NAVBAR-->
@include('layouts.navbar')
<!-- END: INI UNTUK NAVBAR NAVBAR-->

<!-- BEGIN: Main Menu-->
@include('layouts.sidebar')
<!-- END: Main Menu-->
    
  <!-- BEGIN: Content-->
  <div class="app-content content ">
    <!-- BEGIN: Header-->
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>

    <div class="content-wrapper container-xxl p-0">
      @yield('Index')
   <!-- Content Body Start -->
        <!-- Content Body Start -->
      <div class="content-body">
      
      
      @yield('tambahKamar')
      @yield('dataKamar')
      @yield('dataRegister')
      @yield('dash')
      @yield('userView')
      @yield('changeuserView')
      @yield('hotelView')
      @yield('invoiceView')
      @yield('bookView')


      </div>
      <!-- Content Body Start -->
   <!-- Content Body Start -->
   
    </div>
    
  </div>
  <!-- End: Content-->

  <div class="sidenav-overlay"></div>
  <div class="drag-target"></div>

  
<!-- BEGIN: Footer-->
@include('layouts.footer')
<!-- END: Footer-->

  
  <!-- BEGIN: Vendor JS-->
<script src="http://127.0.0.1:8000/vendors/js/vendors.min.js"></script>
<!-- BEGIN Vendor JS-->

{{-- js guweh --}}
<!-- ALL JS FILES -->
<script src="../assets/js/jquery-3.2.1.min.js"></script>
<script src="../assets/js/popper.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
  <!-- ALL PLUGINS -->
<script src="../assets/js/jquery.superslides.min.js"></script>
<script src="../assets/js/images-loded.min.js"></script>
<script src="../assets/js/isotope.min.js"></script>
<script src="../assets/js/baguetteBox.min.js"></script>
<script src="../assets/js/form-validator.min.js"></script>
  <script src="../assets/js/contact-form-script.js"></script>
  <script src="../assets/js/custom.js"></script>

<!-- BEGIN: Page Vendor JS-->
<script src="http://127.0.0.1:8000/vendors/js/ui/jquery.sticky.js"></script>
  <!-- vendor files -->
  <script src="http://127.0.0.1:8000/vendors/js/charts/apexcharts.min.js"></script>
  <script src="http://127.0.0.1:8000/vendors/js/extensions/toastr.min.js"></script>
  <script src="http://127.0.0.1:8000/vendors/js/extensions/moment.min.js"></script>
  <script src="http://127.0.0.1:8000/vendors/js/tables/datatable/jquery.dataTables.min.js"></script>
  <script src="http://127.0.0.1:8000/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
  <script src="http://127.0.0.1:8000/vendors/js/tables/datatable/dataTables.bootstrap5.min.js"></script>
  <script src="http://127.0.0.1:8000/vendors/js/tables/datatable/dataTables.responsive.min.js"></script>
  <script src="http://127.0.0.1:8000/vendors/js/tables/datatable/responsive.bootstrap5.js"></script>
<!-- END: Page Vendor JS-->
<!-- BEGIN: Theme JS-->
<script src="http://127.0.0.1:8000/js/core/app-menu.js"></script>
<script src="http://127.0.0.1:8000/js/core/app.js"></script>

<!-- custome scripts file for user -->
<script src="http://127.0.0.1:8000/js/core/scripts.js"></script>

<script src="http://127.0.0.1:8000/js/scripts/customizer.js"></script>
<!-- END: Theme JS-->
<!-- BEGIN: Page JS-->
  <!-- Page js files -->
  <script src="http://127.0.0.1:8000/js/scripts/pages/dashboard-analytics.js"></script>
  <script src="http://127.0.0.1:8000/js/scripts/pages/app-invoice-list.js"></script>
<!-- END: Page JS-->

  <script type="text/javascript">
    $(window).on('load', function() {
      if (feather) {
        feather.replace({
          width: 14, height: 14
        });
      }
    })
  </script>
</body>
</html>
