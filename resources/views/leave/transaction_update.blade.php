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

  @include('leave.partials.modal_update')

</section>

@endsection