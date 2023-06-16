<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <div class="sidebar-brand-text mx-3">Admin</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('backend.dashboard.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <li class="nav-item ">
        <a class="nav-link" href="{{ route('backend.categories.create') }}">
            <i class="fas fa-list-alt"></i>
            <span>Danh mục</span></a>
    </li>
    <hr class="sidebar-divider">

    <li class="nav-item ">
        <a class="nav-link" href="{{ route('backend.banners.create') }}">
            <i class="fas fa-fw fa-plane"></i>
            <span>Banner</span></a>
    </li>
    <hr class="sidebar-divider">

    <li class="nav-item ">
        <a class="nav-link" href="{{ route('backend.source_category.create') }}">
            <i class="fas fa-fw fa-car"></i>
            <span>Nguồn hàng</span></a>
    </li>
    <hr class="sidebar-divider">

    <li class="nav-item ">
        <a class="nav-link" href="{{ route('backend.sub_categories.create') }}">
            <i class="fas fa-fw fa-car"></i>
            <span>Phụ lục</span></a>
    </li>

    <li class="nav-item ">
        <a class="nav-link" href="{{ route('backend.gallery_sub_categories.create') }}">
            <i class="fas fa-fw fa-car"></i>
            <span>Sản phẩm theo Phụ lục</span></a>
    </li>
    <hr class="sidebar-divider">

    <li class="nav-item ">
        <a class="nav-link" href="{{ route('backend.cards.create') }}">
            <i class="fas fa-fw fa-car"></i>
            <span>Thẻ</span></a>
    </li>

    <li class="nav-item ">
        <a class="nav-link" href="{{ route('backend.product_cards.create') }}">
            <i class="fas fa-fw fa-car"></i>
            <span>Sản phẩm theo thẻ</span></a>
    </li>
    <hr class="sidebar-divider">

    <li class="nav-item ">
        <a class="nav-link" href="{{ route('backend.introduces.create') }}">
            <i class="fas fa-fw fa-car"></i>
            <span>Thêm quảng cáo</span></a>
    </li>
    <hr class="sidebar-divider">

    <li class="nav-item ">
        <a class="nav-link" href="{{ route('backend.products.create') }}">
            <i class="fas fa-fw fa-car"></i>
            <span>Thêm sản phẩm</span></a>
    </li>






    <!-- Divider -->


{{--     
    <hr class="sidebar-divider">

    <li class="nav-item ">
        <a class="nav-link" href="">
            <i class="fas fa-fw fa-cog"></i>
            <span>Setting</span></a>
    </li> --}}

</ul>