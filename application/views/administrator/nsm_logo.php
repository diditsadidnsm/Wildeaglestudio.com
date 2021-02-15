<div class="main-container">
    <?php $this->load->view('layouts/_alert'); ?>
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="title">
								<h4>Logo Website</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="<?= base_url(); ?>">Home</a></li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
				<div class="row">
				    <?php $no = 0; foreach ($content as $row) :  $no++; ?>
					<div class="col-xl-12 col-lg-4 col-md-4 col-sm-12 mb-30">
						<div class="pd-20 card-box height-100-p">
							<div class="profile-photo">
							    <?= form_open("administrator/banner/delete/$row->id", ['method' => 'POST']) ?>
                                <?= form_hidden('id', $row->id) ?>
								<a href="<?= base_url("administrator/logo/edit/$row->id") ?>" class="edit-avatar"><i class="fa fa-pencil"></i></a>
								<img src="<?= $row->image ? base_url("images/logo/$row->image") : base_url("images/logo/default.png") ?>" alt="<?= $row->title ?>" class="avatar-photo">
								<?= form_close() ?>
							</div>
							<h5 class="text-center h5 mb-0"><?= $row->title ?></h5>
							<p class="text-center text-muted font-14"><?= $row->site ?></p>
							<div class="profile-info">
								<h5 class="mb-20 h5 text-blue">Website Information</h5>
								<ul>
								    <li>
										<span>Description Website:</span>
										<?= $row->description ?>
									</li>
									<li>
										<span>Keyword Wesbite:</span>
										<?= $row->keyword ?>
									</li>
									<li>
										<span>Location:</span>
										<?= $row->local ?>
									</li>
									<li>
										<span>Type Website:</span>
										<?= $row->type ?>
									</li>
									<li>
										<span>URL Website:</span>
										<?= $row->url ?>
									</li>
									<li>
										<span>Font Website:</span>
										<?= $row->font ?>
									</li>
									<li>
										<span>Font Website:</span>
										<?= $row->font ?>
									</li>
									<li>
										<span>Color Text:</span>
										<?= $row->color ?>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<?php endforeach ?>
				</div>
			</div>
			<?php foreach (getLogo() as $logo) : ?>
		    <div class="footer-wrap pd-20 mb-20 card-box">
			    &copy; 2021 <?= $logo->title ?>
		    </div>
		    <?php endforeach ?>
		</div>
	</div>