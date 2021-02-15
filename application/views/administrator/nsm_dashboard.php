<div class="main-container">
    <?php $this->load->view('layouts/_alert'); ?>
    <div class="pd-ltr-20">
        <div class="card-box pd-20 height-100-p mb-30">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <img src="<?= base_url() ?>/theme/vendors/images/banner-img.png" alt="">
                </div>
                <div class="col-md-8">
                    <h4 class="font-20 weight-500 mb-10 text-capitalize">
                        Selamat Datang <div class="weight-600 font-30 text-blue">
                            <?= $this->session->userdata('name') ?>!</div>
                    </h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 mb-30">
                <div class="card-box height-100-p widget-style1">
                    <div class="d-flex flex-wrap align-items-center">
                        <div class="progress-data">
                            <div id="chart"></div>
                        </div>
                        <div class="widget-data">
                            <div class="h4 mb-0"><?= $visitorTotal ?></div>
                            <div class="weight-600 font-14"> Visitors</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 mb-30">
                <div class="card-box height-100-p widget-style1">
                    <div class="d-flex flex-wrap align-items-center">
                        <div class="progress-data">
                            <div id="chart2"></div>
                        </div>
                        <div class="widget-data">
                            <div class="h4 mb-0">..</div>
                            <div class="weight-600 font-14">Orders</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 mb-30">
                <div class="card-box height-100-p widget-style1">
                    <div class="d-flex flex-wrap align-items-center">
                        <div class="progress-data">
                            <div id="chart3"></div>
                        </div>
                        <div class="widget-data">
                            <div class="h4 mb-0"><?= $product ?></div>
                            <div class="weight-600 font-14">Portfolio</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 mb-30">
                <div class="card-box height-100-p widget-style1">
                    <div class="d-flex flex-wrap align-items-center">
                        <div class="progress-data">
                            <div id="chart4"></div>
                        </div>
                        <div class="widget-data">
                            <div class="h4 mb-0"><?= $activity ?></div>
                            <div class="weight-600 font-14">Users</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-box mb-30">
			<h2 class="h4 pd-20">Activity Portfolio</h2>
			<table class="data-table table nowrap">
				<thead>
					<tr>
						<th class="table-plus datatable-nosort">Image</th>
						<th>Portfolio</th>
						<th>URL Amazon</th>
						<th>Stock</th>
						<th>Slug</th>
					</tr>
				</thead>
				<tbody>
					   <?php foreach (getProductDashboard() as $product) : ?>
					<tr>
						<td class="table-plus">
							<img src="<?= $product->image ? base_url("images/product/$product->image") : base_url("images/product/default.png") ?>" width="70" height="70" alt="">
						</td>
						<td>
							<h5 class="font-16"><?= $product->title ?></h5>
							by <?= $product->writer ?>
						</td>
						<td><?= $product->price ?></td>
						<td><?= $product->is_available ? 'Available' : 'Empty' ?></td>
						<td><?= $product->slug ?></td>
					</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
        <?php foreach (getLogo() as $logo) : ?>
		<div class="footer-wrap pd-20 mb-20 card-box">
			&copy; 2021 <?= $logo->title ?>
		</div>
		<?php endforeach ?>
    </div>
</div>