<?php
   if(isset($_POST['submit'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $subject = $_POST['subject'];
      $message = $_POST['message'];
      $to = "info@firmfoundation.co.zw";
      $body = "Name : $name Email: $email$message";

      if(mail($to,$subject,$body)) 
         {
             $msg = "Mail sent";

             echo $msg;
            
         } 
      print "<p>Thank you $name we will be in touch</p>" ;
   }

// else conditional statement for if(isset($_POST['submit']))
   else {
      echo "There was an error sending your message.";
   }

?>


<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <meta name="description" content="Firm Foundation Christian Academy is a Cambridge International Boarding School in Borrowdale, Harare. Firm Foundation will see your child through their academic career from Form 1 Enrollment, IGCSE, O level, As and A-Level">
    <meta name="author" content="Mupandawana - ZimDev">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>Firm Foundation Christian Academy - Home</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/logofull.jpeg" type="image/x-icon">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
 


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-edu-meeting.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">

      <!-- Vendor CSS Files -->
 
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
 


  <!-- Template Main CSS File -->
 

  </head>

<body>

  <!-- Sub Header -->
  <div class="sub-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-sm-8">
          <div class="left-content">
            <p> Download the <em><a href="assets/NewsLetter2023.pdf" target="_blank" rel="noopener noreferrer">Term 3 2023 Opening Newsletter here...</a></em>
            </p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-4">
          <div class="right-icons">
            <ul>
              <li><a href="https://www.facebook.com/firmfoundationchristianacademy" target="_blank" rel="noopener noreferrer"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>

            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <nav class="main-nav">
                      <!-- ***** Logo Start ***** -->
  

                       <!--img class ="rounded-circle" src="assets/images/logofull.jpeg"--> 
                      <a href="index.php" class="logo">
                      Firm Foundation
                      </a>

                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** -->
                      <ul class="nav">
                          <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>

                          <li class="has-sub">
                              <a href="javascript:void(0)">Borrowdale</a>
                              <ul class="sub-menu">
                               
                                  <li><a href="academics.html">Academics</a></li>
                                  <li class="has-sub">
                                    <a href="javascript:void(0)">Admissions</a> 
                                      <ul class="sub-menu">                                  
                                        <li><a href="assets/fees.pdf" target="_blank" rel="noopener noreferrer">Fees Structure</a></li>
                                        <li><a href="javascript.void(0)">Prospectus</a></li>
                                        <li><a href="assets/Application.pdf" target="_blank" rel="noopener noreferrer">Application Form</a></li>
                                        <li><a href="javascript.void(0)">Tour Booking</a></li>
                                      </ul>
                                    </li> 
                                  <li><a href="boarding.html">Boarding</a></li>
                                  <li><a href="javascript:void(0)">ExtraCurricular</a></li>
                                  <li><a href="sports.html">Sports</a></li>
                              </ul>
                          </li>

                          <li class="has-sub">
                            <a href="javascript:void(0)">Norton</a>
                            <ul class="sub-menu">
                              
                                <li><a href="academics.html">Academics</a></li>
                                <li class="has-sub">
                                  <a href="javascript:void(0)">Admissions</a> 
                                    <ul class="sub-menu">                                  
                                      <li><a href="assets/fees.pdf" target="_blank" rel="noopener noreferrer">Fees Structure</a></li>
                                      <li><a href="javascript.void(0)">Prospectus</a></li>
                                      <li><a href="assets/Application.pdf" target="_blank" rel="noopener noreferrer">Application Form</a></li>
                                      <li><a href="javascript.void(0)">Tour Booking</a></li>
                                    </ul>
                                  </li>
                                <li><a href="boardingnorton.html">Boarding</a></li>
                                <li><a href="javascript:void(0)">ExtraCurricular</a></li>
                                <li><a href="sports.html">Sports</a></li>
                                
                            </ul>
                        </li>
                        <li class=""><a href="javascript:void(0)">Spiritual</a></li>
                        <li class="scroll-to-section"><a href="#meetings">Events/News</a></li>
                          <li class=""><a href="gallery.html">Gallery</a></li> 

                          <!--li class="scroll-to-section"><a href="#apply">About Us</a></li-->
                          <li class="scroll-to-section"><a href="#contact">Contact</a></li> 
                      </ul> 
                          
                      <a class='menu-trigger'>
                          <span>Menu</span>
                      </a>
                      <!-- ***** Menu End ***** -->
                  </nav>
              </div>
          </div>
      </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <!-- ***** Main Banner Area Start ***** -->
  <section class="section main-banner" id="top" data-section="section1">
      <video autoplay muted loop id="bg-video" preload="metadata">
          <source src="assets/images/bgvideocut.mp4#t=0.1" type="video/mp4" />
      </video>

      <div class="video-overlay header-text">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="caption">
              <h1 style="color: aliceblue;">Welcome to Firm Foundation Christian Academy</h1>
	      <h6>Preparing Student for success in a changing world</h6>
              <p>Firm Foundation group of schools is a Private Christian College with campuses in Borrowdale Harare and SouthWood Norton.</p>
              <p>The school offers both Cambridge and ZIMSEC Curriculums up to A level.</p>

              <div class="main-button-red">
                  <div class="scroll-to-section"><a href="#contact">Join Us Now!</a></div>
              </div>
          </div>
              </div>
            </div>
          </div>
      </div>
  </section>
  <!-- ***** Main Banner Area End ***** -->

  <section class="services">
    <div class="container">
 	<div class="caption">
		<h2>Services</h2>
	</div>
	<hr>
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-service-item owl-carousel">
          
            <div class="item">
              <div class="icon">
                <img src="assets/images/service-icon-01.png" alt="service-icon-01">
              </div>
              <div class="down-content">
                <h4>Best Education</h4>
                <p>Cambridge IGCSE, AS, A-Level and ZIMSEC Curriculum.</p>
              </div>
            </div>
            
            <div class="item">
              <div class="icon">
                <img src="assets/images/service-icon-02.png" alt="service-icon-02">
              </div>
              <div class="down-content">
                <h4>Best Staff</h4>
                <p>Our teachers are highly qualified with a proven track record.</p>
              </div>
            </div>
            <div class="item">
              <div class="icon">
                <img src="assets/images/service-icon-02.png" alt="service-icon-02">
              </div>
              <div class="down-content">
                <h4>Boarding</h4>
                <p>4 Boarding houses built in scenic environments.</p>
              </div>
            </div>
            <div class="item">
              <div class="icon">
                <img src="assets/images/service-icon-03.png" alt="service-icon-03">
              </div>
              <div class="down-content">
                <h4>Christian Values</h4>
                <p>An Adventist School built on Christian Values.</p>
              </div>
            </div>
            
            <div class="item">
              <div class="icon">
                <img src="assets/images/service-icon-02.png" alt="service-icon-02">
              </div>
              <div class="down-content">
                <h4>ExtraCurricular Activities</h4>
                <p>Designed to fuel learning by stimulating creative thought and improving your social and organizational skills</p>
              </div>
            </div>
            
            <div class="item">
              <div class="icon">
                <img src="assets/images/service-icon-03.png" alt="service-icon-03">
              </div>
              <div class="down-content">
                <h4>Sports</h4>
                <p>Identifying talent and nurturing students in various sporting disciplines</p>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="upcoming-meetings" id="meetings">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <br>
            <h2>Events</h2>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="categories">
            <h4>Event Catgories</h4>
            <ul>
              <li><a href=" javascript:void(0)">Sports</a></li>
              <li><a href=" javascript:void(0)">Meetings</a></li>
              <li><a href=" javascript:void(0)">Chaplaincy</a></li>
              <li><a href=" javascript:void(0)">Trips</a></li>
              <li><a href=" javascript:void(0)">Other Events</a></li>
            </ul>
            <div class="main-button-red">
              <a href="">All Events</a>
            </div>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="row">


            
            <div class="col-lg-6">
              <div class="meeting-item">
                <div class="thumb">
                  <div class="price">
                    <span>$25</span>
                  </div>
                  <a href=" javascript:void(0)"><img src="assets/images/ac1.jpg" alt="Prefects"></a>
                </div>
                <div class="down-content">
                  <div class="date">
                    <h6>Sept <span>8 - 10</span></h6>
                  </div>
                  <a href=""><h4>Prefects Camp</h4></a>
                  <p>Camp and Swearing Ceremony. <br> Payment deadline : 6 September</p>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="meeting-item">
                <div class="thumb">
                  <div class="price">
                    <!--span>$14.00</span-->
                  </div>
                  <a href=" javascript:void(0)"><img src="assets/images/bg3.jpg" alt="Cambridge IGCSE and A-Level final exams"></a>
                </div>
                <div class="down-content">
                  <div class="date">
                    <h6>Oct <span>1</span></h6>
                  </div>
                  <a href="  javascript:void(0)"><h4>Cambridge Final Exams</h4></a>
                  <!--p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p-->
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="meeting-item">
                <div class="thumb">
                  <div class="price">
                    <span>$1580</span>
                  </div>
                  <a href=" javascript:void(0)"><img src="assets/images/trips2.jpeg" alt="Trip"></a>
                </div>
                <div class="down-content">
                  <div class="date">
                    <h6>April <span>2024</span></h6>
                  </div>
                  <a href=" javascript:void(0)"><h4>Dubai Trip</h4></a>
                  <p>Contact the admin for booking.<br> Payments can be staggered</p>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="meeting-item">
                <div class="thumb">
                  <div class="price">
                    <!--span>$..</span-->
                  </div>
                  <a href=" javascript:void(0)"><img src="assets/images/spi.jpg" alt="Spiritual"></a>
                </div>
                <div class="down-content">
                  <div class="date">
                    <h6>Aug <span>1</span></h6>
                  </div>
                  <a href=" javascript:void(0)"><h4>Week of Spiritual Emphasis</h4></a>
                  <p>Bible Study : The Sanctuary</p>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="meeting-item">
                <div class="thumb">
                  <div class="price">
                    <!--span>$..</span-->
                  </div>
                  <a href=" javascript:void(0)"><img src="assets/images/openday.jpg" alt="Form 1 Enrollment Open Day"></a>
                </div>
                <div class="down-content">
                  <div class="date">
                    <h6>Aug <span>1</span></h6>
                  </div>
                  <a href=" javascript:void(0)"><h4>Form 1 Enrollment</h4></a>
                  <p>In progress....</p>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- ======= Team Section ======= -->
  <!--section id="team" class="team">
    <div class="container">

      <div class="section-title">
        <h2>Team</h2>

      </div>

      <div class="row">
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="member">
            <img src="assets/img/team/team-1.jpg" alt="">
            <h4>Kelvin Kudakwashe Mufunde</h4>
            <span>Director</span>
            <p>
             
            </p>
            <div class="social">
              <a href=""><i class="bi bi-twitter"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="member">
            <img src="assets/img/team/team-2.jpg" alt="">
            <h4>Angelina Kuzonyei</h4>
            <span>Head of Administration</span>
            <p>
              
            </p>
            <div class="social">
              <a href=""><i class="bi bi-twitter"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="member">
            <img src="assets/img/team/team-3.jpg" alt="">
            <h4>Marvelous Gumbo</h4>
            <span>Head of Academics</span>
            <p>
              
            </p>
            <div class="social">
              <a href=""><i class="bi bi-twitter"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section><End Team Section -->

  
  <section class="our-facts">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="row">
            <div class="col-lg-12">
              <h2>A Few Facts About Our School</h2>
            </div>
            <div class="col-lg-6">
              <div class="row">
                <div class="col-12">
                  <div class="count-area-content percentage">
                    <div class="count-digit">94</div>
                    <div class="count-title">Succesed Students</div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="count-area-content">
                    <div class="count-digit">24</div>
                    <div class="count-title">Current Teachers</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="row">
                <div class="col-12">
                  <div class="count-area-content new-students">
                    <div class="count-digit">345</div>
                    <div class="count-title">Enrollment</div>
                  </div>
                </div> 
                <div class="col-12">
                  <div class="count-area-content">
                    <div class="count-digit">32</div>
                    <div class="count-title">Awards</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> 
        <div class="col-lg-6 align-self-center">
          <div class="video">
            <a href="javascript:void(0)" target="_blank"><img src="assets/images/play-icon.png" alt="play-icon"></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="contact-us" id="contact">
    <div class="container">   
      <div class="row">
        <div class="col-lg-9 align-self-center">
          <div class="row">
            <div class="col-lg-12">
              <form id="contact" action="contact.php" method="post">
                <div class="row">
                  <div class="col-lg-12">
                    <h2>Contact Us</h2>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                      <input name="name" type="text" id="name" placeholder="YOURNAME...*" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                    <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="YOUR EMAIL..." required="">
                  </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                      <input name="subject" type="text" id="subject" placeholder="SUBJECT...*" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" type="text" class="form-control" id="message" placeholder="YOUR MESSAGE..." required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" name="submit" id="submit" class="button">SEND MESSAGE NOW</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="right-info">
            <ul>
              <li>
                <h6>Phone Numbers</h6>
                <span>+263776434036</span>
              </li>
              <li>
                <h6>Email Address</h6>
                <span>info@firmfoundation .co.zw</span>
              </li>
              <li>
                <h6>Street Address</h6>
                <span>443 Elshadai Close, Helensvale, Borrowdale</span>
              </li>
              
            </ul>
          </div>
        </div>
      </div>
    </div>
    <hr>
    <div class="container text-white bg-dark p-4">
      <div class="row">
        <div class="col-6 col-md-8 col-lg-7">
          
          <div class="row text-center">
            <div class="col-sm-6 col-md-6 col-lg-6 col-12">
              <ul class="list-unstyled">
                <li class=""> <a>Downloads</a> </li>
                <li class="btn-link"> <a  href="assets/Application.pdf" target="_blank" rel="noopener noreferrer">Application Form </a></li>
                <li class="btn-link"> <a  href="assets/fees.pdf" target="_blank" rel="noopener noreferrer">Fees Structure </a> </li>
                <li class="btn-link"> <a>Prospectus </a> </li>
                <li class="btn-link"> <a  href="assets/NewsLetter2023.pdf" target="_blank" rel="noopener noreferrer">Opening Newsletter Term 3 2023</a> </li>
              </ul>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6 col-12">
              <ul class="list-unstyled">
                <li class=""> <a> Quick Links</a> </li>
                <li class="btn-link"> <a href="gallery.html">Gallery </a> </li>
                <li class="btn-link"> <a href="boarding.html"> Boarding</a> </li>
                <li class="btn-link"> <a href="sports.html"> Sports</a></li>
              </ul>
            </div>
            <!--div class="col-sm-6 col-md-4 col-lg-4 col-12">
              <ul class="list-unstyled">
                <li class="btn-link"> <a>Link </a> </li>
                <li class="btn-link"> <a>Link </a> </li>
                <li class="btn-link"> <a>Link </a> </li>
                <li class="btn-link"> <a>Link </a> </li>
                <li class="btn-link"> <a>Link </a> </li>
              </ul>
            </div-->
          </div>
        </div>
        <div class="col-md-4 col-lg-5 col-6">
          <address>
            <strong>Firm Foundation Christian Academy</strong><br>
            443 Elshadai Close, Helensvale            <br>
            Harare, Zimbabwe<br>
            <abbr title="Phone">P:</abbr> +263 776434036
          </address>
          <address>
            <strong>Email</strong><br>
            <a href="mailto:#">info@firmfoundation.co.zw</a>
          </address>
        </div>
      </div>
    </div>
 
    <div class="footer">
      <p>Copyright © 2023 Firm Foundation. All Rights Reserved. 
          <br>
          Created and Maintained by <em> the Firm Foundation <a href="mailto:mupandawana53@gmail.com">ICT Department</a></em>
          <br>
        </p>
    </div>
  </section>



  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function (e) {
          e.preventDefault();
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>

</body>

</body>
</html>