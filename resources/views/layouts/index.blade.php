<!DOCTYPE html>
<html lang="en" class="no-js">
  <head>
    <meta charset="utf-8"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
   
    <meta content="" name="description"/>
    <meta content="" name="keywords"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta content="telephone=no" name="format-detection"/>
    <meta name="HandheldFriendly" content="true"/>
    <link rel="stylesheet" href="assets/css/master.css"/>

    <!-- SWITCHER-->
    <link href="assets/plugins/switcher/css/switcher.css" rel="stylesheet" id="switcher-css" media="all"/>

    <link href="assets/plugins/switcher/css/color2.css" rel="alternate stylesheet" title="color2" media="all"/>
    <link href="assets/plugins/switcher/css/color3.css" rel="alternate stylesheet" title="color3" media="all"/>

    <style type="text/css">
      .entry-main{
         margin-top: -30px;
      }
      .text_001{
        text-align: left;
      }
    </style>
    <style type="text/css">
      .spinner {
  margin: 100px auto;
  width: 50px;
  height: 40px;
  text-align: center;
  font-size: 10px;
}
.article_image1{
filter: grayscale(0%);
transition: 5s;
}

.spinner > div {
  background-color: #333;
  height: 100%;
  width: 6px;
  display: inline-block;
  
  -webkit-animation: sk-stretchdelay 1.2s infinite ease-in-out;
  animation: sk-stretchdelay 1.2s infinite ease-in-out;
}

.spinner .rect2 {
  -webkit-animation-delay: -1.1s;
  animation-delay: -1.1s;
}

.spinner .rect3 {
  -webkit-animation-delay: -1.0s;
  animation-delay: -1.0s;
}

.spinner .rect4 {
  -webkit-animation-delay: -0.9s;
  animation-delay: -0.9s;
}

.spinner .rect5 {
  -webkit-animation-delay: -0.8s;
  animation-delay: -0.8s;
}

@-webkit-keyframes sk-stretchdelay {
  0%, 40%, 100% { -webkit-transform: scaleY(0.4) }  
  20% { -webkit-transform: scaleY(1.0) }
}

@keyframes sk-stretchdelay {
  0%, 40%, 100% { 
    transform: scaleY(0.4);
    -webkit-transform: scaleY(0.4);
  }  20% { 
    transform: scaleY(1.0);
    -webkit-transform: scaleY(1.0);
  }
}
::-moz-selection { /* Code for Firefox */
    color: white;
    background: black;
}
::selection {
    color: white;
    background: black;
}
    </style>
    <link rel="icon" type="image/x-icon" href="favicon.ico"/>
    <script>(function(H){H.className=H.className.replace(/\bno-js\b/,'js')})(document.documentElement)</script>
    @yield('title')
  </head>
  <body>
    
    @yield('content')




    <script src="assets/js/main.js"></script>
    <script src="assets/js/separate-js/custom.js"></script>
   
    <script src="assets/plugins/3d-bold-navigation/main.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/slider-pro/jquery.sliderPro.js"></script>
 
    <script src="assets/plugins/owl-carousel/owl.carousel.min.js"></script>
    <script src="assets/plugins/isotope/isotope.pkgd.min.js"></script>
    <script src="assets/plugins/prettyphoto/jquery.prettyPhoto.js"></script>
    <script src="assets/plugins/bootstrap-select/bootstrap-select.js"></script>
    <script src="assets/plugins/rendro-easy-pie-chart/jquery.easypiechart.min.js"></script>
    <script src="assets/plugins/doubletaptogo.js"></script>
    <script src="assets/plugins/waypoints.min.js"></script>
    <script src="assets/plugins/news-ticker/js/endlessRiver.js"></script>
    <script src="assets/plugins/datetimepicker/jquery.datetimepicker.js"></script>
    <script src="assets/plugins/flexslider/jquery.flexslider.js"></script>
    <script src="assets/plugins/jarallax/jarallax.js"></script>
    <script src="assets/plugins/scrollreveal/scrollreveal.js"></script>
    <script src="assets/plugins/classie.js"></script>
    <!-- <script src="assets/plugins/switcher/js/dmss.js"></script> -->
    <script src="assets/js/pinterest_grid.js"></script>
    <script>
      $(document).ready(function() {
        $('#pinBoot').pinterest_grid({
          no_columns: 4,
          padding_x: 10,
          padding_y: 10,
          margin_bottom: 50,
          single_column_breakpoint: 700
            });
        });
      function myFunction001() {
          document.getElementById("demo").innerHTML = '<button type="button" class="btn btn-info btn-typography btn-lg load_001 color_003"><i class="fa fa-spinner fa-pulse fa-3x fa-fw color-002"></i></button>';
      }

    </script>
    <script type="text/javascript">
    var page = 1;
    function showmore(){
       page++;
          $.ajax({
              url: '?page=' + page,
              method: 'GET',
              dataType: 'json',
              beforeSend: function() {
                $('#spinner').show();
              }
            }).done(function(html) {
              console.log(html.html);
              if(html.html == ""){
                  $('#showmorebtn').remove();
                  $('#spinner').hide();
                  $('.load_001').html('<div class="text-center" style="text-align: center;">Өөр нийтлэл байхгүй байна</div>');
                  return;
              }

              $('#pinBoot').append(html.html);
               $('#spinner').hide();
            }).always(function() {

            });
      }
      
  </script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-115315780-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-115315780-1');
</script>

  </body>
</html>
