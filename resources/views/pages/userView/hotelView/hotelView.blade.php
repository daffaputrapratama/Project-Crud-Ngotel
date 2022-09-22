@extends('layouts.main')

@section('hotelView')
<div class="card">
    <!-- Product Details starts -->
    <div class="card-body" >
      <div class="row my-2">
        <div class="column" style="display:flex; flex-direction:column; align-items:center;">
        <div class="col-12 col-md-5 d-flex align-items-center justify-content-center mb-2 mb-md-0">
          <div class="d-flex align-items-center justify-content-center">
            <img
              src="http://127.0.0.1:3000/images/pages/eCommerce/1.png"
              class="img-fluid product-img"
              alt="product image"
            />
          </div>
        </div>
        <div class="col-md-8">
          <h2>Apple Watch Series 5</h2>
          <span class="card-text item-company">By <a href="#" class="company-name">Ngotel</a></span>
          <div class="ecommerce-details-price d-flex flex-wrap mt-1">
            <h4 class="item-price me-1">$499.99/Night</h4>
           
          </div>
          <p class="card-text">Available - <span class="text-success">Ready to Booked</span></p>
          <p class="card-text">
            GPS, Always-On Retina display, 30% larger screen, Swimproof, ECG app, Electrical and optical heart sensors,
            Built-in compass, Elevation, Emergency SOS, Fall Detection, S5 SiP with up to 2x faster 64-bit dual-core
            processor, watchOS 6 with Activity trends, cycle tracking, hearing health innovations, and the App Store on
            your wrist
          </p>
          
        
          <hr />
          <div class="d-flex flex-column flex-sm-row pt-1">
            <a href="#" class="btn btn-primary btn-cart me-0 me-sm-1 mb-1 mb-sm-0">
              <i data-feather="shopping-cart" class="me-50"></i>
              <span class="add-to-cart">Booked Now</span>
            </a>
            <a href="#" class="btn btn-outline-secondary btn-wishlist me-0 me-sm-1 mb-1 mb-sm-0">
              <i data-feather="heart" class="me-50"></i>
              <span>Wishlist</span>
            </a>
            <div class="btn-group dropdown-icon-wrapper btn-share">
              <button
                type="button"
                class="btn btn-icon hide-arrow btn-outline-secondary dropdown-toggle"
                data-bs-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                <i data-feather="share-2"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-end">
                <a href="#" class="dropdown-item">
                  <i data-feather="facebook"></i>
                </a>
                <a href="#" class="dropdown-item">
                  <i data-feather="twitter"></i>
                </a>
                <a href="#" class="dropdown-item">
                  <i data-feather="youtube"></i>
                </a>
                <a href="#" class="dropdown-item">
                  <i data-feather="instagram"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
@endsection