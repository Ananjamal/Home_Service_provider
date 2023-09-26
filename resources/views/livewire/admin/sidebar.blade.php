<div>
    {{-- The Master doesn't talk, he acts. --}}
    <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
        <div class="brand-logo">
            <a href="index.html">
                <img src="{{asset('assets/images/logo-icon.png')}}" class="logo-icon" alt="logo icon">
                <h5 class="logo-text">Dashtreme Admin</h5>
            </a>
        </div>
        <ul class="sidebar-menu do-nicescrol">
            <li class="sidebar-header">MAIN NAVIGATION</li>
            <li>
                <a href="{{route('services')}}">
                    <i class="zmdi zmdi-view-dashboard mr-2"></i> <span>Services</span>
                </a>
            </li>

            <li>
                <a href="{{route('providers')}}">

                    <i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 15 15">
                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
                      </svg></i> <span>Providers</span>

                </a>
            </li>

            <li>
                <a href="forms.html">
                    <i class="zmdi zmdi-format-list-bulleted"></i> <span>Forms</span>
                </a>
            </li>

            <li>
                <a href="tables.html">
                    <i class="zmdi zmdi-grid"></i> <span>Tables</span>
                </a>
            </li>

            <li>
                <a href="calendar.html">
                    <i class="zmdi zmdi-calendar-check"></i> <span>Calendar</span>
                    <small class="badge float-right badge-light">New</small>
                </a>
            </li>

            <li>
                <a href="profile.html">
                    <i class="zmdi zmdi-face"></i> <span>Profile</span>
                </a>
            </li>

            <li>
                <a href="login.html" target="_blank">
                    <i class="zmdi zmdi-lock"></i> <span>Login</span>
                </a>
            </li>

            <li>
                <a href="register.html" target="_blank">
                    <i class="zmdi zmdi-account-circle"></i> <span>Registration</span>
                </a>
            </li>

            <li class="sidebar-header">LABELS</li>
            <li><a href="javaScript:void();"><i class="zmdi zmdi-coffee text-danger"></i> <span>Important</span></a>
            </li>
            <li><a href="javaScript:void();"><i class="zmdi zmdi-chart-donut text-success"></i>
                    <span>Warning</span></a></li>
            <li><a href="javaScript:void();"><i class="zmdi zmdi-share text-info"></i> <span>Information</span></a>
            </li>

        </ul>

    </div>
</div>
