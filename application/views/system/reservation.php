
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-display2 icon-gradient bg-mean-fruit">
                </i>
            </div>
            <div>Reservation
                <div class="page-title-subheading">Reservation management </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">List reservation
            </div>
            <div class="table-responsive">
                <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th width="18%">Time</th>
                            <th width="25%">Name</th>
                            <th class="text-center">Many (People)</th>
                            <th>Contact</th>
                            <!-- <th class="text-center">Actions</th> -->
                        </tr>
                    </thead>
                    <tbody>
                    <?php $num = 1; foreach($data as $key => $value): ?>
                        <tr>
                            <td class="text-center text-muted"><?=$num++ ?></td>
                            <td><?=$value['time'] ?></td>
                            <td><?=$value['name'] ?></td>
                            <td class="text-center"><?=$value['people'] ?></td>
                            <td><?=$value['contact'] ?></td>
                            <!-- <td class="text-center">
                                <button onclick="viewAction(<?=$value['id'] ?>)" class="mr-2 btn-icon btn-icon-only btn btn-outline-primary"><i class="fa fa-eye fa-w-20 btn-icon-wrapper"> </i></button>
                                <button onclick="deleteAction(<?=$value['id'] ?>)" class="mr-2 btn-icon btn-icon-only btn btn-outline-danger"><i class="fa fa-trash fa-w-20 btn-icon-wrapper"> </i></button>
                            </td> -->
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
