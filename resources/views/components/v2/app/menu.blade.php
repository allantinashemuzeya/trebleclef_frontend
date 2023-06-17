<!-- Menu -->
<aside class="layout-menu-horizontal menu-horizontal  menu bg-menu-theme flex-grow-0"
       id="layout-menu">
    <div class="container-xxl d-flex h-100">
        <ul class="menu-inner">

            <!-- Dashboards -->
            <li class="menu-item active">
                <a class="menu-link menu-toggle"
                   href="javascript:void(0)">
                    <i class="menu-icon tf-icons ti ti-smart-home"></i>
                    <div data-i18n="Dashboards">Dashboards</div>
                </a>
                <ul class="menu-sub">
                    @foreach($menu['dashboards'] as $dashboard)
                        <li class="menu-item active">
                            <a class="menu-link"
                               href="{{ $dashboard['link'] }}">
                                <i class="menu-icon tf-icons ti ti-user"></i>
                                <div data-i18n="Analytics">
                                    {{ $dashboard['name'] }}
                                </div>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </li>
            <!-- Layouts -->
            <li class="menu-item
">
                <a class="menu-link menu-toggle"
                   href="javascript:void(0)">
                    <i class="menu-icon tf-icons ti ti-layout-sidebar"></i>
                    <div data-i18n="Layouts">Layouts</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a class="menu-link"
                           href="layouts-without-menu.html">
                            <i class="menu-icon tf-icons ti ti-menu-2"></i>
                            <div data-i18n="Without menu">
                                Without menu
                            </div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a class="menu-link"
                           href="https://demos.pixinvent.com/vuexy-html-admin-template/html/vertical-menu-template/" target="_blank">
                            <i class="menu-icon tf-icons ti ti-layout-distribute-vertical"></i>
                            <div data-i18n="Vertical">Vertical
                            </div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a class="menu-link"
                           href="layouts-fluid.html">
                            <i class="menu-icon tf-icons ti ti-maximize"></i>
                            <div data-i18n="Fluid">Fluid</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a class="menu-link"
                           href="layouts-container.html">
                            <i class="menu-icon tf-icons ti ti-arrows-maximize"></i>
                            <div data-i18n="Container">
                                Container
                            </div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a class="menu-link"
                           href="layouts-blank.html">
                            <i class="menu-icon tf-icons ti ti-square"></i>
                            <div data-i18n="Blank">Blank</div>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- Apps -->
            <li class="menu-item
">
                <a class="menu-link menu-toggle"
                   href="javascript:void(0)">
                    <i class='menu-icon tf-icons ti ti-layout-grid-add'></i>
                    <div data-i18n="Apps">Apps</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a class="menu-link"
                           href="app-email.html">
                            <i class="menu-icon tf-icons ti ti-mail"></i>
                            <div data-i18n="Email">Email</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a class="menu-link"
                           href="app-chat.html">
                            <i class="menu-icon tf-icons ti ti-messages"></i>
                            <div data-i18n="Chat">Chat</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a class="menu-link"
                           href="app-calendar.html">
                            <i class="menu-icon tf-icons ti ti-calendar"></i>
                            <div data-i18n="Calendar">Calendar
                            </div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a class="menu-link"
                           href="app-kanban.html">
                            <i class="menu-icon tf-icons ti ti-layout-kanban"></i>
                            <div data-i18n="Kanban">Kanban</div>
                        </a>
                    </li>
                    <li class="menu-item
">
                        <a class="menu-link menu-toggle"
                           href="javascript:void(0);">
                            <i class="menu-icon tf-icons ti ti-file-dollar"></i>
                            <div data-i18n="Invoice">Invoice
                            </div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a class="menu-link"
                                   href="app-invoice-list.html">
                                    <div data-i18n="List">List
                                    </div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link"
                                   href="app-invoice-preview.html">
                                    <div data-i18n="Preview">
                                        Preview
                                    </div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link"
                                   href="app-invoice-edit.html">
                                    <div data-i18n="Edit">Edit
                                    </div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link"
                                   href="app-invoice-add.html">
                                    <div data-i18n="Add">Add
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item
">
                        <a class="menu-link menu-toggle"
                           href="javascript:void(0);">
                            <i class="menu-icon tf-icons ti ti-users"></i>
                            <div data-i18n="Users">Users</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a class="menu-link"
                                   href="app-user-list.html">
                                    <div data-i18n="List">List
                                    </div>
                                </a>
                            </li>
                            <li class="menu-item
">
                                <a class="menu-link menu-toggle"
                                   href="javascript:void(0);">
                                    <div data-i18n="View">View
                                    </div>
                                </a>
                                <ul class="menu-sub">
                                    <li class="menu-item">
                                        <a class="menu-link"
                                           href="app-user-view-account.html">
                                            <div
                                                data-i18n="Account">
                                                Account
                                            </div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a class="menu-link"
                                           href="app-user-view-security.html">
                                            <div
                                                data-i18n="Security">
                                                Security
                                            </div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a class="menu-link"
                                           href="app-user-view-billing.html">
                                            <div
                                                data-i18n="Billing & Plans">
                                                Billing & Plans
                                            </div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a class="menu-link"
                                           href="app-user-view-notifications.html">
                                            <div
                                                data-i18n="Notifications">
                                                Notifications
                                            </div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a class="menu-link"
                                           href="app-user-view-connections.html">
                                            <div
                                                data-i18n="Connections">
                                                Connections
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item
">
                        <a class="menu-link menu-toggle"
                           href="javascript:void(0);">
                            <i class="menu-icon tf-icons ti ti-settings"></i>
                            <div
                                data-i18n="Roles & Permissions">
                                Roles & Permission
                            </div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a class="menu-link"
                                   href="app-access-roles.html">
                                    <div data-i18n="Roles">
                                        Roles
                                    </div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link"
                                   href="app-access-permission.html">
                                    <div data-i18n="Permission">
                                        Permission
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <!-- Pages -->
            <li class="menu-item
">
                <a class="menu-link menu-toggle"
                   href="javascript:void(0)">
                    <i class="menu-icon tf-icons ti ti-file"></i>
                    <div data-i18n="Pages">Pages</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item
">
                        <a class="menu-link menu-toggle"
                           href="javascript:void(0);">
                            <i class="menu-icon tf-icons ti ti-user-circle"></i>
                            <div data-i18n="User Profile">User
                                Profile
                            </div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a class="menu-link"
                                   href="pages-profile-user.html">
                                    <div data-i18n="Profile">
                                        Profile
                                    </div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link"
                                   href="pages-profile-teams.html">
                                    <div data-i18n="Teams">
                                        Teams
                                    </div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link"
                                   href="pages-profile-projects.html">
                                    <div data-i18n="Projects">
                                        Projects
                                    </div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link"
                                   href="pages-profile-connections.html">
                                    <div
                                        data-i18n="Connections">
                                        Connections
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item
">
                        <a class="menu-link menu-toggle"
                           href="javascript:void(0);">
                            <i class="menu-icon tf-icons ti ti-settings"></i>
                            <div data-i18n="Account Settings">
                                Account Settings
                            </div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a class="menu-link"
                                   href="pages-account-settings-account.html">
                                    <div data-i18n="Account">
                                        Account
                                    </div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link"
                                   href="pages-account-settings-security.html">
                                    <div data-i18n="Security">
                                        Security
                                    </div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link"
                                   href="pages-account-settings-billing.html">
                                    <div
                                        data-i18n="Billing & Plans">
                                        Billing & Plans
                                    </div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link"
                                   href="pages-account-settings-notifications.html">
                                    <div
                                        data-i18n="Notifications">
                                        Notifications
                                    </div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link"
                                   href="pages-account-settings-connections.html">
                                    <div
                                        data-i18n="Connections">
                                        Connections
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a class="menu-link"
                           href="pages-faq.html">
                            <i class="menu-icon tf-icons ti ti-help"></i>
                            <div data-i18n="FAQ">FAQ</div>
                        </a>
                    </li>
                    <li class="menu-item
">
                        <a class="menu-link menu-toggle"
                           href="javascript:void(0);">
                            <i class="menu-icon tf-icons ti ti-lifebuoy"></i>
                            <div data-i18n="Help Center">Help
                                Center
                            </div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a class="menu-link"
                                   href="pages-help-center-landing.html">
                                    <div data-i18n="Landing">
                                        Landing
                                    </div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link"
                                   href="pages-help-center-categories.html">
                                    <div data-i18n="Categories">
                                        Categories
                                    </div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link"
                                   href="pages-help-center-article.html">
                                    <div data-i18n="Article">
                                        Article
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a class="menu-link"
                           href="pages-pricing.html">
                            <i class="menu-icon tf-icons ti ti-diamond"></i>
                            <div data-i18n="Pricing">Pricing
                            </div>
                        </a>
                    </li>
                    <li class="menu-item
">
                        <a class="menu-link menu-toggle"
                           href="javascript:void(0);">
                            <i class="menu-icon tf-icons ti ti-3d-cube-sphere"></i>
                            <div data-i18n="Misc">Misc</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a class="menu-link"
                                   href="pages-misc-error.html"
                                   target="_blank">
                                    <div data-i18n="Error">
                                        Error
                                    </div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link"
                                   href="pages-misc-under-maintenance.html"
                                   target="_blank">
                                    <div
                                        data-i18n="Under Maintenance">
                                        Under Maintenance
                                    </div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link"
                                   href="pages-misc-comingsoon.html"
                                   target="_blank">
                                    <div
                                        data-i18n="Coming Soon">
                                        Coming Soon
                                    </div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link"
                                   href="pages-misc-not-authorized.html"
                                   target="_blank">
                                    <div
                                        data-i18n="Not Authorized">
                                        Not Authorized
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item
">
                        <a class="menu-link menu-toggle"
                           href="javascript:void(0);">
                            <i class="menu-icon tf-icons ti ti-lock"></i>
                            <div data-i18n="Authentications">
                                Authentications
                            </div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item
">
                                <a class="menu-link menu-toggle"
                                   href="javascript:void(0);">
                                    <div data-i18n="Login">
                                        Login
                                    </div>
                                </a>
                                <ul class="menu-sub">
                                    <li class="menu-item">
                                        <a class="menu-link"
                                           href="auth-login-basic.html"
                                           target="_blank">
                                            <div
                                                data-i18n="Basic">
                                                Basic
                                            </div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a class="menu-link"
                                           href="auth-login-cover.html"
                                           target="_blank">
                                            <div
                                                data-i18n="Cover">
                                                Cover
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item
">
                                <a class="menu-link menu-toggle"
                                   href="javascript:void(0);">
                                    <div data-i18n="Register">
                                        Register
                                    </div>
                                </a>
                                <ul class="menu-sub">
                                    <li class="menu-item">
                                        <a class="menu-link"
                                           href="auth-register-basic.html"
                                           target="_blank">
                                            <div
                                                data-i18n="Basic">
                                                Basic
                                            </div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a class="menu-link"
                                           href="auth-register-cover.html"
                                           target="_blank">
                                            <div
                                                data-i18n="Cover">
                                                Cover
                                            </div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a class="menu-link"
                                           href="auth-register-multisteps.html"
                                           target="_blank">
                                            <div
                                                data-i18n="Multi-steps">
                                                Multi-steps
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link menu-toggle"
                                   href="javascript:void(0);">
                                    <div
                                        data-i18n="Verify Email">
                                        Verify Email
                                    </div>
                                </a>
                                <ul class="menu-sub">
                                    <li class="menu-item">
                                        <a class="menu-link"
                                           href="auth-verify-email-basic.html"
                                           target="_blank">
                                            <div
                                                data-i18n="Basic">
                                                Basic
                                            </div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a class="menu-link"
                                           href="auth-verify-email-cover.html"
                                           target="_blank">
                                            <div
                                                data-i18n="Cover">
                                                Cover
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link menu-toggle"
                                   href="javascript:void(0);">
                                    <div
                                        data-i18n="Reset Password">
                                        Reset Password
                                    </div>
                                </a>
                                <ul class="menu-sub">
                                    <li class="menu-item">
                                        <a class="menu-link"
                                           href="auth-reset-password-basic.html"
                                           target="_blank">
                                            <div
                                                data-i18n="Basic">
                                                Basic
                                            </div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a class="menu-link"
                                           href="auth-reset-password-cover.html"
                                           target="_blank">
                                            <div
                                                data-i18n="Cover">
                                                Cover
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link menu-toggle"
                                   href="javascript:void(0);">
                                    <div
                                        data-i18n="Forgot Password">
                                        Forgot Password
                                    </div>
                                </a>
                                <ul class="menu-sub">
                                    <li class="menu-item">
                                        <a class="menu-link"
                                           href="auth-forgot-password-basic.html"
                                           target="_blank">
                                            <div
                                                data-i18n="Basic">
                                                Basic
                                            </div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a class="menu-link"
                                           href="auth-forgot-password-cover.html"
                                           target="_blank">
                                            <div
                                                data-i18n="Cover">
                                                Cover
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link menu-toggle"
                                   href="javascript:void(0);">
                                    <div data-i18n="Two Steps">
                                        Two Steps
                                    </div>
                                </a>
                                <ul class="menu-sub">
                                    <li class="menu-item">
                                        <a class="menu-link"
                                           href="auth-two-steps-basic.html"
                                           target="_blank">
                                            <div
                                                data-i18n="Basic">
                                                Basic
                                            </div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a class="menu-link"
                                           href="auth-two-steps-cover.html"
                                           target="_blank">
                                            <div
                                                data-i18n="Cover">
                                                Cover
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item
">
                        <a class="menu-link menu-toggle"
                           href="javascript:void(0);">
                            <i class="menu-icon tf-icons ti ti-forms"></i>
                            <div data-i18n="Wizard Examples">
                                Wizard Examples
                            </div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a class="menu-link"
                                   href="wizard-ex-checkout.html">
                                    <div data-i18n="Checkout">
                                        Checkout
                                    </div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link"
                                   href="wizard-ex-property-listing.html">
                                    <div
                                        data-i18n="Property Listing">
                                        Property Listing
                                    </div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link"
                                   href="wizard-ex-create-deal.html">
                                    <div
                                        data-i18n="Create Deal">
                                        Create Deal
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a class="menu-link"
                           href="modal-examples.html">
                            <i class="menu-icon tf-icons ti ti-square"></i>
                            <div data-i18n="Modal Examples">
                                Modal Examples
                            </div>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- Components -->
            <li class="menu-item
">
                <a class="menu-link menu-toggle"
                   href="javascript:void(0)">
                    <i class="menu-icon tf-icons ti ti-toggle-left"></i>
                    <div data-i18n="Components">Components</div>
                </a>
                <ul class="menu-sub">
                    <!-- Cards -->
                    <li class="menu-item
">
                        <a class="menu-link menu-toggle"
                           href="javascript:void(0);">
                            <i class="menu-icon tf-icons ti ti-id"></i>
                            <div data-i18n="Cards">Cards</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a class="menu-link"
                                   href="cards-basic.html">
                                    <div data-i18n="Basic">
                                        Basic
                                    </div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link"
                                   href="cards-advance.html">
                                    <div data-i18n="Advance">
                                        Advance
                                    </div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link"
                                   href="cards-statistics.html">
                                    <div data-i18n="Statistics">
                                        Statistics
                                    </div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link"
                                   href="cards-analytics.html">
                                    <div data-i18n="Analytics">
                                        Analytics
                                    </div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link"
                                   href="cards-actions.html">
                                    <div data-i18n="Actions">
                                        Actions
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- User interface -->
                    <li class="menu-item
">
                        <a class="menu-link menu-toggle"
                           href="javascript:void(0)">
                            <i class="menu-icon tf-icons ti ti-color-swatch"></i>
                            <div data-i18n="User interface">User
                                interface
                            </div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a class="menu-link"
                                   href="ui-accordion.html">
                                    <div data-i18n="Accordion">
                                        Accordion
                                    </div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link"
                                   href="ui-alerts.html">
                                    <div data-i18n="Alerts">
                                        Alerts
                                    </div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link"
                                   href="ui-badges.html">
                                    <div data-i18n="Badges">
                                        Badges
                                    </div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link"
                                   href="ui-buttons.html">
                                    <div data-i18n="Buttons">
                                        Buttons
                                    </div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link"
                                   href="ui-carousel.html">
                                    <div data-i18n="Carousel">
                                        Carousel
                                    </div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link"
                                   href="ui-collapse.html">
                                    <div data-i18n="Collapse">
                                        Collapse
                                    </div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link"
                                   href="ui-dropdowns.html">
                                    <div data-i18n="Dropdowns">
                                        Dropdowns
                                    </div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link"
                                   href="ui-footer.html">
                                    <div data-i18n="Footer">
                                        Footer
                                    </div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link"
                                   href="ui-list-groups.html">
                                    <div
                                        data-i18n="List groups">
                                        List groups
                                    </div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link"
                                   href="ui-modals.html">
                                    <div data-i18n="Modals">
                                        Modals
                                    </div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link"
                                   href="ui-navbar.html">
                                    <div data-i18n="Navbar">
                                        Navbar
                                    </div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link"
                                   href="ui-offcanvas.html">
                                    <div data-i18n="Offcanvas">
                                        Offcanvas
                                    </div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link"
                                   href="ui-pagination-breadcrumbs.html">
                                    <div
                                        data-i18n="Pagination & Breadcrumbs">
                                        Pagination &amp;
                                        Breadcrumbs
                                    </div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link"
                                   href="ui-progress.html">
                                    <div data-i18n="Progress">
                                        Progress
                                    </div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link"
                                   href="ui-spinners.html">
                                    <div data-i18n="Spinners">
                                        Spinners
                                    </div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link"
                                   href="ui-tabs-pills.html">
                                    <div
                                        data-i18n="Tabs & Pills">
                                        Tabs &amp; Pills
                                    </div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link"
                                   href="ui-toasts.html">
                                    <div data-i18n="Toasts">
                                        Toasts
                                    </div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link"
                                   href="ui-tooltips-popovers.html">
                                    <div
                                        data-i18n="Tooltips & popovers">
                                        Tooltips &amp; popovers
                                    </div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link"
                                   href="ui-typography.html">
                                    <div data-i18n="Typography">
                                        Typography
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- Extended components -->
                    <li class="menu-item
">
                        <a class="menu-link menu-toggle"
                           href="javascript:void(0)">
                            <i class="menu-icon tf-icons ti ti-components"></i>
                            <div data-i18n="Extended UI">
                                Extended UI
                            </div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a class="menu-link"
                                   href="extended-ui-avatar.html">
                                    <div data-i18n="Avatar">
                                        Avatar
                                    </div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link"
                                   href="extended-ui-blockui.html">
                                    <div data-i18n="BlockUI">
                                        BlockUI
                                    </div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link"
                                   href="extended-ui-drag-and-drop.html">
                                    <div
                                        data-i18n="Drag & Drop">
                                        Drag &amp; Drop
                                    </div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link"
                                   href="extended-ui-media-player.html">
                                    <div
                                        data-i18n="Media Player">
                                        Media Player
                                    </div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link"
                                   href="extended-ui-perfect-scrollbar.html">
                                    <div
                                        data-i18n="Perfect scrollbar">
                                        Perfect scrollbar
                                    </div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link"
                                   href="extended-ui-star-ratings.html">
                                    <div
                                        data-i18n="Star Ratings">
                                        Star Ratings
                                    </div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link"
                                   href="extended-ui-sweetalert2.html">
                                    <div
                                        data-i18n="SweetAlert2">
                                        SweetAlert2
                                    </div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link"
                                   href="extended-ui-text-divider.html">
                                    <div
                                        data-i18n="Text Divider">
                                        Text Divider
                                    </div>
                                </a>
                            </li>
                            <li class="menu-item
">
                                <a class="menu-link menu-toggle"
                                   href="javascript:void(0);">
                                    <div data-i18n="Timeline">
                                        Timeline
                                    </div>
                                </a>
                                <ul class="menu-sub">
                                    <li class="menu-item">
                                        <a class="menu-link"
                                           href="extended-ui-timeline-basic.html">
                                            <div
                                                data-i18n="Basic">
                                                Basic
                                            </div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a class="menu-link"
                                           href="extended-ui-timeline-fullscreen.html">
                                            <div
                                                data-i18n="Fullscreen">
                                                Fullscreen
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link"
                                   href="extended-ui-tour.html">
                                    <div data-i18n="Tour">Tour
                                    </div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link"
                                   href="extended-ui-treeview.html">
                                    <div data-i18n="Treeview">
                                        Treeview
                                    </div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link"
                                   href="extended-ui-misc.html">
                                    <div
                                        data-i18n="Miscellaneous">
                                        Miscellaneous
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- Icons -->
                    <li class="menu-item
">
                        <a class="menu-link menu-toggle"
                           href="javascript:void(0)">
                            <i class="menu-icon tf-icons ti ti-brand-tabler"></i>
                            <div data-i18n="Icons">Icons</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a class="menu-link"
                                   href="icons-tabler.html">
                                    <div data-i18n="Tabler">
                                        Tabler
                                    </div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link"
                                   href="icons-font-awesome.html">
                                    <div
                                        data-i18n="Fontawesome">
                                        Fontawesome
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <!-- Forms -->
            <li class="menu-item
">
                <a class="menu-link menu-toggle"
                   href="javascript:void(0)">
                    <i class="menu-icon tf-icons ti ti-forms"></i>
                    <div data-i18n="Forms">Forms</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item
">
                        <a class="menu-link menu-toggle"
                           href="javascript:void(0);">
                            <i class="menu-icon tf-icons ti ti-toggle-left"></i>
                            <div data-i18n="Form Elements">Form
                                Elements
                            </div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a class="menu-link"
                                   href="forms-basic-inputs.html">
                                    <div
                                        data-i18n="Basic Inputs">
                                        Basic Inputs
                                    </div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link"
                                   href="forms-input-groups.html">
                                    <div
                                        data-i18n="Input groups">
                                        Input groups
                                    </div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link"
                                   href="forms-custom-options.html">
                                    <div
                                        data-i18n="Custom Options">
                                        Custom Options
                                    </div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link"
                                   href="forms-editors.html">
                                    <div data-i18n="Editors">
                                        Editors
                                    </div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link"
                                   href="forms-file-upload.html">
                                    <div
                                        data-i18n="File Upload">
                                        File Upload
                                    </div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link"
                                   href="forms-pickers.html">
                                    <div data-i18n="Pickers">
                                        Pickers
                                    </div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link"
                                   href="forms-selects.html">
                                    <div
                                        data-i18n="Select & Tags">
                                        Select &amp; Tags
                                    </div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link"
                                   href="forms-sliders.html">
                                    <div data-i18n="Sliders">
                                        Sliders
                                    </div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link"
                                   href="forms-switches.html">
                                    <div data-i18n="Switches">
                                        Switches
                                    </div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link"
                                   href="forms-extras.html">
                                    <div data-i18n="Extras">
                                        Extras
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item
">
                        <a class="menu-link menu-toggle"
                           href="javascript:void(0);">
                            <i class="menu-icon tf-icons ti ti-layout-navbar"></i>
                            <div data-i18n="Form Layouts">Form
                                Layouts
                            </div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a class="menu-link"
                                   href="form-layouts-vertical.html">
                                    <div
                                        data-i18n="Vertical Form">
                                        Vertical Form
                                    </div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link"
                                   href="form-layouts-horizontal.html">
                                    <div
                                        data-i18n="Horizontal Form">
                                        Horizontal Form
                                    </div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link"
                                   href="form-layouts-sticky.html">
                                    <div
                                        data-i18n="Sticky Actions">
                                        Sticky Actions
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item
">
                        <a class="menu-link menu-toggle"
                           href="javascript:void(0);">
                            <i class="menu-icon tf-icons ti ti-text-wrap-disabled"></i>
                            <div data-i18n="Form Wizard">Form
                                Wizard
                            </div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a class="menu-link"
                                   href="form-wizard-numbered.html">
                                    <div data-i18n="Numbered">
                                        Numbered
                                    </div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link"
                                   href="form-wizard-icons.html">
                                    <div data-i18n="Icons">
                                        Icons
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a class="menu-link"
                           href="form-validation.html">
                            <i class="menu-icon tf-icons ti ti-checkbox"></i>
                            <div data-i18n="Form Validation">
                                Form Validation
                            </div>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- Tables -->
            <li class="menu-item
">
                <a class="menu-link menu-toggle"
                   href="javascript:void(0)">
                    <i class="menu-icon tf-icons ti ti-layout-grid"></i>
                    <div data-i18n="Tables">Tables</div>
                </a>
                <ul class="menu-sub">
                    <!-- Tables -->
                    <li class="menu-item">
                        <a class="menu-link"
                           href="tables-basic.html">
                            <i class="menu-icon tf-icons ti ti-table"></i>
                            <div data-i18n="Tables">Tables</div>
                        </a>
                    </li>
                    <li class="menu-item
">
                        <a class="menu-link menu-toggle"
                           href="javascript:void(0);">
                            <i class="menu-icon tf-icons ti ti-layout-grid"></i>
                            <div data-i18n="Datatables">
                                Datatables
                            </div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a class="menu-link"
                                   href="tables-datatables-basic.html">
                                    <div data-i18n="Basic">
                                        Basic
                                    </div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link"
                                   href="tables-datatables-advanced.html">
                                    <div data-i18n="Advanced">
                                        Advanced
                                    </div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link"
                                   href="tables-datatables-extensions.html">
                                    <div data-i18n="Extensions">
                                        Extensions
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <!-- Charts & Maps -->
            <li class="menu-item">
                <a class="menu-link menu-toggle"
                   href="javascript:void(0)">
                    <i class="menu-icon tf-icons ti ti-chart-bar"></i>
                    <div data-i18n="Charts & Maps">Charts &
                        Maps
                    </div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a class="menu-link menu-toggle"
                           href="javascript:void(0);">
                            <i class="menu-icon tf-icons ti ti-chart-pie"></i>
                            <div data-i18n="Charts">Charts</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a class="menu-link"
                                   href="charts-apex.html">
                                    <div
                                        data-i18n="Apex Charts">
                                        Apex Charts
                                    </div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link"
                                   href="charts-chartjs.html">
                                    <div data-i18n="ChartJS">
                                        ChartJS
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a class="menu-link"
                           href="maps-leaflet.html">
                            <i class="menu-icon tf-icons ti ti-map"></i>
                            <div data-i18n="Leaflet Maps">
                                Leaflet Maps
                            </div>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- Misc -->
            <li class="menu-item">
                <a class="menu-link menu-toggle"
                   href="javascript:void(0)">
                    <i class="menu-icon tf-icons ti ti-box-multiple"></i>
                    <div data-i18n="Misc">Misc</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a class="menu-link"
                           href="https://pixinvent.ticksy.com/" target="_blank">
                            <i class="menu-icon tf-icons ti ti-lifebuoy"></i>
                            <div data-i18n="Support">Support
                            </div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a class="menu-link"
                           href="https://demos.pixinvent.com/vuexy-html-admin-template/documentation/" target="_blank">
                            <i class="menu-icon tf-icons ti ti-file-description"></i>
                            <div data-i18n="Documentation">
                                Documentation
                            </div>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</aside>
<!-- / Menu -->
