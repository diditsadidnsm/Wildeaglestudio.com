<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Form Portfolio</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= base_url('/') ?>">Home</a></li>
                                <li class="breadcrumb-item"><a
                                        href="<?= base_url('administrator/product') ?>">Portfolio</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Form Portfolio</li>
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
                        <h4 class="text-blue h4">Form Primary Portfolio</h4>
                        <p class="mb-30">Create and Edit</p>
                    </div>
                </div>
                <?= form_open_multipart($form_action, ['method' => 'POST']) ?>
                <?= isset($input->id) ? form_hidden('id', $input->id) : '' ?>
                <div class="form-group">
                    <label>Title</label>
                    <?= form_input('title', $input->title, ['class' => 'form-control', 'required' => true]) ?>
                    <?= form_error('title') ?>
                </div>
                <div class="form-group">
                    <label>Title</label>
                    <?= form_input('sub', $input->sub, ['class' => 'form-control', 'required' => true]) ?>
                    <?= form_error('sub') ?>
                </div>
                <div class="form-group">
                    <label>Price</label>
                    <?= form_input(['type' => 'text', 'name' => 'price', 'value' => $input->price, 'class' => 'form-control', 'required' => true]) ?>
                    <?= form_error('price') ?>
                    <span style="color:red;">*tulis lengkap bila ada ada harga. contoh penulisan Rp 3.000.000; -> Rp 3.000.000;</span>
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <?= form_textarea(['name' => 'description', 'id' => 'description', 'value' => $input->description, 'row' => 4, 'class' => 'form-control']) ?>
                    <?= form_error('description') ?>
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