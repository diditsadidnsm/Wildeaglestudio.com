<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Form Banner Home</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= base_url('/') ?>">Home</a></li>
                                <li class="breadcrumb-item"><a
                                        href="<?= base_url('administrator/banner') ?>">Banner</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Form Banner Home</li>
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
                        <h4 class="text-blue h4">Form Banner Home</h4>
                        <p class="mb-30">Create and Edit</p>
                    </div>
                </div>
                <?= form_open_multipart($form_action, ['method' => 'POST']) ?>
                <?= isset($input->id) ? form_hidden('id', $input->id) : '' ?>
                <div class="form-group">
                    <label>Title Background</label>
                    <?= form_input('title', $input->title, ['class' => 'form-control', 'required' => true]) ?>
                    <?= form_error('title') ?>
                </div>
                <div class="form-group">
                    <?= form_upload('image') ?>
                    <?php if ($this->session->flashdata('image_error')) : ?>
                    <small class="form-text text-danger"><?= $this->session->flashdata('image_error') ?></small>
                    <?php endif ?>
                    <?php if ($input->image) : ?>
                    <img src="<?= base_url("/images/banner/$input->image") ?>" alt="" height="150">
                    <?php endif ?>
                    <?= form_error('image') ?>
                </div>
                <div class="form-group">
                    <label>Font Title</label>
                    <?= form_input('font', $input->font, ['class' => 'form-control', 'required' => true]) ?>
                    <?= form_error('font') ?>
                </div>
                <div class="form-group">
                    <label>Color Title</label>
                    <?= form_input('color', $input->color, ['class' => 'form-control', 'required' => true]) ?>
                    <?= form_error('color') ?>
                </div>
                <div class="form-group">
                    <label>Size Title</label>
                    <?= form_input('size', $input->size, ['class' => 'form-control', 'required' => true]) ?>
                    <?= form_error('size') ?>
                </div>
                <div class="form-group">
                    <label>Position X</label>
                    <?= form_input('position', $input->position, ['class' => 'form-control', 'required' => true]) ?>
                    <?= form_error('position') ?>
                </div>
                <div class="form-group">
                    <label>Position Y</label>
                    <?= form_input('position1', $input->position1, ['class' => 'form-control', 'required' => true]) ?>
                    <?= form_error('position1') ?>
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