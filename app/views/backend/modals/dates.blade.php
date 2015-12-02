<div class="modal fade" id="datesModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Edit live gig</h4>
      </div>
      <div class="modal-body">
        {{ Form::open(['method' => 'put', 'id' => 'editDateForm']) }}
          <div class="form-group">
            <input class="form-control js-date" placeholder="Date" name="date" type="text">
          </div>
          <div class="form-group">
            <input class="form-control js-country" placeholder="Country" name="country" type="text">
          </div>
          <div class="form-group">
            <input class="form-control js-city" placeholder="City" name="city" type="text">
          </div>
          <div class="form-group">
            <input class="form-control js-location" placeholder="Location" name="location" type="text">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
        {{ Form::close() }}
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
