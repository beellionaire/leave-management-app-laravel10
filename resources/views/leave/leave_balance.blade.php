@extends('layout')

@section('content')

<section class="content">

  <div class="card">
    <div class="card-header">

      <div class="mt-4 d-flex gap-2">
        <button class="btn btn-success">Export</button>
      </div>

    </div>
    <div class="card-body">

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

      <table class="table table-striped" id="balanceTable">
        <thead>
          <tr>
            <th>Employee ID</th>
            <th>Employee Name</th>
            <th>Balance</th>
            <th class="text-center">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Graiden</td>
            <td>076 4820 8838</td>
            <td>1</td>
            <td class="text-center">
              <button class="btn">
                <i class="fa fa-info-circle" aria-hidden="true"></i>
              </button>
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

        </div>
      </div>

    </div>
  </div>

</section>


@endsection