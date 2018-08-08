<nav class="navbar yamm">
  <div id="navbar-collapse-1" class="navbar-collapse collapse">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <ul class="nav navbar-nav">
            <li><a href="{{url('conversations')}}">ЯРИЛЦЛАГА</a></li>
            <li class="yamm-fw"><a href="{{url('articles')}}">НИЙТЛЭЛ</a></li>
            <li class="yamm-fw"><a href="{{url('interview')}}">СУРВАЛЖЛАГА</a></li>
            <li class="yamm-fw"><a href="{{url('figure')}}">ХӨРӨГ</a></li>
            <li class="yamm-fw"><a href="{{url('art')}}">УРЛАН</a></li>
            <li class="yamm-fw "><a href="/contact">ХОЛБОО БАРИХ</a></li>
            <li><a href="#fakelink" class="search-open"><i class="icon pe-7s-search"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="header-search">
                <div class="container">
                  <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                      <div class="navbar-search">
                           {{Form::open(['method'=>'post','url'=>'conversationsearch2','class'=>'search-global'])}}
                          <input type="text" placeholder="Хайлт" autocomplete="off" name="title" value="" class="search-global__input"/>
                          <button class="search-global__btn"><i class="icon fa fa-search"></i></button>
                          {{Form::close()}}
                      </div>
                    </div>
                  </div>
                </div>
                <button type="button" class="search-close close"><i class="fa fa-times"></i></button>
              </div>
</nav>