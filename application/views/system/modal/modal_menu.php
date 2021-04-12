<div class="modal fade" id="menuModal" tabindex="-1" role="dialog" aria-labelledby="menuModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Menu</h5>
                <button type="button" class="close" onclick="showModal('#menuModal', false)">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?=site_url('admin/menu/save')?>" id="form_menu" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <input id="idMenu" type="hidden" name="id" />
                    <div class="position-relative form-group">
                        <label for="tbName" class="">Name</label>
                        <input id="tbName" name="name" placeholder="Name" type="text" class="mb-2 form-control"
                            required>
                    </div>
                    <div class="position-relative form-group">
                        <label for="tbPrice" class="">Price</label>
                        <input id="tbPrice" name="price" placeholder="Rp." type="text" class="mb-2 form-control">
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
                        <div class="col-sm-10"><input name="file" id="fileMenu" type="file" class="form-control-file">
                            <small class="form-text text-muted">This is file for photo.</small>
                        </div>
                    </div>
                    <div class="position-relative form-group">
                        <label for="txtDescription" class="">Description</label>
                        <textarea name="description" id="txtDescription" class="form-control"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                        onclick="showModal('#menuModal', false)">Close</button>
                    <button type="submit" class="btn btn-primary" onclick="submitAction()">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="menuModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Menu</h5>
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