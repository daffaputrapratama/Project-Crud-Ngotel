
<!DOCTYPE html>

<html class="loading "
  lang="en" data-textdirection="ltr"
  >

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
  <meta name="description"
    content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
  <meta name="keywords"
    content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
  <meta name="author" content="PIXINVENT">
  <meta name="csrf-token" content="wgNdMpmuSsyxIYZ52muUVD1Rl2jRSrE5T9paFddn" />
  <title>Shop - Vuexy - Bootstrap HTML & Laravel admin template</title>
  <link rel="apple-touch-icon" href="http://127.0.0.1:8000/images/ico/favicon-32x32.png">
  <link rel="shortcut icon" type="image/x-icon" href="http://127.0.0.1:8000/images/logo/favicon.ico" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
    rel="stylesheet">

  
  <!-- BEGIN: Vendor CSS-->
  <link rel="stylesheet" href="http://127.0.0.1:8000/vendors/css/vendors.min.css" />

<!-- Vendor css files -->
<link rel="stylesheet" href="http://127.0.0.1:8000/vendors/css/extensions/nouislider.min.css">
<link rel="stylesheet" href="http://127.0.0.1:8000/vendors/css/extensions/toastr.min.css">
<!-- END: Vendor CSS-->

<!-- BEGIN: Theme CSS-->
<link rel="stylesheet" href="http://127.0.0.1:8000/css/core.css" />
<link rel="stylesheet" href="http://127.0.0.1:8000/css/base/themes/dark-layout.css" />
<link rel="stylesheet" href="http://127.0.0.1:8000/css/base/themes/bordered-layout.css" />
<link rel="stylesheet" href="http://127.0.0.1:8000/css/base/themes/semi-dark-layout.css" />


<!-- BEGIN: Page CSS-->
  <link rel="stylesheet" href="http://127.0.0.1:8000/css/base/core/menu/menu-types/vertical-menu.css" />


<!-- Page css files -->
<link rel="stylesheet" href="http://127.0.0.1:8000/css/base/plugins/extensions/ext-component-sliders.css">
<link rel="stylesheet" href="http://127.0.0.1:8000/css/base/pages/app-ecommerce.css">
<link rel="stylesheet" href="http://127.0.0.1:8000/css/base/plugins/extensions/ext-component-toastr.css">

<!-- laravel style -->
<link rel="stylesheet" href="http://127.0.0.1:8000/css/overrides.css" />

<!-- BEGIN: Custom CSS-->

  
  <link rel="stylesheet" href="http://127.0.0.1:8000/css/style.css" />
</head>

  

<body class="vertical-layout vertical-menu-modern content-detached-left-sidebar   navbar-floating  footer-static"
data-open="click"
data-menu="vertical-menu-modern"
data-col="content-detached-left-sidebar"
data-framework="laravel"
data-asset-path="http://127.0.0.1:8000/">

  
  @include('layouts.sidebar')
<!-- END: Main Menu-->
  
  
 @include('layouts.navbar')
<!-- END: Header-->

  <!-- BEGIN: Content-->
  <div class="app-content content ecommerce-application">
    <!-- BEGIN: Header-->
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>

    <div class="content-wrapper container-xxl p-0">
      
       <div class="content-header row">
  <div class="content-header-left col-md-9 col-12 mb-2">
    <div class="row breadcrumbs-top">
      <div class="col-12">
        <h2 class="content-header-title float-start mb-0">Shop</h2>
        <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb">
              
                            <li class="breadcrumb-item">
                                    <a href="http://127.0.0.1:8000">
                                            Home
                                        </a>
                                </li>
                            <li class="breadcrumb-item">
                                    <a href="javascript:void(0)">
                                            eCommerce
                                        </a>
                                </li>
                            <li class="breadcrumb-item">
                                        Shop
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
 
      <div class="content-detached content-right">
        <div class="content-body" style="margin-left:auto">
          
          <!-- E-commerce Content Section Starts -->
<section id="ecommerce-header">
  <div class="row">
    <div class="col-sm-12">
      <div class="ecommerce-header-items">
        <div class="result-toggler">
          <button class="navbar-toggler shop-sidebar-toggler" type="button" data-bs-toggle="collapse">
            <span class="navbar-toggler-icon d-block d-lg-none"><i data-feather="menu"></i></span>
          </button>
          <div class="search-results">Found Results</div>
        </div>
        <div class="view-options d-flex">
          <div class="btn-group dropdown-sort">
            <button
              type="button"
              class="btn btn-outline-primary dropdown-toggle me-1"
              data-bs-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              <span class="active-sorting">Featured</span>
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Featured</a>
              <a class="dropdown-item" href="#">Lowest</a>
              <a class="dropdown-item" href="#">Highest</a>
            </div>
          </div>
          <div class="btn-group" role="group">
            <input type="radio" class="btn-check" name="radio_options" id="radio_option1" autocomplete="off" checked />
            <label class="btn btn-icon btn-outline-primary view-btn grid-view-btn" for="radio_option1"
              ><i data-feather="grid" class="font-medium-3"></i
            ></label>
            <input type="radio" class="btn-check" name="radio_options" id="radio_option2" autocomplete="off" />
            <label class="btn btn-icon btn-outline-primary view-btn list-view-btn" for="radio_option2"
              ><i data-feather="list" class="font-medium-3"></i
            ></label>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- E-commerce Content Section Starts -->

<!-- background Overlay when sidebar is shown  starts-->
<div class="body-content-overlay"></div>
<!-- background Overlay when sidebar is shown  ends-->

<!-- E-commerce Search Bar Starts -->
<section id="ecommerce-searchbar" class="ecommerce-searchbar">
  <div class="row mt-1">
    <div class="col-sm-12">
      <form action="/List Kamar Hotel/search" method="GET">
        @csrf
      <div class="input-group input-group-merge">
        
        <input
          type="search"
          class="form-control search-product"
          id="shop-search"
          placeholder="Search Nama Hotel"
          name="search"
        />
        
        <span class="input-group-text"><i data-feather="search" class="text-muted"></i></span>
      </form>
      </div>
    </div>
  </div>
</section>
<!-- E-commerce Search Bar Ends -->

<!-- E-commerce Products Starts -->
<section id="ecommerce-products" class="grid-view">
  <?php $n=1 ?>
      @foreach($kamar as $data)
  <div class="card ecommerce-card">
    <div class="item-img text-center">
      <a href="http://127.0.0.1:8000/app/ecommerce/details">
        <img
          class="img-fluid card-img-top"
          style="margin-top: -10px"
          src="../images/{{$data->foto}}"
          alt="img-placeholder"
      /></a>
    </div>
    <div class="card-body">
      <div class="item-wrapper">
        <div class="item-rating">
          <sub><span class="badge bg-info text-dark" style="margin-bottom: 5px">{{$data->status}} until {{$data->date}}</span></sub>
          <h2>{{$data->namaKamar}}</h2>
          
        </div>
        <div>
          <h6 class="item-price">{{$data->typeKamar}}</h6>
        </div>
      </div>
      <h6 class="item-name">
        <a class="text-body" href="http://127.0.0.1:8000/app/ecommerce/details"></a>
        <span class="card-text item-company"><a href="#" class="company-name">Ngotel</a></span>
      </h6>
      <p class="card-text item-description" style="margin-top: -10px">
        Fasilitas Kamar : </br>{{$data->fasilitasKamar}}
      </p>
    </div>
    <div class="item-options text-center">
      <div class="item-wrapper">
        <div class="item-cost">
          <h4 class="item-price">$339.99</h4>
        </div>
      </div>
      <a href="#" class="btn btn-primary btn-cart">
        <i data-feather="shopping-cart"></i>
        <span class="add-to-cart">Book Now!</span>
      </a>
    </div>
  </div>
  @endforeach
</section>
<!-- E-commerce Products Ends -->

<!-- E-commerce Pagination Starts -->
<section id="ecommerce-pagination">
  <div class="row">
    <div class="col-sm-12">
      <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center mt-2">
          <li class="page-item prev-item"><a class="page-link" href="#"></a></li>
          <li class="page-item active"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item" aria-current="page"><a class="page-link" href="#">4</a></li>
          <li class="page-item"><a class="page-link" href="#">5</a></li>
          <li class="page-item"><a class="page-link" href="#">6</a></li>
          <li class="page-item"><a class="page-link" href="#">7</a></li>
          <li class="page-item next-item"><a class="page-link" href="#"></a></li>
        </ul>
      </nav>
    </div>
  </div>
</section>
<!-- E-commerce Pagination Ends -->
        </div>
      </div>

      <div class="sidebar-detached sidebar-left">
        <div class="sidebar">
          
          <!-- Ecommerce Sidebar Starts -->
<!-- Ecommerce Sidebar Ends -->
        </div>
      </div>
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
<!-- BEGIN: Page Vendor JS-->
<script src="http://127.0.0.1:8000/vendors/js/ui/jquery.sticky.js"></script>
<!-- Vendor js files -->
<script src="http://127.0.0.1:8000/vendors/js/extensions/wNumb.min.js"></script>
<script src="http://127.0.0.1:8000/vendors/js/extensions/nouislider.min.js"></script>
<script src="http://127.0.0.1:8000/vendors/js/extensions/toastr.min.js"></script>
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
<script src="http://127.0.0.1:8000/js/scripts/pages/app-ecommerce.js"></script>
<!-- END: Page JS-->

  <script type="text/javascript">
    $(window).on('load', function() {
      if (feather) {
        feather.replace({
          width: 14,
          height: 14
        })
      }
    })
  </script>
</body>
</html>