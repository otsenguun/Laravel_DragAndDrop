@extends('master')
  @section('content')
  <style type="text/css">
    .breadcrumb-wrap{
      z-index:0;
    }
    .video-container {
      position: relative;
      padding-bottom: 56.25%;
      padding-top: 30px; height: 0; overflow: hidden;
      }

      .video-container iframe,
      .video-container object,
      .video-container embed {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      }
      .video-title{
        padding-top: 2vh;
        padding-bottom: 2vh;
      }

  </style>
    <!-- Loader-->
    <div id="page-preloader"><span class="spinner"></span></div>
    <!-- Loader end-->
    <div data-header="sticky" data-header-top="200" class="layout-theme animated-css">
     
      <div class="cd-main">
        <div class="wrap-content cd-section cd-selected">
          @include('frontend.partials.header')
          <div class="wrap-nav">
            @include('frontend.partials.header-menu')
            <div class="section-title2 section-bg" style="z-index: -9;">
              <div class="section__inner">
                <h1 class="ui-title-page">Бадамдоржийн ГАНЧИМЭГ</h1>
              </div>
            </div>
          </div>
          <div class="breadcrumb-wrap">
            <ol class="breadcrumb">
              <li><a href="home-new.html">нүүр</a></li>
              <li class="active">Танилцуулга</li>
            </ol>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-md-10 col-md-offset-1">
                <div class="section-type-a">
                  <div class="ui-description ui-description_mod-a text-left">
                    @foreach($about as $a)
                    {!!$a->desc!!}
                    @endforeach
                  </div>
              </div>
              <div class="col-md-4 col-md-offset-4">
                <div class="decor-center"></div>
              </div>
            </div>
          </div>
          <div class="section-type-i">
            <div class="container">
              <div class="row">
                <div class="col-md-6">
                  <div data-pagination="false" data-navigation="true" data-single-item="true" data-auto-play="7000" data-transition-style="fade" data-main-text-animation="true" data-after-init-delay="3000" data-after-move-delay="1000" data-stop-on-hover="true" class="owl-carousel owl-theme owl-theme_mod-b enable-owl-carousel">
                    @foreach($aboutimages as $ai)
                  <img src="uploads/{{$ai->image}}" alt="foto" class="img-responsive">
                    @endforeach
                  </div>
                </div>
                <div class="col-md-6">
                  <section class="section_mod-a">
                    <h2 class="ui-title-block ui-title-block_font-sm text-uppercase">БҮТЭЭЛ</h2>
                    <!-- <p>Lorem ipsum dolor amet consectetur adipisicing elit sed do eiusmod tempor incid dunt labore et dolore magna aliqua enimad minim.</p> -->
                    <ul class="list list-mark-1">
                      @foreach($creations as $creation)
                    <li>{{$creation->name}}</li>
                      @endforeach
                    </ul>
                  </section>
                </div>
                <div class="col-md-10 col-md-offset-1">
                <div class="section-type-a">
                  <div class="ui-description ui-description_mod-a text-left">
                      @foreach($about as $a)
                      {!!$a->desc1!!}
                      @endforeach
                  </div>
              </div>
              
              </div>
              <div class="col-md-12">
                @foreach ($videos as $video)
                <div class="col-md-6">
                <h4 class="video-title">{!!$video->title!!}</h4>
                    <div class="video-container">
                    <iframe width="560" height="315" src="{{$video->link}}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                </div>
                @endforeach
              </div>
                

            </div>
          </div>
     
        </div>
      </div>
      @include('frontend.partials.footer')
    </div>
    @endsection
