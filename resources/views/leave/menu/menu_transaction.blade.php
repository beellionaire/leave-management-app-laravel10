<div class="card-body">
  <ul class="nav nav-tabs" id="myTab" role="tablist" style="font-size: 15px;">
    <li class="nav-item" role="presentation">
      <a class="nav-link {{ Route::is('leave.transactionAssignPage') ? 'active' : '' }}" id="general-info-tab"
        href="{{ route('leave.transactionAssignPage') }}" role="tab" aria-controls="general-info"
        aria-selected="true"><i class="fa fa-sign-in-alt"></i> Assign</a>
    </li>
    <li class="nav-item" role="presentation">
      <a class="nav-link {{ Route::is('leave.transactionUpdatePage') ? 'active' : '' }}" id="general-info-tab"
        href="{{ route('leave.transactionUpdatePage') }}" role="tab" aria-controls="general-info"
        aria-selected="true"><i class="fa fa-edit"></i> Update</a>
    </li>
  </ul>
</div>