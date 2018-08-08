@extends('master')
  @section('content')
      <!-- Loader-->
      <div id="page-preloader"><span class="spinner"></span></div>
      <!-- Loader end-->
      <div data-header="sticky" data-header-top="200" class="layout-theme animated-css">
        <!-- Start Switcher-->
             <!--  <div class="switcher-wrapper">
                <div class="demo_changer">
                  <div class="demo-icon color_primary"><i class="fa fa-cog fa-spin fa-2x"></i></div>
                  <div class="form_holder">
                    <div class="row">
                      <div class="col-xs-12">
                        <div class="predefined_styles">
                          <div class="skin-theme-switcher">
                            <h4>Color</h4><a href="javascript:void(0);" data-switchcolor="color1" style="background-color:#df0001;" class="styleswitch"></a><a href="javascript:void(0);" data-switchcolor="color2" style="background-color:#86a800;" class="styleswitch"></a><a href="javascript:void(0);" data-switchcolor="color3" style="background-color:#00adb4;" class="styleswitch"></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div> -->
            <!-- end switcher-->
            <div class="cd-main">
                <div class="wrap-content cd-section cd-selected">
                   @include('frontend.partials.header')
        <div class="wrap-nav">
           @include('frontend.partials.header-menu')
<div class="section-title1 section-bg" style="z-index: -9;">
    <div class="section__inner">
      <h1 class="ui-title-page" style="text-transform: uppercase;">холбоо барих</h1>
  </div>
</div>
</div>
<div class="breadcrumb-wrap" style="z-index: 0">
  <ol class="breadcrumb">
    <li><a href="/">нүүр</a></li>
    <li class="active">холбогдох</li>
</ol>
</div>
<div class="section-type-a">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="contacts-item"><i class="icon pe-7s-map-marker color-7"></i>
          <div class="decor-center bg-7"></div>
          <div class="contacts-item__title">location</div>
          <div class="contacts-item__info"> @foreach($locations as $location){{$location->name}} <br> @endforeach</div>
      </div>
  </div>
  <div class="col-md-3">
    <div class="contacts-item"><i class="icon pe-7s-call color-7"></i>
      <div class="decor-center bg-7"></div>
      <div class="contacts-item__title">phone</div>
      <div class="contacts-item__info">@foreach($phones as $phone){{$phone->name}} <br> @endforeach</div>
  </div>
</div>
<div class="col-md-3">
    <div class="contacts-item"><i class="icon pe-7s-mail-open-file color-13"></i>
      <div class="decor-center bg-13"></div>
      <div class="contacts-item__title">email</div>
      <div class="contacts-item__info">@foreach($emails as $email){{$email->name}} <br> @endforeach</div>
  </div>
</div>
<div class="col-md-3">
    <div class="contacts-item"><i class="icon pe-7s-clock color-3"></i>
      <div class="decor-center bg-3"></div>
      <div class="contacts-item__title">working hours</div>
      <div class="contacts-item__info">@foreach($hours as $hour){{$hour->name}} <br> @endforeach</div>
  </div>
</div>
</div>
</div>
</div>
<div id="map" class="map" data-zoom="15" data-coordinates="47.9185766,106.917653" data-key="AIzaSyBMe_D6gusKtAYXmSwgO8iXFPlb4c0iOwU" data-center="47.9185766,106.917653"></div>
<div class="section-type-f contact-page-form">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h2 class="ui-title-block"><span class="ui-title-block__subtitle">холбогдох</span><span class="text-uppercase">санал хүсэлт хүлээн авах</span></h2>
        <form action="/contact" method="post" class="ui-form form-contacts">
          {{ csrf_field() }}
          <div class="row">
            <div class="col-md-6">
              <input type="text" placeholder="Нэр" class="form-control" name="name" required>
          </div>
          <div class="col-md-6">
              <input type="email" placeholder="и-майл" class="form-control" name="email" required>
          </div>
          <div class="col-md-6">
              <input type="tel" placeholder="Утасны дугаар" class="form-control" name="phone" required>
          </div>
          <div class="col-md-6">
              <input type="text" placeholder="Агуулга" class="form-control" name="subject" required>
          </div>
          <div class="col-xs-12">
              <textarea rows="5" placeholder="Дэлгэрэнгүй" class="form-control" name="message" required></textarea>
          </div>
      </div>
      <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
          <button type="submit" class="ui-form__btn btn btn-sm btn-info btn-full btn-effect"><i class="icon pe-7s-mail"></i> Мессеж илгээх</button>
      </div>
  </div>
</form>
</div>
</div>
</div>
</div>
<div class="container">
  <div class="row">
    <div class="col-xs-12">
      <section class="section-soc-slider">
        <div class="wrap-title-bg wrap-title-bg_mod-a">
          <h2 class="ui-title-bg">Урлан</h2>
      </div>
      <div data-min480="1" data-min768="5" data-min992="5" data-min1200="5" data-pagination="false" data-navigation="true" data-auto-play="4000" data-stop-on-hover="true" class="owl-carousel owl-theme enable-owl-carousel"><a href="assets/media/content/social-slider/1.jpg" class="prettyPhoto"><img src="assets/media/content/social-slider/1.jpg" alt="foto" class="img-responsive"></a><a href="assets/media/content/social-slider/2.jpg" class="prettyPhoto"><img src="assets/media/content/social-slider/2.jpg" alt="foto" class="img-responsive"></a><a href="assets/media/content/social-slider/3.jpg" class="prettyPhoto"><img src="assets/media/content/social-slider/3.jpg" alt="foto" class="img-responsive"></a><a href="assets/media/content/social-slider/4.jpg" class="prettyPhoto"><img src="assets/media/content/social-slider/4.jpg" alt="foto" class="img-responsive"></a><a href="assets/media/content/social-slider/5.jpg" class="prettyPhoto"><img src="assets/media/content/social-slider/5.jpg" alt="foto" class="img-responsive"></a></div>
  </section>
</div>
</div>
</div>
@include('frontend.partials.footer')
<!-- end wrap-content-->
</div>
</div>
</div>
<script src="js/map.js"></script>


   @endsection