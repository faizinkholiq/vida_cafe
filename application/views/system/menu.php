<style>
.my-scroller{
    width: 100%;
    margin:0; 
    padding: 0;
    width: 100%;
    overflow: auto;
    max-height: 53vh;
}
/* width */
.my-scroller::-webkit-scrollbar {
  width: 8px;
}

/* Track */
.my-scroller::-webkit-scrollbar-track {
  border-radius: 30px;
}

/* Handle */
.my-scroller::-webkit-scrollbar-thumb {
  background: #3f6ad8;;
  border-radius: 30px;
}

.right-action{
    float: right;
    display: flex;
}

.right-action a{
    margin-left: 12px;
}

.my-star{
    color: #f7b924;
    font-size: 25px;
    cursor: pointer;
}

.my-unstar{
    -webkit-text-fill-color: white;
    -webkit-text-stroke-width: 2px;
    -webkit-text-stroke-color: #f7b924;
    font-size: 25px;
    cursor: pointer;
}

.my-love{
    color: #e74c3c;
    font-size: 25px;
    cursor: pointer;
}

.my-unlove{
    -webkit-text-fill-color: white;
    -webkit-text-stroke-width: 2px;
    -webkit-text-stroke-color: #e74c3c;
    font-size: 25px;
    cursor: pointer;
}

.my-span-filter{
    padding: 6px 12px;
    font-weight: bold;
    box-shadow: 1px 1px 7px 1px #b5b5b5;
    border-radius: 30px;
    text-align: center;
    font-size: 13px;
    cursor: pointer;
    margin-right: 5px;
}

.my-span{
    transition: all 0.5s ease;
    padding: 6px 12px;
    font-weight: bold;
    /* box-shadow: 1px 1px 7px 1px #b5b5b5; */
    border-radius: 30px;
    text-align: center;
    font-size: 13px;
}
</style>
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
    <div class="col-md-12" style="height: 3rem;">
            <span class="my-span-filter" onclick="doFilter('category', 'all')" style="
                color: #5d5c5c;
                background: white;
            ">All</span>
        <?php foreach($list_category as $key => $value): ?>
            <span class="my-span-filter" onclick="doFilter('category', <?=$value['id'] ?>)" style="
                color: <?=$value['fgcolor'] ?>;
                background: <?=$value['bgcolor'] ?>;
            "><?=$value['name'] ?></span>
        <?php endforeach; ?>
    </div>
    <div class="row col-md-11 my-scroller">
        <div class="row col-md-12" id="my-data">
            <?php foreach($data as $key => $value): ?>
            <div class="mb-3 col-md-4 row" style="margin:0">
                <div class="main-card col-md-12 card">
                    <div class="card-body" style="padding-left:0; padding-right:5px;">
                        <div class="right-action">
                            <a href="<?=site_url('admin/menu/action/special/').$value['id']?>" data-toggle="tooltip" data-original-title="Unique"><i class="fa fa-star fa-w-20 btn-icon-wrapper <?=!empty($value['special'])? 'my-star' : 'my-unstar' ;  ?>"> </i></a>
                            <a href="<?=site_url('admin/menu/action/favorite/').$value['id']?>" data-toggle="tooltip" data-original-title="Favorite"><i class="fa fa-heart fa-w-20 btn-icon-wrapper <?=!empty($value['favorite'])? 'my-love' : 'my-unlove' ;  ?>"> </i></a>
                        </div>
                        <h5 class="card-title"><?=!empty($value['name'])? $value['name'] : '' ;  ?></h5>
                        <h6 class="mb-0 card-subtitle">Rp<?=!empty($value['price'])? number_format($value['price'],2,',','.') : '' ;  ?></h6>
                    </div>
                    <img width="100%" src="<?=!empty($value['photo'])? base_url('assets/images/menu/').$value['photo'] : '' ;  ?>" alt="Menu Image" style="height: 150px; object-fit: cover; width: 100%;">
                    <div class="card-body" style="    
                        padding-right: 0;
                        width: 100%;
                        padding-left: 0;
                        display: flex;
                        flex-direction: row;">
                        <span class="my-span" style="
                            color: <?=$value['fgcolor'] ?>;
                            background: <?=$value['bgcolor'] ?>;
                        "><?=$value['category_name'] ?></span>
                        <div style="margin-left: auto;">
                            <button class="btn-icon btn-icon-only btn btn-outline-alternate" onclick="editAction(<?=!empty($value['id'])? $value['id'] : '' ;  ?>)" data-toggle="tooltip" data-original-title="Edit">
                                <i class="fa fa-edit fa-w-20 btn-icon-wrapper"> </i>
                            </button>
                            <button class="btn-icon btn-icon-only btn btn-outline-danger" onclick="deleteAction(<?=!empty($value['id'])? $value['id'] : '' ;  ?>)" data-toggle="tooltip" data-original-title="Delete">
                                <i class="fa fa-trash fa-w-20 btn-icon-wrapper"> </i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
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
    let site = '<?=site_url() ?>';
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
        $('.preview-file').hide();
        $('#form_menu')[0].reset();
        showModal('#menuModal', true)
    }

    function editAction(id){
        let row = data.filter(a => a.id == id)
        if (row.length > 0) {
            $('#idMenu').val(row[0].id)
            $('#tbName').val(row[0].name)
            $('#slcCategory').val(row[0].category)
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

    function doFilter(field, value){
        let filters = value=="all"? data : data.filter(a => a[field] == value);
        $('#my-data').html('');

        filters.forEach(function(r){
            $('#my-data').hide().append(`
                <div class="mb-3 col-md-4 row" style="margin:0">
                <div class="main-card col-md-12 card">
                    <div class="card-body" style="padding-left:0; padding-right:5px;">
                        <div class="right-action">
                            <a href="${site+'admin/menu/action/special/'+r.id}" data-toggle="tooltip" data-original-title="Unique"><i class="fa fa-star fa-w-20 btn-icon-wrapper <?=!empty($value['special'])? 'my-star' : 'my-unstar' ;  ?>"> </i></a>
                            <a href="${site+'admin/menu/action/favorite/'+r.id}" data-toggle="tooltip" data-original-title="Favorite"><i class="fa fa-heart fa-w-20 btn-icon-wrapper <?=!empty($value['favorite'])? 'my-love' : 'my-unlove' ;  ?>"> </i></a>
                        </div>
                        <h5 class="card-title">${r.name}</h5>
                        <h6 class="mb-0 card-subtitle">Rp${r.price}</h6>
                    </div>
                    <img width="100%" src="${base+'assets/images/menu/'+r.photo}" alt="Menu Image" style="height: 150px; object-fit: cover; width: 100%;">
                    <div class="card-body" style="    
                        padding-right: 0;
                        width: 100%;
                        padding-left: 0;
                        display: flex;
                        flex-direction: row;">
                        <span class="my-span" style="
                            color: ${r.fgcolor};
                            background: ${r.bgcolor};
                        ">${r.category_name}</span>
                        <div style="margin-left: auto;">
                            <button class="btn-icon btn-icon-only btn btn-outline-alternate" onclick="editAction(${r.id})" data-toggle="tooltip" data-original-title="Edit">
                                <i class="fa fa-edit fa-w-20 btn-icon-wrapper"> </i>
                            </button>
                            <button class="btn-icon btn-icon-only btn btn-outline-danger" onclick="deleteAction(${r.id})" data-toggle="tooltip" data-original-title="Delete">
                                <i class="fa fa-trash fa-w-20 btn-icon-wrapper"> </i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            `).fadeIn();
        })
    }
</script>