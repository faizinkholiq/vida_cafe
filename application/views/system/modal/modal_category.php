<div class="modal fade" id="categoryModal" tabindex="-1" role="dialog" aria-labelledby="categoryModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="categoryModalLabel">Create New Category</h5>
                    <button type="button" class="close" onclick="showModal('#categoryModal', false)">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?=site_url('admin/category/save')?>" id="form_category" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <input id="idCategory" type="hidden" name="id" />
                    <div class="position-relative form-group">
                        <label for="tbName" class="">Name</label>
                        <input name="name" id="tbName" placeholder="Name" type="text" class="mb-2 form-control" required>
                    </div>
                    <div class="position-relative form-group">
                        <label for="tbName" class="">Background</label>
                        <input name="bgcolor" id="tbBgColor" type="color" class="mb-2 form-control" value="#ffffff">
                    </div>
                    <div class="position-relative form-group">
                        <label for="tbName" class="">Font</label>
                        <input name="fgcolor" id="tbFgColor" type="color" class="mb-2 form-control" value="#000000">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" onclick="showModal('#categoryModal', false)">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                </form>
            </div>
        </div>
    </div>

<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="categoryModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Delete Category</h5>
                <button type="button" class="close" onclick="showModal('#deleteModal', false)">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure to delete this category?
            </div>
            <div class="modal-footer">
                <form action="<?=site_url('admin/category/delete')?>" method="get">
                    <input id="deleted_id" type="hidden" name="id">
                    <button type="button" class="btn btn-secondary"
                        onclick="showModal('#deleteModal', false)">Close</button>
                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>