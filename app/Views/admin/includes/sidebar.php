<?php
    $uri = service('uri');
    $uriArray = $uri->getSegments();
    $uri1 = $uriArray[0];
    $uri2 = isset($uriArray[1]) ? $uriArray[1] : '';
?>
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="<?=base_url()?>" class="app-brand-link w-100">
            <span class="app-brand-logo demo w-100">
                <img src="<?=base_url()?>assetItems/image/logo.jpg" style="width: 100%; height: 50px;">
            </span>
        </a>
        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>
    <div class="menu-inner-shadow"></div>
    <ul class="menu-inner py-1">
        <?php if (session()->get('userData')['user_type']=='admin'): ?>
            <!-- Dashboards -->
            <li class="menu-item <?=$uri1=='admin_panel' ? 'active' : ''?>">
                <a href="<?=base_url()?>admin_panel" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-home-circle"></i>
                    <div data-i18n="Dashboards">Dashboards</div>
                </a>
            </li>
            <!-- Category -->
            <li class="menu-item <?=in_array($uri2, ['add-category','category-list']) ? 'open' : ''?>">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-layout"></i>
                    <div data-i18n="Level">Category</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item <?=$uri2=='add-category' ? 'active' : ''?>">
                        <a href="<?=base_url()?>admin/add-category" class="menu-link">
                            <div data-i18n="Without navbar">Add</div>
                        </a>
                    </li>
                    <li class="menu-item <?=$uri2=='category-list' ? 'active' : ''?>">
                        <a href="<?=base_url()?>admin/category-list" class="menu-link">
                            <div data-i18n="Without menu">List</div>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- Level -->
            <li class="menu-item <?=in_array($uri2, ['add-level','level-list']) ? 'open' : ''?>">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-layout"></i>
                    <div data-i18n="Level">Level</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item <?=$uri2=='add-level' ? 'active' : ''?>">
                        <a href="<?=base_url()?>admin/add-level" class="menu-link">
                            <div data-i18n="Without navbar">Add</div>
                        </a>
                    </li>
                    <li class="menu-item <?=$uri2=='level-list' ? 'active' : ''?>">
                        <a href="<?=base_url()?>admin/level-list" class="menu-link">
                            <div data-i18n="Without menu">List</div>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- Type -->
            <li class="menu-item <?=in_array($uri2, ['add-type','type-list']) ? 'open' : ''?>">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-layout"></i>
                    <div data-i18n="Front Pages">Type</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item <?=$uri2=='add-type' ? 'active' : ''?>">
                        <a href="<?=base_url()?>admin/add-type" class="menu-link">
                            <div data-i18n="Without navbar">Add</div>
                        </a>
                    </li>
                    <li class="menu-item <?=$uri2=='type-list' ? 'active' : ''?>">
                        <a href="<?=base_url()?>admin/type-list" class="menu-link">
                            <div data-i18n="Without menu">List</div>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- Subject -->
            <li class="menu-item <?=in_array($uri2, ['add-subject','subject-list']) ? 'open' : ''?>">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-layout"></i>
                    <div data-i18n="Front Pages">Subject</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item <?=$uri2=='add-subject' ? 'active' : ''?>">
                        <a href="<?=base_url()?>admin/add-subject" class="menu-link">
                            <div data-i18n="Without navbar">Add</div>
                        </a>
                    </li>
                    <li class="menu-item <?=$uri2=='subject-list' ? 'active' : ''?>">
                        <a href="<?=base_url()?>admin/subject-list" class="menu-link">
                            <div data-i18n="Without menu">List</div>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- Subject -->
            <li class="menu-item <?=in_array($uri2, ['add-paper','paper-list']) ? 'open' : ''?>">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-layout"></i>
                    <div data-i18n="Front Pages">Paper</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item <?=$uri2=='add-paper' ? 'active' : ''?>">
                        <a href="<?=base_url()?>admin/add-paper" class="menu-link">
                            <div data-i18n="Without navbar">Add</div>
                        </a>
                    </li>
                    <li class="menu-item <?=$uri2=='paper-list' ? 'active' : ''?>">
                        <a href="<?=base_url()?>admin/paper-list" class="menu-link">
                            <div data-i18n="Without menu">List</div>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- promocodes -->
            <li class="menu-item <?=in_array($uri2, ['add-promocode','promocode-list']) ? 'open' : ''?>">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-layout"></i>
                    <div data-i18n="Front Pages">Promo Codes</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item <?=$uri2=='add-promocode' ? 'active' : ''?>">
                        <a href="<?=base_url()?>admin/add-promocode" class="menu-link">
                            <div data-i18n="Without navbar">Add</div>
                        </a>
                    </li>
                    <li class="menu-item <?=$uri2=='promocode-list' ? 'active' : ''?>">
                        <a href="<?=base_url()?>admin/promocode-list" class="menu-link">
                            <div data-i18n="Without menu">List</div>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- upload notice -->
            <li class="menu-item <?=in_array($uri2, ['add-notice','notice-list']) ? 'open' : ''?>">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-layout"></i>
                    <div data-i18n="Front Pages">Upload Notice</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item <?=$uri2=='add-notice' ? 'active' : ''?>">
                        <a href="<?=base_url()?>admin/add-notice" class="menu-link">
                            <div data-i18n="Without navbar">Add</div>
                        </a>
                    </li>
                    <li class="menu-item <?=$uri2=='notice-list' ? 'active' : ''?>">
                        <a href="<?=base_url()?>admin/notice-list" class="menu-link">
                            <div data-i18n="Without menu">List</div>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- student -->
            <li class="menu-item <?=in_array($uri2, ['student-list']) ? 'open' : ''?>">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-layout"></i>
                    <div data-i18n="Front Pages">Student</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item <?=$uri2=='student-list' ? 'active' : ''?>">
                        <a href="<?=base_url()?>admin/student-list" class="menu-link">
                            <div data-i18n="Without menu">List</div>
                        </a>
                    </li>
                </ul>
            </li>
        <?php endif ?>
        <!-- assignment -->
        <li class="menu-item <?=in_array($uri2, ['assignment-level-list']) ? 'open' : ''?>">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Front Pages">Assignment</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item <?=$uri2=='assignment-level-list' ? 'active' : ''?>">
                    <a href="<?=base_url()?>admin/assignment-level-list" class="menu-link">
                        <div data-i18n="Without menu">List</div>
                    </a>
                </li>
            </ul>
        </li>
        <?php if (session()->get('userData')['user_type']=='admin'): ?>
            <!-- Examinar -->
            <li class="menu-item <?=in_array($uri2, ['add-examinar','examinar-list','examinar']) ? 'open' : ''?>">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-layout"></i>
                    <div data-i18n="Front Pages">Examinar</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item <?=$uri2=='add-examinar' ? 'active' : ''?>">
                        <a href="<?=base_url()?>admin/add-examinar" class="menu-link">
                            <div data-i18n="Without navbar">Add</div>
                        </a>
                    </li>
                    <li class="menu-item <?=in_array($uri2, ['examinar-list','examinar']) ? 'active' : ''?>">
                        <a href="<?=base_url()?>admin/examinar-list" class="menu-link">
                            <div data-i18n="Without menu">List</div>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- Newsletter -->
            <li class="menu-item <?=in_array($uri2, ['newsletter-list']) ? 'open' : ''?>">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-layout"></i>
                    <div data-i18n="Front Pages">NewsLetter</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item <?=in_array($uri2, ['newsletter-list']) ? 'active' : ''?>">
                        <a href="<?=base_url()?>admin/newsletter-list" class="menu-link">
                            <div data-i18n="Without menu">List</div>
                        </a>
                    </li>
                </ul>
            </li>

             <!-- Blog -->
            <li class="menu-item <?=in_array($uri2, ['add-blog','blog-list']) ? 'open' : ''?>">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-layout"></i>
                    <div data-i18n="Front Pages">Blog</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item <?=$uri2=='add-blog' ? 'active' : ''?>">
                        <a href="<?=base_url()?>admin/add-blog" class="menu-link">
                            <div data-i18n="Without navbar">Add</div>
                        </a>
                    </li>
                    <li class="menu-item <?=in_array($uri2, ['blog-list']) ? 'active' : ''?>">
                        <a href="<?=base_url()?>admin/blog-list" class="menu-link">
                            <div data-i18n="Without menu">List</div>
                        </a>
                    </li>
                </ul>
            </li>

            <!-- Notes -->
            <li class="menu-item <?=in_array($uri2, ['add-notes','notes-list']) ? 'open' : ''?>">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-layout"></i>
                    <div data-i18n="Front Pages">Notes</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item <?=$uri2=='add-notes' ? 'active' : ''?>">
                        <a href="<?=base_url()?>admin/add-notes" class="menu-link">
                            <div data-i18n="Without navbar">Add</div>
                        </a>
                    </li>
                    <li class="menu-item <?=in_array($uri2, ['notes-list']) ? 'active' : ''?>">
                        <a href="<?=base_url()?>admin/notes-list" class="menu-link">
                            <div data-i18n="Without menu">List</div>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- Amendment -->
            <li class="menu-item <?=in_array($uri2, ['add-amendment','amendment-list']) ? 'open' : ''?>">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-layout"></i>
                    <div data-i18n="Front Pages">Amendment</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item <?=$uri2=='add-amendment' ? 'active' : ''?>">
                        <a href="<?=base_url()?>admin/add-amendment" class="menu-link">
                            <div data-i18n="Without navbar">Add</div>
                        </a>
                    </li>
                    <li class="menu-item <?=in_array($uri2, ['amendment-list']) ? 'active' : ''?>">
                        <a href="<?=base_url()?>admin/amendment-list" class="menu-link">
                            <div data-i18n="Without menu">List</div>
                        </a>
                    </li>
                </ul>
            </li>

            <!-- Question Bank -->
            <li class="menu-item <?=in_array($uri2, ['add-qbank','qbank-list']) ? 'open' : ''?>">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-layout"></i>
                    <div data-i18n="Front Pages">Question Bank</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item <?=$uri2=='add-qbank' ? 'active' : ''?>">
                        <a href="<?=base_url()?>admin/add-qbank" class="menu-link">
                            <div data-i18n="Without navbar">Add</div>
                        </a>
                    </li>
                    <li class="menu-item <?=in_array($uri2, ['qbank-list']) ? 'active' : ''?>">
                        <a href="<?=base_url()?>admin/qbank-list" class="menu-link">
                            <div data-i18n="Without menu">List</div>
                        </a>
                    </li>
                </ul>
            </li>

            <!-- Sales -->
            <li class="menu-item <?=in_array($uri2, ['view-sales']) ? 'open' : ''?>">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-layout"></i>
                    <div data-i18n="Front Pages">Sales</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item <?=$uri2=='view-sales' ? 'active' : ''?>">
                        <a href="<?=base_url()?>admin/view-sales" class="menu-link">
                            <div data-i18n="Without navbar">Sales</div>
                        </a>
                    </li>
                </ul>
            </li>
        <?php endif ?>

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Apps &amp; Pages</span>
        </li>
        <!-- Apps -->
        <li class="menu-item">
            <a href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/app-email.html" target="_blank" class="menu-link">
                <i class="menu-icon tf-icons bx bx-envelope"></i>
                <div data-i18n="Email">Email</div>
                <div class="badge bg-label-primary fs-tiny rounded-pill ms-auto">Pro</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/app-chat.html" target="_blank" class="menu-link">
                <i class="menu-icon tf-icons bx bx-chat"></i>
                <div data-i18n="Chat">Chat</div>
                <div class="badge bg-label-primary fs-tiny rounded-pill ms-auto">Pro</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/app-calendar.html" target="_blank" class="menu-link">
                <i class="menu-icon tf-icons bx bx-calendar"></i>
                <div data-i18n="Calendar">Calendar</div>
                <div class="badge bg-label-primary fs-tiny rounded-pill ms-auto">Pro</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/app-kanban.html" target="_blank" class="menu-link">
                <i class="menu-icon tf-icons bx bx-grid"></i>
                <div data-i18n="Kanban">Kanban</div>
                <div class="badge bg-label-primary fs-tiny rounded-pill ms-auto">Pro</div>
            </a>
        </li>
        <!-- Pages -->
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Account Settings">Account Settings</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="pages-account-settings-account.html" class="menu-link">
                        <div data-i18n="Account">Account</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="pages-account-settings-notifications.html" class="menu-link">
                        <div data-i18n="Notifications">Notifications</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="pages-account-settings-connections.html" class="menu-link">
                        <div data-i18n="Connections">Connections</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
                <div data-i18n="Authentications">Authentications</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="auth-login-basic.html" class="menu-link" target="_blank">
                        <div data-i18n="Basic">Login</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="auth-register-basic.html" class="menu-link" target="_blank">
                        <div data-i18n="Basic">Register</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="auth-forgot-password-basic.html" class="menu-link" target="_blank">
                        <div data-i18n="Basic">Forgot Password</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-cube-alt"></i>
                <div data-i18n="Misc">Misc</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="pages-misc-error.html" class="menu-link">
                        <div data-i18n="Error">Error</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="pages-misc-under-maintenance.html" class="menu-link">
                        <div data-i18n="Under Maintenance">Under Maintenance</div>
                    </a>
                </li>
            </ul>
        </li>
        <!-- Components -->
        <li class="menu-header small text-uppercase"><span class="menu-header-text">Components</span></li>
        <!-- Cards -->
        <li class="menu-item">
            <a href="cards-basic.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-collection"></i>
                <div data-i18n="Basic">Cards</div>
            </a>
        </li>
        <!-- User interface -->
        <li class="menu-item">
            <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-box"></i>
                <div data-i18n="User interface">User interface</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="ui-accordion.html" class="menu-link">
                        <div data-i18n="Accordion">Accordion</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ui-alerts.html" class="menu-link">
                        <div data-i18n="Alerts">Alerts</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ui-badges.html" class="menu-link">
                        <div data-i18n="Badges">Badges</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ui-buttons.html" class="menu-link">
                        <div data-i18n="Buttons">Buttons</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ui-carousel.html" class="menu-link">
                        <div data-i18n="Carousel">Carousel</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ui-collapse.html" class="menu-link">
                        <div data-i18n="Collapse">Collapse</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ui-dropdowns.html" class="menu-link">
                        <div data-i18n="Dropdowns">Dropdowns</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ui-footer.html" class="menu-link">
                        <div data-i18n="Footer">Footer</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ui-list-groups.html" class="menu-link">
                        <div data-i18n="List Groups">List groups</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ui-modals.html" class="menu-link">
                        <div data-i18n="Modals">Modals</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ui-navbar.html" class="menu-link">
                        <div data-i18n="Navbar">Navbar</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ui-offcanvas.html" class="menu-link">
                        <div data-i18n="Offcanvas">Offcanvas</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ui-pagination-breadcrumbs.html" class="menu-link">
                        <div data-i18n="Pagination &amp; Breadcrumbs">Pagination &amp; Breadcrumbs</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ui-progress.html" class="menu-link">
                        <div data-i18n="Progress">Progress</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ui-spinners.html" class="menu-link">
                        <div data-i18n="Spinners">Spinners</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ui-tabs-pills.html" class="menu-link">
                        <div data-i18n="Tabs &amp; Pills">Tabs &amp; Pills</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ui-toasts.html" class="menu-link">
                        <div data-i18n="Toasts">Toasts</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ui-tooltips-popovers.html" class="menu-link">
                        <div data-i18n="Tooltips & Popovers">Tooltips &amp; popovers</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ui-typography.html" class="menu-link">
                        <div data-i18n="Typography">Typography</div>
                    </a>
                </li>
            </ul>
        </li>
        <!-- Extended components -->
        <li class="menu-item">
            <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-copy"></i>
                <div data-i18n="Extended UI">Extended UI</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="extended-ui-perfect-scrollbar.html" class="menu-link">
                        <div data-i18n="Perfect Scrollbar">Perfect scrollbar</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="extended-ui-text-divider.html" class="menu-link">
                        <div data-i18n="Text Divider">Text Divider</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="icons-boxicons.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-crown"></i>
                <div data-i18n="Boxicons">Boxicons</div>
            </a>
        </li>
        <!-- Forms & Tables -->
        <li class="menu-header small text-uppercase"><span class="menu-header-text">Forms &amp; Tables</span></li>
        <!-- Forms -->
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-detail"></i>
                <div data-i18n="Form Elements">Form Elements</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="forms-basic-inputs.html" class="menu-link">
                        <div data-i18n="Basic Inputs">Basic Inputs</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="forms-input-groups.html" class="menu-link">
                        <div data-i18n="Input groups">Input groups</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-detail"></i>
                <div data-i18n="Form Layouts">Form Layouts</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="form-layouts-vertical.html" class="menu-link">
                        <div data-i18n="Vertical Form">Vertical Form</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="form-layouts-horizontal.html" class="menu-link">
                        <div data-i18n="Horizontal Form">Horizontal Form</div>
                    </a>
                </li>
            </ul>
        </li>
        <!-- Form Validation -->
        <li class="menu-item">
            <a href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/form-validation.html" target="_blank" class="menu-link">
                <i class="menu-icon tf-icons bx bx-list-check"></i>
                <div data-i18n="Form Validation">Form Validation</div>
                <div class="badge bg-label-primary fs-tiny rounded-pill ms-auto">Pro</div>
            </a>
        </li>
        <!-- Tables -->
        <li class="menu-item">
            <a href="tables-basic.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-table"></i>
                <div data-i18n="Tables">Tables</div>
            </a>
        </li>
        <!-- Data Tables -->
        <li class="menu-item">
            <a href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/tables-datatables-basic.html" target="_blank" class="menu-link">
                <i class="menu-icon tf-icons bx bx-grid"></i>
                <div data-i18n="Datatables">Datatables</div>
                <div class="badge bg-label-primary fs-tiny rounded-pill ms-auto">Pro</div>
            </a>
        </li>
        <!-- Misc -->
        <li class="menu-header small text-uppercase"><span class="menu-header-text">Misc</span></li>
        <li class="menu-item">
            <a href="https://github.com/themeselection/sneat-html-admin-template-free/issues" target="_blank" class="menu-link">
                <i class="menu-icon tf-icons bx bx-support"></i>
                <div data-i18n="Support">Support</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/documentation/" target="_blank" class="menu-link">
                <i class="menu-icon tf-icons bx bx-file"></i>
                <div data-i18n="Documentation">Documentation</div>
            </a>
        </li>
    </ul>
</aside>