<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: ../index.php");
    exit;
}
// include '../components/nav.php';
echo "Welcome " .$_SESSION['username'];
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>The Card HTML5 Template by tooplate.com</title>

    <!-- load CSS -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600"
    />
    <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="slick/slick.css" />
    <link rel="stylesheet" href="slick/slick-theme.css" />
    <link rel="stylesheet" href="css/magnific-popup.css" />
    <link rel="stylesheet" href="css/tooplate-style.css" />
    <!-- Templatemo style -->
  </head>

  <body>
    <!-- Loader -->
    <div id="loader-wrapper">
      <div id="loader"></div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
    </div>

    <div class="tm-main-container">
      <div class="tm-top-container">
        <!-- Menu -->
        <nav id="tmNav" class="tm-nav">
          <span class="tm-navbar-menu">SMART</span>
          <ul class="tm-nav-links">
            <li class="tm-nav-item active">
              <a href="welcome.php" data-align="right" class="tm-nav-link">Go back</a>
            </li>
            <li class="tm-nav-item">
              <a href="#" data-linkid="3" data-align="left" class="tm-nav-link">Contact</a>
            </li>
            <li class="tm-nav-item active">
              <a href="../../genral/logout.php" data-align="right" class="tm-nav-link">Logout</a>
            </li>
          </ul>
        </nav>

        <!-- Site header -->
        <!-- <header class="tm-site-header-box tm-bg-dark">
          <h1 class="tm-site-title">The Card</h1>
          <p class="mb-0 tm-site-subtitle">Free HTML Template for you</p>
        </header> -->
      </div>
      <!-- tm-top-container -->

      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <!-- Site content -->
            <div class="tm-content">
              <!-- Section 0 Introduction -->
              <section class="tm-section tm-section-0">
                <h2 class="tm-section-title mb-3 font-weight-bold">
                  Introduction
                </h2>
                <div class="tm-textbox tm-bg-dark">
                  <p>
                    AMU or the <b>Aligarh Muslim University</b> was established in 1920, but the founding stone was laid back in the year 1876 by <b>Sir Saiyyed Ahmad Khan</b>. Since then the university gave birth to many leaders, artists, poets, and many other gems. AMU is the heart and soul of the city of ALigarh. 
                  </p>
                  <p class="mb-0">
                    This is a small photo gallery that walks us through its historical course. 
                  </p>
                </div>
                <a href="#" id="tm_about_link" data-linkid="1" class="tm-link">Read More</a>
              </section>

              <!-- Section 1 About Me -->
              <section class="tm-section tm-section-1">
                <div class="tm-textbox tm-textbox-2 tm-bg-dark">
                  <h2 class="tm-text-blue mb-4">The Alumni</h2>
                  <p class="mb-4">
                    Throughout its course of time there has been numerous batches in different departments that studied and spend their time here. Indeed you can get out of Aligarh but to take Aligarh out from you is next to impossible. This website contains some memories that our alma mata might have lived and cherished. 
                  </p>
                  <p class="mb-4">
                    This gallery stands for those who who went out of here to rule the world and create their own empire. Majaaz said it perfectly <q>Jo abr yaha se uthe-ga wo saare jahan par barsega...</q>
                  </p>
                  <a
                    href="#"
                    id="tm_work_link"
                    data-linkid="2"
                    class="tm-link m-0"
                    >Next</a
                  >
                </div>
              </section>

              <!-- Section 2 Work (Gallery) -->
              <section class="tm-section tm-section-2 mx-auto">
                <div class="grid tm-gallery">
                  <figure class="effect-goliath tm-gallery-item">
                    <img src="img/01.jpg" alt="Image 1" class="" />
                    <figcaption>
                      <h2>
                        Thoughtful
                        <span>Goliath</span>
                      </h2>
                      <p>When Goliath comes out, you should run.</p>
                      <a href="img/01.jpg">View more</a>
                    </figcaption>
                  </figure>
                  <figure class="effect-goliath tm-gallery-item">
                    <img src="img/02.jpg" alt="Pretty Girl" class="" />
                    <figcaption>
                      <h2>
                        Pretty Girl
                        <span>Picture</span>
                      </h2>
                      <p>Vivamus feugiat, neque sed.</p>
                      <a href="img/02.jpg">View more</a>
                    </figcaption>
                  </figure>
                  <figure class="effect-goliath tm-gallery-item">
                    <img src="img/03.jpg" alt="Red Flowers" class="" />
                    <figcaption>
                      <h2>
                        A bunch of
                        <span>Red Flower</span>
                      </h2>
                      <p>Integer pellentesque nisi iaculis sapien.</p>
                      <a href="img/03.jpg">View more</a>
                    </figcaption>
                  </figure>
                  <figure class="effect-goliath tm-gallery-item">
                    <img src="img/04.jpg" alt="Stairs" class="" />
                    <figcaption>
                      <h2>
                        Thoughtful
                        <span>Goliath</span>
                      </h2>
                      <p>When Goliath comes out, you should run.</p>
                      <a href="img/04.jpg">View more</a>
                    </figcaption>
                  </figure>
                  <figure class="effect-goliath tm-gallery-item">
                    <img src="img/05.jpg" alt="Image 5" class="" />
                    <figcaption>
                      <h2>
                        Thoughtful
                        <span>Goliath</span>
                      </h2>
                      <p>When Goliath comes out, you should run.</p>
                      <a href="img/05.jpg">View more</a>
                    </figcaption>
                  </figure>
                  <figure class="effect-goliath tm-gallery-item">
                    <img src="img/06.jpg" alt="Image 6" class="" />
                    <figcaption>
                      <h2>
                        Thoughtful
                        <span>Goliath</span>
                      </h2>
                      <p>When Goliath comes out, you should run.</p>
                      <a href="img/06.jpg">View more</a>
                    </figcaption>
                  </figure>
                  <figure class="effect-goliath tm-gallery-item">
                    <img src="img/07.jpg" alt="Image 7" class="" />
                    <figcaption>
                      <h2>
                        Thoughtful
                        <span>Goliath</span>
                      </h2>
                      <p>When Goliath comes out, you should run.</p>
                      <a href="img/07.jpg">View more</a>
                    </figcaption>
                  </figure>
                  <figure class="effect-goliath tm-gallery-item">
                    <img src="img/08.jpg" alt="Image 8" class="" />
                    <figcaption>
                      <h2>
                        Thoughtful
                        <span>Goliath</span>
                      </h2>
                      <p>When Goliath comes out, you should run.</p>
                      <a href="img/08.jpg">View more</a>
                    </figcaption>
                  </figure>
                  <figure class="effect-goliath tm-gallery-item">
                    <img src="img/09.jpg" alt="Image 9" class="" />
                    <figcaption>
                      <h2>
                        Thoughtful
                        <span>Goliath</span>
                      </h2>
                      <p>When Goliath comes out, you should run.</p>
                      <a href="img/09.jpg">View more</a>
                    </figcaption>
                  </figure>
                  <figure class="effect-goliath tm-gallery-item">
                    <img src="img/10.jpg" alt="Image 10" class="" />
                    <figcaption>
                      <h2>
                        Thoughtful
                        <span>Goliath</span>
                      </h2>
                      <p>When Goliath comes out, you should run.</p>
                      <a href="img/10.jpg">View more</a>
                    </figcaption>
                  </figure>
                  <figure class="effect-goliath tm-gallery-item">
                    <img src="img/11.jpg" alt="Image 11" class="" />
                    <figcaption>
                      <h2>
                        Thoughtful
                        <span>Goliath</span>
                      </h2>
                      <p>When Goliath comes out, you should run.</p>
                      <a href="img/11.jpg">View more</a>
                    </figcaption>
                  </figure>
                  <figure class="effect-goliath tm-gallery-item">
                    <img src="img/12.jpg" alt="Image 12" class="" />
                    <figcaption>
                      <h2>
                        Thoughtful
                        <span>Goliath</span>
                      </h2>
                      <p>When Goliath comes out, you should run.</p>
                      <a href="img/12.jpg">View more</a>
                    </figcaption>
                  </figure>
                </div>
              </section>

              <!-- Section 3 Contact -->
              <section class="tm-section tm-section-3 tm-section-left">
                <form action="" class="tm-contact-form" method="post">
                  <div class="form-group mb-4">
                    <input
                      type="text"
                      id="contact_name"
                      name="contact_name"
                      class="form-control"
                      placeholder="Name"
                      required
                    />
                  </div>
                  <div class="form-group mb-4">
                    <input
                      type="email"
                      id="contact_email"
                      name="contact_email"
                      class="form-control"
                      placeholder="Email"
                      required
                    />
                  </div>
                  <div class="form-group mb-4">
                    <textarea
                      rows="4"
                      id="contact_message"
                      name="contact_message"
                      class="form-control"
                      placeholder="Message"
                      required
                    ></textarea>
                  </div>
                  <div class="form-group mb-0">
                    <button type="submit" class="btn tm-send-btn tm-fl-right">
                      Send
                    </button>
                  </div>
                </form>
              </section>
            </div>
          </div>
        </div>
      </div>

      <div class="tm-bottom-container">
        

        <!-- Footer -->
        <footer>
          || Down the memory lane ||
          By <b>Hamza</b> and <b>Shibli</b> ||
        
        </footer>
      </div>
    </div>

    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/background.cycle.js"></script>
    <script src="slick/slick.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script>
      let slickInitDone = false;
      let previousImageId = 0,
        currentImageId = 0;
      let pageAlign = "right";
      let bgCycle;
      let links;
      let eachNavLink;

      window.onload = function() {
        $("body").addClass("loaded");
      };

      function navLinkClick(e) {
        if ($(e.target).hasClass("external")) {
          return;
        }

        e.preventDefault();

        if ($(e.target).data("align")) {
          pageAlign = $(e.target).data("align");
        }

        // Change bg image
        previousImageId = currentImageId;
        currentImageId = $(e.target).data("linkid");
        bgCycle.cycleToNextImage(previousImageId, currentImageId);

        // Change menu item highlight
        $(`.tm-nav-item:eq(${previousImageId})`).removeClass("active");
        $(`.tm-nav-item:eq(${currentImageId})`).addClass("active");

        // Change page content
        $(`.tm-section-${previousImageId}`).fadeOut(function(e) {
          $(`.tm-section-${currentImageId}`).fadeIn();
          // Gallery
          if (currentImageId === 2) {
            setupSlider();
          }
        });

        adjustFooter();
      }

      $(document).ready(function() {
        // Set first page
        $(".tm-section").fadeOut(0);
        $(".tm-section-0").fadeIn();

        // Set Background images
        // https://www.jqueryscript.net/slideshow/Simple-jQuery-Background-Image-Slideshow-with-Fade-Transitions-Background-Cycle.html
        bgCycle = $("body").backgroundCycle({
          imageUrls: [
            "img/photo-02.jpg",
            "img/photo-03.jpg",
            "img/photo-04.jpg",
            "img/photo-05.jpg"
          ],
          fadeSpeed: 2000,
          duration: -1,
          backgroundSize: SCALING_MODE_COVER
        });

        eachNavLink = $(".tm-nav-link");
        links = $(".tm-nav-links");

        // "Menu" open/close
        if (links.hasClass("open")) {
          links.fadeIn(0);
        } else {
          links.fadeOut(0);
        }

        $("#tm_about_link").on("click", navLinkClick);
        $("#tm_work_link").on("click", navLinkClick);

        // Each menu item click
        eachNavLink.on("click", navLinkClick);

        $(".tm-navbar-menu").click(function(e) {
          if (links.hasClass("open")) {
            links.fadeOut();
          } else {
            links.fadeIn();
          }

          links.toggleClass("open");
        });

        // window resize
        $(window).resize(function() {
          // If current page is Gallery page, set it up
          if (currentImageId === 2) {
            setupSlider();
          }

          // Adjust footer
          adjustFooter();
        });

        adjustFooter();
      }); // DOM is ready

      function adjustFooter() {
        const windowHeight = $(window).height();
        const topHeight = $(".tm-top-container").height();
        const middleHeight = $(".tm-content").height();
        let contentHeight = topHeight + middleHeight;

        if (pageAlign === "left") {
          contentHeight += $(".tm-bottom-container").height();
        }

        if (contentHeight > windowHeight) {
          $(".tm-bottom-container").addClass("tm-static");
        } else {
          $(".tm-bottom-container").removeClass("tm-static");
        }
      }

      function setupSlider() {
        let slidesToShow = 4;
        let slidesToScroll = 2;
        let windowWidth = $(window).width();

        if (windowWidth < 480) {
          slidesToShow = 1;
          slidesToScroll = 1;
        } else if (windowWidth < 768) {
          slidesToShow = 2;
          slidesToScroll = 1;
        } else if (windowWidth < 992) {
          slidesToShow = 3;
          slidesToScroll = 2;
        }

        if (slickInitDone) {
          $(".tm-gallery").slick("unslick");
        }

        slickInitDone = true;

        $(".tm-gallery").slick({
          dots: true,
          customPaging: function(slider, i) {
            var thumb = $(slider.$slides[i]).data();
            return `<a>${i + 1}</a>`;
          },
          infinite: true,
          prevArrow: false,
          nextArrow: false,
          slidesToShow: slidesToShow,
          slidesToScroll: slidesToScroll
        });

        // Open big image when a gallery image is clicked.
        $(".slick-list").magnificPopup({
          delegate: "a",
          type: "image",
          gallery: {
            enabled: true
          }
        });
      }
    </script>
  </body>
</html>
