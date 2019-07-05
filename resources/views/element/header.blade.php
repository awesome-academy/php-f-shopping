<header class="header">
    <div class="under-header"></div>
    <div class="container">
        <div class="header-main d-none d-sm-none d-md-block d-lg-block">
            <div class="row">
                <div class="col-sm-2">
                    <div class="logo">
                        <a href="/" class="logo-wrapper ">
                            <img src="{{ asset('frontend/images/logo/logo.png') }}" alt="logo Luz Bakery">
                        </a>
                    </div>
                </div>
                <div class="col-sm-10">
                    <nav>
                        <ul id="nav" class="nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="/">Trang chủ</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="#">Giới thiệu</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle">Sản phẩm</a>
                                <ul class="menu-ul">
                                    <li class="nav-item-lv2">
                                        <a class="nav-link" href="#">Bánh Cookies</a>
                                    </li>
                                    <li class="nav-item-lv2">
                                        <a class="nav-link" href="#">Bánh Lạnh</a>
                                    </li>
                                    <li class="nav-item-lv2">
                                        <a class="nav-link" href="#">Bánh Kem</a>
                                    </li>
                                    <li class="nav-item-lv2">
                                        <a class="nav-link" href="#">Bánh Nướng</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item ">
                                <a class="nav-link" href="#">Công thức</a>
                            </li>

                            <li class="nav-item ">
                                <a class="nav-link" href="#">Liên hệ</a>
                            </li>

                            <li class="heading-search-frame pd-15" id="search-frame">
                                <a href="javascript:void(0);">
                                    <i class="fa fa-search"></i>
                                </a>
                            </li>
                            <li>
                              <div class="header_search" id="search_form">
                                  <form class="input-group search-bar search_form has-validation-callback" action="#" method="get" role="search">
                                      <input type="search" name="key" placeholder="Tìm kiếm... " class="input-group-field st-default-search-input search-text" autocomplete="off">
                                      <span class="input-group-btn">
                                          <button class="btn icon-fallback-text">
                                              <i class="fa fa-search"></i>
                                          </button>
                                      </span>
                                  </form>
                              </div>
                            </li>
                            <li class="heading-user-frame pd-15">
                                <a class="header-user-btn" href="javascript:void()">
                                    <i class="fa fa-user"></i>
                                </a>
                                <div class="heading-user">
                                    <a href="#">Đăng nhập</a>
                                    <a href="#">Đăng ký</a>
                                </div>
                            </li>
                            <li class="heading-cart-frame pd-15">
                                <a href="#">
                                    <i class="fa fa-shopping-bag icon-cart"></i>
                                    <span class="cartCount count_item_pr cart-total">
                                        0
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="header-mobile d-lg-none d-md-none">
            <div class="row">
                <div class="col-sm-4 col-12">
                    <div class="menu-bar d-md-none d-lg-none">
                        <img src="{{ asset('frontend/images/menubar.png') }}" class="menu_bar" alt="menu bar">
                    </div>
                </div>
                <div class="col-sm-4 col-12 a-center">
                    <div class="logo">
                        <a href="/" class="logo-wrapper ">
                            <img src="{{ asset('frontend/images/logo/logo.png') }}" alt="logo ">
                        </a>
                    </div>
                </div>
                <div class="col-sm-4 col-12">
                    <ul class="mod-header">
                        <li class="heading-user-frame d-none d-sm-none">
                            <a class="header-user-btn" href="javascript:void()">
                                <i class="fa fa-user"></i>
                            </a>
                            <div class="heading-user">
                                <a href="#">Đăng nhập</a>
                                <a href="#">Đăng ký</a>
                            </div>
                        </li>
                        <li class="heading-cart-frame">
                            <a href="#">
                                <i class="fa fa-shopping-bag icon-cart"></i>
                                <span class="cartCount count_item_pr cart-total">
                                     0
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-12 col-12">
                    <div class="menu-mobile menu-mobile-active" style="display: none;">
                        <ul class="nav-mobile">
                            <li class="nav-item active">
                                <a class="nav-link" href="/">Trang chủ</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="#">Giới thiệu</a>
                            </li>
                            <li class="li-has-subs nav-item ">
                                <a href="#" class="nav-link nav-menu">Sản phẩm
                                </a>
                                <i class="fa fa-angle-down open-close sub_menu"></i>
                                <ul class="submenu" style="display: none;">
                                    <li class="nav-item-lv2">
                                        <a class="nav-link" href="#">Bánh Cookies</a>
                                    </li>
                                    <li class="nav-item-lv2">
                                        <a class="nav-link" href="#">Bánh Lạnh</a>
                                    </li>
                                    <li class="nav-item-lv2">
                                        <a class="nav-link" href="#">Bánh Kem</a>
                                    </li>
                                    <li class="nav-item-lv2">
                                        <a class="nav-link" href="#">Bánh Nướng</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="#">Công thức</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="#">Liên hệ</a>
                            </li>
                            <li class="nav-item search_mobile">
                                <div class="header_search search_form">
                                    <form class="input-group search-bar search_form has-validation-callback" action="#" method="get" role="search">
                                        <input type="search" name="key" placeholder="Tìm kiếm... " class="input-group-field st-default-search-input search-text" autocomplete="off" style="width: 100%">
                                        <span class="input-group-btn">
                                            <button class="btn icon-fallback-text">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </span>
                                    </form>
                                </div>
                            </li>
                            <li class="nav-item account-mobile">
                                <a href="#">Đăng nhập</a>
                                <a href="#">Đăng ký</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
