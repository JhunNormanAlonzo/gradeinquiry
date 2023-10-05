<div class="modal fade" id="create">
    <div class="modal-dialog">
        <form method="POST" action="{{ route('subjects.store') }}">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">CREATE</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label>Subject Code</label>
                        <input name="subject_code" type="text" class="form-control" required />
                    </div>

                    <div class="form-group">
                        <label>Subject Description</label>
                        <input name="subject_description" type="text" class="form-control" required />
                    </div>
                    <div class="form-group">
                        <label>Pre-requisite</label>
                        <input name="prerequisite" type="text" class="form-control" required />
                    </div>
                    <div class="form-group">
                        <label>Units</label>
                        <input name="subject_unit" type="number" class="form-control" required />
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </form>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
