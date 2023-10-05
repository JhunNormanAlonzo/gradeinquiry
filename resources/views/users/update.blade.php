<div class="modal fade" id="update{{ $id }}">
    <div class="modal-dialog">
        <form method="POST" action="{{ route('users.update', ['user' => $id]) }}">
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
                        <label>Name</label>
                        <input name="name" type="text" class="form-control" value="{{ $user->name }}"
                            required />
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input name="email" type="email" class="form-control" value="{{ $user->email }}"
                            required />
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
