<div class="clearfix"></div>
 <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{ asset('uploads/Profile/'. Auth::user()->photo) }}" alt="..." class="img-circle profile_img">
              </div>
            @if($users !==null)
                @foreach ($users as $user)
                @endforeach
            @endif
              <div class="profile_info">
                <span>Welcome</span>
                <h2>{{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}}</h2>

              </div>
            </div>
            <br />
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-user"></i> Users <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ url('admin/users') }}">All Users</a></li>
                      <li><a href="{{ url('admin/users/create') }}">Add User</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Posts <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ url('admin/posts') }}">All Posts</a></li>
                      <li><a href="{{ url('admin/posts/create') }}">Add Posts</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i> Categories <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="general_elements.html">Add Category</a></li>
                      <li><a href="media_gallery.html">Categories</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
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
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
             </div>