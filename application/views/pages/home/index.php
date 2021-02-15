<section class="home-slider"> 
    <div class="tp-banner-container">
      <div class="tp-banner">
        <ul>
          <?php foreach (getLogo() as $logo) : ?>
          <?php foreach (getBanner() as $banner) : ?>
          <li data-transition="random" data-slotamount="7" data-masterspeed="300"  data-saveperformance="off" > 
            <!-- MAIN IMAGE --> 
            <img src="<?= base_url(); ?>/images/banner/<?= $banner->image ?>"  alt="<?= $banner->title ?>"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"> 
            <div class="tp-caption sfr font-regular tp-resizeme letter-space-4" 
                data-x="<?= $banner->position ?>" data-hoffset="0" 
                data-y="<?= $banner->position1 ?>" data-voffset="-50" 
                data-speed="800" 
                data-start="800" 
                data-easing="Power3.easeInOut" 
                data-splitin="chars" 
                data-splitout="none" 
                data-elementdelay="0.07" 
                data-endelementdelay="0.1" 
                data-endspeed="300" 
                style="z-index: 2; font-size:<?= $banner->size ?>px; color:<?= $banner->color ?>; font-family:<?= $banner->font ?>; text-transform:uppercase; white-space: nowrap;"><?= $banner->title ?></div>
          </li>
          <?php endforeach ?>
          <?php endforeach ?>
        </ul>
      </div>
    </div>
  </section>
  <div id="content">
    <section class="light-gray-bg padding-top-20 padding-bottom-0" id="portfolio">
      <div class="container">
          <?php foreach (getLogo() as $logo) : ?>
            <h1 style="color:#B89F5B; font-family:<?= $logo->font ?>; text-align:center;">P&nbsp;O&nbsp;R&nbsp;T&nbsp;F&nbsp;O&nbsp;L&nbsp;I&nbsp;O</h1>
          <?php endforeach ?>
          <br />
        <?php foreach (getLogo() as $logo) : ?>
          <h4 style="color:<?= $logo->color ?>; font-family:<?= $logo->font ?>; text-align:center;">Layout & Image Book Cover</h4>
          <p style="color:<?= $logo->color ?>; font-family:<?= $logo->font ?>; text-align:center;">(click right to see more)</p>
        <?php endforeach ?>
        <div class="papular-block block-slide"> 
        <?php foreach (getLogo() as $logo) : ?>
          <?php foreach ($content as $row) : ?>
          <div class="item">
            <div class="item-img"> <img class="img-1" src="<?= $row->image ? base_url("/images/product/$row->image") : base_url("/images/product/default.png") ?>" alt="<?= $row->product_title ?>" > <img class="img-2" src="<?= $row->back_image ? base_url("/images/back/$row->back_image") : base_url("/images/back/default.png") ?>" alt="<?= $row->product_title ?>" > 
                <div class="position-center-center">
                  <div class="inn"><a href="<?= base_url("/home/detail/$row->product_slug") ?>"><i class="icon-magnifier"></i></a> </div>
                </div>
            </div>
           </div>
           <?php endforeach ?>
        <?php endforeach ?>   
        </div>
        <div class="papular-block block-slide"> 
        <?php foreach (getLogo() as $logo) : ?>
          <?php foreach ($content1 as $row) : ?>
          <div class="item">
            <div class="item-img"> <img class="img-1" src="<?= $row->image ? base_url("/images/product/$row->image") : base_url("/images/product/default.png") ?>" alt="<?= $row->product_title ?>" > <img class="img-2" src="<?= $row->back_image ? base_url("/images/back/$row->back_image") : base_url("/images/back/default.png") ?>" alt="<?= $row->product_title ?>" > 
              
                <div class="position-center-center">
                  <div class="inn"><a href="<?= base_url("/home/detail/$row->product_slug") ?>"><i class="icon-magnifier"></i></a> </div>
                </div>
              
            </div>
           </div>
           <?php endforeach ?>
        <?php endforeach ?>
        </div>
        <?php foreach (getLogo() as $logo) : ?>
          <h4 style="color:<?= $logo->color ?>; font-family:<?= $logo->font ?>; text-align:center;">Typography & Simplicity Book Cover</h4>
          <p style="color:<?= $logo->color ?>; font-family:<?= $logo->font ?>; text-align:center;">(click right to see more)</p>
        <?php endforeach ?>
        <div class="papular-block block-slide"> 
        <?php foreach (getLogo() as $logo) : ?>
          <?php foreach ($content2 as $row) : ?>
          <div class="item">
            <div class="item-img"> <img class="img-1" src="<?= $row->image ? base_url("/images/product/$row->image") : base_url("/images/product/default.png") ?>" alt="<?= $row->product_title ?>" > <img class="img-2" src="<?= $row->back_image ? base_url("/images/back/$row->back_image") : base_url("/images/back/default.png") ?>" alt="<?= $row->product_title ?>" > 
              
                <div class="position-center-center">
                  <div class="inn"><a href="<?= base_url("/home/detail/$row->product_slug") ?>"><i class="icon-magnifier"></i></a> </div>
                </div>
              
            </div>
           </div>
           <?php endforeach ?>
        <?php endforeach ?>
        </div>
        <div class="papular-block block-slide">
        <?php foreach (getLogo() as $logo) : ?> 
          <?php foreach ($content3 as $row) : ?>
          <div class="item">
            <div class="item-img"> <img class="img-1" src="<?= $row->image ? base_url("/images/product/$row->image") : base_url("/images/product/default.png") ?>" alt="<?= $row->product_title ?>" > <img class="img-2" src="<?= $row->back_image ? base_url("/images/back/$row->back_image") : base_url("/images/back/default.png") ?>" alt="<?= $row->product_title ?>" > 
              
                <div class="position-center-center">
                  <div class="inn"><a href="<?= base_url("/home/detail/$row->product_slug") ?>"><i class="icon-magnifier"></i></a> </div>
                </div>
              
            </div>
           </div>
           <?php endforeach ?>
        <?php endforeach ?>
        </div>
        <?php foreach (getLogo() as $logo) : ?>
          <h4 style="color:<?= $logo->color ?>; font-family:<?= $logo->font ?>; text-align:center;">Photo Editing & Biography Book Cover</h4>
          <p style="color:<?= $logo->color ?>; font-family:<?= $logo->font ?>; text-align:center;">(click right to see more)</p>
        <?php endforeach ?>
        <div class="papular-block block-slide">
        <?php foreach (getLogo() as $logo) : ?> 
          <?php foreach ($content4 as $row) : ?>
          <div class="item">
            <div class="item-img"> <img class="img-1" src="<?= $row->image ? base_url("/images/product/$row->image") : base_url("/images/product/default.png") ?>" alt="<?= $row->product_title ?>" > <img class="img-2" src="<?= $row->back_image ? base_url("/images/back/$row->back_image") : base_url("/images/back/default.png") ?>" alt="<?= $row->product_title ?>" > 
                <div class="position-center-center">
                  <div class="inn"><a href="<?= base_url("/home/detail/$row->product_slug") ?>"><i class="icon-magnifier"></i></a> </div>
                </div>
            </div>
           </div>
           <?php endforeach ?>
        <?php endforeach ?>
        </div>
        <div class="papular-block block-slide">
        <?php foreach (getLogo() as $logo) : ?> 
          <?php foreach ($content10 as $row) : ?>
          <div class="item">
            <div class="item-img"> <img class="img-1" src="<?= $row->image ? base_url("/images/product/$row->image") : base_url("/images/product/default.png") ?>" alt="<?= $row->product_title ?>" > <img class="img-2" src="<?= $row->back_image ? base_url("/images/back/$row->back_image") : base_url("/images/back/default.png") ?>" alt="<?= $row->product_title ?>" > 
                <div class="position-center-center">
                  <div class="inn"><a href="<?= base_url("/home/detail/$row->product_slug") ?>"><i class="icon-magnifier"></i></a> </div>
                </div>
            </div>
           </div>
           <?php endforeach ?>
        <?php endforeach ?>
        </div>
        <?php foreach (getLogo() as $logo) : ?>
          <h4 style="color:<?= $logo->color ?>; font-family:<?= $logo->font ?>; text-align:center;">Audible Book & Podcast Cover</h4>
          <p style="color:<?= $logo->color ?>; font-family:<?= $logo->font ?>; text-align:center;">(click right to see more)</p>
        <?php endforeach ?>
        <div class="papular-block block-slide">
        <?php foreach (getLogo() as $logo) : ?> 
          <?php foreach ($content5 as $row) : ?>
          <div class="item">
            <div class="item-img"> <img class="img-1" src="<?= $row->image ? base_url("/images/product/$row->image") : base_url("/images/product/default.png") ?>" alt="<?= $row->product_title ?>" > <img class="img-2" src="<?= $row->image ? base_url("/images/product/$row->image") : base_url("/images/product/default.png") ?>" alt="<?= $row->product_title ?>" > 
              
                <div class="position-center-center">
                  <div class="inn"><a href="<?= $row->image ? base_url("/images/product/$row->image") : base_url("/images/product/default.png") ?>" data-lighter><i class="icon-magnifier"></i></a> </div>
                </div>
              
            </div>
           </div>
           <?php endforeach ?>
        <?php endforeach ?>
        </div>
        <?php foreach (getLogo() as $logo) : ?>
          <h1 style="color:#B89F5B; font-family:<?= $logo->font ?>; text-align:center;">L&nbsp;o&nbsp;g&nbsp;o</h1>
          <?php endforeach ?>
          <br /><br />
        <div class="papular-block block-slide">
        <?php foreach (getLogo() as $logo) : ?> 
          <?php foreach ($content6 as $row) : ?>
          <div class="item">
            <div class="item-img"> <img class="img-1" src="<?= $row->image ? base_url("/images/product/$row->image") : base_url("/images/product/default.png") ?>" alt="<?= $row->product_title ?>" > <img class="img-2" src="<?= $row->image ? base_url("/images/product/$row->image") : base_url("/images/product/default.png") ?>" alt="<?= $row->product_title ?>" > 
                <div class="position-center-center">
                  <div class="inn"><a href="<?= $row->image ? base_url("/images/product/$row->image") : base_url("/images/product/default.png") ?>" data-lighter><i class="icon-magnifier"></i></a> </div>
                </div>
            </div>
           </div>
           <?php endforeach ?>
        <?php endforeach ?>
        </div>
        <div class="papular-block block-slide">
        <?php foreach (getLogo() as $logo) : ?> 
          <?php foreach ($content11 as $row) : ?>
          <div class="item">
            <div class="item-img"> <img class="img-1" src="<?= $row->image ? base_url("/images/product/$row->image") : base_url("/images/product/default.png") ?>" alt="<?= $row->product_title ?>" > <img class="img-2" src="<?= $row->image ? base_url("/images/product/$row->image") : base_url("/images/product/default.png") ?>" alt="<?= $row->product_title ?>" > 
                <div class="position-center-center">
                  <div class="inn"><a href="<?= $row->image ? base_url("/images/product/$row->image") : base_url("/images/product/default.png") ?>" data-lighter><i class="icon-magnifier"></i></a> </div>
                </div>
            </div>
           </div>
           <?php endforeach ?>
        <?php endforeach ?>
        </div>
        <?php foreach (getLogo() as $logo) : ?>
          <h1 style="color:#B89F5B; font-family:<?= $logo->font ?>; text-align:center;">B&nbsp;u&nbsp;s&nbsp;i&nbsp;n&nbsp;e&nbsp;s&nbsp;s&nbsp; C&nbsp;a&nbsp;r&nbsp;d</h1>
          <?php endforeach ?>
          <br /><br />
        <div class="papular-block block-slide">
        <?php foreach (getLogo() as $logo) : ?> 
          <?php foreach ($content7 as $row) : ?>
          <div class="item">
            <div class="item-img"> <img class="img-1" src="<?= $row->image ? base_url("/images/product/$row->image") : base_url("/images/product/default.png") ?>" alt="<?= $row->product_title ?>" > <img class="img-2" src="<?= $row->image ? base_url("/images/product/$row->image") : base_url("/images/product/default.png") ?>" alt="<?= $row->product_title ?>" > 
              
                <div class="position-center-center">
                  <div class="inn"><a href="<?= $row->image ? base_url("/images/product/$row->image") : base_url("/images/product/default.png") ?>" data-lighter><i class="icon-magnifier"></i></a> </div>
                </div>
              
            </div>
           </div>
           <?php endforeach ?>
        <?php endforeach ?>
        </div>
        <?php foreach (getLogo() as $logo) : ?>
          <h1 style="color:#B89F5B; font-family:<?= $logo->font ?>; text-align:center;">O&nbsp;t&nbsp;h&nbsp;e&nbsp;r&nbsp;s</h1>
          <?php endforeach ?>
          <br /><br />
        <div class="papular-block block-slide">
        <?php foreach (getLogo() as $logo) : ?> 
          <?php foreach ($content8 as $row) : ?>
          <div class="item">
            <div class="item-img"> <img class="img-1" src="<?= $row->image ? base_url("/images/product/$row->image") : base_url("/images/product/default.png") ?>" alt="<?= $row->product_title ?>" > <img class="img-2" src="<?= $row->image ? base_url("/images/product/$row->image") : base_url("/images/product/default.png") ?>" alt="<?= $row->product_title ?>" > 
              
                <div class="position-center-center">
                  <div class="inn"><a href="<?= $row->image ? base_url("/images/product/$row->image") : base_url("/images/product/default.png") ?>" data-lighter><i class="icon-magnifier"></i></a> </div>
                </div>
              
            </div>
           </div>
           <?php endforeach ?>
        <?php endforeach ?>
        </div>
      </div>
      <!--<div class="container" id="pricing">-->
      <!--  <div class="heading text-center">-->
      <!--    <?php foreach (getLogo() as $logo) : ?>-->
      <!--    <h1 style="color:#B89F5B; font-family:<?= $logo->font ?>;">P&nbsp;r&nbsp;i&nbsp;c&nbsp;i&nbsp;n&nbsp;g</h1>-->
      <!--    <?php endforeach ?>-->
      <!--  </div>-->
      <!--  <div class="papular-block row"> -->
      <!--  <?php foreach (getLogo() as $logo) : ?>-->
      <!--  <?php foreach (getPricing() as $pricing) : ?>-->
      <!--    <div class="col-md-3">-->
      <!--      <div class="item"> -->
      <!--        <div class="item-img">-->
      <!--        <p style="text-align:center;"><small>start from</small></p>-->
      <!--        <h1 style="text-align:center; color:<?= $logo->color ?>; font-family:<?= $logo->font ?>;"><?= $pricing->price ?></h1>-->
      <!--        <div class="item-name"> <a href="#."><?= $pricing->title ?></a></div>-->
      <!--          <br />-->
      <!--          <h4 style="color:<?= $logo->color ?>; font-family:<?= $logo->font ?>; text-align:center;"><?= $pricing->sub ?></h4>-->
      <!--          <p style="text-align:center; color:<?= $logo->color ?>; font-family:<?= $logo->font ?>;"><?= $pricing->description ?></p>-->
      <!--        </div>-->
      <!--        <p style="text-align:center; color:<?= $logo->color ?>; font-family:<?= $logo->font ?>;"><a href="<?= base_url('package') ?>" class="btn btn-secondary" style="color:#B89F5B;">Let's Start</a></p>-->
      <!--        </div>-->
      <!--    </div>-->
      <!--  <?php endforeach ?>-->
      <!--  <?php endforeach ?>-->
      <!--  </div>-->
      <!--</div>-->
      <!--<br /><br />-->
      <!--<div class="container">-->
      <!--   <div class="heading text-center">-->
      <!--    <?php foreach (getLogo() as $logo) : ?>-->
      <!--    <h1 style="color:#B89F5B; font-family:<?= $logo->font ?>;">H&nbsp;o&nbsp;w&nbsp; I&nbsp;t&nbsp; W&nbsp;o&nbsp;r&nbsp;k</h1>-->
      <!--    <?php endforeach ?>-->
      <!--  </div>-->
      <!--  <div class="papular-block row">-->
      <!--    <?php foreach (getLogo() as $logo) : ?> -->
      <!--    <?php foreach (getServices() as $services) : ?> -->
      <!--    <div class="col-md-3">-->
      <!--      <div class="item"> -->
      <!--        <div class="item-img"> -->
      <!--          <center>-->
      <!--            <img class="img-1" src="<?= $services->image ? base_url("/images/services/$services->image") : base_url("/images/services/default.png") ?>" alt="<?= $services->title ?>" style="width:100px;">-->
      <!--            <img class="img-2" src="<?= $services->image ? base_url("/images/services/$services->image") : base_url("/images/services/default.png") ?>" alt="<?= $services->title ?>" style="width:100px;"> -->
      <!--          </center>-->
      <!--        </div>-->
      <!--        <div class="item-name"> <a href="#."><p style="color:<?= $logo->color ?>; font-family:<?= $logo->font ?>;"><?= $services->title ?></p></a>-->
      <!--          <p style="color:<?= $logo->color ?>; font-family:<?= $logo->font ?>;"><?= $services->description ?></p>-->
      <!--        </div>-->
      <!--      </div>-->
      <!--    </div>-->
      <!--    <?php endforeach ?>-->
      <!--    <?php endforeach ?>-->
      <!--  </div>-->
      <!--</div>-->
      <br /><br />
      <div class="container" id="client">
        <div class="heading text-center">
          <?php foreach (getLogo() as $logo) : ?>
          <h1 style="color:#B89F5B; font-family:<?= $logo->font ?>;">C&nbsp;l&nbsp;i&nbsp;e&nbsp;n&nbsp;t</h1>
          <?php endforeach ?>
        </div>
        <div class="papular-block block-slide"> 
          <?php foreach (getLogo() as $logo) : ?>
          <?php foreach (getClient() as $client) : ?>
          <div class="item"> 
            <div class="item-img"> <center><img class="img-1" src="<?= $client->image ? base_url("/images/client/$client->image") : base_url("/images/client/default.png") ?>" alt="" style="width:60px;"> <img class="img-2" src="<?= $client->image ? base_url("/images/client/$client->image") : base_url("/images/client/default.png") ?>" alt="" style="width:60px;"></center>
            </div>
            <div class="item-name"> <a href="URL Author"><p style="color:<?= $logo->color ?>; font-family:<?= $logo->font ?>;"><?= $client->name ?></p></a>
              <span class="price"><small><?= $client->title ?></small></span>
              <p style="color:<?= $logo->color ?>; font-family:<?= $logo->font ?>;">"<?= $client->description ?>"</p>
            </div> 
          </div>
          <?php endforeach ?>
          <?php endforeach ?>
        </div>
      </div>
      <br /><br />
      <div class="container">
        <div class="shop-items row">
          <?php foreach (getLogo() as $logo) : ?> 
          <?php foreach (getVideo() as $video) : ?>
          <div class="col-md-4">
            <div class="item"> 
              <div class="item-name"> <a href="<?= $video->url ?>"><p style="color:<?= $logo->color ?>; font-family:<?= $logo->font ?>;"><?= $video->name ?></p></a>
                <p style="color:<?= $logo->color ?>; font-family:<?= $logo->font ?>;"><?= $video->title ?></p>
              </div>
              <div class="item-img"> 
                <iframe width="370" height="315" src="<?= $video->youtube ?>"></iframe>
              </div> 
              <span class="price"><p style="color:<?= $logo->color ?>; font-family:<?= $logo->font ?>;"><?= $video->book ?></p></span></div>
          </div>
          <?php endforeach ?>
          <?php endforeach ?>
        </div>
      </div>
      <div class="container" id="about">
          <?php foreach (getLogo() as $logo) : ?>
          <h1 style="color:#B89F5B; font-family:<?= $logo->font ?>; text-align:center;">A&nbsp;b&nbsp;o&nbsp;u&nbsp;t&nbsp; m&nbsp;e</h1>
         <?php endforeach ?>
          <?php foreach (getAbout() as $about) : ?>
                <img src="<?= $about->image ? base_url("/images/about/$about->image") : base_url("/images/about/default.png") ?>" alt="<?= $about->title ?>">
          <?php endforeach ?>
        </div>
        <br/><br/>
      <div class="container" id="contact">
        <div class="contact-form">
          <div class="heading text-center">
          <?php foreach (getLogo() as $logo) : ?>
          <h1 style="color:#B89F5B; font-family:<?= $logo->font ?>;">C&nbsp;o&nbsp;n&nbsp;t&nbsp;a&nbsp;c&nbsp;t</h1>
          <?php endforeach ?>
        </div>
        <div class="row">
            <div class="col-md-12">
                <?php foreach (getAbout() as $about) : ?>
                <center>
                    <h3>
                        <a href="<?= $about->fb ?>" target="_blank"><i class="fa fa-facebook" style="color:#B89F5B;"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="<?= $about->ig ?>" target="_blank"><i class="fa fa-instagram" style="color:#B89F5B;"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="mailto:<?= $about->mail ?>" target="_blank"><i class="fa fa-envelope" style="color:#B89F5B;"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="https://api.whatsapp.com/send?phone=<?= $about->wa ?>" target="_blank"><i class="fa fa-whatsapp" style="color:#B89F5B;"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                    </h3>
                </center>
                <?php endforeach ?>
            </div>
        </div>
          
             <br /><br />
          <div class="row">
            <div class="col-md-4"> 
              
            </div>
            <div class="col-md-4"> 
              <div id="contact_message" class="success-msg"> <i class="fa fa-paper-plane-o"></i>Thank You. Your Message has been Submitted</div>
              <form role="form" class="contact-form" method="get" action="">
                <ul class="row">
                  <li class="col-sm-6">
                    <label>full name *
                      <input type="text" class="form-control" name="nama" placeholder="">
                    </label>
                  </li>
                  <li class="col-sm-6">
                    <label>Email *
                      <input type="email" class="form-control" name="email"  placeholder="">
                    </label>
                  </li>
                  <li class="col-sm-12">
                    <label>SUBJECT
                      <input type="text" width="10" class="form-control" name="subject" placeholder="">
                    </label>
                  </li>
                  <li class="col-sm-12">
                    <label>Message
                      <textarea class="form-control" name="message" rows="5" placeholder=""></textarea>
                    </label>
                  </li>
                  <li class="col-sm-12">
                    <button type="submit" class="btn btn-block" style="color:#B89F5B">SEND MAIL</button>
                  </li>
                </ul>
              </form>
            </div>
            <div class="col-md-4"> 
              
            </div>
            
          </div>
        </div>
        <br /><br /> <br /><br />
      <div class="container">
        <div class="papular-block row">
          <?php foreach (getLogo() as $logo) : ?> 
          <div class="col-md-3">
            <div class="item">
              <div class="item-name"> <p style="color:<?= $logo->color ?>; font-family:<?= $logo->font ?>;">Visitor Online</p>
                <h3 style="color:#B89F5B; font-family:<?= $logo->font ?>;"><?= $pengunjungonline ?></h3>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="item">
              <div class="item-name"> <p style="color:<?= $logo->color ?>; font-family:<?= $logo->font ?>;">Visitor Today</p>
                <h3 style="color:#B89F5B; font-family:<?= $logo->font ?>;"><?= $pengunjunghariini ?></h3>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="item">
              <div class="item-name"> <p style="color:<?= $logo->color ?>; font-family:<?= $logo->font ?>;">Total Visitor</p>
                <h3 style="color:#B89F5B; font-family:<?= $logo->font ?>;"><?= $totalpengunjung ?></h3>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="item">
              <div class="item-name"> <p style="color:<?= $logo->color ?>; font-family:<?= $logo->font ?>;">Total Portfolio</p>
                <h3 style="color:#B89F5B; font-family:<?= $logo->font ?>;"><?= $totalportfolio ?></h3>
              </div>
            </div>
          </div>
          <?php endforeach ?>
        </div>
      </div>
    </section>
    </div>