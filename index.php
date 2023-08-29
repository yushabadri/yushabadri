<?php get_header(); ?>
  <div id="hero" class="bgn5 home-bg hero route bg-image">
    <div class="overlay-itro"></div>
    <div class="hero-content display-table">
      <div class="table-cell">
        <div class="container">
          <p class="display-6 color-d">Software Engineer</p>
          <h2 class="hero-title mb-4">Senior Full Stack Developer</h2>
          <p class="hero-subtitle"><span class="typed" data-typed-items="Hello, Welcome to my website, This is my portfolio, you can review my works here"></span></p>
          <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4 portofolio-button" href="#work" role="button">My Portfolio</a></p>
        </div>
      </div>
    </div>
  </div>
  <main id="main" class="main-bg">
    <section id="about" class="about-mf topad-sm-4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="box-shadow-full">
              <div class="row">
                <div class="col-md-12">
                  <div class="about-me pt-4 pt-md-0">
                    <div class="title-box-2"><h3 class="aboutitle"> About me </h3></div>
                    <p class="aboutxt">
                    This journey has been started in 2014 and has continued until now.
                     I started my work with front-end development. Then, by learning <strong>PHP</strong> and <strong>MYSQL</strong> my work began as a full-stack developer by developing websites and web applications for customers.
                     when my experience increased in front-end development I decided to focus all my attention on back-end development during the last few years.
                      </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="portfolio-mf route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="text-center">
              <h3 class="title-a">  Skills  </h3>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row">    
          <div class="col-3 col-md-sk-2 skill-item">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/icon-01.png" alt="Laravel"> 
          </div>
          <div class="col-3 col-md-sk-2 skill-item">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/icon-02.png" alt="MYSQL"> 
          </div>
          <div class="col-3 col-md-sk-2 skill-item">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/icon-03.png" alt="PHP"> 
          </div>
          <div class="col-3 col-md-sk-2 skill-item">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/icon-06.png" alt="HTML,CSS,JS"> 
          </div>
          <div class="col-3 col-md-sk-2 skill-item">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/icon-05.png" alt="WordPress"> 
          </div>
          <div class="col-3 col-md-sk-2 skill-item">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/icon-04.png" alt="Ubuntu"> 
          </div>
          <div class="col-3 col-md-sk-2 skill-item">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/icon-10.png" alt="Docker"> 
          </div>
          <div class="col-3 col-md-sk-2 skill-item">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/icon-09.png" alt="Git"> 
          </div>
        </div>
      </div>
    </section>
    <section id="work" class="portfolio-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a"> Portfolio </h3>
              <p class="subtitle-a"> Some of my portfolios </p>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4">
            <div class="work-box">
              <a href="<?php bloginfo('template_url'); ?>/assets/img/projects/netasu.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
                <div class="work-img">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/projects/netasu.jpg" alt="netasu" class="img-fluid">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-12">
                    <h4 class="w-title">Netasu.co Corporate Website</h4>
                    <div class="w-more">
                      <span class="w-date">Developed with Laravel + HTML,CSS,JS</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="work-box">
              <a href="<?php bloginfo('template_url'); ?>/assets/img/projects/violet-co.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
                <div class="work-img">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/projects/violet-co.jpg" alt="online shop" class="img-fluid">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-12">
                    <h4 class="w-title">VIOLET-CO Mattress Online Shop</h4>
                    <div class="w-more">
                      <span class="w-date">Develoed with Laravel + HTML,CSS,JS</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="work-box">
            <a href="<?php bloginfo('template_url'); ?>/assets/img/projects/shayagasht.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
                <div class="work-img">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/projects/shayagasht.jpg" alt="flight ticket system" class="img-fluid">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-12">
                    <h4 class="w-title">Online Ticketing system</h4>
                    <div class="w-more">
                      <span class="w-date">Developed with LARAVEL + HTML,CSS,JS</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="work-box">
              <a href="<?php bloginfo('template_url'); ?>/assets/img/projects/damac.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
                <div class="work-img">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/projects/damac.jpg" alt="Damac" class="img-fluid">
                </div>
              </a>
            <div class="work-content">
                <div class="row">
                  <div class="col-sm-12">
                    <h4 class="w-title">DAMAC Persian</h4>
                    <div class="w-more">
                      <span class="w-date">Websites & App</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="work-box">
              <a href="<?php bloginfo('template_url'); ?>/assets/img/projects/home_appliance_shop.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
                <div class="work-img">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/projects/home_appliance_shop.jpg" alt="home appliance online shop" class="img-fluid">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-12">
                    <h4 class="w-title">Home Appliance Online Shop</h4>
                    <div class="w-more">
                      <span class="w-date">Develoed with PHP,MVC + HTML,CSS,JS</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="work-box">
              <a href="<?php bloginfo('template_url'); ?>/assets/img/projects/tracingtag.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
                <div class="work-img">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/projects/tracingtag.jpg" alt="tracing tag" class="img-fluid">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-12">
                    <h4 class="w-title">Tracing Tag</h4>
                    <div class="w-more">
                      <span class="w-date">Develoed with PHP,MVC + HTML,CSS,JS</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <div id="showMore-1th" class="disnone"> 
        
          <div class="row">
            <div class="col-md-6 col-lg-4">
              <div class="work-box">
                <a href="<?php bloginfo('template_url'); ?>/assets/img/projects/rashtbeautyclinic.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
                  <div class="work-img">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/projects/rashtbeautyclinic.jpg" alt="Rasht Beauty Clinic" class="img-fluid">
                  </div>
                </a>
                <div class="work-content">
                  <div class="row">
                    <div class="col-sm-12">
                      <h4 class="w-title">Website for a beauty clinic</h4>
                      <div class="w-more">
                        <span class="w-date">Develoed with PHP,MVC + HTML,CSS,JS</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="work-box">
                <a href="<?php bloginfo('template_url'); ?>/assets/img/projects/dordaneharya.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
                  <div class="work-img">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/projects/dordaneharya.jpg" alt="Dordaneh mehr arya" class="img-fluid">
                  </div>
                </a>
                <div class="work-content">
                  <div class="row">
                    <div class="col-sm-12">
                      <h4 class="w-title">Website for a Seed factory - B2B Shop</h4>
                      <div class="w-more">
                        <span class="w-date">Develoed with PHP,MVC + HTML,CSS,JS</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-4">
              <div class="work-box">
                <a href="<?php bloginfo('template_url'); ?>/assets/img/projects/knctech.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
                  <div class="work-img">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/projects/knctech.jpg" alt="KNC Tech" class="img-fluid">
                  </div>
                </a>
                <div class="work-content">
                  <div class="row">
                    <div class="col-sm-12">
                      <h4 class="w-title">Security equipment online store</h4>
                      <div class="w-more">
                        <span class="w-date">Develoed with php + HTML,CSS,JS</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="work-box">
                <a href="<?php bloginfo('template_url'); ?>/assets/img/projects/asgmarlik.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
                  <div class="work-img">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/projects/asgmarlik.jpg" alt="asgmarlik" class="img-fluid">
                  </div>
                </a>
                <div class="work-content">
                  <div class="row">
                    <div class="col-sm-12">
                      <h4 class="w-title">Website for a construction company</h4>
                      <div class="w-more">
                        <span class="w-date">Develoed with Wordpess + HTML,CSS,JS</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="work-box">
                <a href="<?php bloginfo('template_url'); ?>/assets/img/projects/ebtekar.jpgg" data-gallery="portfolioGallery" class="portfolio-lightbox">
                  <div class="work-img">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/projects/ebtekar.jpg" alt="ebtekar" class="img-fluid">
                  </div>
                </a>
                <div class="work-content">
                  <div class="row">
                    <div class="col-sm-12">
                      <h4 class="w-title">Website for an after sales company</h4>
                      <div class="w-more">
                        <span class="w-date">Develoed with php + HTML,CSS,JS</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </div>
          </div>
          <div class="col-md-12 text-center">
            <button id="showbutton" class="button button-a button-big button-rouded allportofolios" onclick="showProject()">Show More</button>
          </div>
        </div>
      </div>
    </section>

    <section id="contact" class="bg2 paralax-mf footer-paralax bg-image sect-mt4 route">
      <div class="overlay-mf"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="contact-mf">
              <div class="box-shadow-full glassbox">
                <div class="row">
                  <div class="col-12 central">
                    <div class="title-box-2 pt-4 pt-md-0">
                      <h3 class="title-left whitext">Get in Touch</h3>
                      <div class="line-mf"></div>
                    </div>
                    <div class="more-info">
                      <p class="lead whitext">To contact me, you can use the following links</p>
                      <div class="socials">
                      <ul>
                        <li><a href="https://t.me/farshadbadri" target="blank"><span class="ico-circle"><i class="bi bi-telegram"></i></span></a></li>
                        <li><a href="https://www.linkedin.com/in/farshadbadri/" target="blank"><span class="ico-circle"><i class="bi bi-linkedin"></i></span></a></li>
                        <li><a href="https://github.com/yushabadri/" target="blank"><span class="ico-circle"><i class="bi bi-github"></i></span></a></li>
                      </ul>
                      </div>
                    </div>
                  </div> 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <?php get_footer(); ?>
