  <!-- sidebar menu -->
  <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
      <br>
      <ul class="nav side-menu">
          @can('manage-acl-module')
          <li><a><i class="fa fa-users"></i>User Management <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
            @can('view-users') <li><a href="{{ route('user.index') }}">Users</a></li>  @endcan
            @can('view-roles') <li><a href="{{ route('role.index') }}">Roles</a></li> @endcan
            @can('view-permissions') <li><a href="{{ route('permission.index') }}">Permissions</a></li> @endcan
            </ul>
          </li>  
          @endcan
       </ul>
    </div>
    
  </div>
  <!-- /sidebar menu -->