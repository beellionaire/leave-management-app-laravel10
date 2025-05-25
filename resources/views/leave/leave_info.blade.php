@extends('layout')

@section('content')

<section class="content">

  <div class="card">

    <div class="card-body">

      <div class="col-12">

        <div class="row">
          <div class="col-12">
            <h2>Your Leave Information</h2>
            <p class="">This is summary of your leave balance</p>
          </div>
        </div>

        <div class="row mb-5">
          <div class="col-12">
            <button type="button" class="btn btn-secondary" id="btnShowRequestModal" data-bs-toggle="modal"
              data-bs-target="#modalRequest">Request Leave</button>
          </div>
        </div>

        <div class="row mb-2">
          <div class="col-12">
            <div class="form-group text-center">
              <h3>Cuti Tahunan</h3>
            </div>
          </div>
        </div>
        <div class="row mb-5">
          <div class="col-12">
            <div class="form-group text-center">
              <h1 class="font-weight-bold"> <span id="nominal_balance"></span> <sup style="font-size: 15px"> days</sup>
              </h1>
            </div>
          </div>
        </div>

        <div class="dataTable-top my-4 d-flex justify-content-between">

          <div class="dataTable-dropdown d-flex align-items-center">
            <label for="entriesSelect" class="me-2 mb-0">Show</label>
            <select class="form-select" id="entriesSelect" name="showEntries" style="width: auto;">
              <option value="10">10</option>
              <option value="25">25</option>
              <option value="50">50</option>
              <option value="100">100</option>
            </select>
            <span class="ms-2">entries</span>
          </div>

          <div class="dataTable-search">
            <input class="form-control" type="text" name="" id="" placeholder="Search...">
          </div>

        </div>


        <div class="row">
          <div class="col-12">
            <table class="table table-striped" id="table1">
              <thead>
                <tr>
                  <th>Policy Code</th>
                  <th>Start Date</th>
                  <th>End Date</th>
                  <th>Status</th>
                  <th>Taken</th>
                  <th class="text-center">Detail</th>
                  <th class="text-center">Approval</th>
                  <th class="text-center">Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Graiden</td>
                  <td>076 4820 8838</td>
                  <td>076 4820 8838</td>
                  <td>Offenburg</td>
                  <td>5</td>
                  <td class="text-center"><button type="button" class="btn" id="btnShowDetailLeaveModal"
                      data-bs-toggle="modal" data-bs-target="#modalDetailLeave">
                      <i class="fa fa-bars"></i>
                    </button></td>
                  <td class="text-center"><button type="button" class="btn" id="btnShowApprovalModal"
                      data-bs-toggle="modal" data-bs-target="#modalApprovalLeave">
                      <i class="fa fa-user"></i>
                    </button></td>
                  <td class="text-center">
                    <span class="badge bg-danger">Cancel</span>
                  </td>
                </tr>

              </tbody>
            </table>
          </div>
        </div>

        <div
          class="dataTable-bottom my-3 d-flex flex-column flex-md-row justify-content-between align-items-center gap-2">

          <!-- Info jumlah entri -->
          <div class="dataTable-info">
            Showing <strong>1</strong> to <strong>10</strong> of <strong>26</strong> entries
          </div>

          <!-- Navigasi halaman -->
          <div class="dataTable-pagination">
            <ul class="pagination mb-0">
              <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">Previous</a>
              </li>
              <li class="page-item active">
                <a class="page-link" href="#">1</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">2</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">3</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">Next</a>
              </li>
            </ul>

          </div>
        </div>

      </div>
    </div>
  </div>

  @include('leave.partials.modal_request')
  @include('leave.partials.modal_detail_leave')
  @include('leave.partials.modal_approval')
</section>


@endsection

<script>
  window.onload = function () {
    document.getElementById("nominal_balance").innerText = 90;
  };

</script>