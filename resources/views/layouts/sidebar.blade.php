<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="/dashboard" class="site_title">
                <img src="../../images/Logo.png" alt="Logo Perusahaan" class="img img-fluid mt-3"
                    style="max-height: 40px; margin-left:auto; margin-right:auto; display:block">
            </a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
                <img src="../../images/img.jpg" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{\Session::get('username')}}</h2>
            </div>
        </div>
        <!-- /menu profile quick info -->

        <br />

        @if (\Session::get('title') == 'Admin')
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                <div class="menu_section">
                    <h3>General</h3>
                    <ul class="nav side-menu">
                        <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="/dashboard">Dashboard</a></li>
                            </ul>
                        </li>
                        <li><a><i class="fa fa-university"></i> Master <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="/master-user">User</a></li>
                                <li><a href="/master-discipline">Discipline</a></li>
                                <li><a href="/master-item">Items</a></li>
                                <li><a href="/master-form-certificate">Inspection Check List</a></li>
                                <li><a href="/master-planning">Planning</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /sidebar menu -->
        @elseif (\Session::get('title') == 'Operator')
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                <div class="menu_section">
                    <h3>General</h3>
                    <ul class="nav side-menu">
                        <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="/dashboard">Dashboard</a></li>
                            </ul>
                        </li>
                        <li><a><i class="fa fa-university"></i> Master <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="/master-user">User</a></li>
                                <li><a href="/master-discipline">Discipline</a></li>
                                <li><a href="/master-item">Items</a></li>
                                <li><a href="/master-form-certificate">Inspection Check List</a></li>
                                <li><a href="/master-planning">Planning</a></li>
                            </ul>
                        </li>
                        <li><a><i class="fa fa-edit"></i> ITR <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="/certificate-generate">Generate Form Certificate</a></li>
                                <li><a href="/certificate-a">A-Certificate</a></li>
                                <li><a href="/certificate-b">B-Certificate</a></li>
                                <li><a href="/certificate-c">C-Certificate</a></li>
                                <li><a href="/certificate-s">SAT-Certificate</a></li>
                                <li><a href="/certificate-r">RFSU-Certificate</a></li>
                                <li><a href="/report-puch">Punch List</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /sidebar menu -->
        @elseif (\Session::get('title') == 'Guest')
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                <div class="menu_section">
                    <h3>General</h3>
                    <ul class="nav side-menu">
                        <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="/dashboard">Dashboard</a></li>
                            </ul>
                        </li>
                        <li><a><i class="fa fa-bar-chart-o"></i> Report <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="/report-progress">Progress Report</a></li>
                                <li><a href="/report-trend">Trend Line Report</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /sidebar menu -->
        @else
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                <div class="menu_section">
                    <h3>General</h3>
                    <ul class="nav side-menu">
                        <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="/dashboard">Dashboard</a></li>
                            </ul>
                        </li>
                        <li><a><i class="fa fa-university"></i> Master <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="/master-user">User</a></li>
                                <li><a href="/master-discipline">Discipline</a></li>
                                <li><a href="/master-item">Items</a></li>
                                <li><a href="/master-form-certificate">Inspection Check List</a></li>
                                <li><a href="/master-planning">Planning</a></li>
                            </ul>
                        </li>
                        <li><a><i class="fa fa-edit"></i> ITR <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="/certificate-generate">Generate Form Certificate</a></li>
                                <li><a href="/certificate-a">A-Certificate</a></li>
                                <li><a href="/certificate-b">B-Certificate</a></li>
                                <li><a href="/certificate-c">C-Certificate</a></li>
                                <li><a href="/certificate-s">SAT-Certificate</a></li>
                                <li><a href="/certificate-r">RFSU-Certificate</a></li>
                                <li><a href="/report-puch">Punch List</a></li>
                            </ul>
                        </li>
                        <li><a><i class="fa fa-bar-chart-o"></i> Report <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="/report-progress">Progress Report</a></li>
                                <li><a href="/report-trend">Trend Line Report</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /sidebar menu -->
        @endif


        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="/logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>
