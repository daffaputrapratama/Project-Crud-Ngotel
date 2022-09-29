
<!DOCTYPE html>

<html class="loading "
  lang="en" data-textdirection="ltr"
  >

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
  <meta name="csrf-token" content="9Km3hMzD0sKC3YmJFPLwiMgE38hDMZ9p71HLakBI">
  <meta name="description"
    content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
  <meta name="keywords"
    content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
  <meta name="author" content="PIXINVENT">
  <title>DataTables - Vuexy - Bootstrap HTML & Laravel admin template</title>
  <link rel="apple-touch-icon" href="http://127.0.0.1:8000/images/ico/favicon-32x32.png">
  <link rel="shortcut icon" type="image/x-icon" href="http://127.0.0.1:8000/images/logo/favicon.ico">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"rel="stylesheet">

  
  <!-- BEGIN: Vendor CSS-->
  <link rel="stylesheet" href="http://127.0.0.1:8000/vendors/css/vendors.min.css" />

  
  <link rel="stylesheet" href="http://127.0.0.1:8000/vendors/css/tables/datatable/dataTables.bootstrap5.min.css">
  <link rel="stylesheet" href="http://127.0.0.1:8000/vendors/css/tables/datatable/responsive.bootstrap5.min.css">
  <link rel="stylesheet" href="http://127.0.0.1:8000/vendors/css/tables/datatable/buttons.bootstrap5.min.css">
  <link rel="stylesheet" href="http://127.0.0.1:8000/vendors/css/tables/datatable/rowGroup.bootstrap5.min.css">
  <link rel="stylesheet" href="http://127.0.0.1:8000/vendors/css/pickers/flatpickr/flatpickr.min.css">
<!-- END: Vendor CSS-->

<!-- BEGIN: Theme CSS-->
<link rel="stylesheet" href="http://127.0.0.1:8000/css/core.css" />
<link rel="stylesheet" href="http://127.0.0.1:8000/css/base/themes/dark-layout.css" />
<link rel="stylesheet" href="http://127.0.0.1:8000/css/base/themes/bordered-layout.css" />
<link rel="stylesheet" href="http://127.0.0.1:8000/css/base/themes/semi-dark-layout.css" />

<!-- datatables -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/autofill/2.4.0/css/autoFill.dataTables.min.css
">
<!-- datatables -->

<!-- BEGIN: Page CSS-->
  <link rel="stylesheet" href="http://127.0.0.1:8000/css/base/core/menu/menu-types/vertical-menu.css" />



<!-- laravel style -->
<link rel="stylesheet" href="http://127.0.0.1:8000/css/overrides.css" />

<!-- BEGIN: Custom CSS-->

  
  <link rel="stylesheet" href="http://127.0.0.1:8000/css/style.css" />

{{-- Index CSS DLL --}}
<!-- Site Icons -->
<link rel="shortcut icon" href="../assets/images/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">    
<!-- Site CSS -->
<link rel="stylesheet" href="css/style.css">    
<!-- Responsive CSS -->
<link rel="stylesheet" href="css/responsive.css">
<!-- Custom CSS -->
<link rel="stylesheet" href="css/custom.css"> 

<!--[if lt IE 9]>
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


<!-- END: Header-->
@include('layouts.navbar')
  <!-- END: Header-->

  <!-- BEGIN: Main Menu-->
  @include('layouts.sidebar')
 
<!-- END: Main Menu-->
    <!-- END: Main Menu-->

  <!-- BEGIN: Content-->
  <div class="app-content content ">
    <!-- BEGIN: Header-->
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>

        <div class="content-wrapper container-xxl p-0">
      
            <div class="content-header row">
  <div class="content-header-left col-md-9 col-12 mb-2">
    <div class="row breadcrumbs-top">
      <div class="col-12">
        <h2 class="content-header-title float-start mb-0">Data Kamar Ngotel</h2>
        <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb">
              
                            <li class="breadcrumb-item">
                                    <a href="http://127.0.0.1:8000">
                                            Home
                                        </a>
                                </li>
                            <li class="breadcrumb-item">
                                    <a href="javascript:void(0)">
                                            Datatable
                                        </a>
                                </li>
                            <li class="breadcrumb-item">
                                        Basic
                                    </li>
                        </ol>
                  </div>
      </div>
    </div>
  </div>
  <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
    <div class="mb-1 breadcrumb-right">
      <div class="dropdown">
        <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i data-feather="grid"></i>
        </button>
        <div class="dropdown-menu dropdown-menu-end">
          <a class="dropdown-item" href="http://127.0.0.1:8000/app/todo">
            <i class="me-1" data-feather="check-square"></i>
            <span class="align-middle">Todo</span>
          </a>
          <a class="dropdown-item" href="http://127.0.0.1:8000/app/chat">
            <i class="me-1" data-feather="message-square"></i>
            <span class="align-middle">Chat</span>
          </a>
          <a class="dropdown-item" href="http://127.0.0.1:8000/app/email">
            <i class="me-1" data-feather="mail"></i>
            <span class="align-middle">Email</span>
          </a>
          <a class="dropdown-item" href="http://127.0.0.1:8000/app/calendar">
            <i class="me-1" data-feather="calendar"></i>
            <span class="align-middle">Calendar</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
      
      <div class="content-body">
        
        <div class="row">
  <div class="col-12">
    <p>Read full documnetation <a href="https://datatables.net/" target="_blank">here</a></p>
  </div>
</div>
<!-- Basic table -->
<section id="basic-datatable">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <table class="datatables-basic table display" id="table_id">
          <thead>
            <tr>
              
              <th>id</th>
              <th>Name</th>
              <th>Email</th>
              <th>Date</th>
              <th>Salary</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>

          <tbody>
            <tr>
                <td></td>
                <td>Daffa</td>
                <td>daffaerpan@gmail.com</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- Modal to add new record -->
  <div class="modal modal-slide-in fade" id="modals-slide-in">
    <div class="modal-dialog sidebar-sm">
      <form class="add-new-record modal-content pt-0">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×</button>
        <div class="modal-header mb-1">
          <h5 class="modal-title" id="exampleModalLabel">New Record</h5>
        </div>
        <div class="modal-body flex-grow-1">
          <div class="mb-1">
            <label class="form-label" for="basic-icon-default-fullname">Full Name</label>
            <input
              type="text"
              class="form-control dt-full-name"
              id="basic-icon-default-fullname"
              placeholder="John Doe"
              aria-label="John Doe"
            />
          </div>
          <div class="mb-1">
            <label class="form-label" for="basic-icon-default-post">Post</label>
            <input
              type="text"
              id="basic-icon-default-post"
              class="form-control dt-post"
              placeholder="Web Developer"
              aria-label="Web Developer"
            />
          </div>
          <div class="mb-1">
            <label class="form-label" for="basic-icon-default-email">Email</label>
            <input
              type="text"
              id="basic-icon-default-email"
              class="form-control dt-email"
              placeholder="john.doe@example.com"
              aria-label="john.doe@example.com"
            />
            <small class="form-text"> You can use letters, numbers & periods </small>
          </div>
          <div class="mb-1">
            <label class="form-label" for="basic-icon-default-date">Joining Date</label>
            <input
              type="text"
              class="form-control dt-date"
              id="basic-icon-default-date"
              placeholder="MM/DD/YYYY"
              aria-label="MM/DD/YYYY"
            />
          </div>
          <div class="mb-4">
            <label class="form-label" for="basic-icon-default-salary">Salary</label>
            <input
              type="text"
              id="basic-icon-default-salary"
              class="form-control dt-salary"
              placeholder="$12000"
              aria-label="$12000"
            />
          </div>
          <button type="button" class="btn btn-primary data-submit me-1">Submit</button>
          <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
        </div>
      </form>
    </div>
  </div>
</section>
<!--/ Basic table -->

<!-- Complex Headers -->

    
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
  
  <script src="http://127.0.0.1:8000/vendors/js/tables/datatable/jquery.dataTables.min.js"></script>
  <script src="http://127.0.0.1:8000/vendors/js/tables/datatable/dataTables.bootstrap5.min.js"></script>
  <script src="http://127.0.0.1:8000/vendors/js/tables/datatable/dataTables.responsive.min.js"></script>
  <script src="http://127.0.0.1:8000/vendors/js/tables/datatable/responsive.bootstrap5.min.js"></script>
  <script src="http://127.0.0.1:8000/vendors/js/tables/datatable/datatables.checkboxes.min.js"></script>
  <script src="http://127.0.0.1:8000/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
  <script src="http://127.0.0.1:8000/vendors/js/tables/datatable/jszip.min.js"></script>
  <script src="http://127.0.0.1:8000/vendors/js/tables/datatable/pdfmake.min.js"></script>
  <script src="http://127.0.0.1:8000/vendors/js/tables/datatable/vfs_fonts.js"></script>
  <script src="http://127.0.0.1:8000/vendors/js/tables/datatable/buttons.html5.min.js"></script>
  <script src="http://127.0.0.1:8000/vendors/js/tables/datatable/buttons.print.min.js"></script>
  <script src="http://127.0.0.1:8000/vendors/js/tables/datatable/dataTables.rowGroup.min.js"></script>
  <script src="http://127.0.0.1:8000/vendors/js/pickers/flatpickr/flatpickr.min.js"></script>
<!-- END: Page Vendor JS-->


<!-- BEGIN: Theme JS-->
<script src="http://127.0.0.1:8000/js/core/app-menu.js"></script>
<script src="http://127.0.0.1:8000/js/core/app.js"></script>

<!-- custome scripts file for user -->
<script src="http://127.0.0.1:8000/js/core/scripts.js"></script>

<script src="http://127.0.0.1:8000/js/scripts/customizer.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>

<!-- END: Theme JS-->
<!-- BEGIN: Page JS-->
  
  <script src="http://127.0.0.1:8000/js/scripts/tables/table-datatables-basic.js"></script>
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
