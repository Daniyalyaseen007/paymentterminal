<!--- GLOBAL LOADER -->
        <div id="global-loader" >
            <img src="<?=base_url()?>assets/images/svgs/loader.svg" alt="loader">
        </div>
        <!--- END GLOBAL LOADER -->

        <!-- PAGE -->
        <div class="page">
            <div class="page-main">

                <!-- MAIN-HEADER -->
                <div class="app-header header sticky">
                    <div class="container-fluid main-container">
                        <div class="d-flex">
                            <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar"
                                href="javascript:void(0)"></a>
                            <!-- sidebar-toggle-->
                            <a class="logo-horizontal" href="<?=base_url()?>">
                                <img src="<?=base_url()?>assets/logo/Zenedge-Systems-logo-04.png" class="header-brand-img main-logo" alt="Sparic logo">
                                <img src="<?=base_url()?>assets/logo/Zenedge-Systems-logo-05.png" class="header-brand-img darklogo" alt="Sparic logo">
                            </a>
                            <!-- LOGO -->
                            <div class="main-header-center ms-3 d-none d-lg-block">
                                <input type="text" class="form-control" id="typehead" placeholder="Search for results..."
                                    autocomplete="off">
                                <button class="btn px-2"><i class="fe fe-search" aria-hidden="true"></i></button>
                            </div>
                            <div class="d-flex order-lg-2 ms-auto header-right-icons">
                                <div class="dropdown d-none">
                                    <a href="javascript:void(0)" class="nav-link icon" data-bs-toggle="dropdown">
                                        <i class="fe fe-search"></i>
                                    </a>
                                    <div class="dropdown-menu header-search dropdown-menu-start">
                                        <div class="input-group w-100 p-2">
                                            <input type="text" class="form-control" placeholder="Search....">
                                            <div class="input-group-text btn btn-primary">
                                                <i class="fe fe-search" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- SEARCH -->
                                <button class="navbar-toggler navresponsive-toggler d-lg-none ms-auto" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4"
                                    aria-controls="navbarSupportedContent-4" aria-expanded="false"
                                    aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon fe fe-more-vertical"></span>
                                </button>
                                <div class="navbar navbar-collapse responsive-navbar p-0">
                                    <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                                        <div class="d-flex order-lg-2">
                                            <div class="dropdown d-lg-none d-flex">
                                                <a href="javascript:void(0)" class="nav-link icon"
                                                    data-bs-toggle="dropdown">
                                                    <i class="fe fe-search"></i>
                                                </a>
                                                <div class="dropdown-menu header-search dropdown-menu-start">
                                                    <div class="input-group w-100 p-2">
                                                        <input type="text" class="form-control" placeholder="Search....">
                                                        <div class="input-group-text btn btn-primary">
                                                            <i class="fa fa-search" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- COUNTRY -->
                                            <div class="d-flex country">
                                                <a class="nav-link icon theme-layout nav-link-bg layout-setting">
                                                    <span class="dark-layout mt-1"><i class="ri-moon-clear-line"></i></span>
                                                    <span class="light-layout mt-1"><i class="ri-sun-line"></i></span>
                                                </a>
                                            </div>
                                            <!-- Theme-Layout -->
                                            <!-- CART -->
                                            <div class="dropdown d-flex">
                                                <a class="nav-link icon full-screen-link" id="fullscreen-button">
                                                    <i class="ri-fullscreen-exit-line fullscreen-button"></i>
                                                </a>
                                            </div>
                                            <!-- FULL-SCREEN -->
                                            <div class="dropdown d-flex notifications nav-link-notify">
                                                <a class="nav-link icon" data-bs-toggle="dropdown"><i
                                                        class="ri-notification-line"></i><span class=" pulse"></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow ">
                                                    <div class="drop-heading border-bottom">
                                                        <h6 class="mt-1 mb-0 fs-14 text-dark fw-semibold">Notifications
                                                        </h6>
                                                    </div>
                                                    <div class="notifications-menu header-dropdown-scroll">
                                                        <a class="dropdown-item border-bottom d-flex" href="https://laravelui.spruko.com/sparic/notify-list">
                                                            <div>
                                                                <span class="avatar avatar-md fs-20 brround fw-semibold text-center bg-primary-transparent"><i class="fe fe-message-square text-primary"></i></span>
                                                            </div>
                                                            <div class="wd-80p ms-3 my-auto">
                                                                <h5 class="text-dark mb-0 fw-semibold">Gladys Dare <span
                                                                        class="text-muted">commented on</span>
                                                                    Ecosystems</h5>
                                                                <span class="notification-subtext">2m ago</span>
                                                            </div>
                                                        </a>
                                                        <a class="dropdown-item border-bottom d-flex" href="https://laravelui.spruko.com/sparic/notify-list">
                                                            <div>
                                                                <span class="avatar avatar-md fs-20 brround fw-semibold text-danger bg-danger-transparent"><i class="fe fe-user"></i></span>
                                                            </div>
                                                            <div class="wd-80p ms-3 my-auto">
                                                                <h5 class="text-dark mb-0 fw-semibold">Jackson Wisky
                                                                    <span class="text-muted"> followed
                                                                        you</span>
                                                                </h5>
                                                                <span class="notification-subtext">15 min ago</span>
                                                            </div>
                                                        </a>
                                                        <a class="dropdown-item border-bottom d-flex" href="https://laravelui.spruko.com/sparic/notify-list">
                                                            <span
                                                                class="avatar avatar-md fs-20 brround fw-semibold text-center bg-success-transparent"><i
                                                                    class="fe fe-check text-success"></i></span>
                                                            <div class="wd-80p ms-3 my-auto">
                                                                <h5 class="text-muted fw-semibold mb-0">You swapped exactly
                                                                    <span class="text-dark fw-bold">2.054 BTC</span> for
                                                                    <Span class="text-dark fw-bold">14,124.00</Span>
                                                                </h5>
                                                                <span class="notification-subtext">1 day ago</span>
                                                            </div>
                                                        </a>
                                                        <a class="dropdown-item border-bottom d-flex" href="https://laravelui.spruko.com/sparic/notify-list">
                                                            <div>
                                                                <span class="avatar avatar-md fs-20 brround fw-semibold text-center bg-warning-transparent"><i class="fe fe-dollar-sign text-warning"></i></span>
                                                            </div>
                                                            <div class="wd-80p ms-3 my-auto">
                                                                <h5 class="text-dark mb-0 fw-semibold">Laurel <span
                                                                        class="text-muted">donated</span> <span
                                                                        class="text-success fw-semibold">$100</span> <span
                                                                        class="text-muted">for</span> carbon removal</h5>
                                                                <span class="notification-subtext">15 min ago</span>
                                                            </div>
                                                        </a>
                                                        <a class="dropdown-item d-flex" href="https://laravelui.spruko.com/sparic/notify-list">
                                                            <div>
                                                                <span class="avatar avatar-md fs-20 brround fw-semibold text-center bg-info-transparent"><i class="fe fe-thumbs-up text-info"></i></span>
                                                            </div>
                                                            <div class="wd-80p ms-3 my-auto">
                                                                <h5 class="text-dark mb-0 fw-semibold">Sunny Grahm <span
                                                                        class="text-muted">voted for</span> carbon capture
                                                                </h5>
                                                                <span class="notification-subtext">2 hors ago</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="text-center dropdown-footer">
                                                        <a class="btn btn-primary btn-sm btn-block text-center" href="https://laravelui.spruko.com/sparic/notify-list">VIEW ALL NOTIFICATIONS</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- NOTIFICATIONS -->
                                            <div class="dropdown d-flex message">
                                                <a class="nav-link icon text-center" data-bs-toggle="dropdown">
                                                    <i class="ri-chat-1-line"></i><span class="pulse-danger"></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                                    <div class="drop-heading border-bottom">
                                                        <h6 class="mt-1 mb-0 fs-14 fw-semibold text-dark">You have 5
                                                        Messages</h6>
                                                    </div>
                                                    <div class="message-menu message-menu-scroll">
                                                        <a class="dropdown-item border-bottom d-flex align-items-center" href="https://laravelui.spruko.com/sparic/chat">
                                                            <img class="avatar avatar-md brround cover-image"
                                                                src="https://laravelui.spruko.com/sparic/build/assets/images/users/male/28.jpg" alt="person-image">
                                                            <div class="wd-90p ms-2">
                                                                <div class="d-flex">
                                                                    <h5 class="mb-0 text-dark fw-semibold ">Madeleine</h5>
                                                                    <small class="text-muted ms-auto">
                                                                        2 min ago
                                                                    </small>
                                                                </div>
                                                                <span class="fw-semibold mb-0">Just completed <span class="text-info">Project</span></span>
                                                            </div>
                                                        </a>
                                                        <a class="dropdown-item border-bottom d-flex align-items-center" href="https://laravelui.spruko.com/sparic/chat">
                                                            <img
                                                                class="avatar avatar-md brround me-3 align-self-center cover-image"
                                                                src="https://laravelui.spruko.com/sparic/build/assets/images/users/male/32.jpg" alt="person-image">
                                                            <div class="wd-90p">
                                                                <div class="d-flex">
                                                                    <h5 class="mb-0 text-dark fw-semibold ">Anthony</h5>
                                                                    <small class="text-muted ms-auto text-end">
                                                                        1 hour ago
                                                                    </small>
                                                                </div>
                                                                <span class="fw-semibold">Updates the new <span class="text-info">Task Names</span></span>
                                                            </div>
                                                        </a>
                                                        <a class="dropdown-item border-bottom d-flex align-items-center" href="https://laravelui.spruko.com/sparic/chat">
                                                            <img class="avatar avatar-md brround me-3 cover-image"
                                                                src="https://laravelui.spruko.com/sparic/build/assets/images/users/female/21.jpg" alt="person-image">
                                                            <div class="wd-90p">
                                                                <div class="d-flex">
                                                                    <h5 class="mb-0 text-dark fw-semibold ">Olivia</h5>
                                                                    <small class="text-muted ms-auto text-end">
                                                                        1 hour ago
                                                                    </small>
                                                                </div>
                                                                <span class="fw-semibold">Added a file into <span class="text-info">Project Name</span></span>
                                                            </div>
                                                        </a>
                                                        <a class="dropdown-item d-flex align-items-center" href="https://laravelui.spruko.com/sparic/chat">
                                                            <img class="avatar avatar-md brround me-3 cover-image"
                                                                src="https://laravelui.spruko.com/sparic/build/assets/images/users/male/33.jpg" alt="person-image">
                                                            <div class="wd-90p">
                                                                <div class="d-flex">
                                                                    <h5 class="mb-0 text-dark fw-semibold ">Sanderson</h5>
                                                                    <small class="text-muted ms-auto text-end">
                                                                        1 days ago
                                                                    </small>
                                                                </div>
                                                                <span class="fw-semibold">Assigned 9 Upcoming <span class="text-info">Projects</span></span>
                                                            </div>
                                                        </a>
                                                        <a class="dropdown-item border-bottom d-flex align-items-center border-bottom-0" href="https://laravelui.spruko.com/sparic/chat">
                                                            <img class="avatar avatar-md brround cover-image"
                                                                src="https://laravelui.spruko.com/sparic/build/assets/images/users/male/8.jpg" alt="person-image">
                                                            <div class="wd-90p ms-2">
                                                                <div class="d-flex">
                                                                    <h5 class="mb-0 text-dark fw-semibold ">Madeleine</h5>
                                                                    <small class="text-muted ms-auto">
                                                                        2 min ago
                                                                    </small>
                                                                </div>
                                                                <span class="fw-semibold mb-0">Just completed <span class="text-info">Project</span></span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="dropdown-divider m-0">

                                                    </div>
                                                    <div class="text-center dropdown-footer">
                                                        <a class="btn btn-primary btn-sm btn-block text-center" href="https://laravelui.spruko.com/sparic/chat">MARK ALL AS READ</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- MESSAGE-BOX -->
                                            <!-- SIDE-MENU -->
                                            <div class="dropdown d-flex profile-1">
                                                <a href="javascript:void(0)" data-bs-toggle="dropdown"
                                                    class="nav-link leading-none d-flex">
                                                    <img src="https://laravelui.spruko.com/sparic/build/assets/images/users/male/15.jpg" alt="profile-user"
                                                        class="avatar  profile-user brround cover-image">
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow"
                                                    data-bs-popper="none">
                                                    <div class="drop-heading">
                                                        <div class="text-center">
                                                            <h5 class="text-dark mb-0 fw-semibold">Alison</h5>
                                                            <span class="text-muted fs-12">Administrator</span>
                                                        </div>
                                                    </div>
                                                    <a class="dropdown-item text-dark fw-semibold border-top" href="<?=base_url()?>user/profile">
                                                        <i class="dropdown-icon fe fe-user"></i> Profile
                                                    </a>
                                                    <a class="dropdown-item text-dark fw-semibold" href="<?=base_url()?>sign-out">
                                                        <i class="dropdown-icon fe fe-log-out"></i> Sign
                                                        out
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="demo-icon nav-link icon">
                                    <i class="fe fe-settings fa-spin text_primary"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END MAIN-HEADER -->

                <!-- NEWS-TICKER -->
                <div class="container-fluid bg-white news-ticker">
                    <div class="bg-white">
                        <div class="best-ticker" id="newsticker">
                            <div class="bn-news">
                                <ul>
                                    <li class="text-muted fs-13 fw-semibold">
                                        <span class="fa fa-users bg-danger-transparent text-danger mx-1"></span>
                                        <span class="d-inline-block">Total Users</span>
                                        <span class="bn-positive me-4">1,653</span>
                                    </li>
                                    <li class="text-muted fs-13 fw-semibold">
                                        <span class="fa fa-signal bg-info-transparent text-info mx-1"></span>
                                        <span class="d-inline-block">Total Leads</span>
                                        <span class="bn-negative me-4">639</span>
                                    </li>
                                    <li class="text-muted fs-13 fw-semibold">
                                        <span class="fa fa-briefcase bg-success-transparent text-success mx-1"></span>
                                        <span class="d-inline-block"> Total Trials </span>
                                        <span class="bn-negative me-4">12,765</span></li>
                                    <li class="text-muted fs-13 fw-semibold">
                                        <span class="fa fa-trophy bg-warning-transparent text-warning mx-1"></span>
                                        <span class="d-inline-block">Total Wins</span>
                                        <span class="bn-positive me-4">24</span></li>
                                    <li class="text-muted fs-13 fw-semibold">
                                        <span class="fa fa-envelope bg-primary-transparent text-primary mx-1"></span>
                                        <span class="d-inline-block">Active Email Accounts</span>
                                        <span class="bn-positive me-4">74,526</span></li>
                                    <li class="text-muted fs-13 fw-semibold">
                                        <span class="fa fa-check-circle bg-danger-transparent text-danger mx-1"></span>
                                        <span class="d-inline-block">Active Requests</span>
                                        <span class="bn-positive me-4">14,526</span></li>
                                    <li class="text-muted fs-13 fw-semibold">
                                        <span class="fa fa-envelope bg-secondary-transparent text-secondary mx-1"></span>
                                        <span class="d-inline-block">Deactive Email Accounts</span>
                                        <span class="bn-positive me-4">7,325 </span></li>
                                    <li class="text-muted fs-13 fw-semibold">
                                        <span class="fa fa-times-circle bg-info-transparent text-info mx-1"></span>
                                        <span class="d-inline-block">Deactive Requests</span>
                                        <span class="bn-positive me-4"> 1,425 </span></li>
                                    <li class="text-muted fs-13 fw-semibold">
                                        <span class="fa fa-usd bg-success-transparent text-success mx-1"></span>
                                        <span class="d-inline-block">Total Balance</span>
                                        <span class="bn-negative me-4">$1,52,654</span></li>
                                    <li class="text-muted fs-13 fw-semibold">
                                        <span class="fa fa-shopping-cart bg-danger-transparent text-danger mx-1"></span>
                                        <span class="d-inline-block">Total Sales</span>
                                        <span class="bn-negative me-4">23,15,2654</span></li>
                                    <li class="text-muted fs-13 fw-semibold">
                                        <span class="fa fa-money bg-warning-transparent text-warning"></span>
                                        <span class="d-inline-block">Total Purchase</span>
                                        <span class="bn-positive me-4">$7,483</span></li>
                                    <li class="text-muted fs-13 fw-semibold">
                                        <span class="fa fa-usd bg-danger-transparent text-danger mx-1"></span>
                                        <span class="d-inline-block">Total Cost Reduction</span>
                                        <span class="bn-negative me-4">$23,567</span></li>
                                    <li class="text-muted fs-13 fw-semibold">
                                        <span class="fa fa-money bg-primary-transparent text-primary mx-1"></span>
                                        <span class="d-inline-block">Total Cost Savings</span>
                                        <span class="bn-negative me-4">15.2%</span></li>
                                    <li class="text-muted fs-13 fw-semibold">
                                        <span class="fa fa-briefcase bg-info-transparent text-info mx-1"></span>
                                        <span class="d-inline-block">Total Projects</span>
                                        <span class="bn-positive me-4">3,456</span></li>
                                    <li class="text-muted fs-13 fw-semibold">
                                        <span class="fa fa-users bg-success-transparent text-success mx-1"></span>
                                        <span class="d-inline-block">Total Employes</span>
                                        <span class="bn-positive me-4">4,738</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END NEWS-TICKER -->

                <!-- MAIN-SIDEBAR -->
                <div class="sticky">
                    <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
                    <div class="app-sidebar">
                        <div class="side-header">
                            <a class="header-brand1" href="<?=base_url()?>">
                                <img src="<?=base_url()?>assets/logo/Zenedge-Systems-logo-04.png" class="header-brand-img main-logo" alt="Zenedge Logo">
                                <img src="<?=base_url()?>assets/logo/Zenedge-Systems-logo-05.png" class="header-brand-img darklogo" alt="Zenedge Logo">
                                <img src="<?=base_url()?>assets/logo/Zenedge-Systems-logo-01.png" class="header-brand-img icon-logo" alt="Zenedge Logo">
                                <img src="<?=base_url()?>assets/logo/Zenedge-Systems-logo-01.png" class="header-brand-img icon-logo2" alt="Zenedge Logo">
                            </a>
                        </div>
                        <!-- logo-->
                        <div class="main-sidemenu">
                            <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg"
                                    fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                                </svg></div>
                            <ul class="side-menu">
                                <li class="sub-category">
                                    <h3>Main</h3>
                                </li>
                                <?php 
                                if($_SESSION["UserRole"]==1){
                                ?>
                                <li class="slide">
                                    <a class="side-menu__item has-link active" href="<?=base_url()?>">
                                        <i class="side-menu__icon ri-home-4-line"></i>
                                        <span class="side-menu__label">Dashboard</span>
                                    </a>
                                </li>
                                <li class="slide">
                                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)">
                                        <i class="side-menu__icon mdi mdi-cash-multiple"></i>
                                        <span class="side-menu__label">Payments</span>
                                        <i class="angle fe fe-chevron-right"></i>
                                    </a>
                                    <ul class="slide-menu">
                                        <li class="panel sidetab-menu">
                                            <div class="panel-body tabs-menu-body p-0 border-0">
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="side5">
                                                        <ul class="sidemenu-list">
                                                            <li class="side-menu-label1"><a href="javascript:void(0)">All Payments</a></li>
                                                            <li><a href="<?=base_url()?>payments/list" class="slide-item"> All Payments</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="slide">
                                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)">
                                        <i class="side-menu__icon fa fa-file-pdf-o"></i>
                                        <span class="side-menu__label">Invoice Link</span>
                                        <i class="angle fe fe-chevron-right"></i>
                                    </a>
                                    <ul class="slide-menu">
                                        <li class="panel sidetab-menu">
                                            <div class="panel-body tabs-menu-body p-0 border-0">
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="side5">
                                                        <ul class="sidemenu-list">
                                                            <li class="side-menu-label1"><a href="javascript:void(0)">All Payments</a></li>
                                                            <li><a href="<?=base_url()?>links/list" class="slide-item"> All Links</a></li>
                                                            <li><a href="<?=base_url()?>links/paid-list" class="slide-item"> Paid Links</a></li>
                                                            <li><a href="<?=base_url()?>links/create" class="slide-item"> Create New Link</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="slide">
                                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)">
                                        <i class="side-menu__icon fa fa-gear"></i>
                                        <span class="side-menu__label">Settings</span>
                                        <i class="angle fe fe-chevron-right"></i>
                                    </a>
                                    <ul class="slide-menu">
                                        <li class="panel sidetab-menu">
                                            <div class="panel-body tabs-menu-body p-0 border-0">
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="side5">
                                                        <ul class="sidemenu-list">
                                                            <li class="side-menu-label1"><a href="javascript:void(0)">All Payments</a></li>
                                                            <li><a href="<?=base_url()?>merchants/list" class="slide-item"> All Merchants</a></li>
                                                            <li><a href="<?=base_url()?>brands/list" class="slide-item"> All Brands</a></li>
                                                            <li><a href="<?=base_url()?>services/list" class="slide-item"> All Services</a></li>
                                                            <li><a href="<?=base_url()?>roles/list" class="slide-item"> All Roles</a></li>
                                                            <li><a href="<?=base_url()?>permission/list" class="slide-item"> All Permission</a></li>
                                                            <li><a href="<?=base_url()?>ips/list" class="slide-item"> All IP's</a></li>
                                                            <li><a href="<?=base_url()?>users/list" class="slide-item"> All Users</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <?php
                                }
                                else if($_SESSION["UserRole"]==2){
                                ?>
                                <li class="slide">
                                    <a class="side-menu__item has-link active" href="<?=base_url()?>">
                                        <i class="side-menu__icon ri-home-4-line"></i>
                                        <span class="side-menu__label">Dashboard</span>
                                    </a>
                                </li>
                                <li class="slide">
                                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)">
                                        <i class="side-menu__icon mdi mdi-cash-multiple"></i>
                                        <span class="side-menu__label">Payments</span>
                                        <i class="angle fe fe-chevron-right"></i>
                                    </a>
                                    <ul class="slide-menu">
                                        <li class="panel sidetab-menu">
                                            <div class="panel-body tabs-menu-body p-0 border-0">
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="side5">
                                                        <ul class="sidemenu-list">
                                                            <li class="side-menu-label1"><a href="javascript:void(0)">All Payments</a></li>
                                                            <li><a href="<?=base_url()?>payments/list" class="slide-item"> All Payments</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="slide">
                                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)">
                                        <i class="side-menu__icon fa fa-file-pdf-o"></i>
                                        <span class="side-menu__label">Invoice Link</span>
                                        <i class="angle fe fe-chevron-right"></i>
                                    </a>
                                    <ul class="slide-menu">
                                        <li class="panel sidetab-menu">
                                            <div class="panel-body tabs-menu-body p-0 border-0">
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="side5">
                                                        <ul class="sidemenu-list">
                                                            <li class="side-menu-label1"><a href="javascript:void(0)">All Payments</a></li>
                                                            <li><a href="<?=base_url()?>links/list" class="slide-item"> All Links</a></li>
                                                            <li><a href="<?=base_url()?>links/create" class="slide-item"> Create New Link</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="slide">
                                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)">
                                        <i class="side-menu__icon fa fa-gear"></i>
                                        <span class="side-menu__label">Settings</span>
                                        <i class="angle fe fe-chevron-right"></i>
                                    </a>
                                    <ul class="slide-menu">
                                        <li class="panel sidetab-menu">
                                            <div class="panel-body tabs-menu-body p-0 border-0">
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="side5">
                                                        <ul class="sidemenu-list">
                                                            <li class="side-menu-label1"><a href="javascript:void(0)">All Payments</a></li>
                                                            <li><a href="<?=base_url()?>merchants/list" class="slide-item"> All Merchants</a></li>
                                                            <li><a href="<?=base_url()?>brands/list" class="slide-item"> All Brands</a></li>
                                                            <li><a href="<?=base_url()?>services/list" class="slide-item"> All Services</a></li>
                                                            <li><a href="<?=base_url()?>roles/list" class="slide-item"> All Roles</a></li>
                                                            <li><a href="<?=base_url()?>permission/list" class="slide-item"> All Permission</a></li>
                                                            <li><a href="<?=base_url()?>ips/list" class="slide-item"> All IP's</a></li>
                                                            <li><a href="<?=base_url()?>users/list" class="slide-item"> All Users</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <?php
                                }
                                else if($_SESSION["UserRole"]==3){
                                ?>
                                <li class="slide">
                                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)">
                                        <i class="side-menu__icon fa fa-file-pdf-o"></i>
                                        <span class="side-menu__label">Invoice Link</span>
                                        <i class="angle fe fe-chevron-right"></i>
                                    </a>
                                    <ul class="slide-menu">
                                        <li class="panel sidetab-menu">
                                            <div class="panel-body tabs-menu-body p-0 border-0">
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="side5">
                                                        <ul class="sidemenu-list">
                                                            <li class="side-menu-label1"><a href="javascript:void(0)">All Payments</a></li>
                                                            <li><a href="<?=base_url()?>links/list" class="slide-item"> All Links</a></li>
                                                            <li><a href="<?=base_url()?>links/create" class="slide-item"> Create New Link</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <?php
                                }
                                else if($_SESSION["UserRole"]==4){
                                ?>
                                <li class="slide">
                                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)">
                                        <i class="side-menu__icon fa fa-file-pdf-o"></i>
                                        <span class="side-menu__label">Invoice Link</span>
                                        <i class="angle fe fe-chevron-right"></i>
                                    </a>
                                    <ul class="slide-menu">
                                        <li class="panel sidetab-menu">
                                            <div class="panel-body tabs-menu-body p-0 border-0">
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="side5">
                                                        <ul class="sidemenu-list">
                                                            <li class="side-menu-label1"><a href="javascript:void(0)">All Payments</a></li>
                                                            <li><a href="<?=base_url()?>links/list" class="slide-item"> All Links</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <?php
                                }
                                ?>
                                
                                
                                
                            </ul>
                            <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                                    width="24" height="24" viewBox="0 0 24 24">
                                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                                </svg></div>
                        </div>
                    </div>
                </div>
                <!-- END MAIN-SIDEBAR -->