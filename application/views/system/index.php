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
                <i class="pe-7s-car icon-gradient bg-mean-fruit">
                </i>
            </div>
            <div>Home
                <div class="page-title-subheading">In here,You can edit main information of your cafe</div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">Update Profile
            </div>
            <div class="card-body">
                <form class="" action="<?=site_url('admin/home/save')?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?=!empty($detail['id'])? $detail['id'] : '' ; ?>">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <label for="tbName" class="">Name</label>
                                <input name="name" id="tbName" placeholder="Your site name" type="text" class="form-control" value="<?=!empty($detail['name'])? $detail['name'] : '' ; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-4">
                            <div class="position-relative form-group">
                                <label for="fileLogo" class="">Logo</label>
                                <div style="
                                    box-shadow: 1px 1px 10px 1px #ddd;
                                    border-radius: 10px;
                                    padding: 15px;
                                    width: 200px;
                                    height: 200px;
                                    display: flex;
                                    flex-direction: column;
                                    justify-content: center;
                                    margin: 10px 10px 20px;
                                ">
                                    <img style="width: 100%; height: 100%; object-fit: contain;" src="<?=!empty($detail['logo'])? base_url('assets/images/profile/').$detail['logo'] : '' ; ?>" />
                                </div>
                                <div class="col-sm-10"><input name="logo" id="fileLogo" type="file" class="form-control-file">
                                    <small class="form-text text-muted">This is file for photo.</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="position-relative form-group">
                                <label for="fileCover" class="">Cover</label>
                                <div style="
                                    box-shadow: 1px 1px 10px 1px #ddd;
                                    border-radius: 10px;
                                    width: 400px;
                                    height: 200px;
                                    display: flex;
                                    flex-direction: column;
                                    justify-content: center;
                                    margin: 10px 10px 20px;
                                ">
                                    <img style="width: 100%; height: 100%; object-fit: cover; border-radius: 10px;" src="<?=!empty($detail['cover'])? base_url('assets/images/profile/').$detail['cover'] : '' ; ?>" />
                                </div>
                                <div class="col-sm-10"><input name="cover" id="fileCover" type="file" class="form-control-file">
                                    <small class="form-text text-muted">This is file for cover.</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="position-relative form-group">
                        <label for="tbMotto" class="">Motto</label>
                        <input name="motto" id="tbMotto" placeholder="Your Motto" type="text" class="form-control col-md-6" value="<?=!empty($detail['motto'])? $detail['motto'] : '' ; ?>">
                    </div>
                    <div class="position-relative form-group">
                        <label for="txtDescription" class="">Description</label>
                        <textarea name="description" id="txtDescription" class="form-control"><?=!empty($detail['description'])? $detail['description'] : '' ; ?></textarea>
                    </div>
                    <div class="position-relative form-group">
                        <label for="txtStory" class="">Story</label>
                        <textarea name="story" id="txtStory" class="form-control"><?=!empty($detail['story'])? $detail['story'] : '' ; ?></textarea>
                    </div>
                    <div class="position-relative form-group">
                        <label for="exampleAddress" class="">Address</label>
                        <input name="address" id="exampleAddress" placeholder="Jl." type="text" class="form-control" value="<?=!empty($detail['address'])? $detail['address'] : '' ; ?>">
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                            <label for="exampleCity" class="">City</label>
                            <input name="city" id="exampleCity" type="text" class="form-control" value="<?=!empty($detail['city'])? $detail['city'] : '' ; ?>">
                        </div>
                        </div>
                        <div class="col-md-4">
                            <div class="position-relative form-group">
                                <label for="exampleState" class="">State / Province</label>
                                <input name="state" id="exampleState" type="text" class="form-control" value="<?=!empty($detail['state'])? $detail['state'] : '' ; ?>">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="position-relative form-group">
                                <label for="exampleZip" class="">Zip</label>
                                <input name="zip" id="exampleZip" type="text" class="form-control" value="<?=!empty($detail['zip'])? $detail['zip'] : '' ; ?>">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="mt-4 btn btn-primary btn-lg">Save Changes</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    let flash_msg = <?=json_encode($this->session->flashdata('msg')) ?>;

    $(document).ready(function () {
        if(flash_msg != null)
            (flash_msg.success === 1)? showMessage('#my-toast', 'success', flash_msg.message) : showMessage('#my-toast', 'danger', flash_msg.message) 
    });

</script>