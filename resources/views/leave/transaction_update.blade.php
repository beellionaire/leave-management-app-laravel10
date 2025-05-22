@extends('layout')

@section('content')

<section class="content">

  <div class="card">
    @include('leave.menu.menu_transaction')
    <div class="card-body">

      <div class="col-12">

        <div class="row">
          <div class="col-4">
            <h6>Select Leave Type</h6>
            <fieldset class="form-group">
              <select class="form-select" id="basicSelect">
                <option>IT</option>
                <option>Blade Runner</option>
                <option>Thor Ragnarok</option>
              </select>
            </fieldset>
          </div>

          <div class="col-4">
            <h6>Select Type Assign</h6>
            <fieldset class="form-group">
              <select class="form-select" id="basicSelect">
                <option>IT</option>
                <option>Blade Runner</option>
                <option>Thor Ragnarok</option>
              </select>
            </fieldset>
          </div>

          <div class="col-4 mb-5">
            <h6>Description</h6>
            <div class="form-group">
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" style="resize: none;"></textarea>
            </div>
          </div>
        </div>

        <div class="row mb-5">
          <div class="col-12">
            <button type="button" class="btn btn-secondary" id="btnShowAssignModal" data-bs-toggle="modal"
              data-bs-target="#modalAssign">Employee List</button>
          </div>
        </div>

        <div class="row">
          <div class="col-12">
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
          </div>
        </div>

        <div
          class="dataTable-bottom my-3 d-flex flex-column flex-md-row justify-content-between align-items-center gap-2">

          <!-- Info jumlah entri -->
          <div class="dataTable-info">
            Showing <strong>1</strong> to <strong>10</strong> of <strong>26</strong> entries
          </div>

          <div class="dataTables-button">
            <button class="btn btn-primary float-end">Save</button>
          </div>

        </div>

      </div>
    </div>
  </div>

  <div class="modal fade" id="modalAssign" tabindex="-1" role="dialog" aria-labelledby="modalAssignLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">Daftar Pegawai
          </h5>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <i data-feather="x"></i>
          </button>
        </div>
        <div class="modal-body">

          <div class="dataTable-top my-3 d-flex justify-content-between">

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

          <table class="table table-striped" id="table1">
            <thead>
              <tr>
                <th><input type="checkbox" name="" id=""></th>
                <th>ID Pegawai</th>
                <th>Nama</th>

              </tr>
            </thead>
            <tbody>
              <tr>
                <td><input type="checkbox" name="" id=""></td>
                <td>Graiden</td>
                <td>vehicula.aliquet@semconsequat.co.uk</td>

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

            </div>

          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
            <i class="bx bx-x d-block d-sm-none"></i>
            <span class="d-none d-sm-block">Close</span>
          </button>
          <button type="button" class="btn btn-primary ms-1" data-bs-dismiss="modal">
            <i class="bx bx-check d-block d-sm-none"></i>
            <span class="d-none d-sm-block">Accept</span>
          </button>
        </div>
      </div>
    </div>
  </div>

</section>

@endsection