<aside id="leftsidebar" class="sidebar">
    <div class="navbar-brand">
        <button class="btn-menu ls-toggle-btn" type="button"><i class="zmdi zmdi-menu"></i></button>
        <a href="index.html"><img src="assets/images/logo.svg" width="25" alt="Aero"><span class="m-l-10">Aero</span></a>
    </div>
    <div class="menu">
        <ul class="list">
            <li>
                <div class="user-info">
                    <a class="image" href="profile.html"><img src="assets/images/profile_av.jpg" alt="User"></a>
                    <div class="detail">
                        <h4>Michael</h4>
                        <small>Super Admin</small>
                    </div>
                </div>
            </li>
            <li class="active open"><a href="{{ route('admin.dashboard') }}"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>

            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-assignment"></i><span>Slider</span></a>
                <ul class="ml-menu">
                    <li><a href="{{ route('slider') }}">All Sider</a></li>
                    <li><a href="{{ route('slider.add') }}">Add Slider</a></li>
                </ul>
            </li>

            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-assignment"></i><span>Marquee</span></a>
                <ul class="ml-menu">
                    <li><a href="{{ route('marque') }}">All Marquee</a></li>
                    <li><a href="{{ route('marque.add') }}">Add Marquee</a></li>
                </ul>
            </li>

            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-assignment"></i><span>Category</span></a>
                <ul class="ml-menu">
                    <li><a href="{{ route('category') }}">All Category</a></li>
                    <li><a href="{{ route('category.add') }}">Add Category</a></li>
                </ul>
            </li>

            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-assignment"></i><span>Sub Category</span></a>
                <ul class="ml-menu">
                    <li><a href="{{ route('subcategory') }}">All Sub Category</a></li>
                    <li><a href="{{ route('subcategory.add') }}">Add Sub Category</a></li>
                </ul>
            </li>

            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-assignment"></i><span>Country</span></a>
                <ul class="ml-menu">
                    <li><a href="{{ route('country') }}">All Country</a></li>
                    <li><a href="{{ route('country.add') }}">Add Country</a></li>
                </ul>
            </li>

            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-assignment"></i><span>Board Of Directors</span></a>
                <ul class="ml-menu">
                    <li><a href="{{ route('board') }}">All Board</a></li>
                    <li><a href="{{ route('board.add') }}">Add Board</a></li>
                </ul>
            </li>

            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-assignment"></i><span>Our Project</span></a>
                <ul class="ml-menu">
                    <li><a href="{{ route('project') }}">All Project</a></li>
                    <li><a href="{{ route('project.add') }}">Add Project</a></li>
                </ul>
            </li>

            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-assignment"></i><span>All Job </span></a>
                <ul class="ml-menu">
                    <li><a href="{{ route('job.view') }}">All Project</a></li>
                </ul>
            </li>


        </ul>
    </div>
</aside>
