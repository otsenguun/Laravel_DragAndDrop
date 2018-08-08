<div class="container" id="sec_04">
  <div class="row">
    <div class="col-xs-12">
      <section class="section-soc-slider">
        <div class="wrap-title-bg wrap-title-bg_mod-a">
          <h2 class="ui-title-bg">урлан</h2>
        </div>
          <div data-min480="1" data-min768="5" data-min992="5" data-min1200="5" data-pagination="false" data-navigation="true" data-auto-play="4000" data-stop-on-hover="true" class="owl-carousel owl-theme enable-owl-carousel">
            @foreach($arts as $art)
              <a href="{{url('/showconversation',$art->id)}}"><img src="/uploads/Conimage/{{$art->image}}" alt="foto" class="img-responsive"></a>
              @endforeach
          </div>
      </section>
    </div>
  </div>
</div>

