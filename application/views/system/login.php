<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Vida Café & Bistro - Login</title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <link href="<?=base_url('assets/admin/')?>css/main.css" rel="stylesheet">
	<link rel="shortcut icon" type="image/jpg" href="<?=base_url('assets/images/profile/').$profile['logo'] ?>"/>
    <script type="text/javascript" src="<?=base_url('assets/admin/')?>scripts/main.js"></script>
    <script type="text/javascript" src="<?=base_url('assets/admin/')?>scripts/jquery.min.js"></script>

    <style>
        .my-footer{
            width:100%;
            margin-bottom: 30px;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow">
        <div class="app-main">
            <div class="app-main__outer">
                <div id="my-toast" class="alert alert-dismissible fade show" role="alert" style="width: 100%; position: fixed; display: none;">
                    <button type="button" class="close" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <span class="msg"></span>
                </div>
                <div class="app-main__inner" style="
                    display: flex;
                    width: 100%;
                    flex-direction: column;
                    justify-content: center;
                ">
                    <div class="row" style="justify-content: center;">
                        <div class="col-md-4 main-card mb-3 card" style="max-width: 27rem;">
                            <div class="card-header" style="
                                height: auto;
                                display: flex;
                                flex-direction: column;
                                margin: 1.5rem 1rem 0;
                                padding-bottom: 1rem;
                            ">
                                <img src="<?=base_url('assets/images/profile/').$profile['logo']?>" style="width:10rem;" />
                                <div style="margin-top:1rem;">Login to access the system</div>
                            </div>
                            <div class="card-body">
                                <form class="" action="<?=site_url('user/login')?>" method="post" enctype="multipart/form-data">
                                    <div class="form-row">
                                        <div class="col-md-12">
                                            <div class="position-relative form-group">
                                                <label for="tbName" style="font-weight:bold; color: #8a8a8a;">Username</label>
                                                <input style="height: 2.6rem;" name="username" id="tbName" placeholder="Your Username" type="text" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row" style="margin-top:1rem;">
                                        <div class="col-md-12">
                                            <div class="position-relative form-group">
                                                <label for="psPassword" style="font-weight:bold; color: #8a8a8a;">Password</label>
                                                <input style="height: 2.6rem;" name="password" id="psPassword" placeholder="Your password" type="password" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-lg col-md-12" style="font-weight: bold; font-size: 18px; margin-top: 2rem; margin-bottom: 1rem;"><span>Login</span> <span style="float:right"><i class="fa fa-chevron-right"></i></span></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="my-footer">Made with <i class="fa fa-heart" style="color: #e74c3c;"></i> <span><a
                            target="_blank" href="nnf-pro.com">NNF Production</a></span></div>
            </div>
        </div>
    </div>
</body>
<script>

let flash_msg = '<?=$this->session->flashdata('msg') ?>';

$(document).ready(function () {
    if(flash_msg != null && flash_msg != ""){
        showMessage('#my-toast', 'danger', flash_msg)
    }
});

function showMessage(el, type, msg){
    $(el).addClass('alert-'+type);
    $(el).find('.msg').text(msg);
    $(el).fadeIn();

    setTimeout(() => {
        hideMessage(el)        
    }, 3000);
}

function hideMessage(el){
    $(el).fadeOut();
}

</script>

</html>