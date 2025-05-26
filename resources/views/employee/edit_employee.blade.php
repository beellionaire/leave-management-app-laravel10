@extends('layout')

@section('content')

<section class="content">

  <div class="card">
    <div class="card-header">

      <!-- menampilkan alert jika terjadi error -->
      <div class="m-5">
        <div class="col-md-6">
          @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
          @endif
        </div>
      </div>

    </div>
    <div class="card-body">

      <form action={{ route('employee.update', ['id'=> $employee->employee_id]) }} method="post">

        @csrf
        @method('patch')

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