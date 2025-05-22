@extends('layout')

@section('content')

<section class="content">


  <div class="card">
    <div class="card-header">

    </div>
    <div class="card-body">

      <div class="col-12">

        <div class="row mb-3">
          <div class="col-md-10">
            <h6>Policy Name</h6>
            <div class="form-group">
              <input type="text" class="form-control" id="policy_name" placeholder="Enter Policy Name">
            </div>
          </div>

          <div class="col-md-2">
            <h6>Policy Code</h6>
            <div class="form-group">
              <input type="text" class="form-control" id="policy_code" placeholder="Enter Policy Code">
            </div>
          </div>
        </div>

        <div class="row mb-3">
          <div class="col-6">
            <h6>Policy Description</h6>
            <div class="form-group">
              <input type="text" class="form-control" id="policy_description" placeholder="Enter Policy Description">
            </div>
          </div>
        </div>

        <div class="row mb-3">
          <div class="col-6">
            <h6>Effective Date</h6>
            <div class="form-group position-relative has-icon-left">
              <input type="text" class="form-control" id="effective_date">
              <div class="form-control-icon">
                <i class="far fa-calendar-alt"></i>
              </div>
            </div>
          </div>
        </div>

        <div class="row mb-3">
          <div class="col-6">
            <h6>Expired Date</h6>
            <div class="form-group position-relative has-icon-left">
              <input type="text" class="form-control" id="expired_date">
              <div class="form-control-icon">
                <i class="far fa-calendar-alt"></i>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <button class="btn btn-primary float-end">Save</button>
          </div>
        </div>


      </div>


    </div>
  </div>



</section>

@endsection