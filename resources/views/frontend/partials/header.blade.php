<header class="header">
  <div class="header-main">
    <div class="container" id="container_header">
      <div class="row">
        <div class="col-md-4" id="col_md_4_1">
          <ul class="social-links list-inline">
            <li><a href="https://twitter.com/ganchimeg6163" class="social-links__item_link"><i class="icon fa fa-twitter"></i></a></li>
            <li><a href="https://www.facebook.com/" class="social-links__item_link"><i class="icon fa fa-facebook"></i></a></li>
            <li><a href="https://www.instagram.com" class="social-links__item_link"><i class="icon fa fa-instagram"></i></a></li>
            <li><a href="https://www.linkedin.com" class="social-links__item_link"><i class="icon fa fa-linkedin"></i></a></li>
            <li><a href="https://www.youtube.com" class="social-links__item_link"><i class="icon fa fa-youtube-play"></i></a></li>
          </ul>
        </div>
         <div class="col-md-4" id="col_md_4_2">
            <a href="/" class="logo"><img src="{{URL::asset('assets/media/general/logo.svg')}}" alt="Logo" class="logo__img img-responsive center-block" /></a>
        </div>
        <div class="col-md-4" id="col_md_4_3">
          <div class="header-main__links">
            <a href="#" class="trigger cd-nav-trigger" onclick="showajax()">
              <img src="{{URL::asset('assets/media/content/4.png')}}" class="profile1" />
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>    
<nav id="cd-nav" class="cd-nav-container">
      <img src="../assets/media/general/profile.jpg" alt="Foto" class="ganchimeg"/>
      <a href="#0" class="cd-close-nav">Close</a>
      <div class="content-text">
          <span class="text-image">
           <img  src="../assets/media/content/quote/quote.svg" alt="Foto" />
          </span>  
          <span class="text-image1">
            <img  src="../assets/media/content/quote/quote3.svg" alt="Foto" />
          </span>
           <p>
              Бүх юм нь өө сэвгүй, хэт ухаалгийн 
               хорвоод би лав ирээгүй. Тийм болохоор алдаж онох, асаж унтрахаас сийдэггүй.
           </p> 
      </div><br>
     <div>
       <span class="content-text2">
        Бадамдоржийн Ганчимэг
       </span><br>
        <span class="content-text2">
          МУСГЗ, сэтгүүлч
       </span>
     </div>
     <div class="content-text1">
        <p class="color__001 sub_news" id="niit"></p>
        <p class="color__001 sub_news"id="unshigdsan"> </p>
        <p class="color__001 sub_news" id="setgegdel"> </p>
        <a href="/about" class="main-slider__link bg-21 btn btn-xs btn-effect sub_news1" >намтар</a>
     </div>
</nav>
<script>
    function showajax(){
      ajax = $.ajax({
      url: '/readeds',
      type: 'get',
      dataType: 'json'
      }).done(function(jsonString) {
        console.log(jsonString);
            $('#niit').html('Нийт :  '+jsonString.total);
            $('#unshigdsan').html('Уншигдсан :  '+jsonString.readeds);
            $('#setgegdel').html('setgegdel :  '+jsonString.commends);
      }).always(function() {

      });
    }
  </script>