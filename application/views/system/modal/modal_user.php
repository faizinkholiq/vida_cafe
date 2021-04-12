<div class="modal fade" id="userModal" tabindex="-1" role="dialog" aria-labelledby="userModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="userModalLabel">Create New User</h5>
                    <button type="button" class="close" onclick="showModal('#userModal', false)">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?=site_url('admin/user/save')?>" id="form_user" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <input id="idUser" type="hidden" name="id" />
                    <div class="position-relative form-group">
                        <label for="tbName" class="">Name</label>
                        <input name="name" id="tbName" placeholder="Your Name" type="text" class="mb-2 form-control" required>
                    </div>
                    <div class="position-relative form-group">
                        <label for="tbUsername" class="">Username</label>
                        <input name="username" id="tbUsername" placeholder="Username" type="text" class="mb-2 form-control" required>
                    </div>
                    <div class="position-relative form-group">
                        <label for="psPassword" class="">Password</label>
                        <input name="password" id="psPassword" placeholder="Password" type="password" class="mb-2 form-control" required>
                    </div>
                    <div class="position-relative form-group"><label for="slcRole" class="">Role</label>
                        <select name="role" id="slcRole" class="form-control">
                            <option value="owner">Owner</option>
                            <option value="member">Member</option>
                        </select>
                    </div>
                    <div class="position-relative form-group">
                        <label for="fileMenu" class="">File</label>
                        <div class="preview-file" style="
                            box-shadow: 1px 1px 10px 1px #ddd;
                            border-radius: 10px;
                            padding: 15px;
                            width: 200px;
                            height: 180px;
                            display: flex;
                            flex-direction: column;
                            justify-content: center;
                            margin: 10px 10px 20px;
                        ">
                            <img style="width: 100%; height: 100%; object-fit: cover;" src="" />
                        </div>
                        <div class="col-sm-10"><input name="file" id="fileUser" type="file" class="form-control-file">
                            <small class="form-text text-muted">This is file for photo.</small>
                        </div>
                    </div>
                    <div class="position-relative form-check"><label class="form-check-label">
                        <input id="cbActive" name="active" type="checkbox" class="form-check-input" checked="true" value="1"> Active</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" onclick="showModal('#userModal', false)">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                </form>
            </div>
        </div>
    </div>

<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="userModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Delete Menu</h5>
                <button type="button" class="close" onclick="showModal('#deleteModal', false)">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure to delete this menu?
            </div>
            <div class="modal-footer">
                <form action="<?=site_url('admin/menu/delete')?>" method="get">
                    <input id="deleted_id" type="hidden" name="id">
                    <button type="button" class="btn btn-secondary"
                        onclick="showModal('#deleteModal', false)">Close</button>
                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>