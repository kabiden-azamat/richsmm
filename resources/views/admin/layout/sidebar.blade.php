<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">
    @php
        function get_menu_item($name, $icon_url = false, $has_child = false)
        {
            $item = "";
            if($icon_url) $item = "<img src=\"{$icon_url}\" class=\"svg-icon\" alt=\"\">" . PHP_EOL;
            $item .= "<span>{$name}</span>" . PHP_EOL;
            if($has_child) $item .= "<span class=\"pull-right-container\">
                        <i class=\"fa fa-angle-right pull-right\"></i>
                    </span>" . PHP_EOL;
            return $item;
        }
        function get_submenu_item($name)
        {
            return "<i class=\"ti-more\"></i> {$name}";
        }

        /*echo Menu::new()
            ->setAttribute('data-widget', 'tree')
            ->addClass('sidebar-menu')
            ->add( Link::to(route('admin_home'), get_menu_item('Главная', '/admin/images/svg-icon/sidebar-menu/dashboard.svg', false))->addParentClass('treeview') )
            ->submenu(
                Link::to('#', get_menu_item('Услуги', '/admin/images/svg-icon/sidebar-menu/reports.svg', true))
                    ->addParentClass('treeview'),
                Menu::new()
                    ->link('/test', get_submenu_item('Тест страница'))
                    ->link('/test', get_submenu_item('Тест страница'))
                    ->link('/test', get_submenu_item('Тест страница'))
                    ->addClass('treeview-menu')
                )
            ->setActiveFromRequest();*/
    @endphp
    <!-- sidebar menu-->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="{{ (Route::currentRouteName() == 'admin_home') ? 'active' : '' }}">
                <a href="{{ route('admin_home') }}">
                    <img src="/admin/images/svg-icon/sidebar-menu/dashboard.svg" class="svg-icon" alt="">
                    <span>Главная</span>
                </a>
            </li>
            <li class="treeview {{ ( in_array(Route::currentRouteName(), ['admin_services', 'admin_services_add']) ) ? 'active' : '' }}">
                <a href="#">
                    <img src="/admin/images/svg-icon/sidebar-menu/reports.svg" class="svg-icon" alt="">
                    <span>Услуги</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ (Route::currentRouteName() == 'admin_services') ? 'active' : '' }}"><a href="{{ route('admin_services') }}"><i class="ti-more"></i>Список услуг</a></li>
                    <li class="{{ (Route::currentRouteName() == 'admin_services_add') ? 'active' : '' }}"><a href="{{ route('admin_services_add') }}"><i class="ti-more"></i>Добавить услугу</a></li>
                </ul>
            </li>
            <li>
                <a href="{{ route('admin_logout') }}">
                    <img src="/admin/images/svg-icon/sidebar-menu/logout.svg" class="svg-icon" alt="">
                    <span>{{ __('user.logout') }}</span>
                </a>
            </li>
        </ul>
    </section>
</aside>
