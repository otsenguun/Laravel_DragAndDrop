 @extends('master')
 @section('title')
 <title>{{$user->name}} </title>
 @endsection
  @section('content')
 <div data-header="sticky" data-header-top="200" class="layout-theme animated-css">
   <div class="cd-main">
        <div class="wrap-content cd-section cd-selected">
          @include('frontend.partials.header')
          <div class="wrap-nav">
            @include('frontend.partials.header-menu')
            <div class="section-title2 section-bg" style="z-index: -9;">
              <div class="section__inner">
                <h1 class="ui-title-page">{{$user->name}}</h1>
              </div>
            </div>
          </div>
        </div>
    </div>

 <div class="section-default">
            <div class="container">
              <div class="row">
                
                <div class="col-md-4">
                  <aside class="sidebar">

                     <article class="post post-3 post-3_mod-e clearfix profile_person_001">
                          <img src="/uploads/ProfileImage/{{$user->avatar}}" alt="Foto" class="img-responsive new_person"/>
                          
                      <div class="entry-main002">
                        <div class="entry-header text-center">
                         <a href="{{url('showuser',$user->id)}}"> <p class="roboto_text font_14 gan"><b>{{$user->name}}</b></p></a>
                        </div>
                        <div class="cetgvvlch">
                          <span class=" color-2 roboto_text cet">{{$user->major}}</span>
                        </div>
                        <div>
                             <p class="prof_desc">{{$user->desc}}</p>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <ul class="social-links list-inline1">
                          @foreach($user->socials as $social)
                          <li><a href="{{$social->link}}" class="social-links__item_link "><i class="{{$social->icon}}"></i></a></li>
                          @endforeach
                        </ul>
                      </div>
                  </article>

                 <!--    <section class="widget">
                      <h2 class="widget-title ui-title-inner text-right">Сошиал</h2>
                      <div class="decor-right"></div>
                      <div class="widget-content">
                        <ul class="list-subscription list-unstyled">
                          <li class="list-subscription__item bg-11"><span class="list-subscription__name">Rss</span><span class="list-subscription__number">164.983</span> followers<a href="rss.com" class="list-subscription__link"><i class="icon fa fa-rss"></i></a></li>
                          <li class="list-subscription__item bg-8"><span class="list-subscription__name">TW</span><span class="list-subscription__number">714,967</span> followers<a href="twitter.com" class="list-subscription__link"><i class="icon fa fa-twitter"></i></a></li>
                          <li class="list-subscription__item bg-9"><span class="list-subscription__name">FB</span><span class="list-subscription__number">250,642</span> likes<a href="facebook.com" class="list-subscription__link"><i class="icon fa fa-facebook"></i></a></li>
                          <li class="list-subscription__item bg-10"><span class="list-subscription__name">yt</span><span class="list-subscription__number">920,497</span> subscribers<a href="youtube.com" class="list-subscription__link"><i class="icon fa fa-youtube-play"></i></a></li>
                        </ul>
                      </div>
                    </section> -->
                   
                    <section class="widget">
                      <h2 class="widget-title ui-title-inner text-right">Мэдээлэл авах</h2>
                      <div class="decor-right"></div>
                      <div class="widget-content">
                        <p class="small_text001">Таний бүртгүүлсэн и-мэйл ээр бид шинэ мэдээлэлүүдийн  цаг тухайд хүргэнэ</p>
                        <form class="form-subscribe">
                          <div class="form-group has-feedback">
                            <input type="email" placeholder="И-Мэйл хаяг" class="form-control">
                            <button class="icon pe-7s-mail form-control-feedback"></button>
                          </div>
                        </form>
                      </div>
                    </section>
                    <section class="widget">
                      <h2 class="widget-title ui-title-inner text-right">Бусад нийтлэгчид</h2>
                      <div class="decor-right"></div>
                      <div class="widget-content">
                     
                        <div class="tab-content">
                          <div id="tab-2-1" class="tab-pane fade in active">
                             @foreach($users as $user1)
                            <article class="post post-3 post-3_mod-e clearfix">
                             @if(empty($user1->avatar))
                              <div class="entry-media"><img src="/uploads/ProfileImage/default_user.png" alt="Foto" class="img-responsive small_image002"/></div>
                              @else
                               <div class="entry-media"><img src="/uploads/ProfileImage/{{$user1->avatar}}" alt="Foto" class="img-responsive small_image002"/></div>
                              @endif
                              <div class="entry-main">
                                <div class="entry-header">
                                  <h2 class="entry-title"><a href="{{url('showuser',$user1->id)}}">{{$user1->name}}</a></h2>
                                </div>
                                <div class="entry-meta"><span class="category color-7">{{$user1->major}}</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="{{url('showuser',$user1->id)}}" class="entry-meta__link">12</a></span></div>
                              </div>
                            </article>
                            @endforeach
                          </div>
                          <div id="tab-2-2" class="tab-pane fade">
                           @foreach($users as $user2)
                            <article class="post post-3 post-3_mod-e clearfix">
                              <div class="entry-media"><a href="/uploads/ProfileImage/{{$user2->avatar}}" class="prettyPhoto"><img src="/uploads/ProfileImage/{{$user2->avatar}}" alt="Foto" class="img-responsive"/></a></div>
                              <div class="entry-main">
                                <div class="entry-header">
                                  <h2 class="entry-title"><a href="{{url('showuser',$user2->id)}}">{{$user2->name}}</a></h2>
                                </div>
                                <div class="entry-meta"><span class="category color-7">{{$user2->major}}</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="{{url('showuser',$user2->id)}}" class="entry-meta__link">12</a></span></div>
                              </div>
                            </article>
                            @endforeach
                          </div>
                          <div id="tab-2-3" class="tab-pane fade">
                            @foreach($users as $user3)
                            <article class="post post-3 post-3_mod-e clearfix">
                              <div class="entry-media"><a href="/uploads/ProfileImage/{{$user3->avatar}}" class="prettyPhoto"><img src="/uploads/ProfileImage/{{$user3->avatar}}" alt="Foto" class="img-responsive"/></a></div>
                              <div class="entry-main">
                                <div class="entry-header">
                                  <h2 class="entry-title"><a href="{{url('showuser',$user3->id)}}">{{$user3->name}}</a></h2>
                                </div>
                                <div class="entry-meta"><span class="category color-7">{{$user3->major}}</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="{{url('showuser',$user3->id)}}" class="entry-meta__link">12</a></span></div>
                              </div>
                            </article>
                            @endforeach
                          </div>
                        </div>
                      </div>
                    </section> 
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
                  </aside>
                </div>
                <div class="col-md-8">
                  <div class="widget">
                         {{Form::open(['method'=>'post','url'=>'userSearch','id'=>'search-global-form'])}}
                        <div class="form-group has-feedback">
                          <input type="text" name="title" placeholder="Гарчигаар хайх" class="form-search__input form-control" onkeyup="showResult()">
                     
                          <input type="hidden" name="user_id" value="{{$user->id}}">
                          <button class="form-search__btn icon pe-7s-search form-control-feedback"></button>
                        </div>
                        {{Form::close()}}
                    </div>
                    <div id="example2">
                    @foreach($conversations as $conversation)
                  <article class="post post-5 clearfix">
                    @if(empty($conversation->image))
                     <div class="entry-media"><img src="/images/No_Image.png" alt="Foto" class="img-responsive"/></div>
                    @else
                    <div class="entry-media"><img src="/uploads/Conimage/{{$conversation->image}}" alt="Foto" class="img-responsive"/></div>
                    @endif
                    <div class="entry-main">
                      <div class="entry-header"><span class="category color-4">{{$conversation->type}}</span>
                        <h2 class="entry-title"><a href="{{url('/showconversation',$conversation->id)}}">{{$conversation->title}}</a></h2>
                      </div>
                      <div class="entry-meta"><span class="entry-meta__item"><a href="{{url('/showconversation',$conversation->id)}}" class="entry-meta__link"> {{$conversation->poster->name}}</a></span><span class="entry-meta__item"><a href="{{url('showuser',$conversation->poster->id)}}" class="entry-meta__link">{{$conversation->created_at->format('d.m.Y')}}</a></span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="{{url('showuser',$conversation->poster->id)}}" class="entry-meta__link">{{$conversation->imagestyle}}</a></span></div>
                      <div class="entry-footer"><a href="{{url('/showconversation',$conversation->id)}}" class="btn-link">Цааш унших</a></div>
                    </div>
                  </article>    
                  @endforeach   
                  <div style="text-align: center;">{{ $conversations->links() }}</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
<script type="text/javascript">
  function showResult() {
        var form = $("#search-global-form");
        var data = form.serialize();
        var url = form.attr('action');
        var post = form.attr('method');
            $.ajax({
              type : post,
              url : url,
              data : data,
              dataType : 'json'
             }).done(function(data){
                  console.log(data);
                  $('#example2').empty();
                  $('#example2').append(data.view);

              }).always(function(){
                
                
             });
      }
  </script>
@stop