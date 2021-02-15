<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <?php foreach (getLogo() as $logo) : ?>
    <title><?= $logo->title ?> | <?= $logo->site ?></title>
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url(); ?>/images/logo/<?= $logo->image ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url(); ?>/images/logo/<?= $logo->image ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url(); ?>/images/logo/<?= $logo->image ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <?php endforeach ?>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/theme/vendors/styles/core.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/theme/vendors/styles/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/theme/vendors/styles/style.css">
</head>

<body class="login-page">
    <div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
        <div class="container">
            <?php $this->load->view('layouts/_alert') ?>
            <div class="row align-items-center">
                <div class="col-md-6 col-lg-6">
                    <?php foreach (getLogo() as $logo) : ?>
                    <img src="<?= base_url(); ?>/images/logo/<?= $logo->image ?>" alt="<?= $logo->title ?>">
                    <?php endforeach ?>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="login-box bg-white box-shadow border-radius-10">
                        <div class="login-title">
                            <?php foreach (getLogo() as $logo) : ?>
                            <h2 class="text-center text-primary">Login to <?= $logo->title ?></h2>
                            <?php endforeach ?>
                        </div>
                        <?= form_open('login', ['method' => 'POST']) ?>
                        
                        <div class="input-group custom">
                            <?= form_input(['type' => 'email', 'name' => 'email', 'value' => $input->email, 'class' => 'form-control form-control-lg', 'placeholder' => 'Masukkan alamat email', 'required' => true]) ?>
                            <div class="input-group-append custom">
                                <span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
                            </div>
                            <?= form_error('email') ?>
                        </div>
                        <div class="input-group custom">
                            <?= form_password('password', '', ['class' => 'form-control form-control-lg', 'placeholder' => '********', 'id' => 'myInput', 'required' => true]) ?>
                            <div class="input-group-append custom">
                                <span class="input-group-text"><i class="dw dw-padlock1"></i></span>
                            </div>
                            <?= form_error('password') ?>
                        </div>
                        <div class="row pb-30">
                            <div class="col-6">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">Remember me</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck2" onclick="myFunction()">
                                    <label class="custom-control-label" for="customCheck2">Show Password</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="input-group mb-0">
                                    <input class="btn btn-primary btn-lg btn-block" type="submit" value="Masuk">
                                </div>
                            </div>
                        </div>
                        <?= form_close() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?= base_url() ?>/theme/vendors/scripts/core.js"></script>
    <script src="<?= base_url() ?>/theme/vendors/scripts/script.min.js"></script>
    <script src="<?= base_url() ?>/theme/vendors/scripts/process.js"></script>
    <script src="<?= base_url() ?>/theme/vendors/scripts/layout-settings.js"></script>
    <script>
    function myFunction() {
      var x = document.getElementById("myInput");
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }
    }
    </script>
</body>

</html>