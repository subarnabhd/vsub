<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="./image/studio/sfavi.png" />
    <meta
      name="google-site-verification"
      content="Ztk88ACyEy4hrThBcX8xX4808NU10tv60ClxkgcWGNQ"
    />
    <!-- Required og:meta tags -->

    <!-- HTML Meta Tags -->
    <title>Studio. by Subarna</title>
    <meta
      name="description"
      content="Make your task easier : Link. by Subarna"
    />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />

    <!-- Google Icon -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,1,0"
    />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
      rel="stylesheet"
    />

    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <!-- SLIDER -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <!-- CSS Link -->
    <link rel="stylesheet" href="/css/style.css" />
    <link rel="stylesheet" href="/css/header.css" />
    <link rel="stylesheet" href="/css/studio.css" />
    <link rel="stylesheet" href="/css/footer.css" />
    <link rel="stylesheet" href="/css/copywrite.css" />
  </head>

  <body>
  <?php include 'header.php'; ?>

    <main>
      <div class="s-banner d-nav">
        <a href="#white-head" class="s-icon scroll-down"
          ><i class="fa-solid fa-arrow-down-long"></i
        ></a>

        <div class="container s-conatin">
          <img src="./image/studio/tss.svg" />
          <h2>The Subarna Studio</h2>

          <a href="https://studio.subarnabhandari.com/"
            >studio.subarnabhandari.com</a
          >
        </div>
        <div class="s-icons row">
          <a
            href="https://www.facebook.com/TheSubarnaStudio"
            class="s-icon"
            target="_blank"
            ><i class="fab fa-facebook-f"></i
          ></a>
          <a
            href="https://www.instagram.com/TheSubarnaStudio"
            class="s-icon"
            target="_blank"
            ><i class="fab fa-instagram"></i
          ></a>
          <a
            href="https://www.linkedin.com/company/TheSubarnaStudio"
            class="s-icon"
            target="_blank"
            ><i class="fab fa-linkedin-in"></i
          ></a>
        </div>
      </div>

      <script>
        $(window).scroll(function () {
          var scroll = $(window).scrollTop();
          // console.log(scroll);
          if (scroll > 0) {
            $(".minimal").removeClass("transparent");
          } else {
            $(".minimal").addClass("transparent");
          }

          // var scroll = $(window).scrollTop();
          var scale = 1 - scroll / 1000;
          if (scale >= 0.77) {
            $(".s-icons").css("transform", "scale(" + scale + ")");
          }
        });
      </script>

      <div class="studio" id="white-head">
        <div class="container">
          <p>
            <a href="/studio.html">Studio<strong>.</strong> </a>Creating the
            brands<br />that people
            <strong>Love.</strong>
          </p>
        </div>
      </div>

      <div class="tss-4 d-nav">
        <div class="container">
          <div class="about-container col">
            <div class="col1 col">
              The Subarna
              <div class="col1-stack" style="--stacks: 3">
                <span style="--index: 0">Studio<strong>.</strong></span>
                <span style="--index: 1">Studio<strong>.</strong></span>
                <span style="--index: 2">Studio<strong>.</strong></span>
              </div>
              <span class="col1-right">TSS : #tss #thesubarnastudio</span>
            </div>
            <div class="col2 col">
              <p>DESIGN<strong>.</strong>SIMPLIFIED<strong>.</strong></p>
              <h2 class="card-title">About Us</h2>
              <p class="card-text">
                We call ourselves the innovative & problem-solving firm that
                gets your business to the next level.<br />THE TALE OF TSS We
                create experiences based on UX best practices, market research,
                branding.
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="tss-1 d-nav">
        <div class="container">
          <div>
            <h2 class="tss-title">Services We Provide</h2>
            <p class="tss-text">Transform your business idea with us</p>
          </div>
          <div class="card-deck">
            <div class="card dbox">
              <img src="/image/studio/branding.png" class="tss-img-top" alt="Branding & Identity" />
              <h4 class="card-title">Branding</h4>
              <p class="card-text">
                We design your digital presence and make your brand stand out by
                comprehending its true
              </p>
            </div>
            <div class="card dbox">
              <img src="/image/studio/ui-ux-design.png" class="tss-img-top" alt="Ui/UX Design" />
              <h4 class="card-title">UI/UX Design</h4>
              <p class="card-text">
                Designing for web3 is the cornerstone of what we do. Our
                designer’s belief in making
              </p>
            </div>
       
          </div>
          <div class="app-ico">
            <img src="/image/studio/ps.svg" class="ps" alt="Adobe Photoshop" />
            <img src="/image/studio/ai.svg" class="ai" alt="Adobe Illustrators" />
            <img src="/image/studio/id.svg" class="id" alt="Adobe Indesign" />
            <img src="/image/studio/pr.svg" class="pr" alt="Adobe Premier Pro" />
            <img src="/image/studio/ae.svg" class="ae" alt="Adobe After Effect" />
            <img src="/image/studio/xd.svg" class="xd" alt="Adobe XD" />
            <img src="/image/studio/figma.svg" class="figma" alt="Figma" />
            <img src="/image/studio/sketch.svg" class="sketch" alt="Sketch" />
          </div>
        </div>
      </div>

      <div class="tss-3 d-nav">
        <div class="container">
          <div>
            <h2 class="tss-title">The Tale of TSS</h2>
            <p class="tss-text">
              We create experiences based on UX best practices, market research,
              branding, and user testing that leads to products that make real
              success. The Subarna Studio has the capabilities of designing
              conventional web and mobile applications and the solutions built
              using cutting-edge technologies.
            </p>
          </div>
          <div class="card-deck">
            <div class="card dbox">
              <img src="/image/studio/values-1.webp" class="tss-img-top" alt="..." />
              <h4 class="card-title">Ownership</h4>
              <p class="card-text">
                Each TSS owns the processes and goes beyond their tasks to
                ensure the growth and success of Expedite.
              </p>
            </div>
            <div class="card dbox">
              <img src="/image/studio/sun.webp" class="tss-img-top" alt="..." />
              <h4 class="card-title">Can-Do Attitude</h4>
              <p class="card-text">
                TSS possess a can-do attitude and serve their tasks whole
                heartedly by thinking out of the box.
              </p>
            </div>
            <div class="card dbox">
              <img
                src="/image/studio/format-circle.webp"
                class="tss-img-top"
                alt="..."
              />
              <h4 class="card-title">Growth Mindset</h4>
              <p class="card-text">
                TSS are persistent towards their goals and responsibilities
                despite any hurdles they might face.
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="tss-2 d-nav">
        <div class="container tss-2-container">
          <h2 class="tss-title">Our Approach</h2>
          <p class="tss-text">
            As a full-service UI UX design agency, we work with our clients to
            discover, define, design and develop web & mobile user experiences
            that add value and get you close to the ultimate goal. What would
            the ultimate success of your project look like? Asking the question
            at the beginning of each project allows us to be laser-focused
            throughout the entire design process.
          </p>
        </div>
      </div>

      <div class="studio-7 d-nav">
        <div class="container studio-7-conatiner">
          <div class="col1 col-1">
            <p>Trusted By:</p>
          </div>
          <div class="col2 col-11">
            <div class="swiper s-slider">
              <div class="swiper-wrapper">
               
                <div class="swiper-slide">
                  <a href="https://www.goldenmudcreation.com/" target="_blank">
                    <img src="./image/client/goldenmudcreation.webp" alt="Goldenmud Creation" />
                  </a>
                </div>
                <div class="swiper-slide">
                  <a href="https://www.facebook.com/gwnofficial/" target="_blank">
                    <img src="./image/client/ghostwritingnepal.webp" alt="Ghost Writing Nepal" />
                  </a>
                </div>
                <div class="swiper-slide">
                  <a href="#" target="_blank">
                    <img src="./image/client/moviemandala.webp" alt="Movie Mandala" />
                  </a>
                </div>
                <div class="swiper-slide">
                  <a href="https://designpac.net" target="_blank">
                    <img src="./image/client/designpac.webp" alt="Design Pac" />
                  </a>
                </div>
                <div class="swiper-slide">
                  <a href="https://qubex.com.np/" target="_blank">
                    <img src="./image/client/qubexedu.webp" alt="QubexEdu - Qbex" />
                  </a>
                </div>
                <div class="swiper-slide">
                  <a href="http://www.sallerikhabar.com/" target="_blank">
                    <img src="./image/client/sallerikhabar.webp" alt="Sallerikhabra" />
                  </a>
                </div>
                <div class="swiper-slide">
                  <a href="https://www.facebook.com/p/Speedy-Gateways-Travels-and-Tours-Pvt-Ltd-100057447669327/"
                    target="_blank">
                    <img src="./image/client/speedygateways.webp" alt="Speedy Gateways" />
                  </a>
                </div>
                <div class="swiper-slide">
                  <a href="https://www.facebook.com/sulavsmsnepal/" target="_blank">
                    <img src="./image/client/sulavsms.webp" alt="Sulav SMS" />
                  </a>
                </div>
                <div class="swiper-slide">
                  <a href="#" target="_blank">
                    <img src="./image/client/sumeshacollection.webp" alt="Sumesha Collection" />
                  </a>
                </div>
                <div class="swiper-slide">
                  <a href="https://www.facebook.com/techtrixnepal/" target="_blank">
                    <img src="./image/client/techtrix.webp" alt="Tech Trix Nepal" />
                  </a>
                </div>
                <div class="swiper-slide">
                  <a href="https://facebook.com/thechoicecafe" target="_blank">
                    <img src="./image/client/thechoicecafe.webp" alt="The Choice Cafe" />
                  </a>
                </div>
                <div class="swiper-slide">
                  <a href="https://ttworld.com.np/" target="_blank">
                    <img src="./image/client/ttworldeducationalconsultancy.webp" alt="TTworld Educational Consultancy" />
                  </a>
                </div>
                <div class="swiper-slide">
                  <a href="https://www.ovenfreshnepal.com/" target="_blank">
                    <img src="./image/client/ovenfresh.webp" alt="Oven Fresh Bakery" />
                  </a>
                </div>
                <div class="swiper-slide">
                  <a href="https://sethreadingsalon.com/" target="_blank">
                    <img src="./image/client/stylisheyebrowsthreading.webp" alt="Stylish Eyebrows Threading" />
                  </a>
                </div>
                <div class="swiper-slide">
                  <a href="#" target="_blank">
                    <img src="./image/client/baidikkendra.webp" alt="Baidik Kendra" />
                  </a>
                </div>
                <div class="swiper-slide">
                  <a href="https://www.risenepalrise.com/" target="_blank">
                    <img src="./image/client/risenepalrise.webp" alt="Rise Nepal Rise" />
                  </a>
                </div>
                <div class="swiper-slide">
                  <a href="https://osrdigital.com.np/" target="_blank">
                    <img src="./image/client/osrdigital.webp" alt="OSR Digital" />
                  </a>
                </div>
                <div class="swiper-slide">
                  <a href="link_to_slide_21" target="_blank">
                    <img src="./image/client/nepalpizzaschool.webp" alt="Nepal Pizza School" />
                  </a>
                </div>
                <div class="swiper-slide">
                  <a href="https://palikapatra.com/" target="_blank">
                    <img src="./image/client/palikapatra.webp" alt="Palika Patra" />
                  </a>
                </div>
                <div class="swiper-slide">
                  <a href="https://gandakiunesco.org/" target="_blank">
                    <img src="./image/client/gandakiunescoclub.webp" alt="Gandaki Unesco Club" />
                  </a>
                </div>
                <div class="swiper-slide">
                  <a href="http://www.fernwehedu.com/" target="_blank">
                    <img src="./image/client/fernwehiInternational.webp" alt="Fernwehi International" />
                  </a>
                </div>
                <div class="swiper-slide">
                  <a href="#" target="_blank">
                    <img src="./image/client/mayadevitv.webp" alt="Mayadevi TV" />
                  </a>
                </div>
                <div class="swiper-slide">
                  <a href="#" target="_blank">
                    <img src="./image/client/ucando.webp" alt="U Can Do" />
                  </a>
                </div>
                <div class="swiper-slide">
                  <a href="https://www.mad-honey.store" target="_blank">
                    <img src="./image/client/madehoneystore.webp" alt="Made Honey Store" />
                  </a>
                </div>
  
                <div class="swiper-slide">
                  <a href="https://flavorbakerynepal.com/" target="_blank">
                    <img src="./image/client/flavorbakery.webp" alt="Flavor Bakery Nepal" />
                  </a>
                </div>
  
                <div class="swiper-slide">
                  <a href="#" target="_blank">
                    <img src="./image/client/ghaila.webp" alt="Ghaila Oil" />
                  </a>
                </div>
  
                <div class="swiper-slide">
                  <a href="#" target="_blank">
                    <img src="./image/client/hulasfoods.webp" alt="Hulas Foods" />
                  </a>
                </div>
  
                <div class="swiper-slide">
                  <a href="#" target="_blank">
                    <img src="./image/client/itharimedical.webp" alt="Ithari Medical" />
                  </a>
                </div>
  
                <div class="swiper-slide">
                  <a href="https://kaveriinn.com/" target="_blank">
                    <img src="./image/client/kaverinn.webp" alt="Kaveri INN" />
                  </a>
                </div>
  
                <div class="swiper-slide">
                  <a href="https://kantipurinfotech.com/" target="_blank">
                    <img src="./image/client/kit.webp" alt="Kantipur Infotech-KIT" />
                  </a>
                </div>
  
                <div class="swiper-slide">
                  <a href="#" target="_blank">
                    <img src="./image/client/mobilelife.webp" alt="Mobile Life" />
                  </a>
                </div>
  
                <div class="swiper-slide">
                  <a href="https://www.youtube.com/@OSRReality" target="_blank">
                    <img src="./image/client/osrreality.webp" alt="OSR Reality" />
                  </a>
                </div>
                <div class="swiper-slide">
                  <a href="https://rrgcafrica.com/" target="_blank">
                    <img src="./image/client/rgg.webp" alt="Radaur Realty Group & Consultants" />
                  </a>
                </div>
                <div class="swiper-slide">
                  <a href="https://sajhainvestment.com/" target="_blank">
                    <img src="./image/client/Sajha.webp" alt="Sajha Investment" />
                  </a>
                </div>
                <div class="swiper-slide">
                  <a href="#" target="_blank">
                    <img src="./image/client/durapave.webp" alt="Durapave" />
                  </a>
                </div>
                <div class="swiper-slide">
                  <a href="#" target="_blank">
                    <img src="./image/client/shivamcement.webp" alt="Shivam Cement" />
                  </a>
                </div>
                <div class="swiper-slide">
                  <a href="#" target="_blank">
                    <img src="./image/client/slashplus.webp" alt="Slash Plus" />
                  </a>
                </div>
                <div class="swiper-slide">
                  <a href="#" target="_blank">
                    <img src="./image/client/swasthanari.webp" alt="Swastha Nari" />
                  </a>
                </div>
                <div class="swiper-slide">
                  <a href="https://techkagaj.com/" target="_blank">
                    <img src="./image/client/techkagaj.webp" alt="Tech Kagaj" />
                  </a>
                </div>
                <div class="swiper-slide">
                  <a href="https://trackshieldsgps.com/" target="_blank">
                    <img src="./image/client/trackshield.webp" alt="Track Shield" />
                  </a>
                </div>
              </div>
            </div>

            <script>
              const swiper2 = new Swiper(".s-slider", {
                loop: true,
                autoplay: {
                  delay: 0,
                  pauseOnMouseEnter: false, // added
                  disableOnInteraction: false, // added
                },
                speed: 1500,
                slidesPerView: 8,
              });
            </script>
          </div>
        </div>
      </div>

      <div class="tss-foot row d-nav">
        <div class="container">
          <div class="row">
            <img src="./image/studio/thesubarnastudio.svg" />
            <a href="mailto:thesubarnastudio@gmail.com"
              >thesubarnastudio@gmail.com</a
            >
          </div>
        </div>
      </div>
    </main>
    
    <footer>
    <?php include 'copywrite.php'; ?>

    </footer>

    <!-- Modal Menu Start-->
    <div class="menu">
      <div
        class="modal fade"
        id="exampleModalmenu"
        tabindex="-1"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true"
      >
        <div class="modal-dialog modal-fullscreen">
          <div class="modal-content">
            <div class="modal-header">
              <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
              ></button>
            </div>
            <div class="modal-body">
              <div class="left">
                <ul>
                  <li><a href="/index.html" class="modal-dot">Home</a></li>
                  <li><a href="/about.html" class="modal-dot">About</a></li>
                  <li>
                    <a href="/studio.html" class="modal-dot"
                      >Studio<strong>.</strong></a
                    >
                  </li>
                  <li>
                    <a href="/portfolio.html" class="modal-dot">Portfolio</a>
                  </li>
                  <li><a href="/contact.html" class="modal-dot">Contact</a></li>
                </ul>
              </div>
              <div class="center">
                <ul>
                  <h3>Useful Link</h3>
                  <li>
                    <a href="/blog.html" class="modal-sm-dot">Good Reads</a>
                  </li>
                  <li>
                    <a
                      target="_blank"
                      href="https://read.cv/subarnabhd"
                      class="modal-sm-dot"
                      >Resume</a
                    >
                  </li>
                  <li><a href="#" class="modal-sm-dot">Store</a></li>

                  <li><a href="/link.html" class="modal-sm-dot">Link</a></li>
                  <li><a href="/tools.html" class="modal-sm-dot">Tools</a></li>
                  <li>
                    <a
                      target="_blank"
                      href="http://pay.subarnabhandari.com/"
                      class="modal-sm-dot"
                      >Pay</a
                    >
                  </li>
                </ul>
              </div>
              <div class="right">
                <h3>Got an idea?</h3>
                <h2>Together, let‘s create something wonderful.</h2>
                <a href="/contact.html" class="btn" type="button"
                  >Start your project</a
                >
              </div>
            </div>
            <div class="modal-footer">
              <div class="modal-container">
                <div class="left">
                  <li>
                    <a
                      target="_blank"
                      href="https://facebook.com/subarnabhd"
                      class="m-foot-link"
                      >Facebook</a
                    >
                  </li>
                  <li>
                    <a
                      target="_blank"
                      href="https://instagram.com/subarnabhd"
                      class="m-foot-link"
                      >Instagram</a
                    >
                  </li>
                  <li>
                    <a
                      target="_blank"
                      href="https://www.linkedin.com/in/subarnabhd"
                      class="m-foot-link"
                      >Linkedin</a
                    >
                  </li>
                  <li>
                    <a
                      target="_blank"
                      href="https://twitter.com/subarnabhd"
                      class="m-foot-link"
                      >Twitter</a
                    >
                  </li>
                  <li>
                    <a
                      target="_blank"
                      href="https://behance.net/subarnabhd"
                      class="m-foot-link"
                      >Behance</a
                    >
                  </li>
                  <li>
                    <a
                      target="_blank"
                      href="https://dribbble.com/subarnabhd"
                      class="m-foot-link"
                      >Dribbble</a
                    >
                  </li>
                  <li>
                    <a target="_blank" href="/link.html" class="m-foot-link"
                      >More..</a
                    >
                  </li>
                </div>
                <div class="right">
                  <li>
                    <a target="_blank" href="mailto:hello@subarnabhandari.com"
                      >hello@subarnabhandari.com</a
                    >
                  </li>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal Menu End-->

    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>

    <script src="/script/header.js"></script>
    <script src="./script/script.js"></script>
    <script src="./script/footer.js"></script>
    <script src="./script/copywrite.js"></script>
  </body>
</html>
