<!--begin::Menu-->
<div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500" id="#kt_aside_menu" data-kt-menu="true">
    <div class="menu-item">
        <a class="menu-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}" href="{{ $dashboardUrl }}">
            <span class="menu-icon">
                <i class="bi bi-house fs-3"></i>
            </span>
            <span class="menu-title">Dashboard</span>
        </a>
    </div>
    <div class="menu-item">
        <div class="menu-content pt-8 pb-2">
            <span class="menu-section text-muted text-uppercase fs-8 ls-1">Crafted</span>
        </div>
    </div>
    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
        <span class="menu-link">
            <span class="menu-icon">
                <i class="bi bi-sticky fs-3"></i>
            </span>
            <span class="menu-title">Authentication</span>
            <span class="menu-arrow"></span>
        </span>
        <div class="menu-sub menu-sub-accordion menu-active-bg">
            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                <span class="menu-link">
                    <span class="menu-bullet">
                        <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Basic Flow</span>
                    <span class="menu-arrow"></span>
                </span>
                <div class="menu-sub menu-sub-accordion menu-active-bg">
                    <div class="menu-item">
                        <a class="menu-link" href="authentication/flows/basic/sign-in.html">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Sign-in</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link" href="authentication/flows/basic/sign-up.html">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Sign-up</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link" href="authentication/flows/basic/two-steps.html">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Two-steps</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link" href="authentication/flows/basic/password-reset.html">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Password Reset</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link" href="authentication/flows/basic/new-password.html">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">New Password</span>
                        </a>
                    </div>
                </div>
            </div>
            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                <span class="menu-link">
                    <span class="menu-bullet">
                        <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Aside Flow</span>
                    <span class="menu-arrow"></span>
                </span>
                <div class="menu-sub menu-sub-accordion menu-active-bg">
                    <div class="menu-item">
                        <a class="menu-link" href="authentication/flows/aside/sign-in.html">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Sign-in</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link" href="authentication/flows/aside/sign-up.html">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Sign-up</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link" href="authentication/flows/aside/two-steps.html">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Two-steps</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link" href="authentication/flows/aside/password-reset.html">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Password Reset</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link" href="authentication/flows/aside/new-password.html">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">New Password</span>
                        </a>
                    </div>
                </div>
            </div>
            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                <span class="menu-link">
                    <span class="menu-bullet">
                        <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Dark Flow</span>
                    <span class="menu-arrow"></span>
                </span>
                <div class="menu-sub menu-sub-accordion menu-active-bg">
                    <div class="menu-item">
                        <a class="menu-link" href="authentication/flows/dark/sign-in.html">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Sign-in</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link" href="authentication/flows/dark/sign-up.html">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Sign-up</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link" href="authentication/flows/dark/two-steps.html">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Two-steps</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link" href="authentication/flows/dark/password-reset.html">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Password Reset</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link" href="authentication/flows/dark/new-password.html">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">New Password</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="menu-item">
                <a class="menu-link" href="authentication/extended/multi-steps-sign-up.html">
                    <span class="menu-bullet">
                        <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Multi-steps Sign-up</span>
                </a>
            </div>
            <div class="menu-item">
                <a class="menu-link" href="authentication/extended/free-trial-sign-up.html">
                    <span class="menu-bullet">
                        <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Free Trial Sign-up</span>
                </a>
            </div>
            <div class="menu-item">
                <a class="menu-link" href="authentication/extended/coming-soon.html">
                    <span class="menu-bullet">
                        <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Coming Soon</span>
                </a>
            </div>
            <div class="menu-item">
                <a class="menu-link" href="authentication/general/welcome.html">
                    <span class="menu-bullet">
                        <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Welcome Message</span>
                </a>
            </div>
            <div class="menu-item">
                <a class="menu-link" href="authentication/general/verify-email.html">
                    <span class="menu-bullet">
                        <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Verify Email</span>
                </a>
            </div>
            <div class="menu-item">
                <a class="menu-link" href="authentication/general/password-confirmation.html">
                    <span class="menu-bullet">
                        <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Password Confirmation</span>
                </a>
            </div>
            <div class="menu-item">
                <a class="menu-link" href="authentication/general/deactivation.html">
                    <span class="menu-bullet">
                        <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Account Deactivation</span>
                </a>
            </div>
            <div class="menu-item">
                <a class="menu-link" href="authentication/general/error-404.html">
                    <span class="menu-bullet">
                        <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Error 404</span>
                </a>
            </div>
            <div class="menu-item">
                <a class="menu-link" href="authentication/general/error-500.html">
                    <span class="menu-bullet">
                        <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Error 500</span>
                </a>
            </div>
            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                <span class="menu-link">
                    <span class="menu-bullet">
                        <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Email Templates</span>
                    <span class="menu-arrow"></span>
                </span>
                <div class="menu-sub menu-sub-accordion menu-active-bg">
                    <div class="menu-item">
                        <a class="menu-link" href="authentication/email/verify-email.html" target="blank">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Verify Email</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link" href="authentication/email/invitation.html" target="blank">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Account Invitation</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link" href="authentication/email/password-reset.html" target="blank">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Password Reset</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link" href="authentication/email/password-change.html" target="blank">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Password Changed</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="menu-item">
        <div class="menu-content pt-8 pb-2">
            <span class="menu-section text-muted text-uppercase fs-8 ls-1">Apps</span>
        </div>
    </div>
    <div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
        <span class="menu-link">
            <span class="menu-icon">
                <i class="bi bi-people fs-3"></i>
            </span>
            <span class="menu-title">User Management</span>
            <span class="menu-arrow"></span>
        </span>
        <div class="menu-sub menu-sub-accordion">
            <div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
                <span class="menu-link">
                    <span class="menu-bullet">
                        <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Users</span>
                    <span class="menu-arrow"></span>
                </span>
                <div class="menu-sub menu-sub-accordion">
                    <div class="menu-item">
                        <a class="menu-link" href="apps/user-management/users/list.html">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Users List</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link" href="apps/user-management/users/view.html">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">View User</span>
                        </a>
                    </div>
                </div>
            </div>
            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                <span class="menu-link">
                    <span class="menu-bullet">
                        <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Roles</span>
                    <span class="menu-arrow"></span>
                </span>
                <div class="menu-sub menu-sub-accordion">
                    <div class="menu-item">
                        <a class="menu-link" href="apps/user-management/roles/list.html">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Roles List</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link" href="apps/user-management/roles/view.html">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">View Role</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="menu-item">
                <a class="menu-link" href="apps/user-management/permissions.html">
                    <span class="menu-bullet">
                        <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Permissions</span>
                </a>
            </div>
        </div>
    </div>
    <div class="menu-item">
        <div class="menu-content pt-8 pb-0">
            <span class="menu-section text-muted text-uppercase fs-8 ls-1">Layout</span>
        </div>
    </div>
    <div class="menu-item">
        <a class="menu-link" href="#" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
            <span class="menu-icon">
                <i class="bi bi-layers fs-3"></i>
            </span>
            <span class="menu-title">Layout Builder</span>
        </a>
    </div>
    <div class="menu-item">
        <div class="menu-content">
            <div class="separator mx-1 my-4"></div>
        </div>
    </div>
    <div class="menu-item">
        <a class="menu-link" href="#">
            <span class="menu-icon">
                <i class="bi bi-card-text fs-3"></i>
            </span>
            <span class="menu-title">{{ env('APP_NAME') }}</span>
        </a>
    </div>
</div>
<!--end::Menu-->
