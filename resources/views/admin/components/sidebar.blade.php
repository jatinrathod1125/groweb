<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-radius-lg fixed-start ms-2  bg-white my-2"
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-dark opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand px-4 py-3 m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard "
            target="_blank">
            <img src="{{ asset('admin/img/logo-ct-dark.png') }}" class="navbar-brand-img" width="26" height="26"
                alt="main_logo">
            <span class="ms-1 text-sm text-dark">Creative Tim</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active bg-gradient-dark text-white" href="../pages/dashboard.html">
                    <i class="material-symbols-rounded opacity-5">dashboard</i>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="#" data-bs-toggle="collapse" data-bs-target="#productDropdown">
                    <i class="material-symbols-rounded opacity-5">store</i>
                    <span class="nav-link-text ms-1">Products</span>
                </a>
                <div class="collapse" id="productDropdown">
                    <ul class="navbar-nav ms-4">
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">
                                <span class="nav-link-text ms-1">List</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">
                                <span class="nav-link-text ms-1">Create</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">
                                <span class="nav-link-text ms-1">Edit</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
             <li class="nav-item">
                <a class="nav-link text-dark" href="#" data-bs-toggle="collapse" data-bs-target="#categoryDropdown">
                    <i class="material-symbols-rounded opacity-5">category</i>
                    <span class="nav-link-text ms-1">Category</span>
                </a>
                <div class="collapse" id="categoryDropdown">
                    <ul class="navbar-nav ms-4">
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="{{ route('admin.categories.index') }}">
                                <span class="nav-link-text ms-1">List</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="#" data-bs-toggle="collapse" data-bs-target="#bannerDropdown">
                    <i class="material-symbols-rounded opacity-5">build</i>
                    <span class="nav-link-text ms-1">Banner</span>
                </a>
                <div class="collapse" id="bannerDropdown">
                    <ul class="navbar-nav ms-4">
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="{{ route('admin.banners.index') }}">
                                <span class="nav-link-text ms-1">Index</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="{{ route('admin.banners.create') }}">
                                <span class="nav-link-text ms-1">Create</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">
                                <span class="nav-link-text ms-1">Edit</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
        <div class="mx-3">
            <a class="btn bg-gradient-dark w-100" href="#" type="button">Logout</a>
        </div>
    </div>
</aside>