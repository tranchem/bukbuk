<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('admin') ?>">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Buk buk</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="<?= base_url('admin') ?>">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Trang chủ</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Interface
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#restaurant"
        aria-expanded="true" aria-controls="restaurant">
        <i class="fas fa-fw fa-cog"></i>
        <span>Nhà hàng</span>
    </a>
    <div id="restaurant" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <!-- <h6 class="collapse-header">Custom Components:</h6> -->
            <a class="collapse-item" href="<?= base_url('admin/restaurant') ?>">Danh sách</a>
            <a class="collapse-item" href="<?= base_url('admin/restaurant_add') ?>">Thêm mới</a>
        </div>
    </div>
</li>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#menu"
        aria-expanded="true" aria-controls="menu">
        <i class="fas fa-fw fa-cog"></i>
        <span>Thực đơn</span>
    </a>
    <div id="menu" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <!-- <h6 class="collapse-header">Custom Components:</h6> -->
            <a class="collapse-item" href="<?= base_url('admin/menu') ?>">Danh sách</a>
            <a class="collapse-item" href="<?= base_url('admin/menu_add') ?>">Thêm mới</a>
        </div>
    </div>
</li>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#product"
        aria-expanded="true" aria-controls="product">
        <i class="fas fa-fw fa-cog"></i>
        <span>Món ăn</span>
    </a>
    <div id="product" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <!-- <h6 class="collapse-header">Custom Components:</h6> -->
            <a class="collapse-item" href="<?= base_url('admin/product') ?>">Danh sách</a>
            <a class="collapse-item" href="<?= base_url('admin/product_add') ?>">Thêm mới</a>
        </div>
    </div>
</li>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#booking"
        aria-expanded="true" aria-controls="booking">
        <i class="fas fa-fw fa-cog"></i>
        <span>Đặt bàn</span>
    </a>
    <div id="booking" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <!-- <h6 class="collapse-header">Custom Components:</h6> -->
            <a class="collapse-item" href="<?= base_url('admin/booking') ?>">Danh sách</a>
            <a class="collapse-item" href="<?= base_url('admin/booking_add') ?>">Thêm mới</a>
        </div>
    </div>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>
</ul>
<!-- End of Sidebar -->