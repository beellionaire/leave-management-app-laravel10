<div class="email-action">
  <!-- action left start here -->
  <div class="action-left d-flex align-items-center">
    <!-- select All checkbox -->
    <div class="checkbox checkbox-shadow checkbox-sm selectAll me-3">
      <input type="checkbox" id="checkboxsmall" class='form-check-input'>
      <label for="checkboxsmall"></label>
    </div>
    <!-- delete unread dropdown -->
    <ul class="list-inline m-0 d-flex">
      <li class="list-inline-item mail-delete">
        <button type="button" class="btn btn-icon action-icon" data-toggle="tooltip">
          <span class="fonticon-wrap">
            <svg class="bi" width="1.5em" height="1.5em" fill="currentColor">
              <use xlink:href="/assets/static/images/bootstrap-icons.svg#trash" />
            </svg>
          </span>
        </button>
      </li>
      <li class="list-inline-item mail-unread">
        <button type="button" class="btn btn-icon action-icon">
          <span class="fonticon-wrap d-inline">

            <svg class="bi" width="1.5em" height="1.5em" fill="currentColor">
              <use xlink:href="/assets/static/images/bootstrap-icons.svg#envelope" />
            </svg>
          </span>
        </button>
      </li>
      <li class="list-inline-item">
        <div class="dropdown">
          <button type="button" class="dropdown-toggle btn btn-icon action-icon" id="folder" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <span class="fonticon-wrap">

              <svg class="bi" width="1.5em" height="1.5em" fill="currentColor">
                <use xlink:href="/assets/static/images/bootstrap-icons.svg#folder" />
              </svg>
            </span>
          </button>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="folder">
            <a class="dropdown-item" href="#"><i class="bi bi-edit"></i>
              Draft</a>
            <a class="dropdown-item" href="#"><i class="bi bi-info-circle"></i>Spam</a>
            <a class="dropdown-item" href="#"><i class="bi bi-trash"></i>Trash</a>
          </div>
        </div>
      </li>

    </ul>
  </div>
  <!-- action left end here -->

  <!-- action right start here -->
  <div class="action-right d-flex flex-grow-1 align-items-center justify-content-around">
    <div class="sidebar-toggle d-block d-lg-none">
      <button class="btn btn-sm btn-outline-primary">
        <i class="bi bi-list fs-5"></i>
      </button>
    </div>
    <!-- search bar  -->
    <div class="email-fixed-search flex-grow-1">

      <div class="form-group position-relative  mb-0 has-icon-left">
        <input type="text" class="form-control" placeholder="Search email..">
        <div class="form-control-icon">
          <svg class="bi" width="1.5em" height="1.5em" fill="currentColor">
            <use xlink:href="/assets/static/images/bootstrap-icons.svg#search" />
          </svg>
        </div>
      </div>
    </div>
    <!-- pagination and page count -->
    <span class="d-none d-sm-block">1-10 of 653</span>
    <button class="btn btn-icon email-pagination-prev action-button d-none d-sm-block">
      <svg class="bi" width="1.5em" height="1.5em" fill="currentColor">
        <use xlink:href="/assets/static/images/bootstrap-icons.svg#chevron-left" />
      </svg>
    </button>
    <button class="btn btn-icon email-pagination-next action-button d-none d-sm-block">
      <svg class="bi" width="1.5em" height="1.5em" fill="currentColor">
        <use xlink:href="/assets/static/images/bootstrap-icons.svg#chevron-right" />
      </svg>
    </button>
  </div>
</div>