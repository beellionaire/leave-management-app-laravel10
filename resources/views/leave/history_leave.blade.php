@extends('layout')

@section('content')

<section class="content">
  <div class="card">
    <div class="card-header">

      <div class="mt-4 d-flex gap-2">
        <div class="btn-group mb-1">
          <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle me-1" type="button" id="dropdownMenuButton"
              data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Filter Data
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#">Option 1</a>
              <a class="dropdown-item" href="#">Option 2</a>
              <a class="dropdown-item" href="#">Option 3</a>
            </div>
          </div>
        </div>
      </div>

    </div>
    <div class="card-body">

      <div class="row">
        <div class="col-3">
          <div class="form-group position-relative has-icon-left">
            <input type="text" class="form-control" id="effective_date" placeholder="Start Date Submission">
            <div class="form-control-icon">
              <i class="far fa-calendar-alt"></i>
            </div>
          </div>
        </div>

        <div class="col-3">
          <div class="form-group position-relative has-icon-left">
            <input type="text" class="form-control" id="effective_date" placeholder="Start Date Submission">
            <div class="form-control-icon">
              <i class="far fa-calendar-alt"></i>
            </div>
          </div>
        </div>

        <div class="col-3">
          <div class="form-group position-relative has-icon-left">
            <input type="text" class="form-control" id="effective_date" placeholder="Start Date Submission">
            <div class="form-control-icon">
              <i class="far fa-calendar-alt"></i>
            </div>
          </div>
        </div>

        <div class="col-3">
          <button class="btn btn-success">Export</button>
        </div>
      </div>

      <div class="dataTable-top my-3 d-flex justify-content-between">

        <div class="dataTable-dropdown d-flex align-items-center">

        </div>

        <div class="dataTable-search">
          <input class="form-control" type="text" name="" id="" placeholder="Search...">
        </div>

      </div>

      <table class="table table-striped" id="table1">
        <thead>
          <tr>
            <th>Policy Name</th>
            <th>Code</th>
            <th>Effective Data</th>
            <th>Expired Date</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Graiden</td>
            <td>vehicula.aliquet@semconsequat.co.uk</td>
            <td>076 4820 8838</td>
            <td>Offenburg</td>
            <td>
              <span class="badge bg-success">Active</span>
            </td>
          </tr>

        </tbody>
      </table>

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
          </>

        </div>


      </div>
    </div>

</section>




@endsection