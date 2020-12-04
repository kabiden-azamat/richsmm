<header class="main-header">
    <div class="d-flex align-items-center logo-box pl-20">
        <a href="#" class="waves-effect waves-light nav-link rounded d-none d-md-inline-block push-btn" data-toggle="push-menu" role="button">
            <img src="/admin/images/svg-icon/collapse.svg" class="img-fluid svg-icon" alt="">
        </a>
        <!-- Logo -->
        <a href="index.html" class="logo">
            <!-- logo-->
            <div class="logo-lg">
                <span class="light-logo"><img src="/admin/images/logo-dark-text.png" alt="logo"></span>
                <span class="dark-logo"><img src="/admin/images/logo-light-text.png" alt="logo"></span>
            </div>
        </a>
    </div>
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top pl-10">
        <!-- Sidebar toggle button-->
        <div class="app-menu">
            <ul class="header-megamenu nav">
                <li class="btn-group nav-item d-md-none">
                    <a href="#" class="waves-effect waves-light nav-link rounded push-btn" data-toggle="push-menu" role="button">
                        <img src="/admin/images/svg-icon/collapse.svg" class="img-fluid svg-icon" alt="">
                    </a>
                </li>
                <li class="btn-group nav-item">
                    <a href="#" data-provide="fullscreen" class="waves-effect waves-light nav-link rounded full-screen" title="Full Screen">
                        <img src="/admin/images/svg-icon/fullscreen.svg" class="img-fluid svg-icon" alt="">
                    </a>
                </li>
            </ul>
        </div>

        <div class="navbar-custom-menu r-side">
            <ul class="nav navbar-nav">

                <li class="dropdown">
                    <a href="{{ route('admin_logout') }}" class="waves-effect waves-light dropdown-toggle" title="{{ __('user.logout') }}" onclick="event.preventDefault(); document.getElementById('admin_logout').submit()">
                        <img src="/admin/images/svg-icon/logout.svg" alt="{{ __('user.logout') }}" class="img-fluid svg-icon">
                    </a>
                    <form action="{{ route('admin_logout') }}" method="POST" id="admin_logout">
                        {{ csrf_field() }}
                    </form>
                </li>

                <!-- Control Sidebar Toggle Button -->
                <li>
                    <a href="#" data-toggle="control-sidebar" title="{{ __('main.settings') }}" class="waves-effect waves-light">
                        <img src="/admin/images/svg-icon/settings.svg" class="img-fluid svg-icon" alt="">
                    </a>
                </li>

            </ul>
        </div>
    </nav>
</header>
