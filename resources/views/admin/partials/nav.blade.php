<nav class="navbar navbar-inverse navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">Ayndrilla Counselling Administration</a>
    </div>
    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li>
                    <a href="{{ url('') }}"><i class="fa fa-backward"></i> Go to frontend</a>
                </li>
                <li>
                    <a href="{{url('admin/dashboard')}}">
                        <i class="fa fa-dashboard fa-fw"></i> Dashboard
                    </a>
                </li>
                <li>
                    <a href="{{url('admin/language')}}">
                        <i class="fa fa-language"></i> Languages
                    </a>
                </li>
                <li>
                    <a href="{{url('admin/template')}}">
                        <i class="glyphicon glyphicon-eye-close"></i> Templates
                    </a>
                </li>
                <li>
                    <a href="{{url('admin/resource')}}">
                        <i class="glyphicon glyphicon-eye-open"></i> Resources
                    </a>
                </li>
                <li>
                    <a href="{{url('admin/notice')}}">
                        <i class="glyphicon glyphicon-eye-open"></i> News
                    </a>
                </li>
                <li>
                    <a href="{{url('admin/user')}}">
                        <i class="glyphicon glyphicon-user"></i> Users
                    </a>
                </li>
                <li>
                    <a href="{{ url('auth/logout') }}"><i class="fa fa-sign-out"></i> Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>