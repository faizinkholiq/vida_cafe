<style>
.my-scroller{
    width: 100%;
    margin:0; 
    padding: 0;
    width: 100%;
    overflow: auto;
    max-height: 26rem;
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
        showModal('#galleryModal', true)
    }

    function deleteAction(id){
        $('#deleted_id').val(id);
        showModal('#deleteModal', true)
    }
</script>