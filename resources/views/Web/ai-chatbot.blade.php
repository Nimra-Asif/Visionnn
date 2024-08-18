<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Sassly HTML5 Template">

  <title>Sassly AI-Chatbot</title>

  <!-- Fav Icon -->
  <link rel="icon" type="image/x-icon" href="https://crowdytheme.com/html/assets/imgs/logo/favicon.webp">





  <!-- All CSS files -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/all.min.css">
  <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
  <link rel="stylesheet" href="assets/css/progressbar.css">
  <link rel="stylesheet" href="assets/css/meanmenu.min.css">
  <link rel="stylesheet" href="assets/css/magnific-popup.css">
  <link rel="stylesheet" href="assets/css/master-ai-chatbot.css">


</head>


<body class="font-heading-tropiline-regular">

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
            <li><a href="ai-chatbot.html"  class="active-page">AI Chatbot</a></li>
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
          <form action="ai-chatbot.html#" class="form-search">
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
          <img src="assets/imgs/logo/logo-5.webp" alt="Site Logo">
        </a>
      </div>
      <div class="header__nav pos-center">
        <nav class="main-menu">
          <ul>
            <li class="menu-item-has-children"><a href="index.html">home</a>
              <ul class="dp-menu">
                <li><a href="ai-content-writer.html">AI Content Writer</a></li>
                <li><a href="ai-image-generator.html">AI Image Generator</a></li>
                <li><a href="ai-chatbot.html" class="active-page">AI Chatbot</a></li>
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
              <a href="ai-chatbot.html#">Pages</a>
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
              <a href="ai-chatbot.html#">blog</a>
              <ul class="dp-menu">
                <li><a href="blog.html">blog</a></li>
                <li><a href="blog-details.html">blog details</a></li>
              </ul>
            </li>
            <li><a href="contact.html">Contact</a></li>
          </ul>
        </nav>
      </div>
      <div class="header__button">
        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#signupform"
          class="wc-btn wc-btn-primary btn-text-flip"> <span data-text="Join Us">Join Us</span></a>
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
      <div class="body-wrapper body-ai-chatbot">

        <!-- overlay switcher close  -->
        <div class="overlay-switcher-close"></div>



        <main>

          <!-- hero area start  -->
          <section class="hero-area section-spacing pb-0">
            <div class="hero-area-inner">
              <div class="section-content">
                <div class="section-title-wrapper">
                  <div class="title-wrapper">
                    <h1 class="section-title">Help you
                      instantly with
                      an AI-driven
                      chatbot</h1>
                  </div>
                </div>
                <div class="text-wrapper">
                  <p class="text">Sassly AI-driven chatbot in the past allowing you to focus more on your business or
                    simply leaving pen-and-paper.</p>
                </div>
                <div class="btn-wrapper">
                  <a href="contact.html" class="wc-btn wc-btn-primary btn-text-flip"> <span
                      data-text="Start chatting">Start chatting</span></a>
                </div>
                <div class="feature-list">
                  <ul>
                    <li><img src="assets/imgs/icon/check-3.webp" alt="icon image">No credit card required</li>
                  </ul>
                </div>
              </div>
              <div class="section-thumbs">
                <div class="thumb-main has_fade_anim" data-delay="0.3" data-fade-offset="0">
                  <img src="assets/imgs/gallery/img-s-15.webp" alt="ai image">
                </div>
                <div class="meta-info has_fade_anim" data-delay="0.45" data-fade-offset="0">
                  <div class="text-wrapper">
                    <p class="text">Sassly is highly rated
                      AI-Chatbot by millions
                      of users</p>
                  </div>
                  <div class="review-wrapper">
                    <img class="rating" src="assets/imgs/gallery/rating-4.9.webp" alt="rating image">
                    <p class="text">(2350+ reviews)</p>
                    <img class="brand" src="assets/imgs/gallery/brand.webp" alt="brand logo">
                  </div>
                </div>
                <div class="thumb-secondary has_fade_anim" data-delay="0.6" data-fade-offset="0">
                  <img src="assets/imgs/gallery/img-s-16.webp" alt="ai image">
                </div>
              </div>
            </div>
          </section>
          <!-- hero area end  -->

          <!-- features area start  -->
          <section class="features-area section-spacing">
            <div class="container container-large">
              <div class="section-header">
                <div class="section-title-wrapper">
                  <div class="title-wrapper">
                    <h2 class="section-title has_fade_anim">Simple<img src="assets/imgs/shape/shape-s-15.webp"
                        alt="">system
                      and database</h2>
                  </div>
                </div>
                <div class="text-wrapper">
                  <p class="text has_fade_anim">Optimize your impact this holiday season with an AI-driven, multichannel
                    marketing
                    strategy. Get all the tips and tricks in our free ebook.</p>
                </div>
              </div>
              <div class="features-wrapper-box">
                <div class="features-wrapper">
                  <a href="about.html">
                    <div class="feature-box has_fade_anim">
                      <div class="thumb">
                        <img src="assets/imgs/icon/icon-s-8.webp" alt="feature icon">
                      </div>
                      <div class="content">
                        <h3 class="title">Smart <br>
                          Automation</h3>
                        <p class="text">AI-driven chatbot in the past allowing you to focus more on your business or
                          simply
                        </p>
                        <span class="wc-btn wc-btn-normal">Read more<i class="fa-solid fa-arrow-right"></i></span>
                      </div>
                    </div>
                  </a>
                  <a href="about.html">
                    <div class="feature-box has_fade_anim" data-delay="0.25">
                      <div class="thumb">
                        <img src="assets/imgs/icon/icon-s-9.webp" alt="feature icon">
                      </div>
                      <div class="content">
                        <h3 class="title">Voice typing <br>
                          System</h3>
                        <p class="text">With Constitutional AI built in, Claude is designed to reduce brand risk</p>
                        <span class="wc-btn wc-btn-normal">Read more<i class="fa-solid fa-arrow-right"></i></span>
                      </div>
                    </div>
                  </a>
                  <a href="about.html">
                    <div class="feature-box has_fade_anim" data-delay="0.35">
                      <div class="thumb">
                        <img src="assets/imgs/icon/icon-s-10.webp" alt="feature icon">
                      </div>
                      <div class="content">
                        <h3 class="title">Multiple <br>
                          Data Sources</h3>
                        <p class="text">Best in class data retention, and no training on your data structure of modern
                          area.
                        </p>
                        <span class="wc-btn wc-btn-normal">Read more<i class="fa-solid fa-arrow-right"></i></span>
                      </div>
                    </div>
                  </a>
                  <a href="about.html">
                    <div class="feature-box has_fade_anim" data-delay="0.45">
                      <div class="thumb">
                        <img src="assets/imgs/icon/icon-s-11.webp" alt="feature icon">
                      </div>
                      <div class="content">
                        <h3 class="title">Data <br>
                          Secured</h3>
                        <p class="text">Personalize to excel at your use cases and speak in your voice model work for
                          you
                        </p>
                        <span class="wc-btn wc-btn-normal">Read more<i class="fa-solid fa-arrow-right"></i></span>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </section>
          <!-- features area end  -->

          <!-- dialog area start  -->
          <section class="dialog-area">
            <div class="dialog-area-inner">
              <div class="section-content section-spacing">
                <div class="section-title-wrapper">
                  <div class="title-wrapper">
                    <h2 class="section-title has_fade_anim">Continue your
                      dialogue with clarifying
                      info and refining your
                      request</h2>
                  </div>
                </div>
                <div class="text-wrapper">
                  <p class="text has_fade_anim">Come meet the team virtually leading the industry with 100K+ token
                    windows, Claude can
                    handle complex multi-step instructions over large amounts of content.</p>
                </div>
                <div class="feature-list-box has_fade_anim">
                  <div class="feature-list">
                    <div class="feature-list-item">
                      <span class="icon">
                        <img src="assets/imgs/icon/check.webp" alt="icon image">
                      </span>
                      <p class="text"><span>Automation builder</span> track your performance and more—all from a
                        single platform.</p>
                    </div>
                    <div class="feature-list-item">
                      <span class="icon">
                        <img src="assets/imgs/icon/check.webp" alt="icon image">
                      </span>
                      <p class="text"><span>Awesome dashboard</span> channel for businesses of any size. Start your
                        video course today.</p>
                    </div>
                  </div>
                </div>
                <div class="btn-wrapper has_fade_anim">
                  <a href="contact.html" class="wc-btn wc-btn-primary btn-text-flip"> <span
                      data-text="Start chatting">Start chatting</span></a>
                </div>
              </div>
              <div class="dialog-thumb-wraper">
                <div class="dialog-thumb">
                  <div class="shape-1">
                    <img src="assets/imgs/gallery/img-s-18.webp" data-speed="0.7" alt="dialog image">
                  </div>
                  <div class="shape-main">
                    <img src="assets/imgs/gallery/img-s-17.webp" alt="dialog image">
                  </div>
                </div>
                <div class="feature-list">
                  <div class="feature-item">
                    <p><img src="assets/imgs/icon/imoji-1.webp" alt="imoji icon"> Reword this email to be more friendly
                    </p>
                  </div>
                  <div class="feature-item">
                    <p><img src="assets/imgs/icon/imoji-4.webp" alt="imoji icon"> Why would someone want on pizza?</p>
                  </div>
                  <div class="feature-item">
                    <p><img src="assets/imgs/icon/imoji-3.webp" alt="imoji icon"> What are some counter-points to this
                      argument?</p>
                  </div>
                  <div class="feature-item">
                    <p><img src="assets/imgs/icon/imoji-2.webp" alt="imoji icon"> Generate ideas for fun giveaway
                      prizes.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- dialog area end  -->

          <!-- fact area start  -->
          <section class="fact-area section-spacing pb-0">
            <div class="container container-large">
              <div class="section-header">
                <div class="section-title-wrapper">
                  <div class="title-wrapper">
                    <h2 class="section-title has_fade_anim">Meet your new
                      intelligent AI-assistant</h2>
                  </div>
                </div>
                <div class="text-wrapper">
                  <p class="text has_fade_anim">Optimize your impact this holiday season with an AI-driven, multichannel
                    marketing
                    strategy. Get all the tips and tricks in our free ebook.</p>
                </div>
              </div>
              <div class="fact-content-box">
                <div class="section-content-wrapper">
                  <div class="section-content">
                    <h3 class="title has_fade_anim">Ability to generate
                      content in different
                      languages.</h3>
                    <p class="text has_fade_anim">Identify information in a given text and present</p>
                    <div class="apps-list has_fade_anim">
                      <div class="shape-1">
                        <img src="assets/imgs/shape/shape-s-16.webp" alt="shape image">
                      </div>
                      <div class="apps-links">
                        <div class="app">
                          <img src="assets/imgs/gallery/google-store-2.webp" alt="app image">
                        </div>
                        <div class="app">
                          <img src="assets/imgs/gallery/apple-store-2.webp" alt="app image">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="section-thumb has_fade_anim">
                    <img src="assets/imgs/gallery/img-s-19.webp" alt="app image">
                  </div>
                </div>
                <div class="facts-wrapper">
                  <div class="fact-box has_fade_anim">
                    <div class="title-wrapper">
                      <h3 class="title">30m+</h3>
                    </div>
                    <div class="text-wrapper">
                      <p class="text">Sassly used by over 30 millions customers all over the world.</p>
                    </div>
                  </div>
                  <div class="fact-box has_fade_anim" data-delay="0.25">
                    <div class="title-wrapper">
                      <h3 class="title">85%</h3>
                    </div>
                    <div class="text-wrapper">
                      <p class="text">With Constitutional AI built in, Claude is designed to reduce brand risk</p>
                    </div>
                  </div>
                  <div class="fact-box has_fade_anim" data-delay="0.35">
                    <div class="title-wrapper">
                      <h3 class="title">5m+</h3>
                    </div>
                    <div class="text-wrapper">
                      <p class="text">Most of the customers using the mobile version of sassly AI-driven chatbot</p>
                    </div>
                  </div>
                  <div class="fact-box has_fade_anim" data-delay="0.45">
                    <div class="title-wrapper">
                      <h3 class="title">30m+</h3>
                    </div>
                    <div class="text-wrapper">
                      <p class="text">Sassly used by over 30 millions customers all over the world.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- fact area end  -->

          <!-- testimonial area start  -->
          <section class="testimonial-area section-spacing has_fade_anim">
            <div class="container">
              <div class="testimonial-area-inner">
                <div class="testimonial-wrapper-box">
                  <div class="testimonial-wrapper">
                    <div class="swiper testimonial-slider">
                      <div class="swiper-wrapper">
                        <div class="swiper-slide">
                          <div class="testimonial-content">
                            <div class="icon">
                              <img src="assets/imgs/icon/quote-2.webp" alt="icon image">
                            </div>
                            <div class="text-wrapper">
                              <p class="text">Analysts used Mode's advanced analytics capabilities to build
                                parameterized
                                report and visualizations with live data. The customer success team then used the
                                intuitive
                                drag interface to delve</p>
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
                                parameterized
                                report and visualizations with live data. The customer success team then used the
                                intuitive
                                drag interface to delve</p>
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
                                parameterized
                                report and visualizations with live data. The customer success team then used the
                                intuitive
                                drag interface to delve</p>
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
                        <img src="assets/imgs/icon/arrow-left-long.webp" alt="icon image">
                      </div>
                      <div class="testimonial-button-next">
                        <img src="assets/imgs/icon/arrow-right-long.webp" alt="icon image">
                      </div>
                    </div>
                  </div>
                  <div class="pagination-wrapper">
                    <div class="testimonial-pagination"></div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- testimonial area end  -->

          <!-- pricing area start  -->
          <section class="pricing-area section-spacing">
            <div class="container">
              <div class="pricing-area-inner">
                <div class="section-header">
                  <div class="section-title-wrapper">
                    <div class="title-wrapper">
                      <h2 class="section-title has_fade_anim">Here's what you will save
                        per user, per month.</h2>
                    </div>
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
                      <div class="shape-1">
                        <img src="assets/imgs/shape/shape-s-17.webp" alt="shape image">
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

                  <div class="toggle-content">
                    <div class="toggle-pane show">
                      <div class="pricing-wrapper-box">
                        <div class="pricing-wrapper">
                          <div class="pricing-box basic has_fade_anim">
                            <h3 class="title">Basic</h3>
                            <p class="description">Ability to understand and generate content</p>
                            <h3 class="price">$09 <span>/month</span></h3>
                            <div class="feature-list">
                              <p class="list-title">Advantage:</p>
                              <ul>
                                <li><img src="assets/imgs/icon/check-3.webp" alt="icon image">Unlimited cards</li>
                                <li><img src="assets/imgs/icon/check-3.webp" alt="icon image">Automated management</li>
                                <li class="disallow"><img src="assets/imgs/icon/check-3.webp" alt="icon image">SOX
                                  compliance</li>
                                <li class="disallow"><img src="assets/imgs/icon/check-3.webp"
                                    alt="icon image">Enterprise
                                  ERP integrations
                                </li>
                                <li class="disallow"><img src="assets/imgs/icon/check-3.webp" alt="icon image">Limited
                                  tools</li>
                                <li class="disallow"><img src="assets/imgs/icon/check-3.webp" alt="icon image">Local
                                  video issuance</li>
                              </ul>
                            </div>
                            <a href="contact.html" class="wc-btn wc-btn-primary btn-text-flip"> <span
                                data-text="Signup Now">Signup Now</span></a>
                          </div>
                          <div class="pricing-box standard has_fade_anim">
                            <h3 class="title">Standard</h3>
                            <p class="description">Additional user account and collaboration</p>
                            <h3 class="price">$29 <span>/month</span></h3>
                            <div class="feature-list">
                              <p class="list-title">Advantage:</p>
                              <ul>
                                <li><img src="assets/imgs/icon/check-3.webp" alt="icon image">Unlimited cards</li>
                                <li><img src="assets/imgs/icon/check-3.webp" alt="icon image">Automated management</li>
                                <li><img src="assets/imgs/icon/check-3.webp" alt="icon image">SOX
                                  compliance</li>
                                <li class="disallow"><img src="assets/imgs/icon/check-3.webp"
                                    alt="icon image">Enterprise
                                  ERP integrations
                                </li>
                                <li class="disallow"><img src="assets/imgs/icon/check-3.webp" alt="icon image">Limited
                                  tools</li>
                                <li class="disallow"><img src="assets/imgs/icon/check-3.webp" alt="icon image">Local
                                  video issuance</li>
                              </ul>
                            </div>
                            <a href="contact.html" class="wc-btn wc-btn-primary btn-text-flip"> <span
                                data-text="Signup Now">Signup Now</span></a>
                          </div>
                          <div class="pricing-box silver popular has_fade_anim">
                            <span class="tag">Popular</span>
                            <h3 class="title">Silver</h3>
                            <p class="description">Ability to understand and generate content</p>
                            <h3 class="price">$39 <span>/month</span></h3>
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
                                <li class="disallow"><img src="assets/imgs/icon/check-5.webp" alt="icon image">Limited
                                  tools</li>
                                <li class="disallow"><img src="assets/imgs/icon/check-5.webp" alt="icon image">Local
                                  video issuance</li>
                              </ul>
                            </div>
                            <a href="contact.html" class="wc-btn wc-btn-primary btn-text-flip"> <span
                                data-text="Signup Now">Signup Now</span></a>
                          </div>
                          <div class="pricing-box premium has_fade_anim">
                            <h3 class="title">Premium</h3>
                            <p class="description">Ability to understand and generate content</p>
                            <h3 class="price">$49 <span>/month</span></h3>
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
                                <li><img src="assets/imgs/icon/check-3.webp" alt="icon image">Limited
                                  tools</li>
                                <li><img src="assets/imgs/icon/check-3.webp" alt="icon image">Local
                                  video issuance</li>
                              </ul>
                            </div>
                            <a href="contact.html" class="wc-btn wc-btn-primary btn-text-flip"> <span
                                data-text="Signup Now">Signup Now</span></a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="toggle-pane">
                      <div class="pricing-wrapper-box">
                        <div class="pricing-wrapper">
                          <div class="pricing-box basic">
                            <h3 class="title">Basic</h3>
                            <p class="description">Ability to understand and generate content</p>
                            <h3 class="price">$89 <span>/month</span></h3>
                            <div class="feature-list">
                              <p class="list-title">Advantage:</p>
                              <ul>
                                <li><img src="assets/imgs/icon/check-3.webp" alt="icon image">Unlimited cards</li>
                                <li><img src="assets/imgs/icon/check-3.webp" alt="icon image">Automated management</li>
                                <li class="disallow"><img src="assets/imgs/icon/check-3.webp" alt="icon image">SOX
                                  compliance</li>
                                <li class="disallow"><img src="assets/imgs/icon/check-3.webp"
                                    alt="icon image">Enterprise
                                  ERP integrations
                                </li>
                                <li class="disallow"><img src="assets/imgs/icon/check-3.webp" alt="icon image">Limited
                                  tools</li>
                                <li class="disallow"><img src="assets/imgs/icon/check-3.webp" alt="icon image">Local
                                  video issuance</li>
                              </ul>
                            </div>
                            <a href="contact.html" class="wc-btn wc-btn-primary btn-text-flip"> <span
                                data-text="Signup Now">Signup Now</span></a>
                          </div>
                          <div class="pricing-box standard">
                            <h3 class="title">Standard</h3>
                            <p class="description">Additional user account and collaboration</p>
                            <h3 class="price">$189 <span>/month</span></h3>
                            <div class="feature-list">
                              <p class="list-title">Advantage:</p>
                              <ul>
                                <li><img src="assets/imgs/icon/check-3.webp" alt="icon image">Unlimited cards</li>
                                <li><img src="assets/imgs/icon/check-3.webp" alt="icon image">Automated management</li>
                                <li><img src="assets/imgs/icon/check-3.webp" alt="icon image">SOX
                                  compliance</li>
                                <li class="disallow"><img src="assets/imgs/icon/check-3.webp"
                                    alt="icon image">Enterprise
                                  ERP integrations
                                </li>
                                <li class="disallow"><img src="assets/imgs/icon/check-3.webp" alt="icon image">Limited
                                  tools</li>
                                <li class="disallow"><img src="assets/imgs/icon/check-3.webp" alt="icon image">Local
                                  video issuance</li>
                              </ul>
                            </div>
                            <a href="contact.html" class="wc-btn wc-btn-primary btn-text-flip"> <span
                                data-text="Signup Now">Signup Now</span></a>
                          </div>
                          <div class="pricing-box silver popular">
                            <span class="tag">Popular</span>
                            <h3 class="title">Silver</h3>
                            <p class="description">Ability to understand and generate content</p>
                            <h3 class="price">$589 <span>/month</span></h3>
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
                                <li class="disallow"><img src="assets/imgs/icon/check-5.webp" alt="icon image">Limited
                                  tools</li>
                                <li class="disallow"><img src="assets/imgs/icon/check-5.webp" alt="icon image">Local
                                  video issuance</li>
                              </ul>
                            </div>
                            <a href="contact.html" class="wc-btn wc-btn-primary btn-text-flip"> <span
                                data-text="Signup Now">Signup Now</span></a>
                          </div>
                          <div class="pricing-box premium">
                            <h3 class="title">Premium</h3>
                            <p class="description">Ability to understand and generate content</p>
                            <h3 class="price">$889 <span>/month</span></h3>
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
                                <li><img src="assets/imgs/icon/check-3.webp" alt="icon image">Limited
                                  tools</li>
                                <li><img src="assets/imgs/icon/check-3.webp" alt="icon image">Local
                                  video issuance</li>
                              </ul>
                            </div>
                            <a href="contact.html" class="wc-btn wc-btn-primary btn-text-flip"> <span
                                data-text="Signup Now">Signup Now</span></a>
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

          <!-- integration area start  -->
          <section class="integration-area section-spacing">
            <div class="container">
              <div class="integration-area-inner">
                <div class="section-header">
                  <div class="section-title-wrapper">
                    <div class="title-wrapper">
                      <h2 class="section-title has_fade_anim">Works on your
                        favorite platforms</h2>
                    </div>
                  </div>
                </div>
                <div class="integration-thumb">
                  <img src="assets/imgs/gallery/img-s-20.webp" alt="gallery thumb">
                </div>
                <div class="cta-text">
                  <p class="text has_fade_anim">Can’t see your favorite platform? <a href="contact.html">Let us know by
                      submitting a
                      ticket.</a></p>
                </div>
              </div>
            </div>
          </section>
          <!-- integration area end  -->

          <!-- faq area start  -->
          <section class="faq-area">
            <div class="faq-area-inner">
              <div class="faq-wrapper section-spacing">
                <div class="section-header">
                  <div class="section-title-wrapper">
                    <div class="title-wrapper">
                      <h2 class="section-title has_fade_anim">Frequently Asked
                        Questions</h2>
                    </div>
                  </div>
                </div>
                <div class="accordion-wrapper has_fade_anim">
                  <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                          data-bs-target="#flush-collapseOne" aria-expanded="false"
                          aria-controls="flush-collapseOne">What is Sassly?</button>
                      </h2>
                      <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Sassly is an on-brand AI copilot for businesses. It helps creators
                          use generative AI to break through writer’s block, create original imagery, and repackage
                          content into different formats and languages in your company's brand voice. Unlike most AI
                          tools which are tied to individual tools and can produce pretty generic outputs,</div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                          data-bs-target="#flush-collapseTwo" aria-expanded="false"
                          aria-controls="flush-collapseTwo">Why should I choose Sassly?</button>
                      </h2>
                      <div id="flush-collapseTwo" class="accordion-collapse collapse show"
                        aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Sassly is an on-brand AI copilot for businesses. It helps creators
                          use generative AI to break through writer’s block, create original imagery, and repackage
                          content into different formats and languages in your company's brand voice. Unlike most AI
                          tools which are tied to individual tools and can produce pretty generic outputs,</div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                          data-bs-target="#flush-collapseThree" aria-expanded="false"
                          aria-controls="flush-collapseThree">Can I upgrade to a different plan at a later
                          time?</button>
                      </h2>
                      <div id="flush-collapseThree" class="accordion-collapse collapse"
                        aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Sassly is an on-brand AI copilot for businesses. It helps creators
                          use generative AI to break through writer’s block, create original imagery, and repackage
                          content into different formats and languages in your company's brand voice. Unlike most AI
                          tools which are tied to individual tools and can produce pretty generic outputs,</div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                          data-bs-target="#flush-collapseFour" aria-expanded="false"
                          aria-controls="flush-collapseFour">What’s the cost of additional users?</button>
                      </h2>
                      <div id="flush-collapseFour" class="accordion-collapse collapse"
                        aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Sassly is an on-brand AI copilot for businesses. It helps creators
                          use generative AI to break through writer’s block, create original imagery, and repackage
                          content into different formats and languages in your company's brand voice. Unlike most AI
                          tools which are tied to individual tools and can produce pretty generic outputs,</div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                          data-bs-target="#flush-collapseFive" aria-expanded="false"
                          aria-controls="flush-collapseFive">What’s the commitment?</button>
                      </h2>
                      <div id="flush-collapseFive" class="accordion-collapse collapse"
                        aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Sassly is an on-brand AI copilot for businesses. It helps creators
                          use generative AI to break through writer’s block, create original imagery, and repackage
                          content into different formats and languages in your company's brand voice. Unlike most AI
                          tools which are tied to individual tools and can produce pretty generic outputs,</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="faq-thumb">
                <div class="btn-wrapper">
                  <img class="shape-1" src="assets/imgs/shape/shape-s-18.webp" alt="shape image">
                  <img class="shape-2" src="assets/imgs/shape/shape-s-19.webp" alt="shape image">
                  <a href="contact.html" class="wc-btn wc-btn-primary btn-text-flip"> <span
                      data-text="Ask us Question">Ask us Question</span></a>
                </div>
                <img class="main-image" src="assets/imgs/gallery/img-s-21.webp" alt="gallery image">
              </div>
            </div>
          </section>
          <!-- faq area end  -->

        </main>

        <!-- footer area start  -->
        <footer class="footer-area style-2">
          <div class="container container-large">
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
                  <li><a href="ai-chatbot.html#">about</a></li>
                  <li><a href="ai-chatbot.html#">Careers</a></li>
                  <li><a href="ai-chatbot.html#">Press</a></li>
                  <li><a href="ai-chatbot.html#">Contact Us</a></li>
                  <li><a href="ai-chatbot.html#">System Status</a></li>
                </ul>
              </div>

              <div class="footer-widget-wrapper">
                <h2 class="title">Product</h2>
                <ul class="footer-nav-list">
                  <li><a href="ai-chatbot.html#">Live Chat</a></li>
                  <li><a href="ai-chatbot.html#">Jirogram</a></li>
                  <li><a href="ai-chatbot.html#">Datasetico</a></li>
                  <li><a href="ai-chatbot.html#">Underline</a></li>
                  <li><a href="ai-chatbot.html#">Keyword</a></li>
                </ul>
              </div>
              <div class="footer-widget-wrapper">
                <h2 class="title">Newsletter</h2>
                <form action="ai-chatbot.html#" class="subscribe-form">
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
                <li><a href="ai-chatbot.html#"><i class="fa-brands fa-facebook-f"></i></a></li>
                <li><a href="ai-chatbot.html#"><i class="fa-brands fa-twitter"></i></a></li>
                <li><a href="ai-chatbot.html#"><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href="ai-chatbot.html#"><i class="fa-brands fa-linkedin"></i></a></li>
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
              <form action="ai-chatbot.html#" class="user-form">
                <div class="input-field">
                  <input type="email" placeholder="Enter your email">
                </div>
                <div class="input-field">
                  <input type="password" placeholder="Enter password">
                </div>
                <div class="policy-field">
                  <input type="checkbox" id="p-policy" name="p-policy" value="Boat">
                  <label for="policy">Remember me</label>
                  <a href="ai-chatbot.html#" class="forget-password">Forgot your password?</a>
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
              <form action="ai-chatbot.html#" class="user-form">
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
                  <label for="d-policy">I agree to sassly <span><a href="ai-chatbot.html#">Terms of Service.</a></span></label>
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
              <li><a href="ai-chatbot.html#"><i class="fa-brands fa-twitter"></i></a></li>
              <li><a href="ai-chatbot.html#"><i class="fa-brands fa-instagram"></i></a></li>
              <li><a href="ai-chatbot.html#"><i class="fa-brands fa-linkedin"></i></a></li>
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
        },
        pagination: {
          el: '.testimonial-pagination',
          type: 'bullets',
          clickable: true,
        },
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


    // corporate_brand_slider_active
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
            slidesPerView: 3,
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
  </script>



</body>

</html>