<header class="header-main">
    <div class="top-bar">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="toggle-btn"><i class="icon-menu_multimedia_bars_media_icon"></i></div>
                    <div class="main-search form-group">
                        <i class="icon-Icon-awesome-search"></i>
                        <input type="text" class="form-control" required placeholder="Search...">
                        <!--<label class="input-label">Search...</label>-->
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="navbar-right">
                        <ul class="nav-menu">
                            <li class="nav-item dropdown account-item">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="{{ asset('front/assets/images/profile-1.png') }}" alt="">
                                    <p>Clinical Heath <br> Network</p>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <ul>
                                        <li>
                                            <a href="#" class="item">My Profile</a>
                                            <a href="{{route('logout')}}" class="btn btn-primary btn-md">Log Out</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item dropdown notification">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="icon-Icon-ionic-md-notifications"></i>
                                    <span class="badge badge-pill badge-danger">5</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <ul>
                                        <li class="p-3 text-right">
                                            <a href="#" class="mark-read">Mark all read</a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div>
                                                            <small>News</small>
                                                            <p>Lorem ipsum donet <span class="notif-name">Nulla
                                                                    facilisi</span>. In eu purus libero. </p>
                                                            <span class="ago">2 days ago</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div>
                                                            <small>News</small>
                                                            <p>Lorem ipsum donet <span class="notif-name">Nulla
                                                                    facilisi</span>. In eu purus libero. </p>
                                                            <span class="ago">2 days ago</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div>
                                                            <small>News</small>
                                                            <p>Lorem ipsum donet <span class="notif-name">Nulla
                                                                    facilisi</span>. In eu purus libero. </p>
                                                            <span class="ago">2 days ago</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
