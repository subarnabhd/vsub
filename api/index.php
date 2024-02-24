<?php declare(strict_types = 1); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="shortcut icon" href="./image/favi.png" />
  <meta name="google-site-verification" content="Ztk88ACyEy4hrThBcX8xX4808NU10tv60ClxkgcWGNQ" />


  <!-- HTML Meta Tags -->
  <title>Subarna Bhandari</title>
  <meta name="description" content="Make your task easier : Link. by Subarna">


  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <!-- Google Icon -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,1,0" />

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
    rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- CSS Link -->
  <link rel="stylesheet" href="/css/style.css" />
  <link rel="stylesheet" href="/css/header.css" />
  <link rel="stylesheet" href="/css/home.css" />
  <link rel="stylesheet" href="/css/footer.css" />
  <link rel="stylesheet" href="/css/copywrite.css" />

  <!-- SLIDER -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>

<body>
  
<?php include 'header.php'; ?>

<main>


<div class="home-1 d-nav" id="scroll-top">


  <div class="home-link">


    <div class="link-left">
      <div class="link-line">
      </div>
      <div>
        <ul>
          <li><a href="https://facebook.com/subarnabhd" target="_blank">facebook</a></li>
          <li><a href="https://www.linkedin.com/in/subarnabhd" target="_blank">linkedin</a></li>
          <li><a href="https://www.instagram.com/subarnabhd" target="_blank">instagram</a></li>
          <li><a href="https://behance.net/subarnabhd" target="_blank">Behance</a></li>
          <li><a href="https://behance.net/subarnabhd" target="_blank">Twitter</a></li>
        </ul>
      </div>
    </div>

    <div class="link-center">
      <div class="link-line">
      </div>
    </div>

    <div class="link-right">
      <div class="link-line">
      </div>
      <div>
        <ul>
          <li><a href="#home-scroll">Scroll Down</a></li>
        </ul>
      </div>
    </div>

  </div>

  <div class="c-home">
    <div class="h-home">
      <img src="./image/about/SubarnaBhandari.webp" />
      <h2>Subarna<strong>.</strong><span>Bhandari</span></h2>
      <a href="https://subarnabhandari.com/">www.subarnabhandari.com</a>

    </div>
  </div>
</div>
<script>
  $(window).scroll(function () {
    var scroll = $(window).scrollTop();
    // console.log(scroll);
    if (scroll > 0) {
      $('.minimal').removeClass('transparent');
    } else {
      $('.minimal').addClass('transparent');
    }

    // var scroll = $(window).scrollTop();
    var scale = 1 - scroll / 1000;
    if (scale >= 0.77) {
      $('.c-home').css('transform', 'scale(' + scale + ')');
    }
  });
</script>

<!-- <div class="home-explore">

  <a href="/studio.html">Explore TSS - The Subrana Studio <i class="fa-solid fa-arrow-right-long"></i></a>

</div> -->

<div class="home-mail">

  <a target="_blank" href="mailto:subarnabhd@gmail.com"><i
      class="fa-regular fa-paper-plane"></i>&nbsp;&nbsp;subarnabhd@gmail.com </a>

</div>

<div class="home-2" id="home-scroll">
  <div class="home-2-container">
    <div class="home-2-bar">
      <a type="button" href="#home-scroll"></a>
    </div>
    <h2>Striving to create elegant & effortless designs.</h2>
    <p>Unlimited possibility to reach out. Create your own brand with Subarna.</p>
    <!-- <a href="/studio.html">View More</a> -->
    <img src="./image/home/pc.webp" />

  </div>
</div>

<div class="home-6 d-nav">
  <div class="container home-conatiner-6 row">
    <div class="col1 col">
      <h2>Why to Choose ?</h2>
      <p>Over the years, I have acquired relevant skills and experience, which I shall bring to you.
        These “why me” reasons should be enough to convince someone who is looking for a design solution.<br><br>
        But if you’re still in doubt,
      </p>
      <a href="/contact.html" type="button">Let’s do a small test together</a>
      <hr>
      <p>Agree or disagree with any of the above?</p>
      <a class="home-6-btn" type="button" target="_blank" href="/contact.html">Send Your honest feedback</a>
    </div>
    <div class="col2 col">

      <div class="why-box dbox" style="margin-left:-100px;">
        <img src="/image/home/svg0.svg" alt="">
        <div>
          <h3>Top notch quality</h3>
          <p>Nothing less than the best</p>
        </div>
      </div>

      <div class="why-box dbox">
        <img src="/image/home/svg1.svg" alt="">
        <div>
          <h3>Speedy turn around</h3>
          <p>But don’t forget me being a human</p>
        </div>
      </div>

      <div class="why-box dbox" style="margin-left:-80px;">
        <img src="/image/home/svg2.svg" alt="">
        <div>
          <h3>Always ready to chat</h3>
          <p>Except for when I am dreaming</p>
        </div>
      </div>

      <div class="why-box dbox">
        <img src="/image/home/svg3.svg" alt="">
        <div>
          <h3>Email Availability 9.5/10</h3>
          <p>I mean it - Test it now</p>
        </div>
      </div>

      <div class="why-box dbox" style="margin-left:80px;">
        <img src="/image/home/svg4.svg" alt="">
        <div>
          <h3>Affordable</h3>
          <p>Don’t mix it up with “Cheap”</p>
        </div>
      </div>






    </div>
  </div>

  <div class="h-text-slider">
    <div class="swiper tr-slider">
      <div class="swiper-wrapper">

        <div class="swiper-slide ">
          <p>Subarna Bhandari</p>
        </div>
        <div class="swiper-slide">
          <p>The Subarna Studio</p>
        </div>
        <div class="swiper-slide ">
          <p>TSS</p>
        </div>
        <div class="swiper-slide">
          <p>www.subarnabhandari.com</p>
        </div>
        <div class="swiper-slide ">
          <p>Subarna Bhandari</p>
        </div>
        <div class="swiper-slide">
          <p>Subarna Bhandari</p>
        </div>
        <div class="swiper-slide ">
          <p>Subarna Bhandari</p>
        </div>
        <div class="swiper-slide">
          <p>The Subarna Studio</p>
        </div>
        <div class="swiper-slide ">
          <p>TSS</p>
        </div>
        <div class="swiper-slide">
          <p>www.subarnabhandari.com</p>
        </div>
        <div class="swiper-slide ">
          <p>Subarna Bhandari</p>
        </div>
        <div class="swiper-slide">
          <p>Subarna Bhandari</p>
        </div>
        <div class="swiper-slide ">
          <p>subarnabhd</p>
        </div>
      </div>
    </div>

    <script>


      const trswiper = new Swiper('.tr-slider', {
        loop: true,
        autoplay: {
          delay: 0,
          pauseOnMouseEnter: false,
          disableOnInteraction: false,
          reverseDirection: true,
        },
        speed: 4000,
        slidesPerView: 8,
      })


    </script>
    <div class="swiper tl-slider">
      <div class="swiper-wrapper">

        <div class="swiper-slide ">
          <p>UI Design</p>
        </div>
        <div class="swiper-slide">
          <p>UX Design</p>
        </div>
        <div class="swiper-slide ">
          <p>Product Design</p>
        </div>
        <div class="swiper-slide">
          <p>Graphic Design</p>
        </div>
        <div class="swiper-slide ">
          <p>UI Designer</p>
        </div>
        <div class="swiper-slide">
          <p>UX Designer</p>
        </div>
        <div class="swiper-slide ">
          <p>Market Analysis</p>
        </div>
        <div class="swiper-slide">
          <p>Social Media</p>
        </div>
        <div class="swiper-slide ">
          <p>Digital Marketing</p>
        </div>
        <div class="swiper-slide">
          <p>Product Validation</p>
        </div>
        <div class="swiper-slide ">
          <p>UI Components</p>
        </div>
        <div class="swiper-slide">
          <p>Figma</p>
        </div>

      </div>
    </div>


    <script>
      const tlswiper = new Swiper('.tl-slider', {
        loop: true,
        autoplay: {
          delay: 0,
          pauseOnMouseEnter: false,
          disableOnInteraction: false,
        },
        speed: 4000,
        slidesPerView: 8,
      })
    </script>



  </div>

</div>

<div class="home-5 d-nav">

  <div class="row">
    <div class="col-6">
      <img href="/studio.html" src="/image/home/Subarna Bhandari-20.svg" alt="The Subarna Studio" class="img-fluid">
    </div>
    <div class="col-6">
      <img src="/image/home/Subarna Bhandari-22.svg" alt="Image 2" class="img-fluid">
    </div>
  </div>
  <div class="row">
    <div class="col-6">
      <img src="/image/home/Subarna Bhandari-21.svg" alt="Image 3" class="img-fluid">
    </div>
    <div class="col-6">
      <img src="/image/home/Subarna Bhandari-24.webp" alt="Image 4" class="img-fluid">
    </div>
  </div>

</div>

<div class="home-4">
  <lottie-player src="https://assets5.lottiefiles.com/packages/lf20_dzkk5Z.json" background="transparent" speed="1"
    style="width: 150px; height:80px; text-align: center;" loop autoplay></lottie-player>

  <h2>Good design is good business.</h2>
  <p>“You can do anything you set your mind to.”</p>

  <div class="swiper s-slider">
    <div class="swiper-wrapper">
      <div class="swiper-slide"><img src="./image/design/slider_1.gif" alt="Slide 1"></div>
      <div class="swiper-slide"><img src="./image/design/slider_2.gif" alt="Slide 2"></div>
      <div class="swiper-slide"><img src="./image/design/slider_3.webp" alt="Slide 3"></div>
      <div class="swiper-slide"><img src="./image/design/slider_4.webp" alt="Slide 4"></div>
      <div class="swiper-slide"><img src="./image/design/slider_5.webp" alt="Slide 5"></div>
      <div class="swiper-slide"><img src="./image/design/slider_6.webp" alt="Slide 6"></div>
      <div class="swiper-slide"><img src="./image/design/slider_7.webp" alt="Slide 7"></div>
      <div class="swiper-slide"><img src="./image/design/slider_8.webp" alt="Slide 8"></div>
      <div class="swiper-slide"><img src="./image/design/slider_9.webp" alt="Slide 9"></div>
      <div class="swiper-slide"><img src="./image/design/slider_10.webp" alt="Slide 10"></div>
      <div class="swiper-slide"><img src="./image/design/slider_11.webp" alt="Slide 11"></div>
      <div class="swiper-slide"><img src="./image/design/slider_12.webp" alt="Slide 12"></div>
      <div class="swiper-slide"><img src="./image/design/slider_13.webp" alt="Slide 13"></div>
      <div class="swiper-slide"><img src="./image/design/slider_14.webp" alt="Slide 14"></div>
      <div class="swiper-slide"><img src="./image/design/slider_15.webp" alt="Slide 15"></div>
      <div class="swiper-slide"><img src="./image/design/slider_16.webp" alt="Slide 16"></div>
      <div class="swiper-slide"><img src="./image/design/slider_17.webp" alt="Slide 17"></div>
      <div class="swiper-slide"><img src="./image/design/slider_18.webp" alt="Slide 18"></div>
      <div class="swiper-slide"><img src="./image/design/slider_19.webp" alt="Slide 19"></div>
      <div class="swiper-slide"><img src="./image/design/slider_20.webp" alt="Slide 20"></div>
      <div class="swiper-slide"><img src="./image/design/slider_21.webp" alt="Slide 21"></div>
      <div class="swiper-slide"><img src="./image/design/slider_23.webp" alt="Slide 23"></div>
      <div class="swiper-slide"><img src="./image/design/slider_24.webp" alt="Slide 24"></div>
      <div class="swiper-slide"><img src="./image/design/slider_25.webp" alt="Slide 25"></div>
      <div class="swiper-slide"><img src="./image/design/slider_26.webp" alt="Slide 26"></div>
      <div class="swiper-slide"><img src="./image/design/slider_27.webp" alt="Slide 27"></div>
      <div class="swiper-slide"><img src="./image/design/slider_28.webp" alt="Slide 28"></div>

    </div>
  </div>

  <script>
    const swiper = new Swiper('.s-slider', {
      loop: true,
      autoplay: {
        delay: 0,
        pauseOnMouseEnter: false,        // added
        disableOnInteraction: false,    // added
      },
      speed: 4000,
      slidesPerView: 5,
    })
  </script>

</div>

<div class="home-3">
  <div class="home-3-container">
    <div class="container home-conatiner">
      <div class="col1 col-6">
        <h2>Got an idea?<br>Let's work together.</h2>
        <p>Are you an entrepreneur/business with a great idea,
          <br>but need an identity to start with?<br><br>

          I love ideas because I believe in them.
          <br>Let's discuss your idea.

        </p>
        <a type="button" class="yes-button yes-button-home" href="/contact.html">HIRE</a>
      </div>
      <div class="col2 col-6">
        <img class="simage" src="./image/home/subarnabhd-showcase.webp" alt="Subarna Bhandari" />
      </div>
    </div>
  </div>
</div>

<div class="home-7 d-nav">
  <div class="container home-7-conatiner">
    <div class="col1 col-1">
      <p>Trusted By:</p>
    </div>
    <div class="col2 col-11">


      <div class="swiper c-slider">
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


        const swiper2 = new Swiper('.c-slider', {
          loop: true,
          autoplay: {
            delay: 0,
            pauseOnMouseEnter: false,        // added
            disableOnInteraction: false,    // added
          },
          speed: 1500,
          slidesPerView: 8,
        })


      </script>

    </div>
  </div>
</div>



</main>


    <?php include 'footer.php'; ?>
    <?php include 'copywrite.php'; ?>
    <?php include 'modal.php'; ?>


</body>
</html>
