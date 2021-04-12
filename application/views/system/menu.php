<style>
.my-scroller{
    width: 100%;
    margin:0; 
    padding: 0;
    width: 100%;
    overflow: auto;
    max-height: 26rem;
}
.my-scroller::-webkit-scrollbar {
    width: 0;  /* Remove scrollbar space */
    background: transparent;  /* Optional: just make scrollbar invisible */
}
/* Optional: show position indicator in red */
.my-scroller::-webkit-scrollbar-thumb {
    background: #FF0000;
}

.my-star{
    float: right;
    color: #f7b924;
    font-size: 25px;
    margin-right: -10px;
    cursor: pointer;
}

.my-unstar{
    float: right;
    -webkit-text-fill-color: white;
    -webkit-text-stroke-width: 2px;
    -webkit-text-stroke-color: #f7b924;
    font-size: 25px;
    margin-right: -10px;
    cursor: pointer;
}
</style>

<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-coffee icon-gradient bg-mean-fruit">
                </i>
            </div>
            <div>Menu
                <div class="page-title-subheading">In here,You can edit list menu of your cafe</div>
            </div>
        </div>
    </div>
</div>
<div class="row col-md-12" style="margin:0; padding:0;">
    <div class="row col-md-11 my-scroller">
        <?php foreach($data as $key => $value): ?>
        <div class="mb-3 col-md-4 row" style="margin:0">
            <div class="main-card col-md-12 card">
                <div class="card-body">
                    <a href="<?=site_url('admin/menu/favorite/').$value['id']?>"><i class="fa fa-star fa-w-20 btn-icon-wrapper <?=!empty($value['special'])? 'my-star' : 'my-unstar' ;  ?>"> </i></a>
                    <h5 class="card-title"><?=!empty($value['name'])? $value['name'] : '' ;  ?></h5>
                    <h6 class="mb-0 card-subtitle">Rp<?=!empty($value['price'])? number_format($value['price'],2,',','.') : '' ;  ?></h6>
                </div>
                <img width="100%" src="<?=!empty($value['photo'])? base_url('assets/images/menu/').$value['photo'] : '' ;  ?>" alt="Card image cap" style="height: 150px; object-fit: cover; width: 100%;">
                <div class="card-body" style="    
                    text-align: end;
                    padding-right: 0;
                    width: 100%;">
                    <button class="btn-icon btn-icon-only btn btn-outline-alternate" onclick="editAction(<?=!empty($value['id'])? $value['id'] : '' ;  ?>)" data-toggle="tooltip" data-original-title="Edit">
                        <i class="fa fa-edit fa-w-20 btn-icon-wrapper"> </i>
                    </button>
                    <button class="btn-icon btn-icon-only btn btn-outline-danger" onclick="deleteAction(<?=!empty($value['id'])? $value['id'] : '' ;  ?>)" data-toggle="tooltip" data-original-title="Delete">
                        <i class="fa fa-trash fa-w-20 btn-icon-wrapper"> </i>
                    </button>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <div class="col-md-1" style="height: 100px; width: 100%; margin:0; padding: 0; text-align: center">
        <button type="button" class="btn btn-primary" onclick="addAction()" style="
            border-radius: 50%;
            width: 60px;
            height: 60px;
            font-size: 20px;
            /* position: sticky;
            top: 0; */
            box-shadow: 1px 1px 5px 1px #b9b9b9;">
            <i class="fa fa-plus fa-w-16"></i>
        </button>
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
        $('#form_menu')[0].reset();
        showModal('#menuModal', true)
    }

    function editAction(id){
        let row = data.filter(a => a.id == id)
        if (row.length > 0) {
            $('#idMenu').val(row[0].id)
            $('#tbName').val(row[0].name)
            $('#tbPrice').val(row[0].price)
            $('#txtDescription').val(row[0].description)
            
            if(row[0].photo != ""){
                $('.preview-file').show();                
                $('.preview-file img').attr('src', base + '/assets/images/menu/' + row[0].photo)
            }else{
                $('.preview-file').hide();
            }
            showModal('#menuModal', true)
        }
    }

    function deleteAction(id){
        $('#deleted_id').val(id);
        showModal('#deleteModal', true)
    }
</script>