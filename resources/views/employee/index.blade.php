@extends('layout')

@section('content')

<section class="content">

  <div class="card">
    <div class="card-header">

      <div class="mt-4 d-flex gap-2">
        <a type="button" href={{ route('employee.addEmployee') }} class="btn btn-success">Add Employee</a>
        <!-- <a type="button" href={{ route('leave.assignUpdatePage') }} class="btn btn-primary">Assign or Update</a>
        <a type="button" href={{ route('leave.historyPage') }} class="btn btn-light">History Leave</a> -->
      </div>

    </div>
    <div class="card-body">

      <div class="dataTable-top my-3 d-flex justify-content-between">

        <div class="dataTable-dropdown d-flex align-items-center">
          <label for="entriesSelect" class="me-2 mb-0">Show</label>
          <form method="GET" id="entriesForm">
            <select class="form-select" id="entriesSelect" name="showEntries" style="width: auto;"
              onchange="document.getElementById('entriesForm').submit()">
              @foreach([10, 25, 50, 100] as $option)
              <option value="{{ $option }}" {{ ($perPage==$option) ? 'selected' : '' }}>{{ $option }}</option>
              @endforeach
            </select>
          </form>
          <span class="ms-2">entries</span>
        </div>

        <div class="dataTable-search">
          <input class="form-control" type="text" name="" id="" placeholder="Search...">
        </div>

      </div>

      <table class="table table-striped" id="table1">
        <thead>
          <tr>
            <th>Employee ID</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Status</th>
            <th class="text-center">Action</th>
          </tr>
        </thead>
        @if($employees->isEmpty())
        <tr>
          <td colspan="3" class="text-center">No Data Found</td>
        </tr>
        @endif
        <tbody>
          @foreach($employees as $data)
          <tr>
            <td>{{ $data -> employee_id }}</td>
            <td><a href={{ route('employee.edit', ['id'=> $data->employee_id]) }}> {{ $data -> name }}</a></td>
            <td>{{ $data -> phone }}</td>
            <td>{{ $data -> email }}</td>
            <td>{{ $data -> status }}</td>
            <td class="text-center"></td>
          </tr>
          @endforeach
        </tbody>
      </table>

      <div
        class="dataTable-bottom my-3 d-flex flex-column flex-md-row justify-content-between align-items-center gap-2">

        <!-- Info jumlah entri -->
        <div class="dataTable-info">
          Showing <strong>{{ $employees->firstItem() }}</strong> to <strong>{{ $employees->lastItem() }}</strong> of
          <strong>{{ $employees->total() }}</strong> entries
        </div>

        <!-- Navigasi halaman -->
        <div class="dataTable-pagination">
          {{ $employees->links() }}

        </div>
      </div>

    </div>
  </div>

</section>


@endsection