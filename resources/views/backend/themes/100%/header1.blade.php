
        <i class="fa fa-edit editi" onclick="delete1()"></i> 
        <i class="fa fa-trash-o deletei " id="delete_div"></i>

        <article class="post post-3 post-3_mod-e clearfix profile_person_001">
            <img src="/uploads/ProfileImage/{{$conversation->poster->avatar}}" alt="Foto" class="img-responsive new_person"/>
            
        <div class="entry-main002">
          <div class="entry-header text-center">
           <a href="#"> <p class="roboto_text font_14 gan"><b>{{$conversation->poster->name}}</b></p></a>
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
            @foreach($conversation->poster->socials as $social)
            <li><a href="#" class="social-links__item_link "><i class="{{$social->icon}}"></i></a></li>
            @endforeach
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
                      <h2 class="widget-title ui-title-inner text-right roboto_text onts">Онцлох</h2>
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
                                  <h2 class="entry-title"><a href="#">С.БАЯР: ЯАЛТАЙ Ч БИЛЭЭ...</a></h2>
                                </div>
                                <div class="entry-meta"><span class="category color-2">улс төр</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="#" class="entry-meta__link">12</a></span></div>
                              </div>
                            </article>
                            <article class="post post-3 post-3_mod-e clearfix">
                              <div class="entry-media"><a href="/assets/media/content/post/100x100/1.jpg" class="prettyPhoto"><img src="/assets/media/content/post/100x100/1.jpg" alt="Foto" class="img-responsive"/></a></div>
                              <div class="entry-main">
                                <div class="entry-header">
                                  <h2 class="entry-title"><a href="#">ӨНДРИЙН ЦУВААНД ҮҮЛЭН ДЭЭГҮҮР ЯВАХ Л САЙХАН</a></h2>
                                </div>
                                <div class="entry-meta"><span class="category color-2">бусад</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="#" class="entry-meta__link">12</a></span></div>
                              </div>
                            </article>
                            <article class="post post-3 post-3_mod-e clearfix">
                              <div class="entry-media"><a href="/assets/media/content/post/100x100/9.jpg" class="prettyPhoto"><img src="/assets/media/content/post/100x100/9.jpg" alt="Foto" class="img-responsive"/></a></div>
                              <div class="entry-main">
                                <div class="entry-header">
                                  <h2 class="entry-title"><a href="#">М.ЧИНБОЛД: ХААЛГАА ХААСАН ХҮН ХӨГЖДӨГГҮЙ ШҮҮ ДЭЭ</a></h2>
                                </div>
                                <div class="entry-meta"><span class="category color-2">улс төр</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="#" class="entry-meta__link">12</a></span></div>
                              </div>
                            </article>
                            <article class="post post-3 post-3_mod-e clearfix">
                              <div class="entry-media"><a href="/assets/media/content/post/100x100/5.jpg" class="prettyPhoto"><img src="/assets/media/content/post/100x100/5.jpg" alt="Foto" class="img-responsive"/></a></div>
                              <div class="entry-main">
                                <div class="entry-header">
                                  <h2 class="entry-title"><a href="#">Л.БОЛДБААТАР</a></h2>
                                </div>
                                <div class="entry-meta"><span class="category color-2">Урлаг соёл</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="#" class="entry-meta__link">12</a></span></div>
                              </div>
                            </article>
                          </div>
                          <div id="tab-2-2" class="tab-pane fade">
                            <article class="post post-3 post-3_mod-e clearfix">
                              <div class="entry-media"><a href="/assets/media/content/post/100x100/5.jpg" class="prettyPhoto"><img src="/assets/media/content/post/100x100/5.jpg" alt="Foto" class="img-responsive"/></a></div>
                              <div class="entry-main">
                                <div class="entry-header">
                                  <h2 class="entry-title"><a href="#">АЗ ЖАРГАЛЫН ХОЁР ӨГӨГДЭХҮҮН ХОЁУЛАА МОНГОЛ ХҮНД БАЙНА</a></h2>
                                </div>
                                <div class="entry-meta"><span class="category color-2">улс төр</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="#" class="entry-meta__link">12</a></span></div>
                              </div>
                            </article>
                            <article class="post post-3 post-3_mod-e clearfix">
                              <div class="entry-media"><a href="/assets/media/content/post/100x100/5.jpg" class="prettyPhoto"><img src="/assets/media/content/post/100x100/5.jpg" alt="Foto" class="img-responsive"/></a></div>
                              <div class="entry-main">
                                <div class="entry-header">
                                  <h2 class="entry-title"><a href="#">ХЭЦҮҮ ЗАМААР ЯВЖ ХҮРСЭН АМЖИЛТ Л БАТ БӨХ, ДАРХЛААТАЙ, БАС ҮНЭ ЦЭНЭТЭЙ БАЙДАГ</a></h2>
                                </div>
                                <div class="entry-meta"><span class="category color-22">улс төр</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="#" class="entry-meta__link">12</a></span></div>
                              </div>
                            </article>
                          </div>
                          <div id="tab-2-3" class="tab-pane fade">
                            <article class="post post-3 post-3_mod-e clearfix">
                              <div class="entry-media"><a href="/assets/media/content/post/100x100/5.jpg" class="prettyPhoto"><img src="/assets/media/content/post/100x100/5.jpg" alt="Foto" class="img-responsive"/></a></div>
                              <div class="entry-main">
                                <div class="entry-header">
                                  <h2 class="entry-title"><a href="#">ТӨРИЙН ДАЛБААНЫХАА ӨМНӨ, ТӨРИЙН ДУУЛЛЫНХАА ДОР, МОНГОЛОО ДУУРСГАХЫН ТӨЛӨӨ ЗҮТГЭЖ СУРЛАА</a></h2>
                                </div>
                                <div class="entry-meta"><span class="category color-2">Sport</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="#" class="entry-meta__link">12</a></span></div>
                              </div>
                            </article>
                            <article class="post post-3 post-3_mod-e clearfix">
                              <div class="entry-media"><img src="/assets/media/content/post/100x100/2.jpg" alt="Foto" class="img-responsive"/></div>
                              <div class="entry-main">
                                <div class="entry-header">
                                  <h2 class="entry-title"><a href="#">OPEN DOOR</a></h2>
                                </div>
                                <div class="entry-meta"><span class="category color-2">улс төр</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="#" class="entry-meta__link">12</a></span></div>
                              </div>
                            </article>
                          </div>
                        </div>
                      </div>
                    </section>
                  </aside>