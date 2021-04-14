<style>
.my-title{
    display: flex;
    flex-direction: column;
}

.my-group{
    display: flex;
}

.my-value{
    margin-left: 5px;
    font-weight: bold;
}

.my-content{
    margin: 10px 20px 25px 0;
    text-align: justify;
    border-top: 2px solid #eee;
    padding-top: 20px;
}

.my-time{
    margin-top: 5px;
    margin-bottom: 5px;
}
</style>
<div class="modal fade" id="userModal" tabindex="-1" role="dialog" aria-labelledby="userModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="userModalLabel"><i class="fa fa-envelope-open"></i>&nbsp;&nbsp;Mail</h5>
                <button type="button" class="close" onclick="showModal('#userModal', false)">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="padding: 25px;">
               <div class="my-title">
                    <div class="my-group">
                        <div class="my-label">From:</div>
                        <div class="my-value">
                            <span id="lbName"></span>&nbsp;<<span id="lbEmail"></span>>
                        </div>
                    </div>
                    <div class="my-time" id="lbTime"></div> 
               </div>
               <div class="my-content" id="lbMessage">
               </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" onclick="showModal('#userModal', false)">Close</button>
            </div>
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