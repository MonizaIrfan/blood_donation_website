<nav class="navbar navbar-static-top" role="navigation" style="margin-bottom:0;">
    <div class="navbar-header" >
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <h1 class="navbar-brand" style="margin:0px;">
             Admin Panel
        </h1>
    </div>
    <ul class="nav navbar-top-links navbar-right">
        <div>
        <li><a href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
             {{ __('Logout Admin') }}
         <i class="fa fa-power-off"></i></a></li>

         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
    </ul>

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li>
                    <a href="{{ route('dashboard_index') }}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                </li>
                <li>
                    <a href="{{ route('Donor_list') }}"><i class="fa fa-user-md"></i> Donors</a>
                </li>
				<li>
                    <a href="{{ route('list_blood') }}"><i class="fa fa-plus-square"></i> Blood Group</a>
                </li>
                <li>
                    <a href="{{ route('list_pages') }}"><i class="fa fa-files-o fa-fw"></i> CMS Pages</a>
                </li>
                <li>
                    <a href="{{ route('list_cities') }}"><i class="fa fa-globe fa-fw"></i> Cities</a>
                </li>
                  <li>
                    <a href="{{ route('contact_us_admin') }}"><i class="fa fa-globe fa-fw"></i> Contact Us </a>
                </li>


            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>
