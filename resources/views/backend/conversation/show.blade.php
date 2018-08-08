
  @extends('master')
  @section('content')

  <link rel="stylesheet" type="text/css" href="/css/show_css.css">
  <div data-header="sticky" data-header-top="200" class="layout-theme animated-css">
  <a href="{{route('conversation.show',$conversation->id)}}" class="btn">back</a>
    <div class="cd-main">
        <div class="wrap-content cd-section cd-selected">
        @include('frontend.partials.header')
              <!-- Header -->
              @if(empty ($conversation->desc2 ))
              <div class="wrap-nav">
                 @include('frontend.partials.header-menu')
                   <div class="text-center">
                      <h2 class="title_style">{{$conversation->title}}</h2>
                  </div>
             </div>
              @else
              <div class="wrap-nav">
                    @include('frontend.partials.header-menu')
                    <div id="main-slider" data-slider-width="100%" data-slider-height="600" data-orientation="vertical" class="main-slider main-slider_mod-a main-slider_dark text-center slider-pro">
                      {!!$conversation->desc2!!}
                    </div>
              </div>
              @endif
              <!-- Header end -->
        </div>
    </div>




<div class="section-type">
  <div class="container">
      <div class="row">
         <div class="col-md-8">
            <ul id="sortable2" class="connectedSortable row">
              {!!$conversation->desc!!}
            </ul>
         </div>
         <div class="col-md-4">
               <article class="post post-3 post-3_mod-e clearfix profile_person_001">
                      <img src="/uploads/ProfileImage/{{$conversation->poster->avatar}}" alt="Foto" class="img-responsive new_person"/>
                      
                  <div class="entry-main002">
                    <div class="entry-header text-center">
                      <p class="roboto_text font_14 gan"><b>{{$conversation->poster->name}}</b></p>
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
                      <li><a href="twitter.com" class="social-links__item_link "><i class="icon fa fa-twitter"></i></a></li>
                      <li><a href="facebook.com" class="social-links__item_link"><i class="icon fa fa-facebook"></i></a></li>
                      <li><a href="instagram.com" class="social-links__item_link"><i class="icon fa fa-instagram"></i></a></li>
                      <li><a href="linkedin.com" class="social-links__item_link"><i class="icon fa fa-linkedin"></i></a></li>
                      <li><a href="youtube.com" class="social-links__item_link"><i class="icon fa fa-youtube-play"></i></a></li>
                    </ul>
                  </div>
              </article>
                  <aside class="sidebar">
                    <div class="widget hailt">
                      <form id="search-global-form" method="get" class="form-search">
                        <div class="form-group has-feedback">
                          <input type="text" placeholder="Хайлт" class="form-search__input form-control hailt001">
                          <button class="form-search__btn icon pe-7s-search form-control-feedback"></button>
                        </div>
                      </form>
                    </div>
                    <div class="widget ">
                      <a href="home.html" class="banner">
                        <img src="../../assets/media/content/banners/1.jpg" alt="banner" class="img-responsive center-block">
                      </a>
                    </div>
                    <section class="widget top_004">
                      <h2 class="widget-title ui-title-inner text-right roboto_text">Онцлох</h2>
                      <div class="decor-right"></div>
                      <div class="widget-content last_001">
                        <ul class="nav nav-tabs nav-tabs_sm nav-tabs_primary">
                          <li class="active "><a href="#tab-2-1" data-toggle="tab">ИХ СЭТГЭГДЭЛТЭЙ</a></li>
                          <li><a href="#tab-2-2" data-toggle="tab">ИХ УНШСАН</a></li>
                          <li><a href="#tab-2-3" data-toggle="tab">ШИНЭ</a></li>
                        </ul>
                        <div class="tab-content">
                          <div id="tab-2-1" class="tab-pane fade in active">
                          <article class="post post-3 post-3_mod-e clearfix">
                              <div class="entry-media"><a href="/assets/media/content/post/100x100/2.jpg" class="prettyPhoto"><img src="/assets/media/content/post/100x100/2.jpg" alt="Foto" class="img-responsive"/></a></div>
                              <div class="entry-main">
                                <div class="entry-header">
                                  <h2 class="entry-title">С.БАЯР: ЯАЛТАЙ Ч БИЛЭЭ...</a></h2>
                                </div>
                                <div class="entry-meta"><span class="category color-2">улс төр</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i>   12</span></div>
                              </div>
                            </article>
                            <article class="post post-3 post-3_mod-e clearfix">
                              <div class="entry-media"><a href="/assets/media/content/post/100x100/1.jpg" class="prettyPhoto"><img src="/assets/media/content/post/100x100/1.jpg" alt="Foto" class="img-responsive"/></a></div>
                              <div class="entry-main">
                                <div class="entry-header">
                                  <h2 class="entry-title">ӨНДРИЙН ЦУВААНД ҮҮЛЭН ДЭЭГҮҮР ЯВАХ Л САЙХАН</a></h2>
                                </div>
                                <div class="entry-meta"><span class="category color-2">бусад</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i>   12</span></div>
                              </div>
                            </article>
                            <article class="post post-3 post-3_mod-e clearfix">
                              <div class="entry-media"><a href="/assets/media/content/post/100x100/9.jpg" class="prettyPhoto"><img src="/assets/media/content/post/100x100/9.jpg" alt="Foto" class="img-responsive"/></a></div>
                              <div class="entry-main">
                                <div class="entry-header">
                                  <h2 class="entry-title">М.ЧИНБОЛД: ХААЛГАА ХААСАН ХҮН ХӨГЖДӨГГҮЙ ШҮҮ ДЭЭ</a></h2>
                                </div>
                                <div class="entry-meta"><span class="category color-2">улс төр</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i>   12</span></div>
                              </div>
                            </article>
                            <article class="post post-3 post-3_mod-e clearfix">
                              <div class="entry-media"><a href="/assets/media/content/post/100x100/5.jpg" class="prettyPhoto"><img src="/assets/media/content/post/100x100/5.jpg" alt="Foto" class="img-responsive"/></a></div>
                              <div class="entry-main">
                                <div class="entry-header">
                                  <h2 class="entry-title">>Л.БОЛДБААТАР</a></h2>
                                </div>
                                <div class="entry-meta"><span class="category color-2">Урлаг соёл</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i>    12</span></div>
                              </div>
                            </article>
                          </div>
                          <div id="tab-2-2" class="tab-pane fade">
                            <article class="post post-3 post-3_mod-e clearfix">
                              <div class="entry-media"><a href="/assets/media/content/post/100x100/5.jpg" class="prettyPhoto"><img src="/assets/media/content/post/100x100/5.jpg" alt="Foto" class="img-responsive"/></a></div>
                              <div class="entry-main">
                                <div class="entry-header">
                                  <h2 class="entry-title">АЗ ЖАРГАЛЫН ХОЁР ӨГӨГДЭХҮҮН ХОЁУЛАА МОНГОЛ ХҮНД БАЙНА</a></h2>
                                </div>
                                <div class="entry-meta"><span class="category color-2">улс төр</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i>   12</span></div>
                              </div>
                            </article>
                            <article class="post post-3 post-3_mod-e clearfix">
                              <div class="entry-media"><a href="/assets/media/content/post/100x100/5.jpg" class="prettyPhoto"><img src="/assets/media/content/post/100x100/5.jpg" alt="Foto" class="img-responsive"/></a></div>
                              <div class="entry-main">
                                <div class="entry-header">
                                  <h2 class="entry-title">ХЭЦҮҮ ЗАМААР ЯВЖ ХҮРСЭН АМЖИЛТ Л БАТ БӨХ, ДАРХЛААТАЙ, БАС ҮНЭ ЦЭНЭТЭЙ БАЙДАГ</a></h2>
                                </div>
                                <div class="entry-meta"><span class="category color-22">улс төр</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i>    12</span></div>
                              </div>
                            </article>
                          </div>
                          <div id="tab-2-3" class="tab-pane fade">
                            <article class="post post-3 post-3_mod-e clearfix">
                              <div class="entry-media"><a href="/assets/media/content/post/100x100/5.jpg" class="prettyPhoto"><img src="/assets/media/content/post/100x100/5.jpg" alt="Foto" class="img-responsive"/></a></div>
                              <div class="entry-main">
                                <div class="entry-header">
                                  <h2 class="entry-title">ТӨРИЙН ДАЛБААНЫХАА ӨМНӨ, ТӨРИЙН ДУУЛЛЫНХАА ДОР, МОНГОЛОО ДУУРСГАХЫН ТӨЛӨӨ ЗҮТГЭЖ СУРЛАА</a></h2>
                                </div>
                                <div class="entry-meta"><span class="category color-2">Sport</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i>   12</a></span></div>
                              </div>
                            </article>
                            <article class="post post-3 post-3_mod-e clearfix">
                              <div class="entry-media"><img src="/assets/media/content/post/100x100/2.jpg" alt="Foto" class="img-responsive"/></div>
                              <div class="entry-main">
                                <div class="entry-header">
                                  <h2 class="entry-title">OPEN DOOR</a></h2>
                                </div>
                                <div class="entry-meta"><span class="category color-2">улс төр</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i>   12</a></span></div>
                              </div>
                            </article>


                          </div>
                        </div>
                      </div>
                    </section>
                   
                     
                  </aside>
                    <aside class="sidebar">
                      <section class="widget">
                      <h2 class="widget-title ui-title-inner text-right">follow us</h2>
                      <div class="decor-right"></div>
                      <div class="widget-content">
                        <ul class="list-subscription list-unstyled">
                          <li class="list-subscription__item bg-11"><span class="list-subscription__name">Rss</span><span class="list-subscription__number">164.983</span> followers<a href="rss.com" class="list-subscription__link"><i class="icon fa fa-rss"></i></a></li>
                          <li class="list-subscription__item bg-8"><span class="list-subscription__name">TW</span><span class="list-subscription__number">714,967</span> followers<a href="twitter.com" class="list-subscription__link"><i class="icon fa fa-twitter"></i></a></li>
                          <li class="list-subscription__item bg-9"><span class="list-subscription__name">FB</span><span class="list-subscription__number">250,642</span> likes<a href="facebook.com" class="list-subscription__link"><i class="icon fa fa-facebook"></i></a></li>
                          <li class="list-subscription__item bg-10"><span class="list-subscription__name">yt</span><span class="list-subscription__number">920,497</span> subscribers<a href="youtube.com" class="list-subscription__link"><i class="icon fa fa-youtube-play"></i></a></li>
                        </ul>
                      </div>
                    </section>
                     <section class="widget stay_001">
                      <h2 class="widget-title ui-title-inner text-right">stay updated</h2>
                      <div class="decor-right"></div>
                      <div class="widget-content">
                        <p>Sign up for our newsletter to receive latest news as it happenes in your inbox.</p>
                        <form class="form-subscribe">
                          <div class="form-group has-feedback">
                            <input type="email" placeholder="your email address" class="form-control">
                            <button class="icon pe-7s-mail form-control-feedback"></button>
                          </div>
                        </form>
                      </div>
                    </section>
                  </aside>
                </div>
     </div>
  </div>
</div>

</div>
<script src="{{URL::asset('js/jquery-3.3.1.min.js')}}"></script>
@endsection