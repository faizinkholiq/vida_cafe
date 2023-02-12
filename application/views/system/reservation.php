<style>
.approve-btn{
    margin: 0 10px;
    font-size: 20px;
    color: #aaa;
    font-weight: bold;
    cursor: pointer;
}

.approve-btn.approved{
    color: #05c46b;
}

.approve-btn.refused{
    color: #ff3f34;
}

.btn-secondary{
    background: #eee;
    color: #666;
    font-weight: bold;
    border: none;
    font-size: 0.8rem;
}

.btn-secondary:hover{
    background: #ddd;
    color: #666;
}
</style>
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
                <div class="row col-md-12">
                    <div class="col-md-12 mb-2 " style="
                        display: flex;
                        padding: 1rem;
                    ">
                    <input name="name" id="tbBookID" placeholder="Search by Book ID" type="text" class="form-control col-md-3" style="
                        border-top-right-radius: 0;
                        border-bottom-right-radius: 0;
                    " required>
                    <button type="button" class="btn btn-primary" onclick="searchAction()" style="
                        border-top-left-radius: 0;
                        border-bottom-left-radius: 0;
                    "><i class="fa fa-search"></i></button>

                    <button type="button" class="btn btn-secondary " onclick="clearFilter()" style="
                        margin-left: 1.5rem;
                    "><i class="fa fa-list" style="margin-right:0.5rem"></i>All Data</button>
                    </div>
                </div>
                <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th width="18%">ID</th>
                            <th width="18%">Time</th>
                            <th width="20%">Name</th>
                            <th class="text-center">Many (People)</th>
                            <th>Contact</th>
                            <th>Status</th>
                            <th class="text-center">Approved</th>
                        </tr>
                    </thead>
                    <tbody id="reservation-container">
                    <?php $num = 1; foreach($data as $key => $value): ?>
                        <tr>
                            <td class="text-center text-muted"><?=$num++ ?></td>
                            <td><?=$value['code'] ?></td>
                            <td><?=$value['time'] ?></td>
                            <td><?=$value['name'] ?></td>
                            <td class="text-center"><?=$value['people'] ?></td>
                            <td><?=$value['contact'] ?></td>
                            <td><?php 
                                switch($value['status']){
                                    case 'Approved':
                                        echo '<span style="padding:4px 8px; font-weight:bold; font-size: 0.7rem; border-radius: 0.5rem; color:white; background:#20bf6b;">Disetujui</span>';
                                        break;
                                    case 'Refused':
                                        echo '<span style="padding:4px 8px; font-weight:bold; font-size: 0.7rem; border-radius: 0.5rem; color:white; background:#eb3b5a;">Ditolak</span>';
                                        break;
                                    default:
                                        echo '<span style="padding:4px 8px; font-weight:bold; font-size: 0.7rem; border-radius: 0.5rem; color:white; background:#f7b731;">Menunggu</span>';
                                        break;
                                }
                            ?></td>
                            <td class="text-center">
                                <?php if (!empty($value['status'])): ?>
                                -
                                <?php else: ?>
                                <a data-toggle="tooltip" title="Approved" href="<?=site_url('admin/reservation/approved/'.$value['id'].'/1')?>"><i class="fa fa-check fa-w-20 btn-icon-wrapper approve-btn approved"> </i></a>
                                <a data-toggle="tooltip" title="Refused" href="<?=site_url('admin/reservation/approved/'.$value['id'].'/2')?>"><i class="fa fa-times fa-w-20 btn-icon-wrapper approve-btn refused"> </i></a>
                                <?php endif; ?>
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
    let site = '<?=site_url() ?>';

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

    function searchAction(){
        let txt = $('#tbBookID').val();

        if(txt !== null || txt !== ""){
            let row = data.filter(a => a.code.includes(txt))
            loadData(row);
        }
    }

    function clearFilter(){
        let txt = $('#tbBookID').val('');
        loadData(data);
    }

    function loadData(data){
        $.when($('#reservation-container').fadeOut(100)).done(function(){
            $('#reservation-container').html('');
            data.forEach(function(r, i){
                r.status = r.status === null? '': r.status;
    
                $('#reservation-container').append(`
                <tr>
                        <td class="text-center text-muted">${i+1}</td>                   
                        <td>${r.code}</td>
                        <td>${r.time}</td>
                        <td>${r.name}</td>
                        <td class="text-center">${r.people}</td>
                        <td>${r.contact}</td>
                        <td class="text-center">
                            <a data-toggle="tooltip" title="Approved" href="${site + "admin/reservation/approved/" +r.id + "/1" }"><i class="fa fa-check fa-w-20 btn-icon-wrapper approve-btn ${r.status.toLowerCase() === "approved"? "approved" : ""}"> </i></a>
                            <a data-toggle="tooltip" title="Refused" href="${site + "admin/reservation/approved/" +r.id + "/1" }"><i class="fa fa-times fa-w-20 btn-icon-wrapper approve-btn ${r.status.toLowerCase() === "refused"? "refused" : ""}"> </i></a>
                        </td>
                    </tr>
                `).hide().fadeIn('100');
            });
        });

    }
</script>
