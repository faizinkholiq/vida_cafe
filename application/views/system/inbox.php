
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-mail icon-gradient bg-mean-fruit">
                </i>
            </div>
            <div>Inbox
                <div class="page-title-subheading">View mail from customers </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">Users
                <div class="btn-actions-pane-right">
                    <button class="btn btn-primary" onclick="addAction()"><span class="btn-icon-wrapper pr-2"><i class="fa fa-plus fa-w-20"></i></span>New User</button>
                </div>
            </div>
            <div class="table-responsive">
                <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>Name</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($data as $key => $value): ?>
                        <tr>
                            <td class="text-center text-muted">#<?=$value['id'] ?></td>
                            <td>
                                <div class="widget-content p-0">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left mr-3">
                                            <div class="widget-content-left">
                                                <img width="40" class="rounded-circle"
                                                    src="<?=!empty($value['avatar'])? base_url('assets/images/avatar/').$value['avatar'] : '' ;  ?>" alt="">
                                            </div>
                                        </div>
                                        <div class="widget-content-left flex2">
                                            <div class="widget-heading"><?=$value['name'] ?></div>
                                            <div class="widget-subheading opacity-7"><?=$value['role'] ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center">
                                <?php if($value['active']): ?>
                                    <div class="badge badge-success">Active</div>
                                <?php else: ?>
                                    <div class="badge badge-light">Inactive</div>
                                <?php endif; ?>
                            </td>
                            <td class="text-center">
                                <button onclick="editAction(<?=$value['id'] ?>)" class="mr-2 btn-icon btn-icon-only btn btn-outline-alternate"><i class="fa fa-edit fa-w-20 btn-icon-wrapper"> </i></button>
                                <button onclick="deleteAction(<?=$value['id'] ?>)" class="mr-2 btn-icon btn-icon-only btn btn-outline-danger"><i class="fa fa-trash fa-w-20 btn-icon-wrapper"> </i></button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    let data = <?=json_encode($data) ?>;
    let base = '<?=base_url() ?>';

    function showModal(modal, show){
        if(show){
            $(modal).css('display', 'block')
            $(modal).addClass('show')
            $('body').addClass('modal-open')
            $('body').append(`<div class="modal-backdrop fade show"></div>`)
        }else{
            $(modal).css('display', 'none')
            $(modal).removeClass('show')
            $('body').removeClass('modal-open')
            $(`.modal-backdrop`).remove()
        }
    }

    function addAction(){
        $('.preview-file').hide();
        $('#form_user')[0].reset();
        $('#cbActive').attr('checked', true)
        showModal('#userModal', true)
    }

    function editAction(id){
        let row = data.filter(a => a.id == id)
        if (row.length > 0) {
            $('#idUser').val(row[0].id)
            $('#tbName').val(row[0].name)
            $('#tbUsername').val(row[0].username)
            $('#psPassword').val(row[0].password)
            $('#slcRole').val(row[0].role)
            $('#cbActive').attr('checked', (row[0].active == 1)? true : false)
            
            if(row[0].avatar != ""){
                $('.preview-file').show();                
                $('.preview-file img').attr('src', base + '/assets/images/avatar/' + row[0].avatar)
            }else{
                $('.preview-file').hide();
            }
            showModal('#userModal', true)
        }
    }

    function deleteAction(id){
        $('#deleted_id').val(id);
        showModal('#deleteModal', true)
    }
</script>
