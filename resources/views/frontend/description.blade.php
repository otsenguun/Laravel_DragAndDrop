
  @extends('master')
  @section('title')
  <title>Дэлгэрэнгүй</title>
  @endsection
  @section('keywords')
   <meta content="{{$conversation->title}}" name="keywords"/>
  @endsection
  @section('content')
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/decription_css.css')}}">
  <style>
    .active.roboto_text{
        opacity: 0;
        transition: .2s;
    }
  </style>
  <div id="page-preloader"><span class="spinner"></span></div>
<div data-header="sticky" data-header-top="200" class="layout-theme animated-css">
       <div class="cd-main">
          <div class="wrap-content cd-section cd-selected">
        @include('frontend.partials.header')
         <!-- Header -->

          @if(empty ($conversation->desc2 ))
              <div class="wrap-nav">
                 @include('frontend.partials.header-menu')
                 <div id="main-slider" data-slider-width="100%" data-slider-height="495" data-orientation="vertical" class="main-slider main-slider_mod-a main-slider_dark text-center slider-pro">
                      <div class="sp-slides">
                        <div class="section-title section-bg" style="background-image: url(/uploads/images/cover.jpg); height: 100%;">
                          <div class="section__inner">
                            <div class="container">
                                <h2 class="main-slider__title" style="width: 100%; position: relative; top: -73px;">{{$conversation->title}}</h2>
                            </div>
                          </div>
                        </div>
                        <div class="container">
                          <div class="breadcrumb-wrap1">
                            <ol class="breadcrumb">
                              <li>{{$conversation->type}}</li>
                              <li class="active roboto_text">{{$conversation->created_at->format('d.m.Y')}}</li>
                            </ol>
                          </div>
                        </div>
                      </div>
                  </div>

                  
             </div>
              @else
                @if($conversation->hstyle ==0)
                <div class="wrap-nav">
                      @include('frontend.partials.header-menu')
                      <div id="main-slider" data-slider-width="100%" data-slider-height="600" data-orientation="vertical" class="main-slider main-slider_mod-a main-slider_dark text-center slider-pro">
                        {!!$conversation->desc2!!}
                      </div>
                </div>
                @else
                <div class="wrap-nav">
                      @include('frontend.partials.header-menu1')
                      <div id="main-slider" data-slider-width="100%" data-slider-height="600" data-orientation="vertical" class="main-slider main-slider_mod-a main-slider_dark text-center slider-pro">
                        {!!$conversation->desc2!!}
                      </div>
                </div>

                @endif
              @endif



        <!-- Header end -->
          </div>
        </div>
        
    <div class="section-type" style="margin-top: -40px;">
    <div class="container">
        <div class="row">
           <div class="col-md-8">
              <ul id="sortable2" class="connectedSortable row">
                {!!$conversation->desc!!}
              </ul>
                                   <div class="entry-footer clearfix" >
                          
                        <ul class="social-links social-links_mod-a list-inline">
                          <li class="bg-14"><a href="https://www.facebook.com" class="social-links__item_link"><i class="icon fa fa-facebook"></i></a></li>
                          <li class="bg-15"><a href="https://www.twitter.com" class="social-links__item_link"><i class="icon fa fa-twitter"></i></a></li>
                          <li class="bg-16"><a href="https://www.plus.google.com" class="social-links__item_link"><i class="icon fa fa-google-plus"></i></a></li>
                          
                        </ul>
                      </div>
           </div>
           <div class="col-md-4">
                    <article class="post post-3 post-3_mod-e clearfix profile_person_001">
                          <img src="/uploads/ProfileImage/{{$conversation->poster->avatar}}" alt="Foto" class="img-responsive new_person"/>
                          
                      <div class="entry-main002">
                        <div class="entry-header text-center">
                         <a href="{{url('showuser',$conversation->poster->id)}}"> <p class="roboto_text font_14 gan"><b>{{$conversation->poster->name}}</b></p></a>
                        </div>
                        <div class="cetgvvlch">
                          <span class=" color-2 roboto_text cet">{{$conversation->poster->major}}</span>
                        </div>
                        <div>
                             <p class="prof_desc">{{$conversation->poster->desc}}</p>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <ul class="social-links list-inline1">
                          @foreach($conversation->poster->socials as $social)
                          <li><a href="{{$social->link}}" class="social-links__item_link "><i class="{{$social->icon}}"></i></a></li>
                          @endforeach
                        </ul>
                      </div>
                  </article>

             <aside class="sidebar">
                <div class="widget hailt">
                    {{Form::open(['method'=>'post','url'=>'conversationsearch2','class'=>'form-search'])}}
                    <div class="form-group has-feedback">
                      <input type="text" name="title" placeholder="Хайлт" class="form-search__input form-control hailt001">
                      <button type="submit" class="form-search__btn icon pe-7s-search form-control-feedback" style="z-index: 1;"></button>
                    </div>
                  {{Form::close()}}
                </div>
               
                <section class="widget top_004">
                  <h2 class="widget-title ui-title-inner text-right roboto_text">Онцлох</h2>
                  <div class="decor-right"></div>
                  <div class="widget-content last_001">
                    <ul class="nav nav-tabs nav-tabs_sm nav-tabs_primary">
                      <li class="active "><a href="#tab-2-1" data-toggle="tab">ШИНЭ</a></li>
                      <li><a href="#tab-2-2" data-toggle="tab">ИХ УНШСАН</a></li>
                      <li><a href="#tab-2-3" data-toggle="tab">ИХ СЭТГЭГДЭЛТЭЙ</a></li>
                    </ul>
                    <div class="tab-content">
                      <div id="tab-2-1" class="tab-pane fade in active">
                        @foreach($lasts as $last)
                        <article class="post post-3 post-3_mod-e clearfix">
                          @if(empty($last->image))
                           <div class="entry-media"><a href="/images/No_Image.png" class="prettyPhoto"><img src="/images/No_Image.png" alt="Foto" class="img-responsive"/></a></div>
                          @else
                          <div class="entry-media"><a href="/uploads/Conimage/{{$last->image}}" class="prettyPhoto"><img src="/uploads/Conimage/{{$last->image}}" alt="Foto" class="img-responsive"/></a></div>
                          @endif
                          <div class="entry-main">
                            <div class="entry-header">
                              <h2 class="entry-title"><a href="{{url('/showconversation',$last->id)}}">{!!$last->title!!}</a></h2>
                            </div>
                            <div class="entry-meta"><span class="category color-2">{{$last->type}}</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="{{url('/showconversation',$last->id)}}" class="entry-meta__link">{{$last->imagestyle}}</a></span>
                                <span class="category color-2"> <i class="fa fa-eye"></i>   
                                  {{$last->readed}}
                                </span>
                            </div>
                          </div>
                        </article>
                        @endforeach
                      </div>
                      <div id="tab-2-2" class="tab-pane fade">
                           @foreach($readeds as $read001)
                        <article class="post post-3 post-3_mod-e clearfix">
                           @if(empty($read001->image))
                          <div class="entry-media"><a href="/images/No_Image.png" class="prettyPhoto"><img src="/images/No_Image.png" alt="Foto" class="img-responsive"/></a></div>
                          @else
                          <div class="entry-media"><a href="/uploads/Conimage/{{$read001->image}}" class="prettyPhoto"><img src="/uploads/Conimage/{{$read001->image}}" alt="Foto" class="img-responsive"/></a></div>
                          @endif
                          <div class="entry-main">
                            <div class="entry-header">
                              <h2 class="entry-title"><a href="{{url('/showconversation',$read001->id)}}">{!!$read001->title!!}</a></h2>
                            </div>
                                <div class="entry-meta"><span class="category color-2">    {{$read001->type}}  </span>
                                 
                                  <span class="entry-meta__item">
                                    <i class="icon pe-7s-comment"></i>       
                            <a href="{{url('/showconversation',$read001->id)}}" class="entry-meta__link">{{$read001->imagestyle}}</a>
                                  </span>
                                <span class="category color-2"> <i class="fa fa-eye"></i>   
                                  {{$read001->readed}}
                                </span>
                            </div>

                           
                          </div>
                        </article>
                            @endforeach
                      </div>

                      <div id="tab-2-3" class="tab-pane fade">
                         @foreach($commendeds as $commended)
                        <article class="post post-3 post-3_mod-e clearfix">
                           @if(empty($commended->image))
                          <div class="entry-media"><a href="/images/No_Image.png" class="prettyPhoto"><img src="/images/No_Image.png" alt="Foto" class="img-responsive"/></a></div>
                          @else
                          <div class="entry-media"><a href="/uploads/Conimage/{{$commended->image}}" class="prettyPhoto"><img src="/uploads/Conimage/{{$commended->image}}" alt="Foto" class="img-responsive"/></a></div>
                          @endif
                          <div class="entry-main">
                            <div class="entry-header">
                              <h2 class="entry-title"><a href="{{url('/showconversation',$commended->id)}}">{!!$commended->title!!}</a></h2>
                            </div>
                            <div class="entry-meta"><span class="category color-2">{{$commended->type}}</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="{{url('/showconversation',$commended->id)}}" class="entry-meta__link">{{$commended->imagestyle}}</a></span>
                                 <span class="category color-2"> <i class="fa fa-eye"></i>   
                                  {{$commended->readed}}
                                </span>
                            </div>
                         
                          </div>
                        </article>
                            @endforeach
                      </div>
                    </div>
                  </div>
               
                <div class="col-md-12 ">
                    <div data-min480="1" data-min768="1" data-min992="1" data-min1200="1" data-pagination="false" data-navigation="true" data-auto-play="4000" data-stop-on-hover="true" class="owl-carousel owl-theme owl-theme_mod-e enable-owl-carousel">
                        @foreach($banner as $b)
                          <article class="post post-2 post-2_mod-h clearfix" id="01">
                                  <div class="widget ">
                                      <a href="{{$b->text}}" target="blank" class="banner">
                                         <img src="/uploads/{{$b->image}}" alt="banner" class="img-responsive center-block">
                                      </a>
                                  </div>
                          </article>
                        @endforeach
                      </div>
                  </div>
              
                </section>
             </aside>
          </div>

       </div>
        <div class="col-md-12"></div>
    <section class="section-comment">
     
      <h3 class="comment-title ui-title-inner ui-title-inner_spacing_sm">Сэтгэгдэлүүд :<span class="comment-title__number" id="counts"> {{count($conversation->comments)}}</span></h3>
      <div class="decor-left"></div>
      <ul class="comments-list list-unstyled" id="comments">
        @foreach($conversation->comments as $comment)
        <li>
          <article class="comment clearfix">
            <!-- <div class="avatar-placeholder"><img src="assets/media/content/post/reviews/3.jpg" alt="avatar" class="img-responsive"></div> -->
            <div class="comment-inner">
              <header class="comment-header">
                <cite class="comment-author">{{$comment->name}}</cite>
                <time datetime="2012-10-27" class="comment-datetime">{{$comment->created_at->format('d.m.Y')}}</time>
              </header>
              <div class="comment-body">
                <p>{{$comment->content}}</p>
              </div>
            <!--   <footer class="comment-footer"><a href="#" class="comment-btn btn btn-default btn-effect">reply</a></footer> -->
            </div>
          </article>
        </li>
        @endforeach  
      </ul>
      <div class="spinner" id="loader">
        <div class="dot1"></div>
        <div class="dot2"></div>
      </div>
    </section>
    <section class="section-reply-form">
        <h3 class="comment-title ui-title-inner ui-title-inner_spacing_sm">Сэтгэгдэл оруулах</h3>
        <div class="decor-left"></div>
        {{Form::open(['route' => 'comment.store','id'=>'commentInsertForm'])}}
          <div class="row">
            <div class="col-md-12">
              <input type="text" name="name" id="name001" placeholder="Нэр" class="form-control"  required>
            </div>
            <input type="hidden" name="con_id" value="{{$conversation->id}}">
            <div class="col-xs-12">
              <textarea rows="5" name="content" id="text001" placeholder="Сэтгэгдэл" class="form-control" style="text-transform:none" required></textarea>
              <button class="ui-form__btn btn btn-xs btn-info btn-effect" type="button" onclick="insertComment()">Оруулах</button>
            </div>
          </div>
        {{Form::close()}}
      </section>
    </div>

    </div>

  @include('frontend.partials.urlan') 
  @include('frontend.partials.footer')
</div>
  
<script src="{{URL::asset('js/jquery-3.3.1.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/comment_js.js')}}"></script>
<script>
  var a =  $('.active.roboto_text');
    a.empty();
    a.html('{{$conversation->created_at->format("d.m.Y")}}');
    a.css('opacity','1');
</script>

@endsection