@extends('layouts.main')

@section('hotelView')

 
  <!-- BEGIN: Vendor CSS-->
  <link rel="stylesheet" href="http://127.0.0.1:3000/vendors/css/vendors.min.css" />

  <!-- vendor css files -->
  <link rel="stylesheet" href="http://127.0.0.1:3000/vendors/css/pickers/pickadate/pickadate.css">
  <link rel="stylesheet" href="http://127.0.0.1:3000/vendors/css/pickers/flatpickr/flatpickr.min.css">
<!-- END: Vendor CSS-->

<!-- BEGIN: Theme CSS-->
<link rel="stylesheet" href="http://127.0.0.1:3000/css/core.css" />
<link rel="stylesheet" href="http://127.0.0.1:3000/css/base/themes/dark-layout.css" />
<link rel="stylesheet" href="http://127.0.0.1:3000/css/base/themes/bordered-layout.css" />
<link rel="stylesheet" href="http://127.0.0.1:3000/css/base/themes/semi-dark-layout.css" />


<!-- BEGIN: Page CSS-->
  <link rel="stylesheet" href="http://127.0.0.1:3000/css/base/core/menu/menu-types/vertical-menu.css" />


<link rel="stylesheet" href="http://127.0.0.1:3000/css/base/plugins/forms/pickers/form-flat-pickr.css">
<link rel="stylesheet" href="http://127.0.0.1:3000/css/base/plugins/forms/pickers/form-pickadate.css">

<!-- laravel style -->
<link rel="stylesheet" href="http://127.0.0.1:3000/css/overrides.css" />

<!-- BEGIN: Custom CSS-->

  
  <link rel="stylesheet" href="http://127.0.0.1:3000/css/style.css" />
<div class="col-md-6" style="margin:150px auto; ">
      <div class="card " style="margin-top:50;" >
        <div class="card-header">
          <h4 class="card-title">Book Now!</h4>
        </div>
        <div class="card-body">

        <div class="input-group input-group-merge mb-2">
            <input
              type="text"
              class="form-control"
              placeholder="Input Your Name"
              aria-label="Recipient's username"
              aria-describedby="basic-addon6"
            />

            <span class="input-group-text" id="basic-addon6">@</span>
          </div>
      

          <div class="row">
        <div class="col-md-6 mb-1">
          <label class="form-label" for="fp-range">Pick your Date</label>
          <input
            type="text"
            id="fp-range"
            class="form-control flatpickr-range"
            placeholder="YYYY-MM-DD to YYYY-MM-DD"
          />
        </div>
       

</section>

     

          <div class="input-group input-group-merge">
       
            <textarea class="form-control" aria-label="With textarea" placeholder="Take a note for Receptionist"></textarea>
           
          </div>
          <div class="d-flex justify-content-center pt-2">
              <a href="/changeprofileView" class="btn btn-primary me-1" style="width:100%;">
                Book Now!
              </a>
            </div>
        </div>
     
      </div>
    </div>
  


      <!-- BEGIN: Vendor JS-->
<script src="http://127.0.0.1:3000/vendors/js/vendors.min.js"></script>
<!-- BEGIN Vendor JS-->
<!-- BEGIN: Page Vendor JS-->
<script src="http://127.0.0.1:3000/vendors/js/ui/jquery.sticky.js"></script>
  <!-- vendor files -->
  <script src="http://127.0.0.1:3000/vendors/js/pickers/pickadate/picker.js"></script>
  <script src="http://127.0.0.1:3000/vendors/js/pickers/pickadate/picker.date.js"></script>
  <script src="http://127.0.0.1:3000/vendors/js/pickers/pickadate/picker.time.js"></script>
  <script src="http://127.0.0.1:3000/vendors/js/pickers/pickadate/legacy.js"></script>
  <script src="http://127.0.0.1:3000/vendors/js/pickers/flatpickr/flatpickr.min.js"></script>
<!-- END: Page Vendor JS-->
<!-- BEGIN: Theme JS-->
<script src="http://127.0.0.1:3000/js/core/app-menu.js"></script>
<script src="http://127.0.0.1:3000/js/core/app.js"></script>

<!-- custome scripts file for user -->
<script src="http://127.0.0.1:3000/js/core/scripts.js"></script>

<script src="http://127.0.0.1:3000/js/scripts/customizer.js"></script>
<!-- END: Theme JS-->
<!-- BEGIN: Page JS-->
  <!-- Page js files -->
  <script src="http://127.0.0.1:3000/js/scripts/forms/pickers/form-pickers.js"></script>
@endsection