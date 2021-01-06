@if (config('ecamtheme.theme.layout.header.is_header'))
    <header class="{{ config('ecamtheme.theme.layout.header.class_name') }} {{ config('ecamtheme.theme.layout.header.fixed')===true?'fixed-top':'' }}">
        <div class="navbar-header">
            <div class="navbar-btn-toggle mr-auto pl-1">
                <button class="btn header-item" type="button" data-toggle="collapse"
                        data-target="#sidebar" aria-expanded="false"
                        aria-controls="sidebar"><i class="fas fa-bars"></i></button>
            </div>
            <div class="navbar-menu-top">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid p-0">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown no-arrow">
                                    <div class="nav-link dropdown-toggle"  id="navbarDropdownNotification" role="button" data-toggle="dropdown" aria-expanded="false">
                                        <i class="far fa-bell"></i>
                                    </div>
                                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="navbarDropdownNotification">
                                        <div class="dropdown-header d-flex align-items-center justify-content-between">
                                            <p class="mb-0 font-weight-medium">6 New Notifications</p>
                                            <a href="javascript:;" class="text-muted">Clear all</a>
                                        </div>
                                        <div class="dropdown-body">
                                            <a href="javascript:;" class="dropdown-item">
                                                <div class="icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                         stroke-linejoin="round" class="feather feather-user-plus">
                                                        <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                                        <circle cx="8.5" cy="7" r="4"></circle><line x1="20" y1="8" x2="20" y2="14"></line><line x1="23" y1="11" x2="17" y2="11"></line>
                                                    </svg>
                                                </div>
                                                <div class="content">
                                                    <p>New customer registered</p>
                                                    <p class="sub-text text-muted">2 sec ago</p>
                                                </div>
                                            </a>
                                            <a href="javascript:;" class="dropdown-item">
                                                <div class="icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-gift"><polyline points="20 12 20 22 4 22 4 12"></polyline><rect x="2" y="7" width="20" height="5"></rect><line x1="12" y1="22" x2="12" y2="7"></line><path d="M12 7H7.5a2.5 2.5 0 0 1 0-5C11 2 12 7 12 7z"></path><path d="M12 7h4.5a2.5 2.5 0 0 0 0-5C13 2 12 7 12 7z"></path></svg>
                                                </div>
                                                <div class="content">
                                                    <p>New Order Recieved</p>
                                                    <p class="sub-text text-muted">30 min ago</p>
                                                </div>
                                            </a>
                                            <a href="javascript:;" class="dropdown-item">
                                                <div class="icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg>
                                                </div>
                                                <div class="content">
                                                    <p>Server Limit Reached!</p>
                                                    <p class="sub-text text-muted">1 hrs ago</p>
                                                </div>
                                            </a>
                                            <a href="javascript:;" class="dropdown-item">
                                                <div class="icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
                                                </div>
                                                <div class="content">
                                                    <p>Apps are ready for update</p>
                                                    <p class="sub-text text-muted">5 hrs ago</p>
                                                </div>
                                            </a>
                                            <a href="javascript:;" class="dropdown-item">
                                                <div class="icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                                                </div>
                                                <div class="content">
                                                    <p>Download completed</p>
                                                    <p class="sub-text text-muted">6 hrs ago</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="dropdown-footer d-flex align-items-center justify-content-center">
                                            <a href="javascript();">View all</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item dropdown  no-arrow">
                                    <div class="nav-link dropdown-toggle" id="navbarDropdownProfile" role="button"
                                         data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <div class="profile d-inline-flex">
                                            <img src="{{ url('images/profile/avatar.png') }}" alt="avatar" height="32px"
                                                 class="rounded-circle img-fluid img-profile">
                                        </div>
                                    </div>

                                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                         aria-labelledby="navbarDropdownProfile">
                                        <div class="dropdown-header d-flex flex-column align-items-center">
                                            <div class="figure mb-3">
                                                <img src="{{ url('images/profile/avatar.png') }}" alt="profile" class="border-0 rounded-circle img-fluid img-profile">
                                            </div>
                                            <div class="info text-center mb-3">
                                                <p class="name font-weight-bold">{{ auth()->user()->username }}</p>
                                                <p class="email text-muted">{{ auth()->user()->email }}</p>
                                            </div>
                                        </div>
                                        <div class="dropdown-body">
                                            <ul class="profile-nav p-0 pt-3">
                                                <li class="nav-item">
                                                    <a href="{{route('profile.index')}}" class="nav-link">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                                        <span>Profile</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="{{ route('profile.edit',encrypt(auth()->user()->uuid)) }}" class="nav-link">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                                                        <span>Edit Profile</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="{{ route('logout') }}" class="nav-link">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                                        <span>Log Out</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
@endif
