<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="./image/favi.png" />
    <meta name="google-site-verification" content="Ztk88ACyEy4hrThBcX8xX4808NU10tv60ClxkgcWGNQ" />

    <!-- HTML Meta Tags -->
    <title>Contact. Subarna</title>
    <meta name="description" content="Contact Subarna">

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
    <link rel="stylesheet" href="/css/contact.css" />
    <link rel="stylesheet" href="/css/copywrite.css" />

</head>

<body>

    <header class="theader minimal">
        <nav id="main-nav"></nav>
    </header>

    <main>

        <div class="titlebar">
            <div class="container ">
                <div class="row">

                    <div class="col-3">
                        <h2>Need to contact us?</h2>
                    </div>
                    <div class="col-6">
                        <p>Chat with us, send us an email or fill up the form below.</p>
                    </div>
                    <div class="col-3 t-button" style="text-align: end;">
                        <a href="/link.html">Quick Link</a>
                        <a href="/portfolio.html">Portfolio</a>
                    </div>


                </div>
            </div>
        </div>

        <div class="c-contain d-nav">
            <div class="container c-container">
                <div class="c-contain-1 col">

                    <h2>Let's start a project together.</h2>
                    <p>Email me about your project. Make sure you provide detailed information about your project idea.
                        I would love it if you could provide me information like who you are, what do you do and what
                        kind of budget range you have in place. Alternatively, you can direct message me in any of my
                        following social media platforms.​</p>
                    <a href="mailto:hello@subarnabhandari.com"> <i class="fa-regular fa-paper-plane"></i>
                        &nbsp;hello@subarnabhandari.com</a>



                </div>
                <div class="c-contain-2 col">
                    <lottie-player src="https://assets8.lottiefiles.com/packages/lf20_JkzqCb.json"
                        background="transparent" speed="1" style="width: 300px; height: 300px; " loop
                        autoplay></lottie-player>

                    <ul class="nav mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                aria-selected="true">Message</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                                aria-selected="false">Schedule a Call</button>
                        </li>

                    </ul>
                    <div class="tab-content" id="pills-tabContent">

                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab">'
                            <p>We love to sit down and talk about ideas. Let‘s get your project up and running. Get in
                                touch for a tech consultation today.</p>
                            <h2>What services are you looking for?</h2>


                            <!-- modify this form HTML and place wherever you want your form -->

                            <form action="https://formspree.io/f/xdorpbyn" method="POST">

                                <div class="form-row">
                                    <label for="fullname">Your full name</label>
                                    <input type="text" placeholder="Eg. Subarna Bhnadrai"
                                        class="form-control form-control-lg" id="inputCity">
                                </div>

                                <div class="form-row">

                                    <label for="emailaddress">Your Email Address</label>
                                    <input type="email" name="email" placeholder="Eg. Subarna@mail.com"
                                        class="form-control form-control-lg" id="inputEmail4" placeholder="Email">

                                </div>



                                <div class="form-row">
                                    <label for="inputState">What services are you looking for?</label>
                                    <select id="inputState" name="timely" class="form-control form-control-lg">
                                        <option selected disabled>What services are you looking for?</option>

                                        <option>UX Design</option>
                                        <option>Development</option>
                                        <option>Branding</option>
                                        <option>Others</option>
                                        <option>SEO</option>
                                        <option>Motion Design</option>
                                        <option>Wordpress</option>
                                        <option>Consulting</option>
                                    </select>
                                </div>

                                <div class="form-row">
                                    <label for="inputZip">Tell us in Brief</label>
                                    <textarea rows="5" name="message" placeholder="Message/ Project Details"
                                        class="form-control form-control-lg" id="inputZip"></textarea>
                                </div>



                                <button type="submit" class="btn btn-primary fom-btn">Send inquiry &nbsp;&nbsp; <i
                                        class="fa-solid fa-arrow-right-long"></i></button>

                                <p class="policy">By clicking on “Send Inquiry” button, <br>you agree to our <a
                                        class="underline" target="_blank" rel="noreferrer"
                                        href="/privacy-policy">Privacy Policy</a>.</p>
                            </form>




                        </div>

                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab">




                            <h2>Project discussion call</h2>
                            <p>A Walk through our work process and explain how we can help !</p>
                            <a href="https://calendly.com/subarnabhd" type="button" target="_blank">Schedule my date and
                                time &nbsp;&nbsp; <i class="fa-solid fa-arrow-right-long"></i></a>

                        </div>

                    </div>

                </div>
            </div>


        </div>

        <div class="c-title s-button c-footer">
            <div class="container">
                <div class="row">

                    <div class="c-bar">
                        Need more help?
                        <a class="subcontext" href="https://www.messenger.com/t/subarnabhd" target="_blank"
                            title="Live Chat messenger"><i class="fa-brands fa-facebook-messenger"></i></a>
                        <a class="subcontext" href="https://wa.me/9779844740360" target="_blank"
                            title="Live Chat messenger"><i class="fa-brands fa-whatsapp"></i></a>
                        or call <a class="subcontext" href="tel:+977-9844740360" title="Call Subarna Bhnadrai">
                            +977-9844740360</a>
                    </div>

                </div>
            </div>
        </div>


    </main>

    <footer>
        <div class="scopywrite"></div>
    </footer>

 <!-- Modal Menu Start-->
 <div class="menu">
    <div class="modal fade " id="exampleModalmenu" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="left">
              <ul>
                <li><a href="/index.html" class="modal-dot">Home</a></li>
                <li><a href="/about.html" class="modal-dot">About</a></li>
                <li><a href="/studio.html" class="modal-dot">Studio<strong>.</strong></a></li>
                <li><a href="/portfolio.html" class="modal-dot">Portfolio</a></li>
                <li><a href="/contact.html" class="modal-dot">Contact</a></li>

              </ul>
            </div>
            <div class="center">
              <ul>
                <h3>Useful Link</h3>
                <li><a href="/blog.html" class="modal-sm-dot">Good Reads</a></li>
                <li><a target="_blank" href="https://read.cv/subarnabhd" class="modal-sm-dot">Resume</a></li>
                <li><a href="#" class="modal-sm-dot">Store</a></li>

                <li><a href="/link.html" class="modal-sm-dot">Link</a></li>
                <li><a href="/tools.html" class="modal-sm-dot">Tools</a></li>
                <li><a target="_blank" href="http://pay.subarnabhandari.com/" class="modal-sm-dot">Pay</a>
                </li>

              </ul>
            </div>
            <div class="right">
              <h3>Got an idea?</h3>
              <h2>Together, let‘s create
                something wonderful.</h2>
              <a href="/contact.html" class="btn" type="button">Start your project</a>
            </div>
          </div>
          <div class="modal-footer">
            <div class="modal-container">
              <div class="left">
                <li><a target="_blank" href="https://facebook.com/subarnabhd" class="m-foot-link">Facebook</a></li>
                <li><a target="_blank" href="https://instagram.com/subarnabhd" class="m-foot-link">Instagram</a></li>
                <li><a target="_blank" href="https://www.linkedin.com/in/subarnabhd" class="m-foot-link">Linkedin</a>
                </li>
                <li><a target="_blank" href="https://twitter.com/subarnabhd" class="m-foot-link">Twitter</a></li>
                <li><a target="_blank" href="https://behance.net/subarnabhd" class="m-foot-link">Behance</a></li>
                <li><a target="_blank" href="https://dribbble.com/subarnabhd" class="m-foot-link">Dribbble</a></li>
                <li><a target="_blank" href="/link.html" class="m-foot-link">More..</a></li>

              </div>
              <div class="right">
                <li><a target="_blank" href="mailto:hello@subarnabhandari.com">hello@subarnabhandari.com</a></li>

              </div>



            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
  <!-- Modal Menu End-->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

    <script src="/script/header.js"></script>
    <script src="./script/script.js"></script>
    <script src="./script/copywrite.js"></script>

</body>

</html>