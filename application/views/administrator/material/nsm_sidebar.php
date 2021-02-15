<div class="left-side-bar">
    <div class="brand-logo">
        <a href="index.html">
            <?php foreach (getLogo() as $logo) : ?>
            <img src="<?= base_url(); ?>/images/logo/<?= $logo->image ?>" alt="<?= $logo->title ?>" class="dark-logo">
            <img src="<?= base_url(); ?>/images/logo/<?= $logo->image ?>" alt="<?= $logo->title ?>" class="light-logo">
            <?php endforeach ?>
        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul id="accordion-menu">
                <li>
                    <a href="<?= base_url('administrator/dashboard') ?>" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-analytics-20"></span><span class="mtext">Dashboard</span>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-invoice"></span><span class="mtext"> Manage Portfolio </span>
                    </a>
                    <ul class="submenu">
                        <li><a href="<?= base_url('administrator/category') ?>">Category</a></li>
                        <li><a href="<?= base_url('administrator/back') ?>">Back Cover</a></li>
                        <li><a href="<?= base_url('administrator/product') ?>">Primary</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-invoice"></span><span class="mtext"> Setting Page </span>
                    </a>
                    <ul class="submenu">
                        <li><a href="<?= base_url('administrator/logo') ?>">Setting Website</a></li>
                    </ul>
                    <ul class="submenu">
                        <li><a href="<?= base_url('administrator/navbar') ?>">Navigation Bar</a></li>
                    </ul>
                    <ul class="submenu">
                        <li><a href="<?= base_url('administrator/banner') ?>">Banner Home</a></li>
                    </ul>
                    <ul class="submenu">
                        <li><a href="<?= base_url('administrator/pricing') ?>">Pricing</a></li>
                    </ul>
                    <ul class="submenu">
                        <li><a href="<?= base_url('administrator/services') ?>">Services</a></li>
                    </ul>
                    <ul class="submenu">
                        <li><a href="<?= base_url('administrator/client') ?>">Client Testimonial</a></li>
                    </ul>
                    <ul class="submenu">
                        <li><a href="<?= base_url('administrator/video') ?>">Video Testimonial</a></li>
                    </ul>
                    <ul class="submenu">
                        <li><a href="<?= base_url('administrator/about') ?>">About me</a></li>
                    </ul>
                </li>
                <li>
                    <a href="<?= base_url('administrator/user') ?>" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-user-13"></span><span class="mtext">Manage Users</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('administrator/feedback') ?>" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-mail"></span><span class="mtext">Feedback Users</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('/') ?>" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-house-1"></span><span class="mtext">Back to Home</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('logout') ?>" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-logout-2"></span><span class="mtext">Logout Account</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="mobile-menu-overlay"></div>