<nav class="sidebar">
    <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
            Noble<span>UI</span>
        </a>
        <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="sidebar-body">
        <ul class="nav">
            <li class="nav-item nav-category">Main</li>
            <li class="nav-item">
                <a href="{{route('home')}}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Dashboard</span>
                </a>
            </li>

            <li class="nav-item nav-category">Pages</li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#general-pages" role="button" aria-expanded="false" aria-controls="general-pages">
                    <i class="link-icon" data-feather="book"></i>
                    <span class="link-title">Special pages</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="general-pages">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="pages/general/blank-page.html" class="nav-link">Blank page</a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/general/faq.html" class="nav-link">Faq</a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/general/invoice.html" class="nav-link">Invoice</a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/general/profile.html" class="nav-link">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/general/pricing.html" class="nav-link">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/general/timeline.html" class="nav-link">Timeline</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item nav-category">Setting</li>
            <li class="nav-item">
                <a href="{{route('user')}}" class="nav-link">
                    <i class="link-icon" data-feather="hash"></i>
                    <span class="link-title">Master User</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('role')}}" class="nav-link">
                    <i class="link-icon" data-feather="hash"></i>
                    <span class="link-title">Master Role</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('permission')}}" class="nav-link">
                    <i class="link-icon" data-feather="hash"></i>
                    <span class="link-title">Master Permission</span>
                </a>
            </li>

            <li class="nav-item nav-category">Authentication</li>
            <li class="nav-item">
                <a href="{{route('logout')}}" class="nav-link">
                    <i class="link-icon" data-feather="log-out"></i>
                    <span class="link-title">Logout</span>
                </a>
            </li>

        </ul>
    </div>
</nav>

{{--<li class="nav-item">--}}
{{--    <a class="nav-link" data-toggle="collapse" href="#authPages" role="button" aria-expanded="false" aria-controls="authPages">--}}
{{--        <i class="link-icon" data-feather="unlock"></i>--}}
{{--        <span class="link-title">User Management</span>--}}
{{--        <i class="link-arrow" data-feather="chevron-down"></i>--}}
{{--    </a>--}}
{{--    <div class="collapse" id="authPages">--}}
{{--        <ul class="nav sub-menu">--}}
{{--            <li class="nav-item">--}}
{{--                <a href="#" class="nav-link">Assign Role</a>--}}
{{--            </li>--}}
{{--            <li class="nav-item">--}}
{{--                <a href="#" class="nav-link">Assign Role</a>--}}
{{--            </li>--}}
{{--        </ul>--}}
{{--    </div>--}}
{{--</li>--}}
