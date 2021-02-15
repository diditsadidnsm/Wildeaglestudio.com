<!doctype html>
<html lang="en">

<head>
    <meta name="author" content="Nashiruddien Sadid Mustaqim" />
    <?php foreach (getLogo() as $logo) : ?>
    <title><?= $logo->title ?> | <?= $logo->site ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="generator" content="Jekyll v3.8.5">
    <meta name="keywords" content="<?= $logo->keyword ?>" />
    <meta name="description" content="<?= $logo->description ?>" />
    <link rel="canonical" href="<?= $logo->url ?>" />
    <meta property="og:locale" content="<?= $logo->local ?>" />
    <meta property="og:type" content="<?= $logo->type ?>" />
    <meta property="og:title" content="<?= $logo->title ?> | <?= $logo->site ?>" />
    <meta property="og:description" content="<?= $logo->description ?>" />
    <meta property="og:url" content="<?= $logo->url ?>" />
    <meta property="og:image" content="<?= base_url(); ?>/images/logo/<?= $logo->image ?>" />
    <meta property="og:image:secure_url" content="<?= base_url(); ?>/images/logo/<?= $logo->image ?>" />
    <meta property="og:image:width" content="560" />
    <meta property="og:image:height" content="315" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="<?= $logo->description ?>" />
    <meta name="twitter:title" content="<?= $logo->title ?> | <?= $logo->site ?>" />
    <meta name="twitter:site" content="<?= $logo->url ?>" />
    <meta name="twitter:image" content="<?= base_url(); ?>/images/logo/<?= $logo->image ?>" />
    <meta name="copyright" content="<?= $logo->url ?>" itemprop="dateline" />
    <?php endforeach ?>
    <meta name="robots" content="index, follow, max-snippet:160" />
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/rs-plugin/css/settings.css" media="screen" />
    <link href="<?= base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url(); ?>/assets/css/ionicons.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/assets/css/main.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/assets/css/style.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/assets/css/responsive.css" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url(); ?>/images/logo/pavicon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url(); ?>/images/logo/pavicon.png">
    <script src="<?= base_url(); ?>/assets/js/modernizr.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900' rel='stylesheet' type='text/css'>
    <script>
         document.addEventListener("keyup", function (e) {
    var keyCode = e.keyCode ? e.keyCode : e.which;
            if (keyCode == 44) {
                stopPrntScr();
            }
        });
        function stopPrntScr() {

            var inpFld = document.createElement("input");
            inpFld.setAttribute("value", ".");
            inpFld.setAttribute("width", "0");
            inpFld.style.height = "0px";
            inpFld.style.width = "0px";
            inpFld.style.border = "0px";
            document.body.appendChild(inpFld);
            inpFld.select();
            document.execCommand("copy");
            inpFld.remove(inpFld);
        }
       function AccessClipboardData() {
            try {
                window.clipboardData.setData('text', "Access   Restricted");
            } catch (err) {
            }
        }
        setInterval("AccessClipboardData()", 300);
    </script>

</head>
<body>
    <!-- LOADER -->
<div id="loader">
  <div class="position-center-center">
    <div class="ldr"></div>
  </div>
</div>

<!-- Wrap -->
<div id="wrap"> 