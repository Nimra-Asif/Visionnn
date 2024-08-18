<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Sassly HTML5 Template">

  <title>Sassly AI Image Generator</title>

  <!-- Fav Icon -->
  <link rel="icon" type="image/x-icon" href="https://crowdytheme.com/html/assets/imgs/logo/favicon.webp">





  <!-- All CSS files -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/all.min.css">
  <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
  <link rel="stylesheet" href="assets/css/progressbar.css">
  <link rel="stylesheet" href="assets/css/meanmenu.min.css">
  <link rel="stylesheet" href="assets/css/magnific-popup.css">
  <link rel="stylesheet" href="assets/css/master-ai-image-generator.css">




</head>


<body class="font-heading-plus-jakarta-sans-medium">

  <!-- Preloader -->
  <div id="preloader">
    <div id="container" class="container-preloader">
      <div class="animation-preloader">
        <div class="spinner"></div>
        <div class="txt-loading">
          <span data-text="S" class="characters">S</span>
          <span data-text="A" class="characters">A</span>
          <span data-text="S" class="characters">S</span>
          <span data-text="S" class="characters">S</span>
          <span data-text="L" class="characters">L</span>
          <span data-text="Y" class="characters">Y</span>
        </div>
      </div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
    </div>
  </div>

  <!-- Cursor Animation -->
  <div class="cursor1"></div>
  <div class="cursor2"></div>

  <!-- Sroll to top -->
  <div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
    </svg>
  </div>

  <!-- Switcher Area Start -->
  <div class="switcher__area">
    <div class="switcher__icon">
      <button id="switcher_open"><i class="fa-solid fa-gear"></i></button>
      <button id="switcher_close"><i class="fa-solid fa-xmark"></i></button>
    </div>
    <div class="switcher__items">
      <div class="switcher__item">
        <div class="switch__title-wrap">
          <p class="switcher__title">Language Support</p>
        </div>
        <div class="switcher__btn lang_dir wc-col-2">
          <button class="active" data-mode="ltr">LTR</button>
          <button data-mode="rtl">RTL</button>
        </div>
      </div>
      <div class="switcher__item">
        <div class="switch__title-wrap">
          <p class="switcher__title">Layout</p>
        </div>
        <div class="switcher__btn layout-type wc-col-2">
          <button class="active" data-mode="full-width">Full Width</button>
          <button data-mode="box-layout">Box Layout</button>
        </div>
      </div>
      <div class="switcher__item">
        <div class="switch__title-wrap">
          <p class="switcher__title">Cursor</p>
        </div>
        <div class="switcher__btn">
          <select name="cursor-style" id="cursor_style">
            <option value="1">default</option>
            <option selected value="2">animated</option>
          </select>
        </div>
      </div>
    </div>
  </div>
  <!-- Switcher Area End -->

  <!-- offcanvas start  -->
  <div class="offcanvas-area">
    <div class="offcanvas-area-meta-wrapper">
      <span id="close_offcanvas" class="close-offcanvas">
        <img src="assets/imgs/icon/close.png" alt="close">
      </span>
      <div class="offcanvas-btn-wrapper">
        <a target="_blank" href="https://themeforest.net/item/axtra-digital-agency-creative-portfolio-theme/43074408"
          class="wc-btn wc-btn-default btn-hover-cropping">Purchase now</a>
      </div>
    </div>
    <div class="offcanvas-area-menu-wrapper">
      <ul id="accordion" class="accordion">
        <li>
          <div class="link">Home <img class="angle-down" src="assets/imgs/icon/angle-down.png" alt="icon image">
          </div>
          <ul class="submenu">
            <li><a href="ai-content-writer.html">AI Content Writer</a></li>
            <li><a href="ai-image-generator.html"  class="active-page">AI Image Generator</a></li>
            <li><a href="ai-chatbot.html">AI Chatbot</a></li>
            <li><a href="ai-seo.html">AI SEO Software</a></li>
            <li><a href="ai-software.html">AI Startups</a></li>
            <li><a href="ai-video-editor.html">AI Video Editor</a></li>
            <li><a href="booking.html">Booking Software</a></li>
            <li><a href="online-meeting.html">Virtual Meeting</a></li>
            <li><a href="crm.html">CRM Software</a></li>
            <li><a href="customer-service.html">Customer Support</a></li>
            <li><a href="mobile-apps.html">Mobile App / SASS</a></li>
            <li><a href="marketing-automation.html">Marketing automation</a></li>
          </ul>
        </li>
        <li>
        <li><a href="about.html">About</a></li>
        <li>
          <div class="link">Pages<img class="angle-down" src="assets/imgs/icon/angle-down.png" alt="icon image"></div>
          <ul class="submenu">
            <li><a href="integration.html">integration</a></li>
            <li><a href="integration-single.html">integration single</a></li>
            <li><a href="about.html">about</a></li>
            <li><a href="contact.html">contact</a></li>
            <li><a href="404.html">404</a></li>
            <li><a href="pricing.html">pricing</a></li>
            <li><a href="faq.html">faq</a></li>
            <li><a href="all-template.html">video templete</a></li>
            <li><a href="team.html">team page</a></li>
            <li><a href="privacy-policy.html">privacy policy</a></li>
          </ul>
        </li>
        <li><a href="pricing.html">Pricing</a></li>
        <li><a href="team.html">Team</a></li>
        <li><a href="faq.html">FaQ</a></li>
        <li>
          <div class="link">Blog<img class="angle-down" src="assets/imgs/icon/angle-down.png" alt="icon image"></div>
          <ul class="submenu">
            <li><a href="blog.html">Our Blog</a></li>
            <li><a href="blog-details.html">Blog Details</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
  <!-- offcanvas end  -->


  <!-- search modal start -->
  <div class="modal fade" id="search-template" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="search-template" aria-hidden="true">
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
          <form action="ai-image-generator.html#" class="form-search">
            <input type="text" placeholder="Search">
            <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- search modal end -->

  <!-- Header area start -->
  <header class="header-area style-1 pos-abs zi-9">
    <div class="container">
      <div class="header-area__inner">
        <div class="header__logo">
          <a href="index.html">
            <img src="assets/imgs/logo/logo-9.webp" class="normal-logo" alt="Site Logo">
            <img src="assets/imgs/logo/logo-13.webp" class="sticky-logo" alt="Site Logo">
          </a>
        </div>
        <div class="header__nav pos-center">
          <nav class="main-menu">
            <ul>
              <li class="menu-item-has-children"><a href="index.html">home</a>
                <ul class="dp-menu">
                  <li><a href="ai-content-writer.html">AI Content Writer</a></li>
                  <li><a href="ai-image-generator.html" class="active-page">AI Image Generator</a></li>
                  <li><a href="ai-chatbot.html">AI Chatbot</a></li>
                  <li><a href="ai-seo.html">AI SEO Software</a></li>
                  <li><a href="ai-software.html">AI Startups</a></li>
                  <li><a href="ai-video-editor.html">AI Video Editor</a></li>
                  <li><a href="booking.html">Booking Software</a></li>
                  <li><a href="online-meeting.html">Virtual Meeting</a></li>
                  <li><a href="crm.html">CRM Software</a></li>
                  <li><a href="customer-service.html">Customer Support</a></li>
                  <li><a href="mobile-apps.html">Mobile App / SASS</a></li>
                  <li><a href="marketing-automation.html">Marketing automation</a></li>
                </ul>
              </li>
              <li><a href="about.html">about</a></li>
              <li class="menu-item-has-children">
                <a href="ai-image-generator.html#">Pages</a>
                <ul class="dp-menu">
                  <li><a href="integration.html">integration</a></li>
                  <li><a href="integration-single.html">integration single</a></li>
                  <li><a href="about.html">about</a></li>
                  <li><a href="contact.html">contact</a></li>
                  <li><a href="404.html">404</a></li>
                  <li><a href="pricing.html">pricing</a></li>
                  <li><a href="faq.html">faq</a></li>
                  <li><a href="all-template.html">video templete</a></li>
                  <li><a href="team.html">team page</a></li>
                  <li><a href="privacy-policy.html">privacy policy</a></li>
                </ul>
              </li>
              <li class="menu-item-has-children">
                <a href="ai-image-generator.html#">blog</a>
                <ul class="dp-menu">
                  <li><a href="blog.html">blog</a></li>
                  <li><a href="blog-details.html">blog details</a></li>
                </ul>
              </li>
              <li><a href="contact.html">Contact</a></li>
            </ul>
          </nav>
        </div>
        <div class="header-search" data-bs-toggle="modal" data-bs-target="#search-template">
          <i class="fa-solid fa-magnifying-glass"></i>
        </div>
        <div class="header__button">
          <a href="javascript:void(0)" class="wc-btn wc-btn-primary btn-text-flip" data-bs-toggle="modal"
            data-bs-target="#signupform"> <span data-text="Sign up">Sign
              up</span></a>
        </div>
        <div class="header__navicon d-xl-none">
          <button onclick="showCanvas3()" class="open-offcanvas">
            <i class="fa-solid fa-bars"></i></button>
        </div>
      </div>
    </div>
  </header>
  <!-- Header area end -->

  <div class="has-smooth" id="has_smooth"></div>
  <div id="smooth-wrapper">
    <div id="smooth-content">
      <div class="body-wrapper body-ai-image">

        <!-- overlay switcher close  -->
        <div class="overlay-switcher-close"></div>



        <main>

          <!-- hero area start  -->
          <section class="hero-area">
            <div class="hero-area-bg">
              <img src="assets/imgs/shape/shape-s-33.webp" alt="bg image">
            </div>
            <div class="container">
              <div class="hero-area-inner">
                <div class="section-content">
                  <div class="section-title-wrapper">
                    <div class="title-wrapper">
                      <h1 class="section-title has_fade_anim">Generate your
                        unique <span>AI</span> <span class="shape"><img src="assets/imgs/shape/shape-s-32.webp"
                            alt="shape image"></span> image</h1>
                    </div>
                  </div>
                  <div class="text-wrapper">
                    <p class="text has_fade_anim" data-delay="0.30">Cost-effective solution to generate image in seconds
                      and increasing your conversion
                      rate.</p>
                  </div>
                  <div class="action-box">
                    <div class="tabs-wrapper has_fade_anim" data-delay="0.45">
                      <div class="tabs">
                        <button class="active">Standard</button>
                        <button>Advance</button>
                      </div>
                    </div>
                    <div class="promt-box-wrapper">
                      <div class="promt-box has_fade_anim" data-delay="0.60">
                        <span class="settings">
                          <img src="assets/imgs/icon/settings.webp" alt="icon image">
                        </span>
                        <input type="text" placeholder="Start with detailed description">
                        <button class="wc-btn wc-btn-primary btn-text-flip"> <span
                            data-text="Generate">Generate</span></button>
                      </div>
                    </div>
                    <div class="tags-wrapper has_fade_anim" data-delay="0.75" data-on-scroll="0">
                      <span>Tags:</span>
                      <ul class="tags">
                        <li class="tag">Creative</li>
                        <li class="tag">Animation</li>
                        <li class="tag">Hyperreality</li>
                        <li class="tag">Steampunk</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- hero area end  -->

          <!-- gallery area start  -->
          <div class="gallery-area">
            <div class="container container-x-large">
              <div class="gallery-area-inner">
                <div class="gallery-wrapper">
                  <div class="gallery-image has_fade_anim" data-fade-offset="0">
                    <img src="assets/imgs/gallery/img-s-34.webp" alt="gallery image">
                  </div>
                  <div class="gallery-image has_fade_anim" data-fade-offset="0">
                    <img src="assets/imgs/gallery/img-s-35.webp" alt="gallery image">
                  </div>
                  <div class="gallery-image has_fade_anim" data-fade-offset="0">
                    <img src="assets/imgs/gallery/img-s-36.webp" alt="gallery image">
                  </div>
                  <div class="gallery-image has_fade_anim" data-fade-offset="0">
                    <img src="assets/imgs/gallery/img-s-37.webp" alt="gallery image">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- gallery area end  -->

          <!-- brand area start  -->
          <div class="brand-area section-spacing pb-0">
            <div class="container">
              <div class="brand-logos has_fade_anim">
                <div class="swiper brand-active">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="logo">
                        <img src="assets/imgs/brand/img-s-20.webp" alt="logo">
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="logo">
                        <img src="assets/imgs/brand/img-s-21.webp" alt="logo">
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="logo">
                        <img src="assets/imgs/brand/img-s-22.webp" alt="logo">
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="logo">
                        <img src="assets/imgs/brand/img-s-23.webp" alt="logo">
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="logo">
                        <img src="assets/imgs/brand/img-s-24.webp" alt="logo">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- brand area end  -->

          <!-- power area start  -->
          <section class="power-area section-spacing pb-0">
            <div class="container">
              <div class="power-area-inner">
                <div class="section-content">
                  <div class="section-title-wrapper">
                    <div class="title-wrapper">
                      <h2 class="section-title has_fade_anim">Transform your
                        conversations
                        into AI</h2>
                    </div>
                  </div>
                  <div class="text-wrapper">
                    <p class="text has_fade_anim">Leave pen-and-paper bookings in the past allowing you to focus more on your business
                      or simply enjoy your newfound free time.</p>
                  </div>
                  <div class="feature-list has_fade_anim">
                    <ul>
                      <li>✦ Collaborative Sprint Planning</li>
                      <li>✦ 2 week Sprints</li>
                      <li>✦ Monthly Predictive Pricing</li>
                    </ul>
                  </div>
                  <div class="btn-wrapper has_fade_anim">
                    <a href="about.html" class="wc-btn wc-btn-primary btn-text-flip"> <span data-text="How it work">How
                        it work</span></a>
                  </div>
                </div>
                <div class="power-thumb-box">
                  <div class="power-thumb">
                    <div class="shape-1">
                      <img src="assets/imgs/shape/shape-s-34.webp" alt="shape image">
                    </div>
                    <div class="shape-2">
                      <img src="assets/imgs/shape/shape-s-35.webp" alt="shape image">
                    </div>
                    <div class="card-1" data-speed="0.8">
                      <img src="assets/imgs/icon/icon-s-18.webp" alt="shape image">
                      <p>Most powerful features
                        included to Sassly</p>
                      <img src="assets/imgs/icon/icon-s-19.webp" alt="shape image">
                    </div>
                    <div class="card-2" data-speed="1.2">
                      <img src="assets/imgs/icon/icon-s-20.webp" alt="shape image">
                      <p>Web3 security with AI powered security</p>
                      <span class="tag">3 Hamo</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- power area end  -->

          <!-- features area start  -->
          <section class="features-area section-spacing pb-0">
            <div class="container">
              <div class="features-area-inner">
                <div class="section-header">
                  <div class="section-title-wrapper">
                    <div class="title-wrapper">
                      <h2 class="section-title has_fade_anim">Accelerate your journey
                        in the artificial world</h2>
                    </div>
                  </div>
                  <div class="text-wrapper">
                    <p class="text has_fade_anim">Leave pen-and-paper bookings in the past allowing you to focus more on your business
                      or simply enjoy your newfound free time.</p>
                  </div>
                </div>
                <div class="features-wrapper-box">
                  <div class="features-wrapper">
                    <a href="about.html">
                      <div class="feature-box has_fade_anim">
                        <div class="thumb">
                          <img src="assets/imgs/icon/icon-s-21.webp" alt="feature icon">
                        </div>
                        <div class="content">
                          <h3 class="title">Natural <br>
                            Language</h3>
                          <p class="text">Our expert strategists put the odds in your favor and make your channel
                            standout
                            in a sea of noise.
                          </p>
                          <span href="about.html" class="wc-btn wc-btn-normal">Learn more<i
                              class="fa-solid fa-arrow-right"></i></span>
                        </div>
                      </div>
                    </a>
                    <a href="about.html">
                      <div class="feature-box has_fade_anim" data-delay="0.25">
                        <div class="thumb">
                          <img src="assets/imgs/icon/icon-s-22.webp" alt="feature icon">
                        </div>
                        <div class="content">
                          <h3 class="title">Improvement <br>
                            Everyday</h3>
                          <p class="text">We cover two main aspects of digital storytelling to help you scale no matter
                            of
                            business.
                          </p>
                          <span href="about.html" class="wc-btn wc-btn-normal">Learn more<i
                              class="fa-solid fa-arrow-right"></i></span>
                        </div>
                      </div>
                    </a>
                    <a href="about.html">
                      <div class="feature-box has_fade_anim" data-delay="0.35">
                        <div class="thumb">
                          <img src="assets/imgs/icon/icon-s-23.webp" alt="feature icon">
                        </div>
                        <div class="content">
                          <h3 class="title">Command <br>
                            Anything</h3>
                          <p class="text">Our expert strategists put the odds in your favor and make your channel
                            standout
                            in a sea of noise.
                          </p>
                          <span href="about.html" class="wc-btn wc-btn-normal">Learn more<i
                              class="fa-solid fa-arrow-right"></i></span>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- features area end  -->

          <!-- integration area start  -->
          <section class="integration-area section-spacing pb-0">
            <div class="container">
              <div class="integration-area-inner">
                <div class="section-header">
                  <div class="section-title-wrapper">
                    <div class="title-wrapper">
                      <h2 class="section-title has_fade_anim">Sassly integrate AI
                        powered algorithm
                        system </h2>
                    </div>
                  </div>
                </div>
                <div class="section-content">
                  <div class="content-first">
                    <div class="thumb">
                      <img src="assets/imgs/gallery/img-s-38.webp" class="has_fade_anim" alt="gallery image">
                    </div>
                  </div>
                  <div class="content-last">
                    <div class="thumb">
                      <img src="assets/imgs/gallery/img-s-39.webp" class="has_fade_anim" alt="gallery image">
                    </div>
                    <div class="text-wrapper">
                      <p class="text has_fade_anim">Leave pen-and-paper bookings in the past allowing you to focus more on your
                        business or simply enjoy your newfound free time.</p>
                    </div>
                    <div class="logos-wrapper-box">
                      <div class="logos-wrapper has_fade_anim">
                        <div class="logo-box">
                          <img src="assets/imgs/icon/icon-app-12.webp" alt="app icon">
                        </div>
                        <div class="logo-box">
                          <img src="assets/imgs/icon/icon-app-5.webp" alt="app icon">
                        </div>
                        <div class="logo-box">
                          <img src="assets/imgs/icon/icon-app-10.webp" alt="app icon">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- integration area end  -->

          <!-- testimonial area start  -->
          <section class="testimonial-area section-spacing pb-0">
            <div class="container">
              <div class="testimonial-area-inner">
                <div class="section-header">
                  <div class="section-title-wrapper">
                    <div class="title-wrapper">
                      <h2 class="section-title has_fade_anim">What the users say</h2>
                    </div>
                  </div>
                  <div class="text-wrapper">
                    <p class="text has_fade_anim">Leave pen-and-paper bookings in the past allowing you to focus more on your business
                      or simply enjoy your newfound free time.</p>
                  </div>
                </div>
                <div class="testimonial-wrapper-box">
                  <div class="testimonial-wrapper has_fade_anim">
                    <div class="swiper testimonial-slider">
                      <div class="swiper-wrapper">
                        <div class="swiper-slide">
                          <div class="testimonial-box">
                            <div class="ratings-list">
                              <ul>
                                <li><img src="assets/imgs/icon/rating-star.webp" alt="icon image"></li>
                                <li><img src="assets/imgs/icon/rating-star.webp" alt="icon image"></li>
                                <li><img src="assets/imgs/icon/rating-star.webp" alt="icon image"></li>
                                <li><img src="assets/imgs/icon/rating-star.webp" alt="icon image"></li>
                                <li><img src="assets/imgs/icon/rating-star.webp" alt="icon image"></li>
                              </ul>
                            </div>
                            <p class="text">Improve audience engagement by segmenting. Boost your conversions by
                              targeting
                              subsets from your contacts. Give them content they need.</p>
                            <div class="author">
                              <div class="avatar"><img src="assets/imgs/client/img-s-5.webp" alt="image"></div>
                              <div class="">
                                <h2 class="name">Charry Maron</h2>
                                <span class="meta-title">Developer</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="testimonial-box">
                            <div class="ratings-list">
                              <ul>
                                <li><img src="assets/imgs/icon/rating-star.webp" alt="icon image"></li>
                                <li><img src="assets/imgs/icon/rating-star.webp" alt="icon image"></li>
                                <li><img src="assets/imgs/icon/rating-star.webp" alt="icon image"></li>
                                <li><img src="assets/imgs/icon/rating-star.webp" alt="icon image"></li>
                                <li><img src="assets/imgs/icon/rating-star.webp" alt="icon image"></li>
                              </ul>
                            </div>
                            <p class="text">Our social media engagement soared the first month of using this software
                              that
                              actually get read, and don't just get lost in inboxes.</p>
                            <div class="author">
                              <div class="avatar"><img src="assets/imgs/client/img-s-6.webp" alt="image"></div>
                              <div class="">
                                <h2 class="name">Charry Maron</h2>
                                <span class="meta-title">Developer</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="testimonial-box">
                            <div class="ratings-list">
                              <ul>
                                <li><img src="assets/imgs/icon/rating-star.webp" alt="icon image"></li>
                                <li><img src="assets/imgs/icon/rating-star.webp" alt="icon image"></li>
                                <li><img src="assets/imgs/icon/rating-star.webp" alt="icon image"></li>
                                <li><img src="assets/imgs/icon/rating-star.webp" alt="icon image"></li>
                                <li><img src="assets/imgs/icon/rating-star.webp" alt="icon image"></li>
                              </ul>
                            </div>
                            <p class="text">Simple, effective, and incredibly powerful. My site’s speed doubled, and my
                              bounce rate dropped. Thank you for this amazing tool!</p>
                            <div class="author">
                              <div class="avatar"><img src="assets/imgs/client/img-s-7.webp" alt="image"></div>
                              <div class="">
                                <h2 class="name">Charry Maron</h2>
                                <span class="meta-title">Developer</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="testimonial-box">
                            <div class="ratings-list">
                              <ul>
                                <li><img src="assets/imgs/icon/rating-star.webp" alt="icon image"></li>
                                <li><img src="assets/imgs/icon/rating-star.webp" alt="icon image"></li>
                                <li><img src="assets/imgs/icon/rating-star.webp" alt="icon image"></li>
                                <li><img src="assets/imgs/icon/rating-star.webp" alt="icon image"></li>
                                <li><img src="assets/imgs/icon/rating-star.webp" alt="icon image"></li>
                              </ul>
                            </div>
                            <p class="text">Optimizing images never felt this easy. My website’s performance
                              skyrocketed,
                              and my Google rankings followed suit. I couldn’t be happier!</p>
                            <div class="author">
                              <div class="avatar"><img src="assets/imgs/client/img-s-8.webp" alt="image"></div>
                              <div class="">
                                <h2 class="name">Charry Maron</h2>
                                <span class="meta-title">Developer</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="testimonial-box">
                            <div class="ratings-list">
                              <ul>
                                <li><img src="assets/imgs/icon/rating-star.webp" alt="icon image"></li>
                                <li><img src="assets/imgs/icon/rating-star.webp" alt="icon image"></li>
                                <li><img src="assets/imgs/icon/rating-star.webp" alt="icon image"></li>
                                <li><img src="assets/imgs/icon/rating-star.webp" alt="icon image"></li>
                                <li><img src="assets/imgs/icon/rating-star.webp" alt="icon image"></li>
                              </ul>
                            </div>
                            <p class="text">I thought my site was fast until I optimized my images with this plugin. The
                              difference is astounding. It’s a game-changer for any website owner!</p>
                            <div class="author">
                              <div class="avatar"><img src="assets/imgs/client/img-s-5.webp" alt="image"></div>
                              <div class="">
                                <h2 class="name">Charry Maron</h2>
                                <span class="meta-title">Developer</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="testimonial-box">
                            <div class="ratings-list">
                              <ul>
                                <li><img src="assets/imgs/icon/rating-star.webp" alt="icon image"></li>
                                <li><img src="assets/imgs/icon/rating-star.webp" alt="icon image"></li>
                                <li><img src="assets/imgs/icon/rating-star.webp" alt="icon image"></li>
                                <li><img src="assets/imgs/icon/rating-star.webp" alt="icon image"></li>
                                <li><img src="assets/imgs/icon/rating-star.webp" alt="icon image"></li>
                              </ul>
                            </div>
                            <p class="text">Improve audience engagement by segmenting. Boost your conversions by
                              targeting
                              subsets from your contacts. Give them content they need.</p>
                            <div class="author">
                              <div class="avatar"><img src="assets/imgs/client/img-s-5.webp" alt="image"></div>
                              <div class="">
                                <h2 class="name">Charry Maron</h2>
                                <span class="meta-title">Developer</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="testimonial-box">
                            <div class="ratings-list">
                              <ul>
                                <li><img src="assets/imgs/icon/rating-star.webp" alt="icon image"></li>
                                <li><img src="assets/imgs/icon/rating-star.webp" alt="icon image"></li>
                                <li><img src="assets/imgs/icon/rating-star.webp" alt="icon image"></li>
                                <li><img src="assets/imgs/icon/rating-star.webp" alt="icon image"></li>
                                <li><img src="assets/imgs/icon/rating-star.webp" alt="icon image"></li>
                              </ul>
                            </div>
                            <p class="text">Our social media engagement soared the first month of using this software
                              that
                              actually get read, and don't just get lost in inboxes.</p>
                            <div class="author">
                              <div class="avatar"><img src="assets/imgs/client/img-s-6.webp" alt="image"></div>
                              <div class="">
                                <h2 class="name">Charry Maron</h2>
                                <span class="meta-title">Developer</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="testimonial-box">
                            <div class="ratings-list">
                              <ul>
                                <li><img src="assets/imgs/icon/rating-star.webp" alt="icon image"></li>
                                <li><img src="assets/imgs/icon/rating-star.webp" alt="icon image"></li>
                                <li><img src="assets/imgs/icon/rating-star.webp" alt="icon image"></li>
                                <li><img src="assets/imgs/icon/rating-star.webp" alt="icon image"></li>
                                <li><img src="assets/imgs/icon/rating-star.webp" alt="icon image"></li>
                              </ul>
                            </div>
                            <p class="text">Simple, effective, and incredibly powerful. My site’s speed doubled, and my
                              bounce rate dropped. Thank you for this amazing tool!</p>
                            <div class="author">
                              <div class="avatar"><img src="assets/imgs/client/img-s-7.webp" alt="image"></div>
                              <div class="">
                                <h2 class="name">Charry Maron</h2>
                                <span class="meta-title">Developer</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="testimonial-box">
                            <div class="ratings-list">
                              <ul>
                                <li><img src="assets/imgs/icon/rating-star.webp" alt="icon image"></li>
                                <li><img src="assets/imgs/icon/rating-star.webp" alt="icon image"></li>
                                <li><img src="assets/imgs/icon/rating-star.webp" alt="icon image"></li>
                                <li><img src="assets/imgs/icon/rating-star.webp" alt="icon image"></li>
                                <li><img src="assets/imgs/icon/rating-star.webp" alt="icon image"></li>
                              </ul>
                            </div>
                            <p class="text">Optimizing images never felt this easy. My website’s performance
                              skyrocketed,
                              and my Google rankings followed suit. I couldn’t be happier!</p>
                            <div class="author">
                              <div class="avatar"><img src="assets/imgs/client/img-s-8.webp" alt="image"></div>
                              <div class="">
                                <h2 class="name">Charry Maron</h2>
                                <span class="meta-title">Developer</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="testimonial-box">
                            <div class="ratings-list">
                              <ul>
                                <li><img src="assets/imgs/icon/rating-star.webp" alt="icon image"></li>
                                <li><img src="assets/imgs/icon/rating-star.webp" alt="icon image"></li>
                                <li><img src="assets/imgs/icon/rating-star.webp" alt="icon image"></li>
                                <li><img src="assets/imgs/icon/rating-star.webp" alt="icon image"></li>
                                <li><img src="assets/imgs/icon/rating-star.webp" alt="icon image"></li>
                              </ul>
                            </div>
                            <p class="text">I thought my site was fast until I optimized my images with this plugin. The
                              difference is astounding. It’s a game-changer for any website owner!</p>
                            <div class="author">
                              <div class="avatar"><img src="assets/imgs/client/img-s-5.webp" alt="image"></div>
                              <div class="">
                                <h2 class="name">Charry Maron</h2>
                                <span class="meta-title">Developer</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="pagination-wrapper d-none">
                        <div class="testimonial-pagination"></div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- testimonial area end  -->

          <!-- pricing area start  -->
          <section class="pricing-area section-spacing pb-0">
            <div class="container">
              <div class="pricing-area-inner">
                <div class="section-header">
                  <div class="section-title-wrapper">
                    <div class="title-wrapper">
                      <h2 class="section-title has_fade_anim">Choose
                        your plan.</h2>
                    </div>
                  </div>
                  <div class="text-wrapper">
                    <p class="text has_fade_anim">Leave pen-and-paper bookings in the past allowing you to focus more</p>
                  </div>
                  <div class="wcf__toggle_switcher style-2 has_fade_anim">
                    <div class="slide-toggle-wrapper">
                      <div class="slide-toggle-btn">
                        <div class="shape-1">
                          <img src="assets/imgs/shape/shape-s-36.webp" alt="shape image">
                        </div>
                        <h3 class="offer-text">Save 20% with <br>
                          annual plans</h3>
                        <label for="view-1dfbbd6" class="before_label active">
                          Monthly </label>
                        <input type="checkbox" id="view-1dfbbd6">
                        <label for="view-1dfbbd6" class="switcher"></label>
                        <label for="view-1dfbbd6" class="after_label">
                          Yearly </label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="wcf__toggle_switcher style-2">
                  <div class="toggle-content">
                    <div class="toggle-pane show">
                      <div class="pricing-wrapper-box">
                        <div class="pricing-wrapper has_fade_anim">
                          <div class="pricing-box standard">
                            <h3 class="title">Standard</h3>
                            <h3 class="price">$9.00 <span>/month</span></h3>
                            <p class="description">Additional user account and collaboration</p>
                            <div class="feature-list">
                              <p class="list-title">Advantage:</p>
                              <ul>
                                <li><img src="assets/imgs/icon/check-3.webp" alt="icon image">Unlimited cards</li>
                                <li><img src="assets/imgs/icon/check-3.webp" alt="icon image">Automated management</li>
                                <li><img src="assets/imgs/icon/check-3.webp" alt="icon image">SOX
                                  compliance</li>
                                <li><img src="assets/imgs/icon/check-3.webp" alt="icon image">Enterprise
                                  ERP integrations
                                </li>
                                <li class="disallow"><img src="assets/imgs/icon/check-3.webp" alt="icon image">Limited
                                  tools</li>
                                <li class="disallow"><img src="assets/imgs/icon/check-3.webp" alt="icon image">Local
                                  video issuance</li>
                              </ul>
                            </div>
                            <a href="contact.html" class="wc-btn wc-btn-primary bordered btn-text-flip"> <span
                                data-text="Select plan">Select plan</span></a>
                          </div>
                          <div class="pricing-box silver popular">
                            <span class="tag">Popular</span>
                            <h3 class="title">Premium</h3>
                            <h3 class="price">$19.00 <span>/month</span></h3>
                            <p class="description">Ability to understand and generate content</p>
                            <div class="feature-list">
                              <p class="list-title">Advantage:</p>
                              <ul>
                                <li><img src="assets/imgs/icon/check-5.webp" alt="icon image">Unlimited cards</li>
                                <li><img src="assets/imgs/icon/check-5.webp" alt="icon image">Automated management</li>
                                <li><img src="assets/imgs/icon/check-5.webp" alt="icon image">SOX
                                  compliance</li>
                                <li><img src="assets/imgs/icon/check-5.webp" alt="icon image">Enterprise
                                  ERP integrations
                                </li>
                                <li><img src="assets/imgs/icon/check-5.webp" alt="icon image">Limited
                                  tools</li>
                                <li><img src="assets/imgs/icon/check-5.webp" alt="icon image">Local
                                  video issuance</li>
                              </ul>
                            </div>
                            <a href="contact.html" class="wc-btn wc-btn-primary btn-text-flip"> <span
                                data-text="Select plan">Select plan</span></a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="toggle-pane">
                      <div class="pricing-wrapper-box">
                        <div class="pricing-wrapper">
                          <div class="pricing-box standard">
                            <h3 class="title">Standard</h3>
                            <h3 class="price">$49.00 <span>/month</span></h3>
                            <p class="description">Additional user account and collaboration</p>
                            <div class="feature-list">
                              <p class="list-title">Advantage:</p>
                              <ul>
                                <li><img src="assets/imgs/icon/check-3.webp" alt="icon image">Unlimited cards</li>
                                <li><img src="assets/imgs/icon/check-3.webp" alt="icon image">Automated management</li>
                                <li><img src="assets/imgs/icon/check-3.webp" alt="icon image">SOX
                                  compliance</li>
                                <li><img src="assets/imgs/icon/check-3.webp" alt="icon image">Enterprise
                                  ERP integrations
                                </li>
                                <li class="disallow"><img src="assets/imgs/icon/check-3.webp" alt="icon image">Limited
                                  tools</li>
                                <li class="disallow"><img src="assets/imgs/icon/check-3.webp" alt="icon image">Local
                                  video issuance</li>
                              </ul>
                            </div>
                            <a href="contact.html" class="wc-btn wc-btn-primary bordered btn-text-flip"> <span
                                data-text="Select plan">Select plan</span></a>
                          </div>
                          <div class="pricing-box silver popular">
                            <span class="tag">Popular</span>
                            <h3 class="title">Premium</h3>
                            <h3 class="price">$99.00 <span>/month</span></h3>
                            <p class="description">Ability to understand and generate content</p>
                            <div class="feature-list">
                              <p class="list-title">Advantage:</p>
                              <ul>
                                <li><img src="assets/imgs/icon/check-5.webp" alt="icon image">Unlimited cards</li>
                                <li><img src="assets/imgs/icon/check-5.webp" alt="icon image">Automated management</li>
                                <li><img src="assets/imgs/icon/check-5.webp" alt="icon image">SOX
                                  compliance</li>
                                <li><img src="assets/imgs/icon/check-5.webp" alt="icon image">Enterprise
                                  ERP integrations
                                </li>
                                <li><img src="assets/imgs/icon/check-5.webp" alt="icon image">Limited
                                  tools</li>
                                <li><img src="assets/imgs/icon/check-5.webp" alt="icon image">Local
                                  video issuance</li>
                              </ul>
                            </div>
                            <a href="contact.html" class="wc-btn wc-btn-primary btn-text-flip"> <span
                                data-text="Select plan">Select plan</span></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- pricing area end  -->

          <!-- blog area start  -->
          <section class="blog-area section-spacing pb-0">
            <div class="container">
              <div class="blog-area-inner">
                <div class="section-header">
                  <div class="section-title-wrapper">
                    <div class="title-wrapper">
                      <h2 class="section-title has_fade_anim">News & Journal</h2>
                    </div>
                  </div>
                  <div class="text-wrapper">
                    <p class="text has_fade_anim">Leave pen-and-paper bookings in the past allowing you to focus more on your business
                    </p>
                  </div>
                </div>
                <div class="blog-wrapper-box">
                  <div class="blog-wrapper">
                    <article class="blog has_fade_anim">
                      <div class="thumb">
                        <a href="blog-details.html"><img src="assets/imgs/blog/img-s-1.webp" alt="blog image"></a>
                      </div>
                      <div class="content">
                        <div class="meta">
                          <span class="date">28 July 2023</span>
                        </div>
                        <h3 class="title"><a href="blog-details.html">5 tipes for generate customer reports quickly</a>
                        </h3>
                      </div>
                    </article>
                    <article class="blog has_fade_anim" data-delay="0.25">
                      <div class="thumb">
                        <a href="blog-details.html"><img src="assets/imgs/blog/img-s-2.webp" alt="blog image"></a>
                      </div>
                      <div class="content">
                        <div class="meta">
                          <span class="date">14 March 2023</span>
                        </div>
                        <h3 class="title"><a href="blog-details.html">Crafting a brand identity for a digital
                            product</a>
                        </h3>
                      </div>
                    </article>
                    <article class="blog has_fade_anim" data-delay="0.35">
                      <div class="thumb">
                        <a href="blog-details.html"><img src="assets/imgs/blog/img-s-3.webp" alt="blog image"></a>
                      </div>
                      <div class="content">
                        <div class="meta">
                          <span class="date">12 January 2023</span>
                        </div>
                        <h3 class="title"><a href="blog-details.html">Maintaining a voice of superb customer support</a>
                        </h3>
                      </div>
                    </article>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- blog area end  -->

          <!-- cta area start  -->
          <section class="cta-area">
            <div class="container">
              <div class="cta-area-inner section-spacing">
                <div class="section-header">
                  <div class="section-title-wrapper">
                    <div class="title-wrapper">
                      <h2 class="section-title has_fade_anim">Don’t miss, grab the
                        opportunity now! </h2>
                    </div>
                  </div>
                  <div class="text-wrapper">
                    <p class="text has_fade_anim">Unleash the power of AI within Sassly. Upgrade your productivity with Sassly, the
                      open AI Image app.
                    </p>
                  </div>
                  <div class="btn-wrapper has_fade_anim">
                    <a href="contact.html" class="wc-btn wc-btn-primary bordered btn-text-flip"> <span
                        data-text="Get started">Get started</span></a>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- cta area end  -->


        </main>

        <!-- footer area start  -->
        <footer class="footer-area style-3">
          <div class="container">
            <div class="footer-area-inner">
              <div class="footer-widget-wrapper">
                <div class="footer-logo">
                  <img src="assets/imgs/logo/logo-9.webp" alt="site-logo">
                </div>
                <div class="description-text">
                  <div class="text-wrapper">
                    <p class="text">Sassly is a real early-stage software looking for an analytics platform that scales
                      with you, check out our stage program.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="copyright-area-inner">
              <ul class="footer-nav-list">
                <li><a href="ai-image-generator.html#">About</a></li>
                <li><a href="ai-image-generator.html#">Careers</a></li>
                <li><a href="ai-image-generator.html#">Journal</a></li>
                <li><a href="ai-image-generator.html#">Contact</a></li>
                <li><a href="ai-image-generator.html#">System</a></li>
              </ul>
              <ul class="social-links">
                <li><a href="ai-image-generator.html#"><i class="fa-brands fa-facebook-f"></i></a></li>
                <li><a href="ai-image-generator.html#"><i class="fa-brands fa-twitter"></i></a></li>
                <li><a href="ai-image-generator.html#"><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href="ai-image-generator.html#"><i class="fa-brands fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
        </footer>
        <!-- footer area end  -->

      </div>
    </div>
  </div>
  <!-- login form  -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="form-box-wrapper">
          <div class="login-form-box">
            <div class="btn-wrapper">
              <button class="close-btn" data-bs-dismiss="modal"><img src="assets/imgs/icon/cross.webp"
                  alt="icon image"></button>
            </div>
            <div class="title-wrapper">
              <h2 class="title"><span>Welcome <br>
                  Back to</span> Sassly </h2>
            </div>
            <div class="icon">
              <img src="assets/imgs/shape/shape-s-55.webp" alt="shape image">
            </div>
            <div class="form-wrapper">
              <form action="ai-image-generator.html#" class="user-form">
                <div class="input-field">
                  <input type="email" placeholder="Enter your email">
                </div>
                <div class="input-field">
                  <input type="password" placeholder="Enter password">
                </div>
                <div class="policy-field">
                  <input type="checkbox" id="p-policy" name="p-policy" value="Boat">
                  <label for="policy">Remember me</label>
                  <a href="ai-image-generator.html#" class="forget-password">Forgot your password?</a>
                </div>
                <button type="submit" class="subscribe-btn wc-btn-primary btn-text-flip"><span
                    data-text="Login">Login</span></button>
              </form>
            </div>
            <div class="note">
              <p>Don’t have an account? <span><a href="javascript:void(0)" data-bs-dismiss="modal"
                    data-bs-toggle="modal" data-bs-target="#signupform">Create Here!</a></span></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- signup form  -->
  <div class="modal fade" id="signupform" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="form-box-wrapper">
          <div class="register-form-box">
            <div class="btn-wrapper">
              <button class="close-btn" data-bs-dismiss="modal"><img src="assets/imgs/icon/cross.webp"
                  alt="icon image"></button>
            </div>
            <div class="title-wrapper">
              <h2 class="title"><span>Start Your <br>
                  Journey</span> with us.</h2>
            </div>
            <div class="icon">
              <img src="assets/imgs/shape/shape-s-55.webp" alt="shape image">
            </div>
            <div class="form-wrapper">
              <form action="ai-image-generator.html#" class="user-form">
                <div class="input-field">
                  <input type="text" placeholder="Type your name">
                </div>
                <div class="input-field">
                  <input type="text" placeholder="User name">
                </div>
                <div class="input-field">
                  <input type="email" placeholder="Type Email">
                </div>
                <div class="input-field">
                  <input type="password" placeholder="Type Password">
                </div>
                <div class="input-field">
                  <input type="password" placeholder="Confirm Password">
                </div>
                <div class="policy-field">
                  <input type="checkbox" id="d-policy" name="d-policy" value="Boat">
                  <label for="d-policy">I agree to sassly <span><a href="ai-image-generator.html#">Terms of Service.</a></span></label>
                </div>
                <button type="submit" class="subscribe-btn wc-btn-primary btn-text-flip"><span
                    data-text="Register">Register</span></button>
              </form>
            </div>
            <div class="note">
              <p>Already have an account? <span><a href="javascript:void(0)" data-bs-dismiss="modal"
                    data-bs-toggle="modal" data-bs-target="#staticBackdrop">Login Here!</a></span></p>
            </div>
            <h3 class="alternative-title"><span>OR</span></h3>
            <ul class="social-links">
              <li><a href="ai-image-generator.html#"><i class="fa-brands fa-twitter"></i></a></li>
              <li><a href="ai-image-generator.html#"><i class="fa-brands fa-instagram"></i></a></li>
              <li><a href="ai-image-generator.html#"><i class="fa-brands fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- All JS files -->
  <script src="assets/js/jquery-3.6.0.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <script src="assets/js/swiper-bundle.min.js"></script>
  <script src="assets/js/counter.js"></script>
  <script src="assets/js/gsap.min.js"></script>
  <script src="assets/js/ScrollSmoother.min.js"></script>
  <script src="assets/js/ScrollToPlugin.min.js"></script>
  <script src="assets/js/ScrollTrigger.min.js"></script>
  <script src="assets/js/jquery.meanmenu.min.js"></script>
  <script src="assets/js/backToTop.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="assets/js/error-handling.js"></script>
  <script src="assets/js/offcanvas.js"></script>

  <script>

    // testimonial slider
    if (('.testimonial-slider').length) {
      var testimonial_slider = new Swiper(".testimonial-slider", {
        loop: false,
        slidesPerView: 1,
        spaceBetween: 30,
        speed: 1800,
        freeMode: true,
        watchSlidesProgress: true,
        navigation: {
          prevEl: ".testimonial-button-prev",
          nextEl: ".testimonial-button-next",
        },
        pagination: {
          el: '.testimonial-pagination',
          type: 'bullets',
        },
        breakpoints: {
          // when window width is >= px
          576: {
            slidesPerView: 1,
          },
          768: {
            slidesPerView: 2,
          },
          992: {
            slidesPerView: 2,
          },
          1201: {
            slidesPerView: 3,
          },
          1367: {
            slidesPerView: 3,
          },
        }
      });
    }

    // brand_slider_active
    if ('.brand-active') {
      var brand_slider_active = new Swiper(".brand-active", {
        slidesPerView: 5,
        loop: true,
        autoplay: true,
        spaceBetween: 60,
        speed: 3000,
        autoplay: {
          delay: .1,
          disableOnInteraction: false,
        },
        breakpoints: {
          // when window width is >= 320px
          375: {
            slidesPerView: 2,
            spaceBetween: 0,
          },
          // when window width is >= 480px
          480: {
            slidesPerView: 3,
            spaceBetween: 30,
          },
          // when window width is >= 640px
          640: {
            slidesPerView: 4,
            spaceBetween: 40
          },
          // when window width is >= 1366px
          1366: {
            slidesPerView: 5,
          },
        }
      });
    }

    const toggle_switcher = function ($scope) {
      const checked = $("input", $scope);
      const toggle_pane = $(".toggle-pane", $scope);
      const toggle_label = $(".before_label, .after_label", $scope);

      checked.change(function () {
        toggle_pane.toggleClass('show');
        toggle_label.toggleClass('active');
      })
    }
  </script>



</body>

</html>