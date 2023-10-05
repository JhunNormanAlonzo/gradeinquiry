<div class="modal fade" id="update{{ $id }}">
    <div class="modal-dialog">
        <form method="POST" action="{{ route('school-year.update', ['school_year' => $id]) }}">
            @csrf
            @method('patch')
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">UPDATE</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>School Year</label>
                        <input name="school_year" type="text" class="form-control"
                            value="{{ $schoolYear->school_year }}" placeholder="" required />
                    </div>

                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </form>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
