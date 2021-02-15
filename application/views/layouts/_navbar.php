<header>
    <div class="sticky">
      <div class="container">
        <div class="logo"> 
        <?php foreach (getLogo() as $logo) : ?>
             <a href="<?= base_url('/') ?>"><img class="img-responsive" src="<?= base_url(); ?>/images/logo/<?= $logo->image ?>" alt="<?= $logo->title ?>"  style="width:188px"></a>
        <?php endforeach ?>
        </div>
        <nav class="navbar ownmenu">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-open-btn" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"><i class="fa fa-navicon"></i></span> </button>
          </div>
          <div class="collapse navbar-collapse" id="nav-open-btn">
            <ul class="nav">
              <?php foreach (getLogo() as $logo) : ?>
              <?php foreach (getNavbar() as $navbar) : ?>
              <li> <a href="<?= $navbar->url ?>"> <p style="color:<?= $logo->color ?>; font-family:<?= $logo->font ?>;"><?= $navbar->title ?></p></a> </li>
              <?php endforeach ?>
              <?php endforeach ?>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </header>