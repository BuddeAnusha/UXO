<?php
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/style.css" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
      <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.css" />
      <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick-theme.css" />
      <link href='https://fonts.googleapis.com/css?family=Space Mono' rel='stylesheet'>
      <link href='https://fonts.googleapis.com/css?family=Space Grotesk' rel='stylesheet'>
      <link href='https://fonts.googleapis.com/css?family=Noto Sans' rel='stylesheet'>
      <title>Home</title>
   </head>
   <body>
      <!-- home page code starts here -->
      <!-- banner section starts here -->
      <header class="header_sec" id="header">
         <div class="bg">
         </div>
         <div class="bg_color para_spacing">
            <div class="d-flex">
               <div class="header_c1">
                  <div>
                     <img src="<?php echo get_template_directory_uri();?>./assets/uxo.png" alt="uxo">
                  </div>
               </div>
               <div class="header_c2 para_spacing">
                  <div>
                     <nav>
                        <ul class="d-flex">
                           <li><a href="#">VOLUNTEER</a></li>
                           <li class="para_spacing"><a href="#">VENUE</a></li>
                           <li class="para_spacing"><a href="#">SPONSORS</a></li>
                        </ul>
                     </nav>
                  </div>
               </div>
               <div class="header_c3 para_spacing">
                  <nav class="header_nav">
                     <ul>
                        <li><a href="#">BUY TICKETS</a></li>
                     </ul>
                  </nav>
               </div>
            </div>
         </div>
      </header>
      <section class="home_banner_sec" id="home_banner">
      <div class="home_banner" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/banner.jpg');">
        <div class="home_bannerimg">
               <img src="<?php echo get_template_directory_uri();?>./assets/uxo-designweek-logo.jpg" alt="uxo-designweek-logo">
            </div>
         </div>
      </section>
      <!-- banner section ends here -->
      <!-- logo section starts here -->
      <section class="home_logo_sec" id="home_logos">
         <div class="home_logo_spacing">
            <div class="d-flex home_logo_p">
               <div class="home_logo_c">
                  <div>
                     <img src="<?php echo get_template_directory_uri();?>./assets/diamond-logo.png" alt="diamond-logo">
                  </div>
               </div>
               <div class="home_logo_c">
                  <div>
                     <img src="<?php echo get_template_directory_uri();?>./assets/platinum-logo.png" alt="platinum-logo">
                  </div>
               </div>
            </div>
            <div class="d-flex-center home_logo_p">
               <div class="home_logo_c1">
                  <div>
                     <img src="<?php echo get_template_directory_uri();?>./assets/rishihooduniversity-logo.png" alt="rishihooduniversity-logo">
                  </div>
               </div>
               <div class="home_logo_c1 para_spacing bottom_space">
                  <div>
                     <img src="<?php echo get_template_directory_uri();?>./assets/happening-logo.png" alt="happening-logo">
                  </div>
               </div>
               <div class="home_logo_c1 para_spacing bottom_space">
                  <div>
                     <img src="<?php echo get_template_directory_uri();?>./assets/merkle-logo.png" alt="merkle-logo">
                  </div>
               </div>
            </div>
            <div class="home_logo_p">
               <div class="home_gold_spacing">
                  <img src="<?php echo get_template_directory_uri();?>./assets/gold-logo.png" alt="gold-logo">
               </div>
            </div>
            <div class="d-flex-center">
               <div class="home_logo_c2">
                  <div>
                     <img src="<?php echo get_template_directory_uri();?>./assets/andacaddemy-logo.png" alt="andacaddemy-logo">
                  </div>
               </div>
               <div class="home_logo_c2 para_spacing bottom_space">
                  <div>
                     <img src="<?php echo get_template_directory_uri();?>./assets/uxin-logo.png" alt="uxin-logo">
                  </div>
               </div>
               <div class="home_logo_c2 para_spacing bottom_space">
                  <div>
                     <img src="<?php echo get_template_directory_uri();?>./assets/uiser-logo.png" alt="uiser-logo">
                  </div>
               </div>
               <div class="home_logo_c2">
                  <div>
                     <img src="<?php echo get_template_directory_uri();?>./assets/UMO-logo.png" alt="UMO-logo">
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- logo section ends here -->
      <!-- ux design conference section starts here -->
      <section class="home_uxconference_sec" id="home_uxconference">
         <div class="home_twentyyearbanner_spacing">
            <div class="home_bannerimg">
               <img src="<?php echo get_template_directory_uri();?>./assets/twentyyear-banner.jpg" alt="twentyyear-banner">
            </div>
         </div>
      </section>
      <!-- ux design conference section ends here -->
      <!-- carousel section starts here -->
      <div class="slick-slider-2">
         <div>
            <div class="slide-text">
               <p class="name-text">NAME</p>
               <p>DESIGNATION,</p>
               <p>COMPANY</p>
            </div>
            <img src="<?php echo get_template_directory_uri();?>./assets/speaker-one.jpg" alt="Image 1">
         </div>
         <div>
            <div class="slide-text">
               <p class="name-text">NAME</p>
               <p>DESIGNATION,</p>
               <p>COMPANY</p>
            </div>
            <img src="<?php echo get_template_directory_uri();?>./assets/speaker-two.jpg" alt="Image 2">
         </div>
         <div>
            <div class="slide-text">
               <p class="name-text">NAME</p>
               <p>DESIGNATION,</p>
               <p>COMPANY</p>
            </div>
            <img src="<?php echo get_template_directory_uri();?>./assets/speaker-three.jpg" alt="Image 3">
         </div>
         <div>
            <div class="slide-text">
               <p class="name-text">NAME</p>
               <p>DESIGNATION,</p>
               <p>COMPANY</p>
            </div>
            <img src="<?php echo get_template_directory_uri();?>./assets/speaker-one.jpg" alt="Image 4">
         </div>
         <div>
            <div class="slide-text">
               <p class="name-text">NAME</p>
               <p>DESIGNATION,</p>
               <p>COMPANY</p>
            </div>
            <img src="<?php echo get_template_directory_uri();?>./assets/speaker-two.jpg" alt="Image 5">
         </div>
         <div>
            <div class="slide-text">
               <p class="name-text">NAME</p>
               <p>DESIGNATION,</p>
               <p>COMPANY</p>
            </div>
            <img src="<?php echo get_template_directory_uri();?>./assets/speaker-three.jpg" alt="Image 6">
         </div>
         <div>
            <div class="slide-text">
               <p class="name-text">NAME</p>
               <p>DESIGNATION,</p>
               <p>COMPANY</p>
            </div>
            <img src="<?php echo get_template_directory_uri();?>./assets/speaker-one.jpg" alt="Image 7">
         </div>
         <div>
            <div class="slide-text">
               <p class="name-text">NAME</p>
               <p>DESIGNATION,</p>
               <p>COMPANY</p>
            </div>
            <img src="<?php echo get_template_directory_uri();?>./assets/speaker-two.jpg" alt="Image 8">
         </div>
      </div>
      <!-- carousel section ends here -->
      <!-- card-section starts here-->
      <section class="home-card-sec" id="home-card">
         <div class="home-card-spacing">
            <div class="home-card-img">
               <img src="<?php echo get_template_directory_uri();?>./assets/5 Days of Celebration of Design & Learning.png" alt="Celebrationtext">
            </div>
            <ul class="d-flex">
               <li class="home_cardlist_li">
                  <div class="home_cardborder">
                     <div class="date-day-sec">
                        <div class="d-flex-1">
                           <div class="date-day date-day-c1">
                              <span>DAY 1</span>
                           </div>
                           <div class="date-day date-day-c2">
                              <span>17 SEP</span>
                           </div>
                        </div>
                     </div>
                     <div class="card-content">
                        <div class="card-text">
                           <p>STUDENTS</p>
                           <p class="sub_heading">DESIGN EDUCATORS SUMMIT </p>
                        </div>
                        <div class="card-text1">
                           <p> Workshops for students </p>
                           <p>Masterclass</p>
                           <p>Career Counselling </p>
                        </div>
                     </div>
                  </div>
               </li>
               <li class="home_cardlist_li">
                  <div class="home_cardborder">
                     <div class="date-day-sec">
                        <div class="d-flex-1">
                           <div class="date-day date-day-c1">
                              <span>DAY 2</span>
                           </div>
                           <div class="date-day date-day-c2">
                              <span>18 SEP</span>
                           </div>
                        </div>
                     </div>
                     <div class="card-content card-content1">
                        <div class="card-text">
                           <p>Students & Professionals
                           </p>
                           <p class="sub_heading">Grand ballroom Conference</p>
                        </div>
                        <div class="card-text1">
                           <ul>
                              <li> Workshops for students and professionals</li>
                              <li>Design X Social winner announcement</li>
                              <li>Career Counselling </li>
                              <li>Job Fair</li>
                              <li>Wall of UX Fame</li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </li>
               <li class="home_cardlist_li">
                  <div class="home_cardborder">
                     <div class="date-day-sec">
                        <div class="d-flex-1">
                           <div class="date-day date-day-c1">
                              <span>DAY 3</span>
                           </div>
                           <div class="date-day date-day-c2">
                              <span>19 SEP</span>
                           </div>
                        </div>
                     </div>
                     <div class="card-content">
                        <div class="card-text">
                           <p>
                              Professionals
                           </p>
                           <p class="sub_heading"> ballroom Conference </p>
                        </div>
                        <div class="card-text1">
                           <p>Immersive Workshops</p>
                           <p>Women in Design</p>
                           <p>Lightning Talks</p>
                           <p>Enterprise roundtables</p>
                        </div>
                     </div>
                  </div>
               </li>
               <li class="home_cardlist_li">
                  <div class="home_cardborder">
                     <div class="date-day-sec">
                        <div class="d-flex-1">
                           <div class="date-day date-day-c1">
                              <span>DAY 4</span>
                           </div>
                           <div class="date-day date-day-c2">
                              <span>20 SEP</span>
                           </div>
                        </div>
                     </div>
                     <div class="card-content card-content3">
                        <div class="card-text">
                           <p>Professionals
                           </p>
                           <p class="sub_heading">unconference </p>
                        </div>
                        <div class="card-text1">
                           <p>Women in Design</p>
                           <p>Design Lounge</p>
                           <p> Podcast Presentation</p>
                           <p> Live Design Tips and Tricks</p>
                           <p> Gen AI Showcase</p>
                           <p> Case Studies</p>
                           <p> Design Tips and Tricks</p>
                        </div>
                     </div>
                  </div>
               </li>
               <li class="home_cardlist_li">
                  <div class="home_cardborder">
                     <div class="date-day-sec">
                        <div class="d-flex-1">
                           <div class="date-day date-day-c1">
                              <span>DAY 5</span>
                           </div>
                           <div class="date-day date-day-c2">
                              <span>21 SEP</span>
                           </div>
                        </div>
                     </div>
                     <div class="card-content card-content2">
                        <div class="card-text">
                           <p>Design leaders
                           </p>
                           <p class="sub_heading"> Design Leader's Summit
                              (invite Only)
                           </p>
                        </div>
                     </div>
                  </div>
               </li>
               <li class="home_cardlist_li">
                  <div class="home_cardborder">
                     <div class="date-day-sec">
                     </div>
                     <div class="card-content">
                        <div class="card-text">
                           <p>ADDITIONAL ACTIVITIES</p>
                        </div>
                        <div class="card-text1">
                           <p> Networking Dinner </p>
                           <p>Unconference</p>
                           <p>Gaming Lounge </p>
                           <p>Yoga & Meditation </p>
                           <p>Music Stage </p>
                           <p>Podcast Studio</p>
                        </div>
                     </div>
                  </div>
               </li>
            </ul>
         </div>
      </section>
      <!-- card-section ends here -->
      <!-- community section starts here -->
      <section class="home_community_sec" id="home_community">
         <div class="home_community_spacing home_bannerimg">
            <img src="<?php echo get_template_directory_uri();?>./assets/community-bannertext.jpg" alt="community-bannertext">
         </div>
      </section>
      <!-- community section ends here -->
      <!-- first accordion  starts here-->
      <section class="home_accordion_sec" id="home_accordion">
         <div class="home_accordion_spacing">
            <div class="d-flex">
               <div class="home_accordion_c1">
                  <div>
                     <img src="<?php echo get_template_directory_uri();?>./assets/community-meet.png" alt="community-meet">
                  </div>
               </div>
               <div class="home_accordion_c2">
                  <ul class="accordion">
                     <li class="accordion-item">
                        <div class="accordion-header">DESIGN COMMUNITY</div>
                        <div class="accordion-content">
                           <p>Content for section 1.</p>
                           <p class="para_spacing">Content for section 1.</p>
                           <p class="para_spacing">Content for section 1.</p>
                           <p>Content for section 1.</p>
                        </div>
                     </li>
                     <li class="accordion-item">
                        <div class="accordion-header">STUDENTS</div>
                        <div class="accordion-content">
                           <p>Content for section 2.</p>
                           <p class="para_spacing">Content for section 1.</p>
                           <p class="para_spacing">Content for section 1.</p>
                           <p>Content for section 1.</p>
                        </div>
                     </li>
                     <li class="accordion-item">
                        <div class="accordion-header">ORGANISATIONS</div>
                        <div class="accordion-content">
                           <p>Content for section 3.</p>
                           <p class="para_spacing">Content for section 1.</p>
                           <p class="para_spacing">Content for section 1.</p>
                           <p>Content for section 1.</p>
                        </div>
                     </li>
                     <li class="accordion-item">
                        <div class="accordion-header">Design Enthusiasts</div>
                        <div class="accordion-content">
                           <p>Content for section 3.</p>
                           <p class="para_spacing">Content for section 1.</p>
                           <p class="para_spacing">Content for section 1.</p>
                           <p>Content for section 1.</p>
                        </div>
                     </li>
                     <li class="accordion-item">
                        <div class="accordion-header">DESIGN SCHOOLS</div>
                        <div class="accordion-content">
                           <p>Content for section 3.</p>
                           <p class="para_spacing">Content for section 1.</p>
                           <p class="para_spacing">Content for section 1.</p>
                           <p>Content for section 1.</p>
                        </div>
                     </li>
                     <li class="accordion-item">
                        <div class="accordion-header">MEDIA HOUSES</div>
                        <div class="accordion-content">
                           <p>Content for section 3.</p>
                           <p class="para_spacing">Content for section 1.</p>
                           <p class="para_spacing">Content for section 1.</p>
                           <p>Content for section 1.</p>
                        </div>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </section>
      <!-- first accordion ends here -->
      <!-- superearly section starts here  -->
      <section class="home_superearly_sec" id="home_superearly">
         <div class="home_superearly_spacing">
            <div class="d-flex-center">
               <div class="home_superearly_c1">
                  <span>3 DAYS</span>
                  <h2 class="para_spacing">SUPER <br />EARLY BIRD</h2>
               </div>
               <div class="home_superearly_c1 para_spacing">
                  <button>Know More</button>
               </div>
               <div class="home_superearly_c1 para_spacing">
                  <p>STARTING AT</p>
                  <div class="d-flex-center para_spacing">
                     <span class="amount">RS/- 10000</span>
                     <img src="<?php echo get_template_directory_uri();?>./assets/right-arrow.png" class="para_spacing" alt="right-arrow">
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="home_superearly_sec" id="home_superearly">
         <div class="home_superearly_spacing">
            <div class="d-flex-center">
               <div class="home_superearly_c1">
                  <span>3 DAYS</span>
                  <h2 class="para_spacing">SUPER <br />EARLY BIRD</h2>
               </div>
               <div class="home_superearly_c1 para_spacing">
                  <button>Know More</button>
               </div>
               <div class="home_superearly_c1 para_spacing">
                  <p>STARTING AT</p>
                  <div class="d-flex-center para_spacing">
                     <span class="amount">RS/- 10000</span>
                     <img src="<?php echo get_template_directory_uri();?>./assets/right-arrow.png" class="para_spacing" alt="right-arrow">
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- superearly section ends here -->
      <!-- uxindia section starts here -->
      <section class="home_uxindia_sec" id="ux_india">
         <div class="uxindia_spacing">
            <div class="uxindia_img">
               <img src="<?php echo get_template_directory_uri();?>./assets/uxindia.png" alt="uxindia">
            </div>
            <div class="slick-slider-1">
               <div><img src="<?php echo get_template_directory_uri();?>./assets/carousel-card-one.webp" alt="carousel-card-one"></div>
               <div><img src="<?php echo get_template_directory_uri();?>./assets/carousel-card-two.webp" alt="carousel-card-two"></div>
               <div><img src="<?php echo get_template_directory_uri();?>./assets/carousel-card-three.webp" alt="carousel-card-three"></div>
               <div><img src="<?php echo get_template_directory_uri();?>./assets/carousel-card-four.webp" alt="carousel-card-four"></div>
               <div><img src="<?php echo get_template_directory_uri();?>./assets/carousel-card-one.webp" alt="carousel-card-one"></div>
               <div><img src="<?php echo get_template_directory_uri();?>./assets/carousel-card-two.webp" alt="carousel-card-two"></div>
               <div><img src="<?php echo get_template_directory_uri();?>./assets/carousel-card-three.webp" alt="carousel-card-three"></div>
               <div><img src="<?php echo get_template_directory_uri();?>./assets/carousel-card-four.webp" alt="carousel-card-four"></div>
            </div>
            <div class="seemorebutton">
               <button>SEE MORE</button>
            </div>
         </div>
      </section>
      <!-- uxindia section ends here -->
      <!-- faq section starts here -->
      <section class="faqs_sec" id="faq">
         <div class="faq_spacing">
            <div class="faq_text">
               <img src="<?php echo get_template_directory_uri();?>./assets/FAQS.png" alt="faqs">
            </div>
            <ul class="accordion-1 d-flex">
               <li class="accordion-item-1">
                  <div class="accordion-header-1" onclick="toggleAccordion(this)">
                     <span>WHAT IS UXINDIA24?
                     </span>
                     <span class="arrow">^</span> <!-- Right arrow by default -->
                  </div>
                  <div class="accordion-content-1">
                     <p>UXINDIA24 is a week-long celebration of design, bringing together the design community,
                        leading corporations, and industries.
                        It marks the 20th year of India's biggest UX design conference.
                     </p>
                  </div>
               </li>
               <li class="accordion-item-1">
                  <div class="accordion-header-1" onclick="toggleAccordion(this)">
                     <span>WHEN AND WHERE UXINDIA24 HAPPENING</span>
                     <span class="arrow">^</span>
                  </div>
                  <div class="accordion-content-1">
                     <p>The event will take place from 17th to 21st September.
                        The event will be taking place in Chamara Vajra, Bengaluru.
                     </p>
                  </div>
               </li>
               <li class="accordion-item-1">
                  <div class="accordion-header-1" onclick="toggleAccordion(this)">
                     <span>WHAT TYPE OF PASSES ARE AVAILABLE?</span>
                     <span class="arrow">^</span>
                  </div>
                  <div class="accordion-content-1">
                     <p>
                        All Access Pass: Early bird discounted tickets for the entire conference.
                        2-Day Pass: For specific days (18th and 19th September).
                        Student Pass: Non-discounted passes for students not participating in DXS24.
                     </p>
                  </div>
               </li>
               <li class="accordion-item-1">
                  <div class="accordion-header-1" onclick="toggleAccordion(this)">
                     <span>WhAT CAN I EXPECT FROM THE CONFERENCE?
                     </span>
                     <span class="arrow">^</span>
                  </div>
                  <div class="accordion-content-1">
                     <p>
                        Speakers: Industry experts like Ben Callahan, Begga Hauksdottir, and Jon Deragon.
                        Hands-On Workshops: Practical skills and knowledge in the latest design trends.
                        Networking Opportunities: Connect with professionals and peers.
                     </p>
                  </div>
               </li>
            </ul>
            <div class="seemorebutton">
               <button>SEE MORE</button>
            </div>
         </div>
      </section>
      <!-- faq section ends here -->
      <!-- footer section starts here -->
      <footer class="footer_sec" id="footer">
         <div class="d-flex">
            <div class="home_footer_c1">
               <div>
                  <img src="<?php echo get_template_directory_uri();?>./assets/footer-logo.png" alt="footer-logo">
               </div>
            </div>
            <div class="home_footer_c2 para_spacing">
               <h2>ABOUT US:</h2>
               <p>A not-for profit venture, UXINDIA is built by, built for, and sustained by its growing
                  community of
                  designers,
                  enthusiasts, influencers from business, education, and governance. UXINDIA is being organized
                  by UMO
                  Design Foundation.
               </p>
            </div>
            <div class="home_footer_c3 para_spacing">
               <h2>CONTACT US:</h2>
               <p class="para_spacing bottom_space"> For sponsorship and other queries.</p>
               <a href="#">uxindia@usabilitymatters.org</a>
               <p>Jabeen: 91-8096204373</p>
               <p>Location: Madhapur, Hyderabad, India</p>
            </div>
            <div class="home_footer_c4">
               <h2>INITIATIVES:</h2>
               <p class="para_spacing">W Summit</p>
               <p class="para_spacing"> Design X Social</p>
               <p>UMO Design School</p>
               <p>1 Million Women Program</p>
            </div>
         </div>
         <hr class="para_spacing" />
         <div class="footer_privacypolicy_sec para_spacing">
            <div class="d-flex-center">
               <div class="footer_c">
                  <div>
                     <a href="#">Privacy Policy</a>
                     <a href="#">Terms Of Use</a>
                  </div>
               </div>
               <div class="footer_c para_spacing">
                  <div class="footer_socialicons">
                     <a href="#"><img src="<?php echo get_template_directory_uri();?>./assets/tinder.png" alt="tinder"> </a>
                     <a href="#"><img src="<?php echo get_template_directory_uri();?>./assets/linkedin.png" alt="linkedin"> </a>
                     <a href="#"><img src="<?php echo get_template_directory_uri();?>./assets/youtube.png" alt="youtube"> </a>
                     <a href="#"><img src="<?php echo get_template_directory_uri();?>./assets/facebook.png" alt="facebook"> </a>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- foter section ends here -->
      <!-- home page code ends here -->
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
      <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
      <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.min.js"></script>
      <script src="<?php echo get_template_directory_uri();?>/js/main.js"></script>
   </body>
</html>