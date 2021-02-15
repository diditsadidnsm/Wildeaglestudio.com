  <div id="content"> 
    <section class="padding-top-100 padding-bottom-100">
      <div class="container">
        <div class="shop-detail">
          <div class="row">
              <?php foreach (getLogo() as $logo) : ?>
              <a href="javascript:window.history.go(-1);"><h5 style="color:#B89F5B; font-family:<?= $logo->font ?>;"><i class="fa fa-arrow-left"></i> Back to home</h5></a>
              <?php endforeach ?>
              <br />
          <?php foreach (getLogo() as $logo) : ?>
          <?php foreach ($rows as $row) : ?>
            <div class="col-md-8"> 
              <div class="row">
                <div class="col-sm-6 margin-bottom-30"> <img class="img-responsive" src="<?= base_url() ?>/images/back/<?= $row->back_image ?>" alt="<?= $row->product_title ?>"> </div>
                <div class="col-sm-6 margin-bottom-30"> <img class="img-responsive" src="<?= base_url() ?>/images/product/<?= $row->image ?>" alt="<?= $row->product_title ?>"> </div>
              </div>
            </div>
            <div class="col-md-4">
              <h4 class="text-center" style="font-family:<?= $logo->font ?>;"><?= $row->product_title ?></h4>
              <div class="item-decribe margin-top-20"> 
                <ul class="nav nav-tabs" role="tablist">
                  <li role="presentation" class="active"><a href="#descr" role="tab" data-toggle="tab">DESCRIPTION</a></li>
                </ul>
                <div class="tab-content">
                  <div role="tabpanel" class="tab-pane fade in active" id="descr">
                    <p style="font-family:<?= $logo->font ?>;"><?= $row->description ?></p>
                  </div>
                </div>
                <p><a href="<?= $row->price ?>" target="_blank"> <?= $row->price ?></a></p>
              </div>
            </div>
            <?php endforeach ?>
            <?php endforeach ?>
          </div>
        </div>
      </div>
    </section>
</div>
<script src="<?= base_url(); ?>/assets/js/jquery-1.11.3.min.js"></script> 
<script src="<?= base_url(); ?>/assets/js/bootstrap.min.js"></script> 
<script src="<?= base_url(); ?>/assets/js/own-menu.js"></script> 
<script src="<?= base_url(); ?>/assets/js/jquery.lighter.js"></script> 
<script src="<?= base_url(); ?>/assets/js/owl.carousel.min.js"></script> 
<script type="text/javascript" src="<?= base_url(); ?>/assets/rs-plugin/js/jquery.tp.t.min.js"></script> 
<script type="text/javascript" src="<?= base_url(); ?>/assets/rs-plugin/js/jquery.tp.min.js"></script> 
<script src="<?= base_url(); ?>/assets/js/main.js"></script> 
<script src="<?= base_url(); ?>/assets/js/main.js"></script>
<script language="JavaScript">
document.addEventListener("contextmenu", function(e){
    e.preventDefault();
}, false);
</script>
</body>
</html>