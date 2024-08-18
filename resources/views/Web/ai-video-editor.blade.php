<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Sassly HTML5 Template">

  <title>Sassly Ai Video Editor</title>

  <!-- Fav Icon -->
  <link rel="icon" type="image/x-icon" href="https://crowdytheme.com/html/assets/imgs/logo/favicon.webp">

  <!-- All CSS files -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/all.min.css">
  <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
  <link rel="stylesheet" href="assets/css/meanmenu.min.css">
  <link rel="stylesheet" href="assets/css/magnific-popup.css">
  <link rel="stylesheet" href="assets/css/master-ai-video-editor.css">

</head>

<body class="font-heading-instrument-bold">

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
            <li><a href="ai-image-generator.html">AI Image Generator</a></li>
            <li><a href="ai-chatbot.html">AI Chatbot</a></li>
            <li><a href="ai-seo.html">AI SEO Software</a></li>
            <li><a href="ai-software.html">AI Startups</a></li>
            <li><a href="ai-video-editor.html" class="active-page">AI Video Editor</a></li>
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
          <form action="ai-video-editor.html#" class="form-search">
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
    <div class="header-area__inner">
      <div class="header__logo">
        <a href="index.html">
          <img src="assets/imgs/logo/logo-6.webp" alt="Site Logo">
        </a>
      </div>
      <div class="header__nav pos-center">
        <nav class="main-menu">
          <ul>
            <li class="menu-item-has-children"><a href="index.html">home</a>
              <ul class="dp-menu">
                <li><a href="ai-content-writer.html">AI Content Writer</a></li>
                <li><a href="ai-image-generator.html">AI Image Generator</a></li>
                <li><a href="ai-chatbot.html">AI Chatbot</a></li>
                <li><a href="ai-seo.html">AI SEO Software</a></li>
                <li><a href="ai-software.html">AI Startups</a></li>
                <li><a href="ai-video-editor.html" class="active-page">AI Video Editor</a></li>
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
              <a href="ai-video-editor.html#">Pages</a>
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
            <li>
              <a href="ai-video-editor.html#">blog</a>
              <ul class="dp-menu">
                <li><a href="blog.html">blog</a></li>
                <li><a href="blog-details.html">blog details</a></li>
              </ul>
            </li>
            <li><a href="contact.html">Contact</a></li>
          </ul>
        </nav>
      </div>
      <div class="header__button d-none d-md-block">
        <a href="javascript:void(0)" class="wc-btn wc-btn-primary bordered" data-bs-toggle="modal"
          data-bs-target="#staticBackdrop"> <span data-text="Login">Login</span></a>
        <a href="javascript:void(0)" class="wc-btn wc-btn-primary" data-bs-toggle="modal" data-bs-target="#signupform">
          <span data-text="Sign up">Sign
            up</span></a>
      </div>
      <div class="header__navicon d-xl-none">
        <button onclick="showCanvas3()" class="open-offcanvas">
          <i class="fa-solid fa-bars"></i></button>
      </div>
    </div>
  </header>
  <!-- Header area end -->

  <div class="has-smooth" id="has_smooth"></div>
  <div id="smooth-wrapper">
    <div id="smooth-content">
      <div class="body-wrapper body-video-editor">

        <!-- overlay switcher close  -->
        <div class="overlay-switcher-close"></div>

        <main>

          <!-- banner area start  -->
          <section class="banner-area">
            <div class="shape-2">
              <img src="assets/imgs/shape/shape-r-11.webp" alt="shape">
            </div>
            <div class="container">
              <div class="banner-content">
                <div class="title-wrapper">
                  <h1 class="banner-title has_fade_anim">AI-online video editor</h1>
                </div>
                <div class="banner-text">
                  <p class="text has_fade_anim" data-delay="0.30">Create quality professional videos for your brand by
                    sassly AI online video editor.
                    Choose from 3k+ ready-made awesome video templates</p>
                </div>
                <div class="btn-wrap has_fade_anim" data-delay="0.45">
                  <a href="contact.html" class="wc-btn-primary">Get started now</a>
                </div>
              </div>
              <div class="highlight-text has_fade_anim" data-delay="0.60">
                <p class="text">#1 online AI video
                  editing software
                  by sassly</p>
              </div>
            </div>
          </section>
          <div class="banner-thumb has_fade_anim" data-delay="0.75">
            <div class="video-item">
              <video src="assets/video/editor.mp4" autoplay loop></video>
            </div>
            <img src="assets/imgs/gallery/img-r-10.webp" alt="banner-image">
            <div class="shape-1">
              <img src="assets/imgs/shape/shape-r-7.webp" alt="shape">
            </div>
          </div>
          <!-- banner area end  -->

          <!-- brand area start  -->
          <div class="brand-area has_fade_anim">
            <div class="container">
              <div class="text-wrapper">
                <p class="text">Sassly software trusted by the great company</p>
              </div>
              <div class="brand-logos">
                <div class="swiper brand-active">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="logo">
                        <img src="assets/imgs/brand/img-s-15.webp" alt="logo">
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="logo">
                        <img src="assets/imgs/brand/img-s-16.webp" alt="logo">
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="logo">
                        <img src="assets/imgs/brand/img-s-17.webp" alt="logo">
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="logo">
                        <img src="assets/imgs/brand/img-s-18.webp" alt="logo">
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="logo">
                        <img src="https://crowdytheme.com/html/saasly/assets/imgs/brand/img-s-19.webp" alt="logo">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- brand area end  -->

          <!-- editing area start -->
          <section class="editing-area section-spacing-top">
            <div class="container">
              <div class="row">
                <div class="col-md-6 col-xl-4">
                  <div class="section-heading">
                    <div class="subtitle-wrapper">
                      <p class="subtitle has_fade_anim">Fully <span>100%</span> quality <span>editing</span></p>
                    </div>
                    <div class="title-wrapper">
                      <h2 class="section-title has_fade_anim">Quality and professional editing</h2>
                    </div>
                    <div class="text-wrapper">
                      <p class="text has_fade_anim">Optimize your impact this holiday season with an AI-driven
                        multi-channel marketing
                        strategy. Get the tips and tricks.</p>
                    </div>
                    <div class="btn-wrap has_fade_anim">
                      <a href="about.html" class="wc-btn-primary">Start editing Now</a>
                    </div>
                    <ul class="list-check has_fade_anim">
                      <li>No credit card required</li>
                      <li>14 days free trial</li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-6 col-xl-8">
                  <div class="editing-thumb">
                    <img src="assets/imgs/gallery/img-r-11.webp" data-speed="0.9" alt="image">
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- editing area end -->

          <!-- work area start  -->
          <section class="work-area section-spacing-top">
            <div class="container">
              <div class="section-heading">
                <div class="title-wrapper">
                  <h2 class="section-title has_fade_anim">How it helps <br> you in video editing</h2>
                </div>
                <div class="text-wrapper">
                  <p class="text has_fade_anim">Optimize your impact this holiday season with an AI-driven, multichannel
                    marketing
                    strategy. Get all the tips and tricks in our free ebook.</p>
                </div>
              </div>
              <div class="work-items">
                <div class="work-item has_fade_anim">
                  <div class="shape">
                    <img src="assets/imgs/shape/shape-r-13.webp" alt="shape">
                  </div>
                  <div class="thumb">
                    <img src="assets/imgs/icon/icon-r-7.webp" alt="icon">
                  </div>
                  <div class="title-wrapper">
                    <h2 class="title">Upload your media file</h2>
                  </div>
                  <div class="text-wrapper">
                    <p class="text">Upload your video files that you want want to edit perfectly by AI powered tools.
                    </p>
                  </div>
                </div>
                <div class="work-item has_fade_anim" data-delay="0.25">
                  <div class="shape shape-2">
                    <img src="assets/imgs/shape/shape-r-14.webp" alt="shape">
                  </div>
                  <div class="thumb">
                    <img src="assets/imgs/icon/icon-r-8.webp" alt="icon">
                  </div>
                  <div class="title-wrapper">
                    <h2 class="title">Apply AI editing tools</h2>
                  </div>
                  <div class="text-wrapper">
                    <p class="text">Upload your video files that you want want to edit perfectly by AI powered tools.
                    </p>
                  </div>
                </div>
                <div class="work-item has_fade_anim" data-delay="0.35">
                  <div class="thumb">
                    <img src="assets/imgs/icon/icon-r-9.webp" alt="icon">
                  </div>
                  <div class="title-wrapper">
                    <h2 class="title">Export your quality video</h2>
                  </div>
                  <div class="text-wrapper">
                    <p class="text">Upload your video files that you want want to edit perfectly by AI powered tools.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- work area end  -->

          <!-- pre-made area start  -->
          <section class="pre-made-area section-spacing-top">
            <div class="container">
              <div class="section-heading">
                <div class="title-wrapper">
                  <h2 class="section-title has_fade_anim">Collection of pre-made video templates</h2>
                </div>
                <div class="text-wrapper">
                  <p class="text has_fade_anim">Optimize your impact this holiday season with an AI-driven, multichannel
                    marketing
                    strategy. Get all the tips and tricks in our free ebook.</p>
                </div>
              </div>
              <div class="pre-made-templates">
                <div class="pre-template has_fade_anim">
                  <a href="all-template.html">
                    <video src="assets/video/1.mp4" autoplay loop></video>
                  </a>
                </div>
                <div class="pre-template has_fade_anim" data-delay="0.25">
                  <a href="all-template.html">
                    <video src="assets/video/2.mp4" autoplay loop></video>
                  </a>
                </div>
                <div class="pre-template has_fade_anim" data-delay="0.55">
                  <a href="all-template.html">
                    <video src="assets/video/4.mp4" autoplay loop></video>
                  </a>
                </div>
                <div class="pre-template has_fade_anim" data-delay="0.45">
                  <a href="all-template.html">
                    <video src="assets/video/6.mp4" autoplay loop></video>
                  </a>
                </div>
                <div class="pre-template has_fade_anim" data-delay="0.35">
                  <a href="all-template.html">
                    <video src="assets/video/3.mp4" autoplay loop></video>
                  </a>
                </div>
                <div class="pre-template has_fade_anim" data-delay="0.65">
                  <a href="all-template.html">
                    <video src="assets/video/5.mp4" autoplay loop></video>
                  </a>
                </div>
              </div>
              <div class="btn-wrap has_fade_anim">
                <a href="all-template.html" class="wc-btn-primary bordered">Explore all templates</a>
              </div>
            </div>
          </section>
          <!-- pre-made area end  -->

          <!-- feature area start  -->
          <section class="feature-area">
            <div class="container">
              <div class="row">
                <div class="col-md-6 col-xl-4">
                  <div class="section-heading">
                    <div class="title-wrapper">
                      <h2 class="section-title has_fade_anim">Add custom text to your video</h2>
                    </div>
                    <div class="text-wrapper">
                      <p class="text has_fade_anim">Choose from an exclusive collection of predesigned assets such as
                        text effects,
                        social media buttons, icons, emojis, lower-thirds, and more to help your online videos.</p>
                    </div>
                    <ul class="feature-list has_fade_anim">
                      <li><img src="assets/imgs/icon/icon-r-10.webp" alt="check">Suited to business
                        articles</li>
                      <li><img src="assets/imgs/icon/icon-r-10.webp" alt="check">Consistently typing
                        speed</li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-6 col-xl-8">
                  <div class="feature-thumb">
                    <img src="assets/imgs/gallery/img-r-18.webp" alt="feature">
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- feature area end  -->

          <!-- key feature area start  -->
          <section class="key-feature-area section-spacing-top">
            <div class="container">
              <div class="section-heading">
                <div class="title-wrapper">
                  <h2 class="section-title has_fade_anim">Some key features make it great</h2>
                </div>
                <div class="text-wrapper">
                  <p class="text has_fade_anim">Optimize your impact this holiday season with an AI-driven, multichannel
                    marketing
                    strategy. Get all the tips and tricks in our free ebook.</p>
                </div>
              </div>
              <div class="key-items">
                <div class="has_fade_anim">
                  <div class="key-item">
                    <div class="icon">
                      <img src="assets/imgs/icon/icon-r-11.webp" alt="icon">
                    </div>
                    <div class="title-wrapper">
                      <h2 class="title">Key Features</h2>
                    </div>
                    <div class="text-wrapper">
                      <p class="text">Your business enjoys the advantages of real startup Collaborate internally with a
                        team.</p>
                    </div>
                  </div>
                </div>
                <div class="has_fade_anim" data-delay="0.25">
                  <div class="key-item">
                    <div class="icon">
                      <img src="assets/imgs/icon/icon-r-12.webp" alt="icon">
                    </div>
                    <div class="title-wrapper">
                      <h2 class="title">Completely Online</h2>
                    </div>
                    <div class="text-wrapper">
                      <p class="text">Your business enjoys the advantages of real startup Collaborate internally with a
                        team.</p>
                    </div>
                  </div>
                </div>
                <div class="has_fade_anim" data-delay="0.35">
                  <div class="key-item">
                    <div class="icon">
                      <img src="assets/imgs/icon/icon-r-13.webp" alt="icon">
                    </div>
                    <div class="title-wrapper">
                      <h2 class="title">Template Collection</h2>
                    </div>
                    <div class="text-wrapper">
                      <p class="text">Your business enjoys the advantages of real startup Collaborate internally with a
                        team.</p>
                    </div>
                  </div>
                </div>
                <div class="has_fade_anim">
                  <div class="key-item">
                    <div class="icon">
                      <img src="assets/imgs/icon/icon-r-14.webp" alt="icon">
                    </div>
                    <div class="title-wrapper">
                      <h2 class="title">Artificial Tools</h2>
                    </div>
                    <div class="text-wrapper">
                      <p class="text">Your business enjoys the advantages of real startup Collaborate internally with a
                        team.</p>
                    </div>
                  </div>
                </div>
                <div class="has_fade_anim" data-delay="0.25">
                  <div class="key-item has_fade_anim">
                    <div class="icon">
                      <img src="assets/imgs/icon/icon-r-15.webp" alt="icon">
                    </div>
                    <div class="title-wrapper">
                      <h2 class="title">Sound Record</h2>
                    </div>
                    <div class="text-wrapper">
                      <p class="text">Your business enjoys the advantages of real startup Collaborate internally with a
                        team.</p>
                    </div>
                  </div>
                </div>
                <div class="has_fade_anim" data-delay="0.35">
                  <div class="key-item has_fade_anim">
                    <div class="icon">
                      <img src="assets/imgs/icon/icon-r-16.webp" alt="icon">
                    </div>
                    <div class="title-wrapper">
                      <h2 class="title">Creative Canvas</h2>
                    </div>
                    <div class="text-wrapper">
                      <p class="text">Your business enjoys the advantages of real startup Collaborate internally with a
                        team.</p>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </section>
          <!-- key feature area end  -->

          <!-- video area start  -->
          <section class="video-area section-spacing-top">
            <div class="container">
              <div class="video-area-wrapper">
                <div class="row align-items-center">
                  <div class="col-md-4">
                    <div class="section-heading">
                      <div class="title-wrapper">
                        <h2 class="section-title has_fade_anim">Watch our tutorials</h2>
                      </div>
                      <div class="text-wrapper">
                        <p class="text has_fade_anim">Optimize your impact this holiday season with an AI-driven,
                          multichannel
                          marketing strategy. Get all the tips and tricks in our free ebook.</p>
                      </div>
                      <div class="btn-wrap has_fade_anim">
                        <a href="all-template.html" class="wc-btn-primary">Watch more</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-8">
                    <div class="video-thumb">
                      <img src="assets/imgs/gallery/img-r-19.webp" alt="video">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- video area end  -->

          <!-- pricing area start  -->
          <section class="pricing-area section-spacing-top">
            <div class="container">
              <div class="pricing-area-inner">
                <div class="section-heading">
                  <div class="title-wrapper">
                    <h2 class="section-title has_fade_anim">Great plan! Choose your best</h2>
                  </div>
                  <div class="text-wrapper">
                    <p class="text has_fade_anim">Optimize your impact this holiday season with an AI-driven,
                      multichannel marketing
                      strategy. Get all the tips and tricks in our free ebook.</p>
                  </div>
                </div>
                <div class="wcf__toggle_switcher style-1">
                  <div class="slide-toggle-wrapper has_fade_anim">
                    <div class="slide-toggle-btn">
                      <label for="view-1dfbbd6" class="before_label active">
                        Monthly </label>
                      <input type="checkbox" id="view-1dfbbd6">
                      <label for="view-1dfbbd6" class="switcher"></label>
                      <label for="view-1dfbbd6" class="after_label">
                        Yearly </label>
                    </div>
                  </div>

                  <div class="toggle-content">
                    <div class="toggle-pane show">
                      <div class="pricing-wrapper-box">
                        <div class="pricing-wrapper">
                          <div class="pricing-box basic has_fade_anim">
                            <h3 class="title">Standard</h3>
                            <h3 class="price">$12.39 <span>(Monthly)</span></h3>
                            <div class="text-wrapper">
                              <p class="text">From the recording control bar, you can switch cameras and pause, resume
                              </p>
                            </div>
                            <a href="contact.html" class="wc-btn wc-btn-primary"> <span data-text="Signup now">Signup
                                now</span></a>
                          </div>
                          <div class="pricing-box premium has_fade_anim" data-delay="0.25">
                            <h3 class="title">Premium</h3>
                            <h3 class="price">$32.39 <span>(Monthly)</span></h3>
                            <div class="text-wrapper">
                              <p class="text">From the recording control bar, you can switch cameras and pause, resume
                              </p>
                            </div>
                            <a href="contact.html" class="wc-btn wc-btn-primary"> <span data-text="Signup now">Signup
                                now</span></a>
                          </div>
                          <div class="pricing-box enterprise has_fade_anim" data-delay="0.35">
                            <h3 class="title">Enterprise</h3>
                            <h3 class="price">$62.39 <span>(Monthly)</span></h3>
                            <div class="text-wrapper">
                              <p class="text">From the recording control bar, you can switch cameras and pause, resume
                              </p>
                            </div>
                            <a href="contact.html" class="wc-btn wc-btn-primary"> <span data-text="Signup now">Signup
                                now</span></a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="toggle-pane">
                      <div class="pricing-wrapper-box">
                        <div class="pricing-wrapper">
                          <div class="pricing-box basic">
                            <h3 class="title">Standard</h3>
                            <h3 class="price">$11.39 <span>(Monthly)</span></h3>
                            <div class="text-wrapper">
                              <p class="text">From the recording control bar, you can switch cameras and pause, resume
                              </p>
                            </div>
                            <a href="contact.html" class="wc-btn wc-btn-primary"> <span data-text="Signup now">Signup
                                now</span></a>
                          </div>
                          <div class="pricing-box premium">
                            <h3 class="title">Premium</h3>
                            <h3 class="price">$25.39 <span>(Monthly)</span></h3>
                            <div class="text-wrapper">
                              <p class="text">From the recording control bar, you can switch cameras and pause, resume
                              </p>
                            </div>
                            <a href="contact.html" class="wc-btn wc-btn-primary"> <span data-text="Signup now">Signup
                                now</span></a>
                          </div>
                          <div class="pricing-box enterprise">
                            <h3 class="title">Enterprise</h3>
                            <h3 class="price">$61.39 <span>(Monthly)</span></h3>
                            <div class="text-wrapper">
                              <p class="text">From the recording control bar, you can switch cameras and pause, resume
                              </p>
                            </div>
                            <a href="contact.html" class="wc-btn wc-btn-primary"> <span data-text="Signup now">Signup
                                now</span></a>
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

          <!-- testimonial area start  -->
          <section class="testimonial-area section-spacing-top">
            <div class="shape-1">
              <img src="assets/imgs/shape/shape-r-10.webp" alt="shape">
            </div>
            <div class="container">
              <div class="row">
                <div class="col-lg-4">
                  <div class="section-heading">
                    <div class="subtitle-wrapper">
                      <p class="subtitle has_fade_anim"> <img src="assets/imgs/icon/icon-r-17.webp" alt="icon"> User’s
                        Feedback</p>
                    </div>
                    <div class="title-wrapper">
                      <h2 class="section-title has_fade_anim">Our happy users say</h2>
                    </div>
                    <div class="text-wrapper">
                      <p class="text has_fade_anim">Optimize your impact this holiday season with an AI-driven,
                        multichannel marketing
                        strategy. Get all the tips and tricks in our free ebook.</p>
                    </div>
                    <div class="testimonial-thumb has_fade_anim">
                      <img src="assets/imgs/gallery/img-s-31.webp" alt="img-s-31.webp">
                    </div>
                  </div>
                </div>
                <div class="offset-lg-1 col-lg-7">
                  <div class="tesmonial-wrapper-box">
                    <div class="testimonial-wrapper has_fade_anim">
                      <div class="swiper testimonial-slider">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide">
                            <div class="testimonial-content">
                              <div class="icon">
                                <img src="assets/imgs/icon/quote-2.webp" alt="icon image">
                              </div>
                              <div class="text-wrapper">
                                <p class="text">Analysts used Mode's advanced analytics capabilities to build
                                  parameterized report and visualizations with live data. The customer success team then
                                  used the intuitive drag interface to delve</p>
                              </div>
                              <div class="meta">
                                <h3 class="name">John Butler</h3>
                                <span class="designation">Developer</span>
                              </div>
                            </div>
                          </div>
                          <div class="swiper-slide">
                            <div class="testimonial-content">
                              <div class="icon">
                                <img src="assets/imgs/icon/quote-2.webp" alt="icon image">
                              </div>
                              <div class="text-wrapper">
                                <p class="text">Analysts used Mode's advanced analytics capabilities to build
                                  parameterized report and visualizations with live data. The customer success team then
                                  used the intuitive drag interface to delve</p>
                              </div>
                              <div class="meta">
                                <h3 class="name">John Butler</h3>
                                <span class="designation">Developer</span>
                              </div>
                            </div>
                          </div>
                          <div class="swiper-slide">
                            <div class="testimonial-content">
                              <div class="icon">
                                <img src="assets/imgs/icon/quote-2.webp" alt="icon image">
                              </div>
                              <div class="text-wrapper">
                                <p class="text">Analysts used Mode's advanced analytics capabilities to build
                                  parameterized report and visualizations with live data. The customer success team then
                                  used the intuitive drag interface to delve</p>
                              </div>
                              <div class="meta">
                                <h3 class="name">John Butler</h3>
                                <span class="designation">Developer</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="nav-wrapper">
                        <div class="testimonial-button-prev">
                          <img src="assets/imgs/icon/chevron-left.webp" alt="icon image">
                        </div>
                        <div class="testimonial-button-next">
                          <img src="assets/imgs/icon/chevron-right.webp" alt="icon image">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- testimonial area end  -->

          <!-- cta area start  -->
          <section class="cta-area section-spacing-top">
            <div class="container">
              <div class="cta-area-wrapper">
                <div class="shape-1">
                  <img src="assets/imgs/shape/shape-r-8.webp" alt="shape-1">
                </div>
                <div class="shape-2">
                  <img src="assets/imgs/shape/shape-r-9.webp" data-speed="0.8" alt="shape-1">
                </div>
                <div class="section-heading">
                  <div class="title-wrapper">
                    <h2 class="section-title has_fade_anim">Let’s start for 14 days free trial</h2>
                  </div>
                  <div class="text-wrapper">
                    <p class="text has_fade_anim">Optimize your impact this holiday season with an AI-driven,
                      multichannel marketing
                      strategy.</p>
                  </div>
                  <div class="btn-wrap has_fade_anim">
                    <a href="contact.html" class="wc-btn-primary">Signup now</a>
                    <a href="contact.html" class="wc-btn-primary bordered">Request for demo</a>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- cta area end  -->

        </main>

        <!-- footer area start  -->
        <footer class="footer-area style-2">
          <div class="container">
            <div class="footer-area-inner">
              <div class="footer-widget-wrapper">
                <div class="footer-logo">
                  <img src="assets/imgs/logo/logo-6.webp" alt="site-logo">
                </div>
                <div class="description-text">
                  <div class="text-wrapper">
                    <p class="text">Sassly is a real early-stage software looking for an analytics platform that scales
                      with you, check out our stage program.</p>
                  </div>
                </div>
              </div>
              <div class="footer-widget-wrapper">
                <h2 class="title">Company</h2>
                <ul class="footer-nav-list">
                  <li><a href="ai-video-editor.html#">About</a></li>
                  <li><a href="ai-video-editor.html#">Careers</a></li>
                  <li><a href="ai-video-editor.html#">Press</a></li>
                  <li><a href="ai-video-editor.html#">Contact Us</a></li>
                  <li><a href="ai-video-editor.html#">System Status</a></li>
                </ul>
              </div>

              <div class="footer-widget-wrapper">
                <h2 class="title">Product</h2>
                <ul class="footer-nav-list">
                  <li><a href="ai-video-editor.html#">Live Chat</a></li>
                  <li><a href="ai-video-editor.html#">Jirogram</a></li>
                  <li><a href="ai-video-editor.html#">Datasetico</a></li>
                  <li><a href="ai-video-editor.html#">Underline</a></li>
                  <li><a href="ai-video-editor.html#">Keyword</a></li>
                </ul>
              </div>
              <div class="footer-widget-wrapper">
                <h2 class="title">Newsletter</h2>
                <form action="ai-video-editor.html#" class="subscribe-form">
                  <div class="input-field">
                    <input type="email" placeholder="Enter your email">
                    <button type="submit" class="subscribe-btn"><i class="fa-solid fa-paper-plane"></i></button>
                    <span class="icon"><i class="fa-regular fa-envelope"></i></span>
                  </div>
                  <div class="policy-field">
                    <input type="checkbox" id="policy" name="policy" value="Boat">
                    <label for="policy"> I agree with <span>privacy policy</span></label>
                  </div>
                </form>
              </div>
            </div>
            <div class="copyright-area-inner">
              <ul class="social-links">
                <li><a href="ai-video-editor.html#"><i class="fa-brands fa-facebook-f"></i></a></li>
                <li><a href="ai-video-editor.html#"><i class="fa-brands fa-twitter"></i></a></li>
                <li><a href="ai-video-editor.html#"><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href="ai-video-editor.html#"><i class="fa-brands fa-linkedin"></i></a></li>
              </ul>
              <div class="copyright-text">
                <p class="text">© 2022 <a href="https://crowdyflow.com/">Crowdyflow</a> Agency</p>
              </div>
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
              <form action="ai-video-editor.html#" class="user-form">
                <div class="input-field">
                  <input type="email" placeholder="Enter your email">
                </div>
                <div class="input-field">
                  <input type="password" placeholder="Enter password">
                </div>
                <div class="policy-field">
                  <input type="checkbox" id="p-policy" name="p-policy" value="Boat">
                  <label for="policy">Remember me</label>
                  <a href="ai-video-editor.html#" class="forget-password">Forgot your password?</a>
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
              <form action="ai-video-editor.html#" class="user-form">
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
                  <label for="d-policy">I agree to sassly <span><a href="ai-video-editor.html#">Terms of Service.</a></span></label>
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
              <li><a href="ai-video-editor.html#"><i class="fa-brands fa-twitter"></i></a></li>
              <li><a href="ai-video-editor.html#"><i class="fa-brands fa-instagram"></i></a></li>
              <li><a href="ai-video-editor.html#"><i class="fa-brands fa-linkedin"></i></a></li>
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
        spaceBetween: 50,
        slidesPerView: 1,
        speed: 1800,
        freeMode: true,
        watchSlidesProgress: true,
        navigation: {
          prevEl: ".testimonial-button-prev",
          nextEl: ".testimonial-button-next",
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
            slidesPerView: 4,
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