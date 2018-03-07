<div class="sidebar-nav navbar-collapse">
    <ul class="nav" id="side-menu">
        <li class="sidebar-search">
            <div class="input-group custom-search-form">
                <input type="text" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
            <!-- /input-group -->
        </li>
        <li>


        <li>
            <a href="{{ url('/dashboard') }}"><i class="fa fa-bar-chart-o fa-fw"></i> Dashboard <span class="fa arrow"></span></a>


        </li>






        </li>
        @if(strpos(Auth::user()->role, 'admin' )!== false)
        <li>
            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Manage User <span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li>
                    <a href="{{ url('/user/add') }}"> Add User </a>
                </li>
                <li>
                    <a href="{{ url('/user/manage') }}"> Manage User </a>
                </li>
            </ul>
            <!-- /.nav-second-level -->
        </li>
        
        <li>
            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Home Silder <span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li>
                    <a href="{{ url('/slider/add') }}"> Add Slider </a>
                </li>
                <li>
                    <a href="{{ url('/slider/manage') }}"> Manage Slider </a>
                </li>
            </ul>
            <!-- /.nav-second-level -->
        </li>
        <li>
            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Category Info <span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li>
                    <a href="{{ url('/category/add') }}"> Add Category </a>
                </li>
                <li>
                    <a href="{{ url('/category/manage') }}"> Manage Category </a>
                </li>
            </ul>
            <!-- /.nav-second-level -->
        </li>
        <li>
            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Manufacturer Info <span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li>
                    <a href="{{ url('/manufacturer/add') }}"> Add Manufacturer </a>
                </li>
                <li>
                    <a href="{{ url('/manufacturer/manage') }}"> Manage Manufacturer </a>
                </li>
            </ul>
            <!-- /.nav-second-level -->
        </li>
        <li>
            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Product Info <span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li>
                    <a href="{{ url('/product/add') }}"> Add Product </a>
                </li>
                <li>
                    <a href="{{ url('/product/manage') }}"> Manage Product </a>
                </li>
            </ul>
            <!-- /.nav-second-level -->
        </li>
        @endif
        
        
        <li>
            <a href="#"><i class="fa fa-wrench fa-fw"></i> Customer Panel<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li>
                    <a href="panels-wells.html">Profile</a>
                </li>
                <li>
                    <a href="buttons.html">Buttons</a>
                </li>
                <li>
                    <a href="notifications.html">Notifications</a>
                </li>
                <li>
                    <a href="typography.html">Typography</a>
                </li>
                <li>
                    <a href="icons.html"> Icons</a>
                </li>
                <li>
                    <a href="grid.html">Grid</a>
                </li>
            </ul>
            <!-- /.nav-second-level -->
        </li>
        <li>
            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li>
                    <a href="#">Second Level Item</a>
                </li>
                <li>
                    <a href="#">Second Level Item</a>
                </li>
                <li>
                    <a href="#">Third Level <span class="fa arrow"></span></a>
                    <ul class="nav nav-third-level">
                        <li>
                            <a href="#">Third Level Item</a>
                        </li>
                        <li>
                            <a href="#">Third Level Item</a>
                        </li>
                        <li>
                            <a href="#">Third Level Item</a>
                        </li>
                        <li>
                            <a href="#">Third Level Item</a>
                        </li>
                    </ul>
                    <!-- /.nav-third-level -->
                </li>
            </ul>
            <!-- /.nav-second-level -->
        </li>
        <li>
            <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li>
                    <a href="blank.html">Blank Page</a>
                </li>
                <li>
                    <a href="login.html">Login Page</a>
                </li>
            </ul>
            <!-- /.nav-second-level -->
        </li>
    </ul>
</div>