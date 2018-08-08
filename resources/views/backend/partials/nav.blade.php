 <header class="main-header" >
    <!-- Logo -->
    <a href="{{url('/admin')}}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>I</b>/V</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Interview</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class="hidden-xs">My Account</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                
                  @if(empty(Auth::user()->avatar))
                    <img src="/uploads/ProfileImage/default_user.png">
                  @else 
                    <img src="/uploads/ProfileImage/{{Auth::user()->avatar}}">
                  @endif
              </li>
              <!-- Menu Body -->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                 <button class="btn btn-default btn-flat" data-toggle="modal" data-target="#myModal">Profile</button>
                 <a class="btn btn-default btn-flat" href="{{url('showprofile',Auth::user()->id)}}">See Full</a>
                </div>
                <div class="text-center">
                  <a href="{{ route('logout') }}" class="btn btn-default btn-flat">Гарах</a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                  </form>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>