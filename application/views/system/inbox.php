<style>
    .btn-show-action{
        margin: 0 10px;
        font-size: 20px;
        color: #aaa;
        font-weight: bold;
        cursor: pointer;
    }

    .btn-show-action.show{
        color: #555;
    }
</style>

<div id="my-toast" class="alert alert-dismissible fade show" role="alert" style="
    width: max-content;
    position: fixed;
    display: none;
    z-index: 99;
    right: 1rem;
    bottom: 1rem;
">
    <button type="button" class="close" aria-label="Close"><span aria-hidden="true">×</span></button>
    <span class="msg" style="font-weight:bold;"></span>
</div>

<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-mail icon-gradient bg-mean-fruit">
                </i>
            </div>
            <div>Testimony
                <div class="page-title-subheading">View mail from customers </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">Mails
            </div>
            <div class="table-responsive">
                <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th class="text-center" width="15%">Show</th>
                            <th class="text-center" width="15%">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $num = 1; foreach($data as $key => $value): ?>
                        <tr>
                            <td class="text-center text-muted"><?=$num++ ?></td>
                            <td><?=$value['name'] ?></td>
                            <td><?=$value['email'] ?></td>
                            <td class="text-center">
                                <?php if($value['showed']): ?>
                                    <a href="<?=site_url('admin/inbox/showed/'.$value['id'].'/0') ?>">
                                        <i class="fa fa-eye fa-w-20 btn-icon-wrapper btn-show-action show" data-toggle="tooltip" title="Show"> </i>
                                    </a>
                                <?php else: ?>
                                    <a href="<?=site_url('admin/inbox/showed/'.$value['id'].'/1') ?>">
                                        <i class="fa fa-eye-slash fa-w-20 btn-icon-wrapper btn-show-action" data-toggle="tooltip" title="Hide"> </i>
                                    </a>
                                <?php endif; ?>
                            </td>
                            <td class="text-center">
                                <button data-toggle="tooltip" title="View" onclick="viewAction(<?=$value['id'] ?>)" class="mr-2 btn-icon btn-icon-only btn btn-outline-primary"><i class="fa fa-envelope-open fa-w-20 btn-icon-wrapper"> </i></button>
                                <button data-toggle="tooltip" title="Delete" onclick="deleteAction(<?=$value['id'] ?>)" class="mr-2 btn-icon btn-icon-only btn btn-outline-danger"><i class="fa fa-trash fa-w-20 btn-icon-wrapper"> </i></button>
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

    function viewAction(id){
        let row = data.filter(a => a.id == id)
        if (row.length > 0) {
            $('#lbName').text(row[0].name)
            $('#lbEmail').text(row[0].email)
            $('#lbTime').text(row[0].time)
            $('#lbMessage').text(row[0].message)
            showModal('#userModal', true)
        }
    }

    function deleteAction(id){
        $('#deleted_id').val(id);
        showModal('#deleteModal', true)
    }
</script>
