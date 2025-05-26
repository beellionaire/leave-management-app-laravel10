@extends('layout')

@section('content')

<section class="content">

  <div class="card">
    <div class="card-header">

    </div>
    <div class="card-body">

      <form action={{ route('employee.store') }} method="post">

        @csrf

        <div class="col-12">

          <div class="row mb-3">
            <div class="col-6">
              <h6>Name</h6>
              <div class="form-group">
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name">
              </div>
            </div>
          </div>

          <div class="row mb-3">
            <div class="col-6">
              <h6>Email</h6>
              <div class="form-group">
                <input type="text" class="form-control" name="email" id="email" placeholder="Enter Email">
              </div>
            </div>
          </div>

          <div class="row mb-3">
            <div class="col-6">
              <h6>Phone</h6>
              <div class="form-group">
                <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter Phone">
              </div>
            </div>
          </div>

          <div class="row mb-3">
            <div class="col-6">
              <h6>Status</h6>
              <div class="form-group">
                <fieldset class="form-group">
                  <select class="form-select" id="status" name="status">
                    <option>Manager</option>
                    <option>Supervisor</option>
                    <option>Accountant</option>
                    <option>IT Support</option>
                    <option>Adminsitrator</option>
                  </select>
                </fieldset>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <button class="btn btn-primary float-end">Save</button>
            </div>
          </div>

        </div>
      </form>

    </div>
  </div>



</section>

@endsection