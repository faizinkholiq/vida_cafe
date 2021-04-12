<div class="modal fade" id="galleryModal" tabindex="-1" role="dialog" aria-labelledby="galleryModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Photo</h5>
                <button type="button" class="close" onclick="showModal('#galleryModal', false)">
                    <span aria-hidden="true">&times;</span>
                </button>   
            </div>
            <form action="<?=site_url('admin/gallery/create')?>" id="form_gallery" method="POST" enctype="multipart/form-data">
            <div class="modal-body">
                    <input id="idGallery" type="hidden" name="id" />
                    <div class="position-relative form-group">
                        <label for="fileGallery" class="">File</label>
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
                        <div class="col-sm-10"><input name="file" id="fileGallery" type="file" class="form-control-file">
                            <small class="form-text text-muted">This is file for photo.</small>
                        </div>
                    </div>
                </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" onclick="showModal('#galleryModal', false)">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="galleryModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Delete Photo</h5>
                <button type="button" class="close" onclick="showModal('#deleteModal', false)">
                    <span aria-hidden="true">&times;</span>
                </button>   
            </div>
            <div class="modal-body">
                Are you sure to delete this photo?
            </div>
            <div class="modal-footer">
                <form action="<?=site_url('admin/gallery/delete')?>" method="get">
                    <input id="deleted_id" type="hidden" name="id">
                    <button type="button" class="btn btn-secondary" onclick="showModal('#deleteModal', false)">Close</button>
                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>