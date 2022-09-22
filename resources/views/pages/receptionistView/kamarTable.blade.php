
@include('layouts.navbar')
@include('layouts.sidebar')
@include('layouts.footer')
<!DOCTYPE html>

<html class="loading "
  lang="en" data-textdirection="ltr"
  >

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
  <meta name="csrf-token" content="HLHEKIYGnNx5vlBHKhYNkRJrXsoisw8gdEN61Lsu">
  <meta name="description"
    content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
  <meta name="keywords"
    content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
  <meta name="author" content="PIXINVENT">
  <title>Form Wizard - Vuexy - Bootstrap HTML & Laravel admin template</title>
  <link rel="apple-touch-icon" href="http://127.0.0.1:8000/images/ico/favicon-32x32.png">
  <link rel="shortcut icon" type="image/x-icon" href="http://127.0.0.1:8000/images/logo/favicon.ico">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
    rel="stylesheet">

  
  <!-- BEGIN: Vendor CSS-->
  <link rel="stylesheet" href="http://127.0.0.1:8000/vendors/css/vendors.min.css" />

  <!-- vendor css files -->
  <link rel="stylesheet" href="http://127.0.0.1:8000/vendors/css/forms/wizard/bs-stepper.min.css">
  <link rel="stylesheet" href="http://127.0.0.1:8000/vendors/css/forms/select/select2.min.css">
<!-- END: Vendor CSS-->

<!-- BEGIN: Theme CSS-->
<link rel="stylesheet" href="http://127.0.0.1:8000/css/core.css" />
<link rel="stylesheet" href="http://127.0.0.1:8000/css/base/themes/dark-layout.css" />
<link rel="stylesheet" href="http://127.0.0.1:8000/css/base/themes/bordered-layout.css" />
<link rel="stylesheet" href="http://127.0.0.1:8000/css/base/themes/semi-dark-layout.css" />


<!-- BEGIN: Page CSS-->
  <link rel="stylesheet" href="http://127.0.0.1:8000/css/base/core/menu/menu-types/vertical-menu.css" />


  <!-- Page css files -->
  <link rel="stylesheet" href="http://127.0.0.1:8000/css/base/plugins/forms/form-validation.css">
  <link rel="stylesheet" href="http://127.0.0.1:8000/css/base/plugins/forms/form-wizard.css">

<!-- laravel style -->
<link rel="stylesheet" href="http://127.0.0.1:8000/css/overrides.css" />

<!-- BEGIN: Custom CSS-->

  
  <link rel="stylesheet" href="http://127.0.0.1:8000/css/style.css" />

  <!-- BEGIN: Vendor CSS-->
  <link rel="stylesheet" href="http://127.0.0.1:8000/vendors/css/vendors.min.css" />

  <!-- vendor css files -->
  <link rel="stylesheet" href="http://127.0.0.1:8000/vendors/css/file-uploaders/dropzone.min.css">
<!-- END: Vendor CSS-->

<!-- BEGIN: Theme CSS-->
<link rel="stylesheet" href="http://127.0.0.1:8000/css/core.css" />
<link rel="stylesheet" href="http://127.0.0.1:8000/css/base/themes/dark-layout.css" />
<link rel="stylesheet" href="http://127.0.0.1:8000/css/base/themes/bordered-layout.css" />
<link rel="stylesheet" href="http://127.0.0.1:8000/css/base/themes/semi-dark-layout.css" />


<!-- BEGIN: Page CSS-->
  <link rel="stylesheet" href="http://127.0.0.1:8000/css/base/core/menu/menu-types/vertical-menu.css" />

  <!-- Page css files -->
  <link rel="stylesheet" href="http://127.0.0.1:8000/css/base/plugins/forms/form-file-uploader.css">

<!-- laravel style -->
<link rel="stylesheet" href="http://127.0.0.1:8000/css/overrides.css" />

<!-- BEGIN: Custom CSS-->

  <link rel="stylesheet" href="http://127.0.0.1:8000/css/style.css" />


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
  
<!-- END: Header-->
  <!-- END: Header-->

  <!-- BEGIN: Main Menu-->
   
<!-- END: Main Menu-->
    <!-- END: Main Menu-->

  <!-- BEGIN: Content-->
  
  <div class="app-content content" style="padding-top:62px;">

  
    <!-- BEGIN: Header-->
    <div class="content-overlay"></div>
    
    <div class="header-navbar-shadow"></div>
    

        <div class="content-wrapper container-xxl p-0">
          
        <div class="content-header row">
  <div class="content-header-left col-md-9 col-12 mb-2">
    <div class="row breadcrumbs-top">
      <div class="col-12">
        <h2 class="content-header-title float-start mb-0">Data Kamar</h2>
        <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb">
              
                            <li class="breadcrumb-item">
                                    <a href="http://127.0.0.1:8000">
                                            Home
                                        </a>
                                </li>
                            <li class="breadcrumb-item">
                                    <a href="javascript:void(0)">
                                            Admin
                                        </a>
                                </li>
                            <li class="breadcrumb-item">
                                        Data Kamar
                                    </li>
                        </ol>
                  </div>
      </div>
    </div>
  </div>




        <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h1 class="card-title">Use Button To Select Files</h1>
        </div>
        <div class="card-body">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Kamar</th>
                <th scope="col">Type Kamar</th>
                <th scope="col">Fasilitas Kamar</th>
                <th scope="col">Interior Kamar</th>
                <th scope="col">Status</th>
              </tr>
            </thead>
            <tbody>
            <?php $n=1 ?>
            @foreach($kamar as $data)
              <tr>
                <th scope="row">{{$n++}}</th>
                <td>{{$data->namaKamar}}</td>
                <td>{{$data->typeKamar}}</td>
                <td>{{$data->fasilitasKamar}}</td>
                <td>{{$data->interiorKamar}}</td>
                <td><span class="badge bg-info">Occupied</span></td>
              </tr>
            @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
      
      
      <div class="content-body">
        
    


<!-- Modern Horizontal Wizard -->
  


<!-- /Modern Horizontal Wizard -->
<!-- Modern Vertical Wizard -->
<!-- /Modern Vertical Wizard -->
      </div>
    </div>
    
  </div>
  <!-- End: Content-->

  <div class="sidenav-overlay"></div>
  <div class="drag-target"></div>

  
  <!-- BEGIN: Footer-->
<footer
  class="footer footer-light  footer-static">
  <p class="clearfix mb-0">
    <span class="float-md-start d-block d-md-inline-block mt-25">COPYRIGHT &copy;
      <script>
        document.write(new Date().getFullYear())
      </script><a class="ms-25" href="https://1.envato.market/pixinvent_portfolio"
        target="_blank">Pixinvent</a>,
      <span class="d-none d-sm-inline-block">All rights Reserved</span>
    </span>
    <span class="float-md-end d-none d-md-block">Hand-crafted & Made with<i data-feather="heart"></i></span>
  </p>
</footer>
<button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
<!-- END: Footer-->

  
  <!-- BEGIN: Vendor JS-->
<script src="http://127.0.0.1:8000/vendors/js/vendors.min.js"></script>
<!-- BEGIN Vendor JS-->
<!-- BEGIN: Page Vendor JS-->
<script src="http://127.0.0.1:8000/vendors/js/ui/jquery.sticky.js"></script>
  <!-- vendor files -->
  <script src="http://127.0.0.1:8000/vendors/js/forms/wizard/bs-stepper.min.js"></script>
  <script src="http://127.0.0.1:8000/vendors/js/forms/select/select2.full.min.js"></script>
  <script src="http://127.0.0.1:8000/vendors/js/forms/validation/jquery.validate.min.js"></script>
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
  <script src="http://127.0.0.1:8000/js/scripts/forms/form-wizard.js"></script>

  
<!-- END: Page JS-->

 
<!-- BEGIN Vendor JS-->
<!-- BEGIN: Page Vendor JS-->
<script src="http://127.0.0.1:8000/vendors/js/ui/jquery.sticky.js"></script>
  <!-- vendor files -->
  <script src="http://127.0.0.1:8000/vendors/js/file-uploaders/dropzone.min.js"></script>
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
  <script src="http://127.0.0.1:8000/js/scripts/forms/form-file-uploader.js"></script>

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
