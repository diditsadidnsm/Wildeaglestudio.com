<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title><?= $title; ?></title>

    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url(); ?>/images/logo/pavicon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url(); ?>/images/logo/pavicon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url(); ?>/images/logo/pavicon.png">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/theme/vendors/styles/core.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/theme/vendors/styles/icon-font.min.css">
    <link rel="stylesheet" type="text/css"
        href="<?= base_url() ?>/theme/src/plugins/datatables/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css"
        href="<?= base_url() ?>/theme/src/plugins/datatables/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/theme/vendors/styles/style.css">
    <script src="//cdn.ckeditor.com/4.15.1/full/ckeditor.js"></script>

<body>
    <div class="pre-loader">
        <div class="pre-loader-box">
            <?php foreach (getLogo() as $logo) : ?>
            <div class="loader-logo"><img src="<?= base_url(); ?>/images/logo/<?= $logo->image ?>" alt="<?= $logo->title ?>"></div>
            <?php endforeach ?>
            <div class='loader-progress' id="progress_div">
                <div class='bar' id='bar1'></div>
            </div>
            <div class='percent' id='percent1'>0%</div>
            <div class="loading-text">
                <h1>...بسم الله الرحمن الرحيم</h1>
            </div>
        </div>
    </div>