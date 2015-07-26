<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Edit news</h4>
      </div>
      <div class="modal-body">
        {{ Form::open() }}
          <div class="form-group">
            <input class="form-control js-title" placeholder="Title" required="required" name="title" type="text">
          </div>
          <div class="form-group">
            <textarea class="form-control js-body" placeholder="Body" required="required" name="body" cols="50" rows="10"></textarea>
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