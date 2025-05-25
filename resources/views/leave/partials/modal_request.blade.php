<div class="modal fade" id="modalRequest" tabindex="-1" role="dialog" aria-labelledby="modalRequestLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Request Leave
        </h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <i data-feather="x"></i>
        </button>
      </div>
      <div class="modal-body">

        <div class="col-12">

          <div class="row mb-3">
            <div class="col-md-6">
              <h6>Leave Type</h6>
              <div class="form-group">
                <fieldset class="form-group">
                  <select class="form-select" id="basicSelect">
                    <option>IT</option>
                    <option>Blade Runner</option>
                    <option>Thor Ragnarok</option>
                  </select>
                </fieldset>
              </div>
            </div>

            <div class="col-md-6">
              <h6>Select File</h6>
              <div class="form-group">
                <input class="form-control" type="file" id="formFile">
              </div>
            </div>
          </div>

          <div class="row mb-3 d-flex">
            <div class="col-12">
              <h6>Select Delegation</h6>
              <div class="form-group">
                <fieldset class="form-group">
                  <select class="form-select" id="basicSelect">
                    <option>IT</option>
                    <option>Blade Runner</option>
                    <option>Thor Ragnarok</option>
                  </select>
                </fieldset>
              </div>
            </div>
          </div>

          <div class="row mb-3">
            <div class="col-12">
              <h6>Notes</h6>
              <div class="form-group">
                <textarea name="" class="form-control" id=""></textarea>
              </div>
            </div>
          </div>

          <div class="row mb-3">
            <div class="col-6">
              <h6>Start Date</h6>
              <div class="form-group">
                <input type="date" class="form-control mb-3 flatpickr-no-config" placeholder="Select date..">
              </div>
            </div>

            <div class="col-6">
              <h6>End Date</h6>
              <div class="form-group">
                <input type="date" class="form-control mb-3 flatpickr-no-config" placeholder="Select date..">
              </div>
            </div>

          </div>

        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary ms-1" data-bs-dismiss="modal">
          <i class="bx bx-check d-block d-sm-none"></i>
          <span class="d-none d-sm-block">Submit</span>
        </button>
      </div>
    </div>
  </div>
</div>