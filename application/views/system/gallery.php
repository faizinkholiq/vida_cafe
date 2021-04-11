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

</style>

<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-photo-gallery icon-gradient bg-mean-fruit">
                </i>
            </div>
            <div>Gallery
                <div class="page-title-subheading">In here,You can edit gallery of your cafe</div>
            </div>
        </div>
    </div>
</div>
<div class="row col-md-12" style="margin:0; padding:0;">
    <div class="row col-md-11 my-scroller">
        <?php foreach($data as $key => $value): ?>
        <div class="mb-3 col-md-4 row" style="margin:0">
            <div class="main-card col-md-12 card" style="padding: 0; border-radius: 10px;">
                <img width="100%" src="<?=!empty($value['source'])? base_url('assets/images/gallery/').$value['source'] : '' ;  ?>" alt="Card image cap" style="height: 14rem; object-fit: cover; width: 100%; border-top-left-radius: 10px; border-top-right-radius: 10px;">
                <div class="card-body" style="    
                    text-align: end;
                    width: 100%;">
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
        showModal('#galleryModal', true)
    }

    function deleteAction(id){
        $('#deleted_id').val(id);
        showModal('#deleteModal', true)
    }
</script>