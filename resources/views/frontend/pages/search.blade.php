@extends('layouts.index')

@section('content')
    <style type="text/css">
      .article_image{
          filter:grayscale(100%);
          transition: .5s;
      }
      .article_image:hover{
         filter:grayscale(0%);
         transition: .5s;
         
      }
    </style>

    <div id="page-preloader"><span class="spinner"></span></div>
    <!-- Loader end-->
    <div data-header="sticky" data-header-top="200" class="layout-theme animated-css">
      <div class="cd-main">
        <div class="wrap-content cd-section cd-selected">
          @include('frontend.partials.header')
          <div class="wrap-nav">
            @include('frontend.partials.header-menu')
          </div>
          <div class="section-title1 section-bg" style="background-image: url(/images/search.jpg); z-index: -1;">
              <div class="section__inner">
                <h1 class="ui-title-page" style="text-transform: uppercase;color: #000;">Хайлт = {{$search}}</h1>
              </div>
            </div>
          <section class="section-default" id="sec_01">
            <div class="container">
              <div class="row">
                <div class="col-xs-12">
                  <div class="clearfix">
                    <h2 class="ui-title-block"><span class="text-uppercase">Хайлт : </span> {{$search}}</h2>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12">
                  <section id="pinBoot">
                    @foreach($conversations as $key => $conversation)
                       <article class="white-panel"> 
                        <img src="/uploads/Conimage/{{$conversation->image}}" alt="" class="article_image">
                          <span class="label bg-22">{{$conversation->type}}</span>
                          <div class="entry-main">
                            <div class="entry-header">
                              <a href="{{url('/showconversation',$conversation->id)}}">
                              <h2 class="entry-title1 text-uppercase1">
                             <!--  <p class="name_001"> <i>О.Баасанхүү: </i> </p>  --><p class="text_001">{{$conversation->title}}</p> 
                                  </h2>
                              </a>
                            </div>  
                            <div class="entry-meta1">
                              <span class="entry-meta__item1">by&nbsp;&nbsp;
                                <a href="{{url('/showconversation',$conversation->id)}}" class="entry-meta__link1">{{$conversation->poster->name}}</a>
                              </span>
                              <span class="entry-meta__item1">
                                <a href="{{url('/showconversation',$conversation->id)}}" class="entry-meta__link1">{{$conversation->created_at->format('d.m.Y')}}</a>
                              </span>
                              <span class="entry-meta__item1"><i class="fa fa-comment" aria-hidden="true"></i> &nbsp;
                                <a href="{{url('/showconversation',$conversation->id)}}" class="entry-meta__link1">{{$conversation->imagestyle}}</a>
                              </span>
                            </div>

                          </div>
                      </article>
                      @endforeach
                  </section>
                      <div class="container load_001" >
                          <button style="z-index: 0;" onclick="history.go(-1)" class="btn btn-default btn-typography btn-lg btn-effect text-left text_roboto tsaash_resposive">Буцах  </button>
                           
                          
                      </div>
                     
                </div>
              </div>
            </div>

          </section>

          <div class="container" id="sec_04" style="    margin-top: 7vw">
            <div class="row">
              <div class="col-xs-12" >
                <section class="section-soc-slider" style="z-index: 0;">
                  <div class="wrap-title-bg wrap-title-bg_mod-a">
                    <h2 class="ui-title-bg">Урлан</h2>
                    <!-- <span class="ui-title-bg__subtitle">follow us @ instagram</span> -->
                  </div>
                  <div data-min480="1" data-min768="5" data-min992="5" data-min1200="5" data-pagination="false" data-navigation="true" data-auto-play="400" data-stop-on-hover="true" class="owl-carousel owl-theme enable-owl-carousel"><a href="assets/media/content/social-slider/1.jpg" class="prettyPhoto"><img src="assets/media/content/social-slider/1.jpg" alt="foto" class="img-responsive"></a><a href="assets/media/content/social-slider/2.jpg" class="prettyPhoto"><img src="assets/media/content/social-slider/2.jpg" alt="foto" class="img-responsive"></a><a href="assets/media/content/social-slider/3.jpg" class="prettyPhoto"><img src="assets/media/content/social-slider/3.jpg" alt="foto" class="img-responsive"></a><a href="assets/media/content/social-slider/4.jpg" class="prettyPhoto"><img src="assets/media/content/social-slider/4.jpg" alt="foto" class="img-responsive"></a>
                    <a href="assets/media/content/social-slider/5.jpg" class="prettyPhoto"><img src="assets/media/content/social-slider/5.jpg" alt="foto" class="img-responsive"></a>
                  </div>
                </section>
              </div>
            </div>
          </div>
          @include('frontend.partials.footer')
          <!-- end wrap-content-->
        </div>
      </div>
    </div>
    

@stop