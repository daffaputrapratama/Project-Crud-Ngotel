
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
        <h2 class="content-header-title float-start mb-0">Tambah Kamar Yuk</h2>
        <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb">
              
                            <li class="breadcrumb-item">
                                    <a href="http://127.0.0.1:8000">
                                            Home
                                        </a>
                                </li>
                            <li class="breadcrumb-item">
                                    <a href="javascript:void(0)">
                                            Forms
                                        </a>
                                </li>
                            <li class="breadcrumb-item">
                                        Form Wizard
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
          <h4 class="card-title">Use Button To Select Files</h4>
        </div>
        <div class="card-body">
          <p class="card-text">
            Using this method, user gets an option to select the files using a button instead dropping all the files
            after selected from the folders. Set <code>clickable</code> to match the button's id for button to work as
            file selector.
          </p>
          <button id="select-files" class="btn btn-outline-primary mb-1">
            <i data-feather="file"></i> Click me to select files
          </button>
          <form action="#" type="file"class="dropzone dropzone-area" id="dpz-btn-select-files">
           
            <div class="dz-message" style="cursor:pointer;">Drop files here or click button to upload.</div>
          </form>
        </div>
      </div>
    </div>
      
      
      <div class="content-body">
        
    


<!-- Modern Horizontal Wizard -->
  <section class="modern-horizontal-wizard">
    <div class="bs-stepper wizard-modern modern-wizard-example">
      <div class="bs-stepper-header">
        <div class="step" data-target="#account-details-modern" role="tab" id="account-details-modern-trigger">
          <button type="button" class="step-trigger">
            <span class="bs-stepper-box">
              <i data-feather="file-text" class="font-medium-3"></i>
            </span>
            <span class="bs-stepper-label">
              <span class="bs-stepper-title">Account Details</span>
              <span class="bs-stepper-subtitle">Setup Account Details</span>
            </span>
          </button>
        </div>
        <div class="line">
          <i data-feather="chevron-right" class="font-medium-2"></i>
        </div>
        <div class="step" data-target="#personal-info-modern" role="tab" id="personal-info-modern-trigger">
          <button type="button" class="step-trigger">
            <span class="bs-stepper-box">
              <i data-feather="user" class="font-medium-3"></i>
            </span>
            <span class="bs-stepper-label">
              <span class="bs-stepper-title">Personal Info</span>
              <span class="bs-stepper-subtitle">Add Personal Info</span>
            </span>
          </button>
        </div>
        <div class="line">
          <i data-feather="chevron-right" class="font-medium-2"></i>
        </div>
        <div class="step" data-target="#address-step-modern" role="tab" id="address-step-modern-trigger">
          <button type="button" class="step-trigger">
            <span class="bs-stepper-box">
              <i data-feather="map-pin" class="font-medium-3"></i>
            </span>
            <span class="bs-stepper-label">
              <span class="bs-stepper-title">Address</span>
              <span class="bs-stepper-subtitle">Add Address</span>
            </span>
          </button>
        </div>
        <div class="line">
          <i data-feather="chevron-right" class="font-medium-2"></i>
        </div>
        <div class="step" data-target="#social-links-modern" role="tab" id="social-links-modern-trigger">
          <button type="button" class="step-trigger">
            <span class="bs-stepper-box">
              <i data-feather="link" class="font-medium-3"></i>
            </span>
            <span class="bs-stepper-label">
              <span class="bs-stepper-title">Social Links</span>
              <span class="bs-stepper-subtitle">Add Social Links</span>
            </span>
          </button>
        </div>
      </div>
      <div class="bs-stepper-content" style="height:400px;">
        <div id="account-details-modern" class="content" role="tabpanel" aria-labelledby="account-details-modern-trigger">
          <div class="content-header">
            <h5 class="mb-0">Account Details</h5>
            <small class="text-muted">Enter Your Account Details.</small>
          </div>
          <div class="row">
            <div class="mb-1 col-md-6">
              <label class="form-label" for="modern-username">Username</label>
              <input type="text" id="modern-username" class="form-control" placeholder="johndoe" />
            </div>
            <div class="mb-1 col-md-6">
              <label class="form-label" for="modern-email">Email</label>
              <input
                type="email"
                id="modern-email"
                class="form-control"
                placeholder="john.doe@email.com"
                aria-label="john.doe"
              />
            </div>
          </div>
          <div class="row">
            <div class="mb-1 form-password-toggle col-md-6">
              <label class="form-label" for="modern-password">Password</label>
              <input
                type="password"
                id="modern-password"
                class="form-control"
                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
              />
            </div>
            <div class="mb-1 form-password-toggle col-md-6">
              <label class="form-label" for="modern-confirm-password">Confirm Password</label>
              <input
                type="password"
                id="modern-confirm-password"
                class="form-control"
                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
              />
            </div>
          </div>
          <div class="d-flex justify-content-between">
            <button class="btn btn-outline-secondary btn-prev" disabled>
              <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
              <span class="align-middle d-sm-inline-block d-none">Previous</span>
            </button>
            <button class="btn btn-primary btn-next">
              <span class="align-middle d-sm-inline-block d-none">Next</span>
              <i data-feather="arrow-right" class="align-middle ms-sm-25 ms-0"></i>
            </button>
          </div>
        </div>
        <div id="personal-info-modern" class="content" role="tabpanel" aria-labelledby="personal-info-modern-trigger">
          <div class="content-header">
            <h5 class="mb-0">Personal Info</h5>
            <small>Enter Your Personal Info.</small>
          </div>
          <div class="row">
            <div class="mb-1 col-md-6">
              <label class="form-label" for="modern-first-name">Halo</label>
              <input type="text" id="modern-first-name" class="form-control" placeholder="John" />
            </div>
            <div class="mb-1 col-md-6">
              <label class="form-label" for="modern-last-name">Last Name</label>
              <input type="text" id="modern-last-name" class="form-control" placeholder="Doe" />
            </div>
          </div>
          <div class="row">
            <div class="mb-1 col-md-6">
              <label class="form-label" for="modern-country">Country</label>
              <select class="select2 w-100" id="modern-country">
                <option label=" "></option>
                <option>UK</option>
                <option>USA</option>
                <option>Spain</option>
                <option>France</option>
                <option>Italy</option>
                <option>Australia</option>
              </select>
            </div>
            <div class="mb-1 col-md-6">
              <label class="form-label" for="modern-language">Language</label>
              <select class="select2 w-100" id="modern-language" multiple>
                <option>English</option>
                <option>French</option>
                <option>Spanish</option>
              </select>
            </div>
          </div>
          <div class="d-flex justify-content-between">
            <button class="btn btn-primary btn-prev">
              <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
              <span class="align-middle d-sm-inline-block d-none">Previous</span>
            </button>
            <button class="btn btn-primary btn-next">
              <span class="align-middle d-sm-inline-block d-none">Next</span>
              <i data-feather="arrow-right" class="align-middle ms-sm-25 ms-0"></i>
            </button>
          </div>
        </div>
        <div id="address-step-modern" class="content" role="tabpanel" aria-labelledby="address-step-modern-trigger">
          <div class="content-header">
            <h5 class="mb-0">Address</h5>
            <small>Enter Your Address.</small>
          </div>
          <div class="row">
            <div class="mb-1 col-md-6">
              <label class="form-label" for="modern-address">Address</label>
              <input
                type="text"
                id="modern-address"
                class="form-control"
                placeholder="98  Borough bridge Road, Birmingham"
              />
            </div>
            <div class="mb-1 col-md-6">
              <label class="form-label" for="modern-landmark">Landmark</label>
              <input type="text" id="modern-landmark" class="form-control" placeholder="Borough bridge" />
            </div>
          </div>
          <div class="row">
            <div class="mb-1 col-md-6">
              <label class="form-label" for="pincode3">Pincode</label>
              <input type="text" id="pincode3" class="form-control" placeholder="658921" />
            </div>
            <div class="mb-1 col-md-6">
              <label class="form-label" for="city3">City</label>
              <input type="text" id="city3" class="form-control" placeholder="Birmingham" />
            </div>
          </div>
          <div class="d-flex justify-content-between">
            <button class="btn btn-primary btn-prev">
              <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
              <span class="align-middle d-sm-inline-block d-none">Previous</span>
            </button>
            <button class="btn btn-primary btn-next">
              <span class="align-middle d-sm-inline-block d-none">Next</span>
              <i data-feather="arrow-right" class="align-middle ms-sm-25 ms-0"></i>
            </button>
          </div>
        </div>
        <div id="social-links-modern" class="content" role="tabpanel" aria-labelledby="social-links-modern-trigger">
          <div class="content-header">
            <h5 class="mb-0">Social Links</h5>
            <small>Enter Your Social Links.</small>
          </div>
          <div class="row">
            <div class="mb-1 col-md-6">
              <label class="form-label" for="modern-twitter">Twitter</label>
              <input type="text" id="modern-twitter" class="form-control" placeholder="https://twitter.com/abc" />
            </div>
            <div class="mb-1 col-md-6">
              <label class="form-label" for="modern-facebook">Facebook</label>
              <input type="text" id="modern-facebook" class="form-control" placeholder="https://facebook.com/abc" />
            </div>
          </div>
          <div class="row">
            <div class="mb-1 col-md-6">
              <label class="form-label" for="modern-google">Google+</label>
              <input type="text" id="modern-google" class="form-control" placeholder="https://plus.google.com/abc" />
            </div>
            <div class="mb-1 col-md-6">
              <label class="form-label" for="modern-linkedin">Linkedin</label>
              <input type="text" id="modern-linkedin" class="form-control" placeholder="https://linkedin.com/abc" />
            </div>
          </div>
          <div class="d-flex justify-content-between">
            <button class="btn btn-primary btn-prev">
              <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
              <span class="align-middle d-sm-inline-block d-none">Previous</span>
            </button>
            <button class="btn btn-success btn-submit">Submit</button>
          </div>
        </div>
      </div>
    </div>
</section>


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
