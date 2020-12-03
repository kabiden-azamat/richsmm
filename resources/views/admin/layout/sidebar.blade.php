<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">
        @php

            Menu::new()
                ->add( Link::to('/', 'Home') );

        @endphp
        <!-- sidebar menu-->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="treeview">
                <a href="#">
                    <img src="/admin/images/svg-icon/sidebar-menu/dashboard.svg" class="svg-icon" alt="">
                    <span>Dashboard </span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="index.html"><i class="ti-more"></i>Dashboard 1</a></li>
                    <li><a href="index2.html"><i class="ti-more"></i>Dashboard 2</a></li>
                    <li><a href="index3.html"><i class="ti-more"></i>Dashboard 3</a></li>
                    <li><a href="index4.html"><i class="ti-more"></i>Dashboard 4</a></li>
                    <li><a href="index5.html"><i class="ti-more"></i>Dashboard 5</a></li>
                    <li><a href="index6.html"><i class="ti-more"></i>Dashboard 6</a></li>
                    <li><a href="index7.html"><i class="ti-more"></i>Dashboard 7</a></li>
                    <li><a href="index8.html"><i class="ti-more"></i>Dashboard 8</a></li>
                    <li><a href="index9.html"><i class="ti-more"></i>Dashboard 9</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <img src="/admin/images/svg-icon/sidebar-menu/layout.svg" class="svg-icon" alt="">
                    <span>Layout</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="layout_boxed.html"><i class="ti-more"></i>Boxed</a></li>
                    <li><a href="layout_fixed.html"><i class="ti-more"></i>Fixed</a></li>
                    <li><a href="layout_collapsed_sidebar.html"><i class="ti-more"></i>Mini Sidebar</a></li>
                </ul>
            </li>

            <li class="header">Crypto</li>

            <li class="treeview">
                <a href="#">
                    <img src="/admin/images/svg-icon/sidebar-menu/charts.svg" class="svg-icon" alt="">
                    <span>Charts</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="charts_chartjs.html"><i class="ti-more"></i>ChartJS</a></li>
                    <li><a href="charts_flot.html"><i class="ti-more"></i>Flot</a></li>
                    <li><a href="charts_inline.html"><i class="ti-more"></i>Inline charts</a></li>
                    <li><a href="charts_morris.html"><i class="ti-more"></i>Morris</a></li>
                    <li><a href="charts_peity.html"><i class="ti-more"></i>Peity</a></li>
                    <li><a href="charts_chartist.html"><i class="ti-more"></i>Chartist</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <img src="/admin/images/svg-icon/sidebar-menu/charts2.svg" class="svg-icon" alt="">
                    <span>C3 Charts</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="charts_c3_axis.html"><i class="ti-more"></i>Axis Chart</a></li>
                    <li><a href="charts_c3_bar.html"><i class="ti-more"></i>Bar Chart</a></li>
                    <li><a href="charts_c3_data.html"><i class="ti-more"></i>Data Chart</a></li>
                    <li><a href="charts_c3_line.html"><i class="ti-more"></i>Line Chart</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <img src="/admin/images/svg-icon/sidebar-menu/charts3.svg" class="svg-icon" alt="">
                    <span>Echarts</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="charts_echarts_basic.html"><i class="ti-more"></i>Basic Charts</a></li>
                    <li><a href="charts_echarts_bar.html"><i class="ti-more"></i>Bar Chart</a></li>
                    <li><a href="charts_echarts_pie_doughnut.html"><i class="ti-more"></i>Pie & Doughnut Chart</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <img src="/admin/images/svg-icon/sidebar-menu/reports.svg" class="svg-icon" alt="">
                    <span>Analyses</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="reports_transactions.html"><i class="ti-more"></i>Transactions</a></li>
                    <li><a href="reports_top_gainers_losers.html"><i class="ti-more"></i>Gainers/Losers</a></li>
                    <li><a href="reports_market_capitalizations.html"><i class="ti-more"></i>Market</a></li>
                    <li><a href="reports_crypto_stats.html"><i class="ti-more"></i>Stats</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <img src="/admin/images/svg-icon/sidebar-menu/ico.svg" class="svg-icon" alt="">
                    <span>ICO</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="ico_distribution_countdown.html"><i class="ti-more"></i>Countdown</a></li>
                    <li><a href="ico_roadmap_timeline.html"><i class="ti-more"></i>Timeline</a></li>
                    <li><a href="ico_progress.html"><i class="ti-more"></i>Progress</a></li>
                    <li><a href="ico_details.html"><i class="ti-more"></i>Details</a></li>
                    <li><a href="ico_listing.html"><i class="ti-more"></i>Listing</a></li>
                    <li><a href="ico_filter.html"><i class="ti-more"></i>ICO Filters</a></li>
                </ul>
            </li>
            <li>
                <a href="currency_exchange.html">
                    <img src="/admin/images/svg-icon/sidebar-menu/exchange.svg" class="svg-icon" alt="">
                    <span>Exchange</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <img src="/admin/images/svg-icon/sidebar-menu/members.svg" class="svg-icon" alt="">
                    <span>Associates</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="members.html"><i class="ti-more"></i>Grid</a></li>
                    <li><a href="members_list.html"><i class="ti-more"></i>List</a></li>
                    <li><a href="member_profile.html"><i class="ti-more"></i>Profile</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <img src="/admin/images/svg-icon/sidebar-menu/tickers.svg" class="svg-icon" alt="">
                    <span>Tickers</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="tickers.html"><i class="ti-more"></i>Ticker</a></li>
                    <li><a href="tickers_live_pricing.html"><i class="ti-more"></i>Live Prices</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <img src="/admin/images/svg-icon/sidebar-menu/transactions.svg" class="svg-icon" alt="">
                    <span>Transactions</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="transactions_tables.html"><i class="ti-more"></i>Tables</a></li>
                    <li><a href="transaction_search.html"><i class="ti-more"></i>Search</a></li>
                    <li><a href="transaction_details.html"><i class="ti-more"></i>Details</a></li>
                    <li><a href="transactions_counter.html"><i class="ti-more"></i>Counter</a></li>
                </ul>
            </li>

            <li class="header">Apps & UI </li>

            <li class="treeview">
                <a href="#">
                    <img src="/admin/images/svg-icon/sidebar-menu/mailbox.svg" class="svg-icon" alt="">
                    <span>Mailbox</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="mailbox_inbox.html"><i class="ti-more"></i>Inbox</a></li>
                    <li><a href="mailbox_compose.html"><i class="ti-more"></i>Compose</a></li>
                    <li><a href="mailbox_read_mail.html"><i class="ti-more"></i>Read</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <img src="/admin/images/svg-icon/sidebar-menu/apps.svg" class="svg-icon" alt="">
                    <span>Apps</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="contact_app_chat.html"><i class="ti-more"></i>Chat</a></li>
                    <li><a href="extra_taskboard.html"><i class="ti-more"></i>Todo</a></li>
                    <li><a href="extra_calendar.html"><i class="ti-more"></i>Calendar</a></li>
                    <li><a href="extra_app_ticket.html"><i class="ti-more"></i>Support</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <img src="/admin/images/svg-icon/sidebar-menu/invoice.svg" class="svg-icon" alt="">
                    <span>Invoice</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="invoice.html"><i class="ti-more"></i>Invoice</a></li>
                    <li><a href="invoicelist.html"><i class="ti-more"></i>Invoice List</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <img src="/admin/images/svg-icon/sidebar-menu/uielements.svg" class="svg-icon" alt="">
                    <span>UI Elements</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="ui_typography.html"><i class="ti-more"></i>Typography</a></li>
                    <li><a href="ui_grid.html"><i class="ti-more"></i>Grid</a></li>
                    <li><a href="ui_tab.html"><i class="ti-more"></i>Tabs</a></li>
                    <li><a href="ui_timeline.html"><i class="ti-more"></i>Timeline</a></li>
                    <li><a href="ui_timeline_horizontal.html"><i class="ti-more"></i>Horizontal Timeline</a></li>
                    <li><a href="component_bootstrap_switch.html"><i class="ti-more"></i>Bootstrap Switch</a></li>
                    <li><a href="component_date_paginator.html"><i class="ti-more"></i>Date Paginator</a></li>
                    <li><a href="component_media_advanced.html"><i class="ti-more"></i>Advanced Medias</a></li>
                    <li><a href="component_modals.html"><i class="ti-more"></i>Modals</a></li>
                    <li><a href="component_rangeslider.html"><i class="ti-more"></i>Range Slider</a></li>
                    <li><a href="component_rating.html"><i class="ti-more"></i>Ratings</a></li>
                    <li><a href="component_animations.html"><i class="ti-more"></i>Animations</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <img src="/admin/images/svg-icon/sidebar-menu/advancedui.svg" class="svg-icon" alt="">
                    <span>Advanced UI</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="ui_badges.html"><i class="ti-more"></i>Badges</a></li>
                    <li><a href="ui_border_utilities.html"><i class="ti-more"></i>Border</a></li>
                    <li><a href="ui_buttons.html"><i class="ti-more"></i>Buttons</a></li>
                    <li><a href="ui_dropdown.html"><i class="ti-more"></i>Dropdown</a></li>
                    <li><a href="ui_dropdown_grid.html"><i class="ti-more"></i>Dropdown Grid</a></li>
                    <li><a href="ui_progress_bars.html"><i class="ti-more"></i>Progress Bars</a></li>
                    <li><a href="ui_ribbons.html"><i class="ti-more"></i>Ribbons</a></li>
                    <li><a href="ui_sliders.html"><i class="ti-more"></i>Sliders</a></li>
                </ul>
            </li>

            <li>
                <a href="ui_color_utilities.html">
                    <img src="/admin/images/svg-icon/sidebar-menu/color.svg" class="svg-icon" alt="">
                    <span>Color</span>
                </a>
            </li>

            <li class="treeview">
                <a href="#">
                    <img src="/admin/images/svg-icon/sidebar-menu/icons.svg" class="svg-icon" alt="">
                    <span>Icons</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="icons_fontawesome.html"><i class="ti-more"></i>Font Awesome</a></li>
                    <li><a href="icons_glyphicons.html"><i class="ti-more"></i>Glyphicons</a></li>
                    <li><a href="icons_material.html"><i class="ti-more"></i>Material Icons</a></li>
                    <li><a href="icons_themify.html"><i class="ti-more"></i>Themify Icons</a></li>
                    <li><a href="icons_simpleline.html"><i class="ti-more"></i>Simple Line Icons</a></li>
                    <li><a href="icons_cryptocoins.html"><i class="ti-more"></i>Cryptocoins Icons</a></li>
                    <li><a href="icons_flag.html"><i class="ti-more"></i>Flag Icons</a></li>
                    <li><a href="icons_weather.html"><i class="ti-more"></i>Weather Icons</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <img src="/admin/images/svg-icon/sidebar-menu/cards.svg" class="svg-icon" alt="">
                    <span>Cards</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="box_advanced.html"><i class="ti-more"></i>Advanced Card</a></li>
                    <li><a href="box_basic.html"><i class="ti-more"></i>Basic Card</a></li>
                    <li><a href="box_color.html"><i class="ti-more"></i>Card Color</a></li>
                </ul>
            </li>

            <li class="header">Forms & Elements</li>

            <li class="treeview">
                <a href="#">
                    <img src="/admin/images/svg-icon/sidebar-menu/forms1.svg" class="svg-icon" alt="">
                    <span>Forms Elements</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="forms_advanced.html"><i class="ti-more"></i>Form Elements</a></li>
                    <li><a href="forms_mask.html"><i class="ti-more"></i>Formatter</a></li>
                    <li><a href="forms_xeditable.html"><i class="ti-more"></i>Xeditable Editor</a></li>
                    <li><a href="forms_code_editor.html"><i class="ti-more"></i>Code Editor</a></li>
                    <li><a href="forms_editors.html"><i class="ti-more"></i>Editor</a></li>
                    <li><a href="forms_dropzone.html"><i class="ti-more"></i>Dropzone</a></li>
                    <li><a href="forms_editor_markdown.html"><i class="ti-more"></i>Markdown</a></li>
                </ul>
            </li>
            <li>
                <a href="forms_general.html">
                    <img src="/admin/images/svg-icon/sidebar-menu/forms2.svg" class="svg-icon" alt="">
                    <span>Form Layout</span>
                </a>
            </li>
            <li>
                <a href="forms_wizard.html">
                    <img src="/admin/images/svg-icon/sidebar-menu/forms3.svg" class="svg-icon" alt="">
                    <span>Form Wizard</span>
                </a>
            </li>
            <li>
                <a href="forms_validation.html">
                    <img src="/admin/images/svg-icon/sidebar-menu/forms4.svg" class="svg-icon" alt="">
                    <span>Form Validation</span>
                </a>
            </li>

            <li class="header">Maps & Extensions</li>

            <li class="treeview">
                <a href="#">
                    <img src="/admin/images/svg-icon/sidebar-menu/maps.svg" class="svg-icon" alt="">
                    <span>Maps</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="map_google.html"><i class="ti-more"></i>Google Map</a></li>
                    <li><a href="map_vector.html"><i class="ti-more"></i>Vector Map</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <img src="/admin/images/svg-icon/sidebar-menu/extensions.svg" class="svg-icon" alt="">
                    <span>Extensions</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="component_sweatalert.html"><i class="ti-more"></i>Sweet Alert</a></li>
                    <li><a href="component_notification.html"><i class="ti-more"></i>Toastr</a></li>
                    <li><a href="extension_fullscreen.html"><i class="ti-more"></i>Fullscreen</a></li>
                    <li><a href="extension_pace.html"><i class="ti-more"></i>Pace</a></li>
                    <li><a href="component_nestable.html"><i class="ti-more"></i>Nestable</a></li>
                    <li><a href="component_portlet_draggable.html"><i class="ti-more"></i>Draggable</a></li>
                </ul>
            </li>

            <li class="header">Pages</li>

            <li class="treeview">
                <a href="#">
                    <img src="/admin/images/svg-icon/sidebar-menu/authentication.svg" class="svg-icon" alt="">
                    <span>Authentication</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="auth_login.html"><i class="ti-more"></i>Login</a></li>
                    <li><a href="auth_login2.html"><i class="ti-more"></i>Login 2</a></li>
                    <li><a href="auth_register.html"><i class="ti-more"></i>Register</a></li>
                    <li><a href="auth_register2.html"><i class="ti-more"></i>Register 2</a></li>
                    <li><a href="auth_lockscreen.html"><i class="ti-more"></i>Lockscreen</a></li>
                    <li><a href="auth_user_pass.html"><i class="ti-more"></i>Recover password</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <img src="/admin/images/svg-icon/sidebar-menu/miscellaneous.svg" class="svg-icon" alt="">
                    <span>Miscellaneous</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="error_400.html"><i class="ti-more"></i>Error 400</a></li>
                    <li><a href="error_403.html"><i class="ti-more"></i>Error 403</a></li>
                    <li><a href="error_404.html"><i class="ti-more"></i>Error 404</a></li>
                    <li><a href="error_500.html"><i class="ti-more"></i>Error 500</a></li>
                    <li><a href="error_503.html"><i class="ti-more"></i>Error 503</a></li>
                    <li><a href="error_maintenance.html"><i class="ti-more"></i>Maintenance</a></li>
                </ul>
            </li>

            <li>
                <a href="email_index.html">
                    <img src="/admin/images/svg-icon/sidebar-menu/emails.svg" class="svg-icon" alt="">
                    <span>Emails</span>
                </a>
            </li>

            <li class="treeview">
                <a href="#">
                    <img src="/admin/images/svg-icon/sidebar-menu/pages.svg" class="svg-icon" alt="">
                    <span>Sample Pages</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="sample_blank.html"><i class="ti-more"></i>Blank</a></li>
                    <li><a href="sample_coming_soon.html"><i class="ti-more"></i>Coming Soon</a></li>
                    <li><a href="sample_faq.html"><i class="ti-more"></i>FAQ</a></li>
                </ul>
            </li>


            <li class="treeview">
                <a href="#">
                    <img src="/admin/images/svg-icon/sidebar-menu/multilevel.svg" class="svg-icon" alt="">
                    <span>Multilevel</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#">Level One</a></li>
                    <li class="treeview">
                        <a href="#">Level One
                            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="#">Level Two</a></li>
                            <li class="treeview">
                                <a href="#">Level Two
                                    <span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="#">Level Three</a></li>
                                    <li><a href="#">Level Three</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#">Level One</a></li>
                </ul>
            </li>

            <li>
                <a href="auth_login.html">
                    <img src="/admin/images/svg-icon/sidebar-menu/logout.svg" class="svg-icon" alt="">
                    <span>Log Out</span>
                </a>
            </li>

        </ul>
    </section>
</aside>
