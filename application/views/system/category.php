<div id="my-toast" class="alert alert-dismissible fade show" role="alert" style="
    width: max-content;
    position: fixed;
    display: none;
    z-index: 99;
    right: 1rem;
    bottom: 4rem;
">
    <button type="button" class="close" aria-label="Close"><span aria-hidden="true">×</span></button>
    <span class="msg" style="font-weight:bold;"></span>
</div>

<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-users icon-gradient bg-mean-fruit">
                </i>
            </div>
            <div>Category Menu
                <div class="page-title-subheading">Create or update the category menu data</div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">Categories
                <div class="btn-actions-pane-right">
                    <button class="btn btn-primary" onclick="addAction()"><span class="btn-icon-wrapper pr-2"><i class="fa fa-plus fa-w-20"></i></span>New Category</button>
                </div>
            </div>
            <div class="table-responsive">
                <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                    <thead>
                        <tr>
                            <th class="text-center" width="5%">#</th>
                            <th class="text-center">Name</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($data as $key => $value): ?>
                        <tr>
                            <td class="text-center text-muted">#<?=$value['id'] ?></td>
                            <td>
                                <span style="background:<?=$value['bgcolor'] ?>; font-weight:bold; padding: 5px 10px; border-radius: 9px; color: <?=$value['fgcolor'] ?>;">
                                    <?=$value['name'] ?>
                                </span>
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
    let flash_msg = <?=json_encode($this->session->flashdata('msg')) ?>;

    $(document).ready(function () {
        if(flash_msg != null)
            (flash_msg.success === 1)? showMessage('#my-toast', 'success', flash_msg.message) : showMessage('#my-toast', 'danger', flash_msg.message) 
    });

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
        $('#form_category')[0].reset();
        showModal('#categoryModal', true)
    }

    function editAction(id){
        let row = data.filter(a => a.id == id)
        if (row.length > 0) {
            $('#idCategory').val(row[0].id)
            $('#tbName').val(row[0].name)
            $('#tbBgColor').val(row[0].bgcolor)
            $('#tbFgColor').val(row[0].fgcolor)

            showModal('#categoryModal', true)
        }
    }

    function deleteAction(id){
        $('#deleted_id').val(id);
        showModal('#deleteModal', true)
    }
</script>
