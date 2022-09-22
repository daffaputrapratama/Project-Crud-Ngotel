@extends('layouts.main')


@section('changeuserView')
<div class="col-xl-8 col-lg-5 col-md-5 order-1 order-md-0" style="margin:auto;">
<div class="card">
    
          <div class="user-avatar-section">
            <div class="d-flex align-items-center flex-column">
              <img
                class="img-fluid rounded mt-3 mb-2"
                src="http://127.0.0.1:3000/images/portrait/small/avatar-s-2.jpg"
                height="110"
                width="110"
                alt="User avatar"
              />
              <div class="user-info text-center">
                <h4>Gertrude Barton</h4>
                <span class="badge bg-light-secondary">Author</span>
              </div>
            </div>
          </div>
          <div class="d-flex justify-content-around my-2 pt-75">
            <div class="d-flex align-items-start me-2">
              <span class="badge bg-light-primary p-75 rounded">
                <i data-feather="check" class="font-medium-2"></i>
              </span>
              <div class="ms-75">
                <h4 class="mb-0">1.23k</h4>
                <small>Tasks Done</small>
              </div>
            </div>
            <div class="d-flex align-items-start">
              <span class="badge bg-light-primary p-75 rounded">
                <i data-feather="briefcase" class="font-medium-2"></i>
              </span>
              <div class="ms-75">
                <h4 class="mb-0">568</h4>
                <small>Projects Done</small>
              </div>
            </div>
          </div>
          <div class="col-md-16">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Merged</h4>
        </div>
        <div class="card-body">

        <label class="form-label" for="basic-default-password1">Username</label>
        <div class="input-group input-group-merge mb-2">
            <span class="input-group-text" id="basic-addon5">@</span>
            <input
              type="text"
              class="form-control"
              placeholder="Username"
              aria-label="Username"
              aria-describedby="basic-addon5"
            />
          </div>

          
          <label class="form-label" for="basic-default-password1">Password</label>
          <div class="input-group input-group-merge form-password-toggle mb-2">
            <input
              type="password"
              class="form-control"
              id="basic-default-password1"
              placeholder="Your Password"
              aria-describedby="basic-default-password1"
            />
            <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
          </div>



          <label class="form-label" for="basic-default-password1">Email</label>
          <div class="input-group input-group-merge mb-2">
            <input
              type="text"
              class="form-control"
              placeholder="Recipient's username"
              aria-label="Recipient's username"
              aria-describedby="basic-addon6"
            />

            <span class="input-group-text" id="basic-addon6">@example.com</span>
          </div>


          <label class="form-label" for="basic-default-password1">Description</label>
          <div class="input-group input-group-merge">
            <textarea class="form-control" aria-label="With textarea"></textarea>
          </div>
          <div class="d-flex justify-content-center pt-2">
          <div class="d-flex justify-content-center pt-2">
                <form action="" method="get">
              <a href="/profileView" type="submit" class="btn btn-primary me-1">
                Edit
</a >
              </form>
              <a href="/profileView" class="btn btn-outline-danger suspend-user">Cancel</a>
            </div>
        </div>
      </div>
    </div>
  
      </div>

<script src="http://127.0.0.1:3000/js/core/scripts.js"></script>
<script src="http://127.0.0.1:3000/js/scripts/customizer.js"></script>

      @endsection