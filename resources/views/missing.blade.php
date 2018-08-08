
  @extends('master')
  @section('title')
  <title>Хуудас олдсонгүй</title>
  @endsection
  @section('keywords')
   <meta content="404" name="keywords"/>
  @endsection
  @section('content')
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/decription_css.css')}}">
<div data-header="sticky" data-header-top="200" class="layout-theme animated-css">
       <div class="cd-main">
          <div class="wrap-content cd-section cd-selected">
        @include('frontend.partials.header')
         <!-- Header -->

  
              <div class="wrap-nav">
                 @include('frontend.partials.header-menu')
              </div>
        </div>
        
    <div class="section-type" style="margin-top: -40px;">
            <h1>404</h1>
            <div class="video-container">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/akUBE_UaVj4?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
              </div>
    </div>

  @include('frontend.partials.urlan') 
  @include('frontend.partials.footer')
</div>

  <script src="{{URL::asset('js/jquery-3.3.1.min.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('js/comment_js.js')}}"></script>

@endsection