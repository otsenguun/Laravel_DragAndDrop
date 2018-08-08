<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          
           <!-- {{ Html::image('assets\media\content\4.jpg', 'User Image', [ 'class'=>'img-circle' ]) }} -->
           
            @if(empty(Auth::user()->avatar))
              <img src="/uploads/ProfileImage/default_user.png">
            @else
             <img src="/uploads/ProfileImage/{{Auth::user()->avatar}}">
            @endif
        </div>
        <div class="pull-left info">
          <p>{{Auth::user()->name}}</p>

          <a href="#"><i class="fa fa-circle text-success"></i> Онлайн</a>
          
     
        </div>

      </div>
      <!-- search form -->
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
          <li class="treeview">
          <a href="#">
           <i class="fa fa-file-word-o"></i></i> <span>Нийтлэл</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right"></span>
            </span>
          </a>
          <ul class="treeview-menu">
             <li><a href="{{route('conversation.create')}}"><i class="fa fa-plus"></i>нэмэх </a></li>
            <li><a href="{{url('allarticles')}}"><i class="fa fa-list"></i> хадгалагдсан</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-sticky-note-o"></i> <span>Ярилцлага</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right"></span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('conversation.create')}}"><i class="fa fa-plus"></i>нэмэх </a></li>
            <li><a href="{{url('allconversations')}}">  <i class="fa fa-list"></i>хадгалагдсан </a></li>
          </ul>
        </li>
    

        <li class="treeview">
          <a href="#">
            <i class="fa fa-inbox"></i> <span>Сурвалжлага</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right"></span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('conversation.create')}}"><i class="fa fa-plus"></i>нэмэх </a></li>
            <li><a href="{{url('allinterviews')}}"><i class="fa fa-list"></i>хадгалагдсан </a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-object-group"></i> <span>Урлан</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right"></span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('conversation.create')}}"><i class="fa fa-plus"></i>нэмэх </a></li>
            <li><a href="{{url('allarts')}}"><i class="fa fa-list"></i>хадгалагдсан </a></li>
          </ul>
        </li>



         <li class="treeview">
          <a href="#">
            <i class="fa fa-object-group"></i> <span>Хөрөг</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right"></span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('conversation.create')}}"><i class="fa fa-plus"></i>нэмэх </a></li>
            <li><a href="{{url('allavatars')}}"><i class="fa fa-list"></i>хадгалагдсан </a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-align-right"></i> <span>Бүгд</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right"></span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('conversation.create')}}"><i class="fa fa-plus"></i>нэмэх </a></li>
            <li><a href="{{route('conversation.index')}}"><i class="fa fa-list"></i>хадгалагдсан </a>
          </ul>
        </li>
       
        @if(Auth::user()->role == "admin")
         <li class="treeview">
          <a href="#">
            <i class="fa fa-newspaper-o"></i> <span>Рекламууд</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right"></span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('arts.create')}}"><i class="fa fa-plus"></i>нэмэх </a></li>
            <li><a href="{{route('arts.index')}}"><i class="fa fa-list"></i>хадгалагдсан </a>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-twitter"></i> <span>Жиргээ</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right"></span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('twitter.create')}}"><i class="fa fa-plus"></i>нэмэх </a></li>
            <li><a href="{{route('twitter.index')}}"><i class="fa fa-list"></i>хадгалагдсан </a>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-picture-o"></i> <span>Slider</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right"></span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('slider.index')}}"><i class="fa fa-list"></i>хадгалагдсан </a></li>
            <li><a href="{{route('slider.create')}}"><i class="fa fa-plus"></i>нэмэх </a>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user-plus"></i> <span>Хэрэглэгчид</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right"></span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('user.index')}}"><i class="fa fa-list"></i>хадгалагдсан </a></li>
            <li><a href="{{route('user.create')}}"><i class="fa fa-plus"></i>нэмэх </a>
          </ul>
        </li>
        <li>
          <a href="/messages">
            <i class="fa fa-inbox"></i><span>Мессэжүүд</span>
          </a>
        </li>
        <li>
        <a href="{{route('email.index')}}">
              <i class="fa fa-phone"></i><span>Холбоо барих</span>
            </a>
        </li>
        <li>
          <a href="{{route('abouts.index')}}">
                <i class="fa fa-user"></i><span>Намтар</span>
              </a>
          </li>
        <li class="treeview">
            <a href="#">
              <i class="fa fa-user-plus"></i> <span>Бичлэг</span>
              <span class="pull-right-container">
                <span class="label label-primary pull-right"></span>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{route('video.index')}}"><i class="fa fa-list"></i>хадгалагдсан </a></li>
              <li><a href="{{route('video.create')}}"><i class="fa fa-plus"></i>нэмэх </a>
            </ul>
          </li>
        @endif
        
        



        </li>


       









      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>