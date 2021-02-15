<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Form About</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= base_url('/') ?>">Home</a></li>
                                <li class="breadcrumb-item"><a
                                        href="<?= base_url('administrator/about') ?>">About</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Form About</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-6 col-sm-12 text-right">
                        <div class="dropdown">
                            <a href="javascript:history.back()" class="btn btn-danger">
                                <i class="fa fa-arrow-left"></i> Back to List
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pd-20 card-box mb-30">
                <div class="clearfix">
                    <div class="pull-left">
                        <h4 class="text-blue h4">Form About</h4>
                        <p class="mb-30">Create and Edit</p>
                    </div>
                </div>
                <?= form_open_multipart($form_action, ['method' => 'POST']) ?>
                <?= isset($input->id) ? form_hidden('id', $input->id) : '' ?>
                <div class="form-group">
                    <label>Title</label>
                    <?= form_input('title', $input->title, ['class' => 'form-control']) ?>
                    <?= form_error('title') ?>
                </div>
                <div class="form-group">
                    <label>URL Facebook</label>
                    <?= form_input('fb', $input->fb, ['class' => 'form-control']) ?>
                    <?= form_error('fb') ?>
                </div>
                <div class="form-group">
                    <label>URL Instagram</label>
                    <?= form_input('ig', $input->ig, ['class' => 'form-control']) ?>
                    <?= form_error('ig') ?>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <?= form_input('mail', $input->mail, ['class' => 'form-control']) ?>
                    <?= form_error('mail') ?>
                </div>
                <div class="form-group">
                    <label>Whatsapp Number</label>
                    <?= form_input('wa', $input->wa, ['class' => 'form-control']) ?>
                    <?= form_error('wa') ?>
                </div>
                <div class="form-group">
                    <label>Posotion Button</label>
                    <?= form_input('position', $input->position, ['class' => 'form-control']) ?>
                    <?= form_error('position') ?>
                </div>
                <div class="form-group">
                    <label>Message Button</label>
                    <?= form_input('message', $input->message, ['class' => 'form-control']) ?>
                    <?= form_error('message') ?>
                </div>
                <div class="form-group">
                    <label>Intro</label>
                    <?= form_textarea(['name' => 'description', 'value' => $input->description, 'row' => 4, 'class' => 'form-control']) ?>
                    <?= form_error('description') ?>
                </div>
                <div class="form-group">
                    <?= form_upload('image') ?>
                    <?php if ($this->session->flashdata('image_error')) : ?>
                    <small class="form-text text-danger"><?= $this->session->flashdata('image_error') ?></small>
                    <?php endif ?>
                    <?php if ($input->image) : ?>
                    <img src="<?= base_url("/images/about/$input->image") ?>" alt="" height="150">
                    <?php endif ?>
                    <?= form_error('image') ?>
                </div>
                <div class="form-group">
                    <label></label>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Create
                        Now</button>
                </div>
                <?= form_close() ?>
            </div>
        </div>
        <?php foreach (getLogo() as $logo) : ?>
		<div class="footer-wrap pd-20 mb-20 card-box">
			&copy; 2021 <?= $logo->title ?>
		</div>
		<?php endforeach ?>
    </div>
</div>