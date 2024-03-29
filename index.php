<?php get_header(); ?>

<div class="site-mobile-menu site-navbar-target">
  <div class="site-mobile-menu-header">
    <div class="site-mobile-menu-close mt-3">
      <span class="icon-close2 js-menu-toggle"></span>
    </div>
  </div>
  <div class="site-mobile-menu-body"></div>
</div> <!-- .site-mobile-menu -->


<div class="site-navbar-wrap">

  <div class="site-navbar site-navbar-target js-sticky-header">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-6 col-md-4">
          <h1 class="my-0 site-logo"><a href="index.html">Grunt<span class="text-primary">.</span> </a></h1>
        </div>
        <div class="col-6 col-md-8">
          <nav class="site-navigation text-right" role="navigation">
            <d iv class="container">


              <?php
                  if( has_nav_menu('primary')){
                 
                      wp_nav_menu([
                        
                        'menu_class' => 'nav justify-content-center topnav',
                        'theme_location'      =>   'primary' , 
                          'fallback_cb'         =>  false,
                          'depth'               =>  4
                      ]);    
                   } 
                ?>
        </div>
        </nav>
      </div>
    </div>
  </div>
</div>
</div> <!-- END .site-navbar-wrap -->

   

<div class="site-blocks-cover" id="home-section">
  <div class="img-wrap">
    <div class="owl-carousel slide-one-item hero-slider">
      <div class="slide">
        <img src="   <?php bloginfo('template_directory'); ?>/assets/images/glint_hero_1.jpg" alt="Image">
      </div>
      <div class="slide">
        <img src="   <?php bloginfo('template_directory'); ?>/assets/images/glint_hero_2.jpg" alt="Image">
      </div>
      <div class="slide">
        <img src="   <?php bloginfo('template_directory'); ?>/assets/images/glint_hero_3.jpg" alt="Image">
      </div>
    </div>
  </div>
  <div class="container">

    <div class="row">
      <div class="col-md-6 ml-auto align-self-center">
        <div class="intro">
          <div class="heading">

            <h1> <?php echo get_theme_mod('banner_heading' , 'Banner Heading'); ?> </h1>
          </div>
          <div class="text">
            <p class="sub-text mb-5"> <?php echo get_theme_mod('banner_text' , 'hello welcome to grunt studio :)'); ?></p>
            <p><a href="#" target="_blank" class="btn btn-outline-primary btn-md">Start a project</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> <!-- END .site-blocks-cover -->



<!---what-we-do section ---->

<?php

if(have_posts()){
  while(have_posts()){
    the_post();

    get_template_part('partials/post/what-we-do');

  
  }
}
?>

<!-- END .site-section , what we do -->

<div class="site-section" id="about-section">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 mb-5">
        <img src="   <?php bloginfo('template_directory'); ?>/assets/images/glint_about_1.jpg" alt="Image" class="img-fluid">
      </div>
      <div class="col-lg-5 ml-auto section-title">
        <span class="sub-title mb-2 d-block">Acquaint Us</span>
        <h2 class="title text-primary mb-3">About us</h2>
        <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It
          is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>


        <div class="d-flex">
          <ul class="list-unstyled ul-check success mr-5">
            <li>Design</li>
            <li>Development</li>
            <li>eCommerce</li>

          </ul>
          <ul class="list-unstyled ul-check success">

            <li>Mobile Apps</li>
            <li>Copywriting</li>
            <li>SEO</li>
          </ul>
        </div>
        <p><a data-fancybox data-ratio="2" href="https://vimeo.com/326176805" class="d-flex align-items-center"><span
              class="icon-play_circle_outline h4 m-0 mr-2"></span> <span>Watch the video</span></a></p>
      </div>
    </div>
  </div>
</div> <!-- .END site-section -->


<div class="site-section" id="what-we-do-section">
  <div class="container">
    <div class="row mb-5">
      <div class="col-lg-6 section-title">
        <span class="sub-title mb-2 d-block">Meet The Team</span>
        <h2 class="title text-primary">We are talented people.</h2>
      </div>
    </div>
    <div class="row no-gutters">
      <div class="col-lg-6 mb-5 person">
        <img src="<?php bloginfo('template_directory'); ?>/assets/images/person_1.jpg" alt="Image" class="img-fluid mb-5">

        <div class="row">
          <div class="col-lg-10 ml-auto">
            <div class="pr-lg-5">
              <h3>Jacob Spencer</h3>
              <span class="mb-4 d-block">CEO, Co-Founder</span>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the
                blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language
                ocean.</p>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a
                paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
              <p class="d-flex align-items-center">
                <span class="mr-3 text-black">Follow me:</span>
                <a href="#" class="twitter pr-2 pt-2 pb-2 pl-0"><span class="icon-twitter"></span></a>
                <a href="#" class="facebook p-2"><span class="icon-facebook"></span></a>
                <a href="#" class="dribbble p-2"><span class="icon-dribbble"></span></a>
                <a href="#" class="instagram p-2"><span class="icon-instagram"></span></a>
                <a href="#" class="linkedin p-2"><span class="icon-linkedin"></span></a>
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 person">
        <img src="   <?php bloginfo('template_directory'); ?>/assets/images/person_2.jpg" alt="Image" class="img-fluid mb-5">
        <div class="row">
          <div class="col-lg-10 ml-auto">
            <div class="pr-lg-5">
              <h3>Chris Peters</h3>
              <span class="mb-4 d-block">CTO, Co-Founder</span>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life
                One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World
                of Grammar.</p>
              <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks
                and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her
                initial into the belt and made herself on the way.</p>
              <p class="d-flex align-items-center">
                <span class="mr-3 text-black">Follow me:</span>
                <a href="#" class="twitter pr-2 pt-2 pb-2 pl-0"><span class="icon-twitter"></span></a>
                <a href="#" class="github p-2"><span class="icon-github"></span></a>
                <a href="#" class="dribbble p-2"><span class="icon-dribbble"></span></a>
                <a href="#" class="instagram p-2"><span class="icon-instagram"></span></a>
                <a href="#" class="linkedin p-2"><span class="icon-linkedin"></span></a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="site-section" id="portfolio-section">
  <div class="container">
    <div class="row mb-5 ">
      <div class="col-md-7 section-title text-center mx-auto">
        <span class="sub-title mb-2 d-block">Recent Works</span>
        <h2 class="title text-primary mb-3">We love what we do, check out some of our latest works</h2>
      </div>
    </div>
    <div class="row mb-5">
      <div class="col-lg-6 mb-4 mb-lg-0">
        <img src="   <?php bloginfo('template_directory'); ?>/assets/images/sq_img_2.jpg" alt="Image" class="img-fluid">
      </div>
      <div class="col-lg-5 h-100 jm-sticky-top ml-auto">
        <h3>Project title one</h3>
        <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It
          is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
        <p class="mb-4"><a href="#" class="readmore">Visit website</a></p>
        <div class="testimonial bg-white h-100">
          <blockquote class="mb-3">
            <p>&ldquo;Far far away, behind the word mountains, <strong>far from the countries Vokalia and Consonantia,
                there live the blind texts. Separated they live in Bookmarksgrove</strong> right at the coast of the
              Semantics, a large language ocean.&rdquo;</p>
          </blockquote>
          <div class="d-flex align-items-center vcard">
            <figure class="mb-0 mr-3">
              <img src="   <?php bloginfo('template_directory'); ?>/assets/images/person_3.jpg" alt="Image" class="img-fluid ounded-circle">
            </figure>
            <div class="vcard-text">
              <span class="d-block">Jacob Spencer</span>
              <span class="position">Web Designer</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row mb-5">
      <div class="col-lg-6 order-1 order-lg-2 mb-4 mb-lg-0">
        <img src="   <?php bloginfo('template_directory'); ?>/assets/images/sq_img_4.jpg" alt="Image" class="img-fluid">
      </div>
      <div class="col-lg-5 h-100 jm-sticky-top mr-auto order-2 order-lg-1">
        <h3>Project title two</h3>
        <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It
          is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
        <p class="mb-4"><a href="#" class="readmore">Visit website</a></p>
        <div class="testimonial bg-white h-100">
          <blockquote class="mb-3">
            <p>&ldquo;A small river named Duden <strong>flows by their place and supplies it with the necessary
                regelialia</strong>. It is a paradisematic country, in which roasted parts of sentences fly into your
              mouth.&rdquo;</p>
          </blockquote>
          <div class="d-flex align-items-center vcard">
            <figure class="mb-0 mr-3">
              <img src="   <?php bloginfo('template_directory'); ?>/assets/images/person_4.jpg" alt="Image" class="img-fluid ounded-circle">
            </figure>
            <div class="vcard-text">
              <span class="d-block">Jean Smith</span>
              <span class="position">Web Designer</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row mb-5">
      <div class="col-lg-6 mb-4 mb-lg-0">
        <img src="   <?php bloginfo('template_directory'); ?>/assets/images/sq_img_6.jpg" alt="Image" class="img-fluid">
      </div>
      <div class="col-lg-5 h-100 jm-sticky-top ml-auto">
        <h3>Project title three</h3>
        <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It
          is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
        <p class="mb-4><a href=" #" class="readmore">Visit website</a></p>
        <div class="testimonial bg-white h-100">
          <blockquote class="mb-3">
            <p>&ldquo;Far far away, behind the word mountains, <strong>far from the countries Vokalia and Consonantia,
                there live the blind texts. Separated they live in Bookmarksgrove</strong> right at the coast of the
              Semantics, a large language ocean.&rdquo;</p>
          </blockquote>
          <div class="d-flex align-items-center vcard">
            <figure class="mb-0 mr-3">
              <img src="   <?php bloginfo('template_directory'); ?>/assets/images/person_3.jpg" alt="Image" class="img-fluid ounded-circle">
            </figure>
            <div class="vcard-text">
              <span class="d-block">Jacob Spencer</span>
              <span class="position">Web Designer</span>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

<div class="site-section bg-light">
  <div class="container">
    <div class="row mb-5 ">
      <div class="col-md-7 section-title text-center mx-auto">
        <span class="sub-title mb-2 d-block">Testimonials</span>
        <h2 class="title text-primary mb-3">Our Client Sayings</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 mb-4">
        <div class="testimonial bg-white h-100">
          <blockquote class="mb-3">
            <p>&ldquo;Far far away, behind the word mountains, <strong>far from the countries Vokalia and Consonantia,
                there live the blind texts. Separated they live in Bookmarksgrove</strong> right at the coast of the
              Semantics, a large language ocean.&rdquo;</p>
          </blockquote>
          <div class="d-flex align-items-center vcard">
            <figure class="mb-0 mr-3">
              <img src="   <?php bloginfo('template_directory'); ?>/assets/images/person_3.jpg" alt="Image" class="img-fluid ounded-circle">
            </figure>
            <div class="vcard-text">
              <span class="d-block">Jacob Spencer</span>
              <span class="position">Web Designer</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 mb-4">
        <div class="testimonial bg-white h-100">
          <blockquote class="mb-3">
            <p>&ldquo;A small river named Duden <strong>flows by their place and supplies it with the necessary
                regelialia</strong>. It is a paradisematic country, in which roasted parts of sentences fly into your
              mouth.&rdquo;</p>
          </blockquote>
          <div class="d-flex align-items-center vcard">
            <figure class="mb-0 mr-3">
              <img src="   <?php bloginfo('template_directory'); ?>/assets/images/person_4.jpg" alt="Image" class="img-fluid ounded-circle">
            </figure>
            <div class="vcard-text">
              <span class="d-block">Jean Smith</span>
              <span class="position">Web Designer</span>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-6 mb-4">
        <div class="testimonial bg-white h-100">
          <blockquote class="mb-3">
            <p>&ldquo;A small river named Duden <strong>flows by their place and supplies it with the necessary
                regelialia</strong>. It is a paradisematic country, in which roasted parts of sentences fly into your
              mouth.&rdquo;</p>
          </blockquote>
          <div class="d-flex align-items-center vcard">
            <figure class="mb-0 mr-3">
              <img src="   <?php bloginfo('template_directory'); ?>/assets/images/person_4.jpg" alt="Image" class="img-fluid ounded-circle">
            </figure>
            <div class="vcard-text">
              <span class="d-block">Jean Smith</span>
              <span class="position">Web Designer</span>
            </div>
          </div>
        </div>

      </div>
      <div class="col-lg-6 mb-4">
        <div class="testimonial bg-white h-100">
          <blockquote class="mb-3">
            <p>&ldquo;Far far away, behind the word mountains, <strong>far from the countries Vokalia and Consonantia,
                there live the blind texts. Separated they live in Bookmarksgrove</strong> right at the coast of the
              Semantics, a large language ocean.&rdquo;</p>
          </blockquote>
          <div class="d-flex align-items-center vcard">
            <figure class="mb-0 mr-3">
              <img src="   <?php bloginfo('template_directory'); ?>/assets/images/person_3.jpg" alt="Image" class="img-fluid ounded-circle">
            </figure>
            <div class="vcard-text">
              <span class="d-block">Jacob Spencer</span>
              <span class="position">Web Designer</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<div class="site-section" id="studio-section">
  <div class="container">

    <div class="row mb-5 ">
      <div class="col-md-7 section-title text-center mx-auto">
        <span class="sub-title mb-2 d-block">Photos</span>
        <h2 class="title text-primary mb-3">Studio Gallery</h2>
      </div>
    </div>

    <div id="posts" class="row no-gutter">
      <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
        <a href="<?php bloginfo('template_directory'); ?>/assets/images/sq_img_1.jpg" class="item-wrap" data-fancybox="gal">
          <span class="icon-search2"></span>
          <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/assets/images/sq_img_1.jpg">
        </a>
      </div>
      <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
        <a href="<?php bloginfo('template_directory'); ?>/assets/images/sq_img_2.jpg" class="item-wrap" data-fancybox="gal">
          <span class="icon-search2"></span>
          <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/assets/images/sq_img_2.jpg">
        </a>
      </div>

      <div class="item brand col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
        <a href="<?php bloginfo('template_directory'); ?>/assets/images/sq_img_3.jpg" class="item-wrap" data-fancybox="gal">
          <span class="icon-search2"></span>
          <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/assets/images/sq_img_3.jpg">
        </a>
      </div>

      <div class="item design col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
        <a href="<?php bloginfo('template_directory'); ?>/assets/images/sq_img_4.jpg" class="item-wrap" data-fancybox="gal">
          <span class="icon-search2"></span>
          <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/assets/images/sq_img_4.jpg">
        </a>
      </div>

      <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
        <a href="<?php bloginfo('template_directory'); ?>/assets/images/sq_img_5.jpg" class="item-wrap" data-fancybox="gal">
          <span class="icon-search2"></span>
          <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/assets/images/sq_img_5.jpg">
        </a>
      </div>

      <div class="item brand col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
        <a href="<?php bloginfo('template_directory'); ?>/assets/images/sq_img_6.jpg" class="item-wrap" data-fancybox="gal">
          <span class="icon-search2"></span>
          <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/assets/images/sq_img_6.jpg">
        </a>
      </div>

      <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
        <a href="<?php bloginfo('template_directory'); ?>/assets/images/sq_img_7.jpg" class="item-wrap" data-fancybox="gal">
          <span class="icon-search2"></span>
          <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/assets/images/sq_img_7.jpg">
        </a>
      </div>

      <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
        <a href="<?php bloginfo('template_directory'); ?>/assets/images/sq_img_9.jpg" class="item-wrap" data-fancybox="gal">
          <span class="icon-search2"></span>
          <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/assets/images/sq_img_9.jpg">
        </a>
      </div>

      <div class="item design col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
        <a href="<?php bloginfo('template_directory'); ?>/assets/images/sq_img_10.jpg" class="item-wrap" data-fancybox="gal">
          <span class="icon-search2"></span>
          <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/assets/images/sq_img_10.jpg">
        </a>
      </div>

      <div class="item brand col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
        <a href="<?php bloginfo('template_directory'); ?>/assets/images/sq_img_11.jpg" class="item-wrap" data-fancybox="gal">
          <span class="icon-search2"></span>
          <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/assets/images/sq_img_11.jpg">
        </a>
      </div>

      <div class="item design col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
        <a href="<?php bloginfo('template_directory'); ?>/assets/images/sq_img_12.jpg" class="item-wrap" data-fancybox="gal">
          <span class="icon-search2"></span>
          <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/assets/images/sq_img_12.jpg">
        </a>
      </div>


    </div>
  </div>
</div> <!-- END .site-section -->

<div class="site-section" id="contact-section">
  <div class="container">
    <form action="" class="contact-form">

      <div class="section-title text-center mb-5">
        <span class="sub-title mb-2 d-block">Get In Touch</span>
        <h2 class="title text-primary">Contact Us</h2>
      </div>

      <div class="row mb-4">
        <div class="col-md-6 mb-4 mb-md-0">
          <input type="text" class="form-control" placeholder="First name">
        </div>
        <div class="col-md-6">
          <input type="text" class="form-control" placeholder="Last name">
        </div>
      </div>

      <div class="row mb-4">
        <div class="col-12">
          <input type="text" class="form-control" placeholder="Email">
        </div>
      </div>

      <div class="row mb-4">
        <div class="col-12">
          <textarea class="form-control" name="" id="" cols="30" rows="10" placeholder="Message"></textarea>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <button type="submit" class="btn btn-primary btn-md">Send Message</button>
        </div>
      </div>

    </form>
  </div>
</div> <!-- END .site-section -->

<?php get_footer(); ?>