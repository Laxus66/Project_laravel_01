<header class="main-header position-fixed w-100">
    <div class="container">
        <nav class="navbar navbar-expand-xl py-0">
            <div class="logo">
                <a class="navbar-brand py-0 me-0" href="#"><img width="100px" height="80px" src="{{asset('client/assets/images/logo.png')}}" alt=""></a>
            </div>
            <a class="d-inline-block d-lg-block d-xl-none d-xxl-none  nav-toggler text-decoration-none" data-bs-toggle="offcanvas" href="#offcanvasExample" aria-controls="offcanvasExample">
                <i class="ti ti-menu-2"></i>
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Giới thiệu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sản phẩm</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Bài viết</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Liên hệ</a>
                    </li>

                </ul>
                <div class="d-flex align-items-center">
                    <a class="btn btn-primary btn-hover-secondery text-capitalize " href="">Đăng nhập</a>
                </div>
            </div>
        </nav>
    </div>

    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <div class="logo">
                <a class="navbar-brand py-0 me-0" href="#"><img src="{{asset('client/assets/images/Creato-logo.svg')}}" alt=""></a>
            </div>
            <button type="button" class="btn-close text-reset  ms-auto" data-bs-dismiss="offcanvas" aria-label="Close"><i class="ti ti-x"></i></button>
        </div>
        <div class="offcanvas-body pt-0">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Trang chủ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Giới thiệu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Sản phẩm</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Bài viết</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Liên hệ</a>
                </li>

            </ul>
            <div class="login d-block align-items-center">
                <a class="btn btn-primary text-capitalize w-100" href="#">Đăng nhập</a>
            </div>
        </div>
    </div>
</header>