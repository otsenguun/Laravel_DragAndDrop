 <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="footer__first-section">
            <div class="footer__info">  
                <i class="fa fa-twitter" aria-hidden="true" style=" color: #1DA1F3;  font-size: 20px; "></i> 
                @foreach($twitter as $twit)
                {{$twit->desc}}
                @endforeach
            </div>
          </div>
        </div>
        <div class="col-md-8">
          <div class="clearfix">
            <div class="footer-wrap-section">
              <section class="footer-section">
                  <a href="/">
                      <h3 class="footer__title ui-title-inner" >ЯРИЛЦЛАГА</h3>
                  </a>
                  <div class="decor-right decor-right_sm bg-21"></div>
              </section>
              <section class="footer-section">
                 <a href="/"><h3 class="footer__title ui-title-inner">НИЙТЛЭЛ</h3></a>
                <div class="decor-right decor-right_sm bg-21"></div>
              </section>
              <section class="footer-section">
                <a href="/">
                  <h3 class="footer__title ui-title-inner">СУРВАЛЖЛАГА</h3>
                </a>
                <div class="decor-right decor-right_sm bg-21"></div>
              </section>
              <section class="footer-section">
                  <a href="/">
                  <h3 class="footer__title ui-title-inner">ХӨРӨГ</h3>
                  </a>
                  <div class="decor-right decor-right_sm bg-21"></div>
              </section>
              <section class="footer-section">
                <a href="/">
                  <h3 class="footer__title ui-title-inner">УРЛАН</h3>
                </a>
                <div class="decor-right decor-right_sm bg-21"></div>
              </section>
              <section class="footer-section">
                <a href="/contact">
                  <h3 class="footer__title ui-title-inner">ХОЛБОО БАРИХ</h3>
                </a>
                <div class="decor-right decor-right_sm bg-21"></div>
              </section>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div class="footer-bottom__link bg-primary">
              <div class="footer-bottom__wrap-link">Холбогдох<i class="icon fa fa-caret-right"></i></div>
            </div>
            <div class="footer-bottom__inner">
              <ul class="social-links list-inline">
                <li><a href="https://twitter.com/ganchimeg6163" class="social-links__item_link"><i class="icon fa fa-twitter"></i></a></li>
                <li><a href="https://www.facebook.com/" class="social-links__item_link"><i class="icon fa fa-facebook"></i></a></li>
                <li><a href="https://www.instagram.com" class="social-links__item_link"><i class="icon fa fa-instagram"></i></a></li>
                <li><a href="https://www.linkedin.com" class="social-links__item_link"><i class="icon fa fa-linkedin"></i></a></li>
                <li><a href="https://www.youtube.com" class="social-links__item_link"><i class="icon fa fa-youtube-play"></i></a></li>
                
              </ul>
            </div>
            <div class="copyright">© 2018<a href="https://www.woovoo.com/" target="_blank"> Woovoo.</a> Зохиогчийн эрх хуулиар хамгаалагдсан.</div>
          </div>
        </div>
      </div>
    </div>
</footer>