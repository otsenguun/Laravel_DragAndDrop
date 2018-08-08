@extends('layouts.index')

  @section('title')
  <title>Урлан</title>
  @endsection

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
  <div data-header="sticky" data-header-top="200" class="layout-theme animated-css">
    <div id="page-preloader"><span class="spinner"></span></div>
    <!-- Loader end-->
    <div data-header="sticky" data-header-top="200" class="layout-theme animated-css">
      <div class="cd-main">
        <div class="wrap-content cd-section cd-selected">
          @include('frontend.partials.header')
          <div class="wrap-nav">
            @include('frontend.partials.header-menu')
            <div id="main-slider" data-slider-width="100%" data-slider-height="600" data-orientation="vertical" class="main-slider main-slider_mod-a main-slider_dark text-center slider-pro">
             
              <div class="sp-slides">
                <!-- Slide 1-->
                 @foreach($sliders as $slider)
                 
                 @if($slider->counts == 0)
                <div class="sp-slide">
                  <img src="/uploads/slider/{{$slider->image}}" alt="slider" class="sp-image"/>
                  <div data-width="100%" data-show-transition="left" data-hide-transition="left" data-show-duration="800" data-show-delay="400" data-hide-delay="400" class="sp-layer">
                        <div class="container">
                            <h2 class="main-slider__title">{!!$slider->sliderConversations->title!!}</h2>
                        </div>
                  </div>
                  <div class="container text_roboto">
                    <div data-width="100%" data-show-transition="up" data-hide-transition="left" data-show-duration="800" data-show-delay="1700" data-hide-delay="400" class="sp-layer">
                      <a href="{{url('/showconversation',$slider->sliderConversations->id)}}" class="main-slider__link bg-22 btn btn-xs btn-effect float_left_15px">дэлгэрэнгүй</a>
                    </div>
                    <div data-width="100%" data-show-transition="right" data-hide-transition="left" data-show-duration="800" data-show-delay="1200" data-hide-delay="400" class="sp-layer">
                      <div class="main-slider-meta float_left_15px">
                        <span class="main-slider-meta__item">{{$slider->sliderConversations->created_at->format('d.m.Y')}}</span>
                        <span class="main-slider-meta__item"><i class="icon pe-7s-comment"></i>108</span>
                      </div>
                    </div>
                  </div>
                </div>    
                @else
                 <div class="sp-slide">
                  <img src="/uploads/slider/{{$slider->image}}" alt="slider" class="sp-image"/>
                  <div data-width="100%" data-show-transition="left" data-hide-transition="left" data-show-duration="800" data-show-delay="400" data-hide-delay="400" class="sp-layer">
                      <div class="container">
                            <h2 class="main-slider__title font_fam" id="right_face">{!!$slider->sliderConversations->title!!}
                      </div>
                  </div>
                  <div class="container text_roboto">
                    <div data-width="100%" data-show-transition="up" data-hide-transition="left" data-show-duration="800" data-show-delay="1700" data-hide-delay="400" class="sp-layer"><a href="{{url('/showconversation',$slider->sliderConversations->id)}}" class="main-slider__link bg-22 btn btn-xs btn-effect asd">дэлгэрэнгүй</a></div>
                    <div data-width="100%" data-show-transition="right" data-hide-transition="left" data-show-duration="800" data-show-delay="1200" data-hide-delay="400" class="sp-layer">
                      <div class="main-slider-meta asd">
                        <span class="main-slider-meta__item">{{$slider->sliderConversations->created_at->format('d.m.Y')}}</span>
                        <span class="main-slider-meta__item"><i class="icon pe-7s-comment"></i>108</span>
                      </div>
                    </div>
                  </div>
                </div>
                @endif
                @endforeach
              </div>
            </div>
          </div>
          <section class="section-default" id="sec_01">
            <div class="container">
              <div class="row">
                <div class="col-xs-12">
                  <section id="pinBoot">
                    @foreach($conversations as $key => $conversation)
                       <article class="white-panel"> 
                                   @if($conversation->jstyle==0)
                                   <a href="{{url('/showconversation',$conversation->id)}}"> <img src="/uploads/Conimage/{{$conversation->image}}" alt="" class="article_image"></a> 
                                   @else
                                    <a href="{{url('/showconversation',$conversation->id)}}"> <img src="/uploads/Conimage/{{$conversation->image}}" alt="" class="article_image1"></a> 
                                   @endif
                                <span class="label bg-22">{{$conversation->type}}</span>
                                <div class="entry-main">
                                  <div class="entry-header">
                                    <a href="{{url('/showconversation',$conversation->id)}}">
                                    <h2 class="entry-title1 text-uppercase1">
                                   <!--  <p class="name_001"> <i>О.Баасанхүү: </i> </p>  --><p class="text_001"> {!! \Illuminate\Support\Str::limit ($conversation->title, 51,'....')  !!}</p> 
                                        </h2>
                                    </a>
                                  </div>  
                                  <div class="entry-meta1">
                                    <span class="entry-meta__item1">by&nbsp;&nbsp;
                                      <a href="{{url('showuser',$conversation->poster->id)}}" class="entry-meta__link1">{{$conversation->poster->name}}</a>
                                    </span>
                                    <span class="entry-meta__item1">
                                      <a href="{{url('/showconversation',$conversation->id)}}" class="entry-meta__link1">{{$conversation->created_at}}</a>
                                    </span>
                                    <span class="entry-meta__item1"><i class="fa fa-eye" aria-hidden="true"></i> &nbsp;
                                      <a href="{{url('/showconversation',$conversation->id)}}" class="entry-meta__link1">{{$conversation->readed}}</a>
                                    </span>
                                  </div>

                                </div>
                            </article>
                      @endforeach
                  </section>
                  <div class="spinner" id="spinner" style="display: none;">
                    <div class="rect1"></div>
                    <div class="rect2"></div>
                    <div class="rect3"></div>
                    <div class="rect4"></div>
                    <div class="rect5"></div>
                  </div>
                      <div class="container load_001">
                       <button type="button" id="showmorebtn" class="btn btn-default btn-typography btn-lg btn-effect text-right1 text_roboto tsaash_resposive" onclick="showmore()">Цааш нь унших  </button>
                          
                      </div>
                </div>
              </div>
            </div>
          </section>
          @include('frontend.partials.urlan')
          @include('frontend.partials.footer')
        </div>
      </div>
    </div>
  </div>
@stop