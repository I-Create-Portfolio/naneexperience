<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/home.css">
</head>

<body>
  <!-- Notification Bar -->
  <div class="sass-notification-bar" id="sassNotificationBar">
    <div class="sass-notification-container">
      <div class="sass-notification-content" id="sassNotificationContent" style="transform: translateX(-200%);">
        <div class="sass-notification-item">🚀 MORE UPDATES HERE!</div>
        <div class="sass-notification-item">📊 MORE UPDATES HERE!</div>
        <div class="sass-notification-item">🎯 MORE UPDATES HERE!</div>
      </div>
      <button class="sass-notification-close" id="sassNotificationClose">
        <i class="fas fa-times"></i>
      </button>
    </div>
  </div>

  <!-- Top Bar -->
  <div class="sass-top-bar">
    <div class="sass-top-container">
      <div class="sass-contact-info">

         <div class="sass-contact-item">
          <i class="fas fa-clock"></i>
          <span>Mon - Fri: 9:00 AM - 6:00 PM</span>
        </div>

        <div class="sass-contact-item">
          <i class="fas fa-envelope"></i>
          <span>abusufianshoron2017@gmail.com</span>
        </div>
       
      </div>

      <div class="sass-social-links">
        <a href="#" class="sass-social-link"><i class="fab fa-facebook-f"></i></a>
        <a href="#" class="sass-social-link"><i class="fab fa-instagram"></i></a>
        <a href="#" class="sass-social-link"><i class="fab fa-linkedin-in"></i></a>
      </div>
    </div>
  </div>

  <!-- Main Header -->
  <header class="sass-header" id="sassHeader">
    <div class="sass-header-container">
      <!-- Logo -->
      <a href="#" class="sass-logo">
        <div class="sass-logo-icon">
    
        </div>
        <div class="sass-logo-text">NANE<span>EXPERIENCE</span></div>
      </a>

      <!-- Navigation -->
      <nav class="sass-nav">
        <ul class="sass-nav-list">
          <li class="sass-nav-item">
            <a href="#" class="sass-nav-link">HOME</a>
          </li>
          <li class="sass-nav-item">
            <a href="#about" class="sass-nav-link">ABOUT</a>
          </li>
          <li class="sass-nav-item sass-has-dropdown">
            <a href="#services" class="sass-nav-link">PROGRAMS</a>
            <!-- Mega Menu -->
            <div class="sass-mega-menu">
              <div class="sass-mega-column">
                <h3 class="sass-mega-title">Girls/Women Empowerment</h3>
                <h3 class="sass-mega-title">Girls/Women Empowerment</h3>
                <h3 class="sass-mega-title">Girls/Women Empowerment</h3>
                
           
              </div>

              <div class="sass-mega-column">
                <h3 class="sass-mega-title">Education</h3>
                <h3 class="sass-mega-title">Girls/Women Empowerment</h3>
                <h3 class="sass-mega-title">Girls/Women Empowerment</h3>
              </div>

              <div class="sass-mega-column">
                <h3 class="sass-mega-title">Community Library/Hub</h3>
                <h3 class="sass-mega-title">Girls/Women Empowerment</h3>
                <h3 class="sass-mega-title">Girls/Women Empowerment</h3>
             
              </div>

              <div class="sass-mega-featured">
                <h3 class="sass-featured-title">Collaborate with Us</h3>
                <p class="sass-featured-text">You have a community project idea in Kibera?</p>
                <button class="sass-featured-button">Get In Touch</button>
              </div>
            </div>
          </li>
          <li class="sass-nav-item">
            <a href="#portfolio" class="sass-nav-link">GALLERY</a>
          </li>
       
          <li class="sass-nav-item">
            <a href="#contact" class="sass-nav-link">CONTACT</a>
          </li>
        </ul>
      </nav>

      <!-- Header Actions -->
      <div class="sass-header-actions">
        <button class="sass-action-button" id="sassSearchToggle">
          <i class="fas fa-search"></i>
        </button>

        <button class="sass-cta-button" id="sassConsultationButton">
          <i class="fas fas fa-donate"></i> DONATE
        </button>

        <button class="sass-mobile-menu-button" id="sassMobileMenuButton">
          <i class="fas fa-bars"></i>
        </button>
      </div>
    </div>
  </header>

  <!-- Mobile Menu -->
  <div class="sass-mobile-menu" id="sassMobileMenu">
    <div class="sass-mobile-menu-header">
      <div class="sass-mobile-logo">Nane <span>Experience</span></div>
      <button class="sass-mobile-close" id="sassMobileClose">
        <i class="fas fa-times"></i>
      </button>
    </div>

    <div class="sass-mobile-menu-body">
      <ul class="sass-mobile-nav-list">
        <li class="sass-mobile-nav-item">
          <a href="index.php" class="sass-mobile-nav-link">Home</a>
        </li>
        <li class="sass-mobile-nav-item">
          <a href="about.php" class="sass-mobile-nav-link">About</a>
        </li>
        <li class="sass-mobile-nav-item">
          <a href="#" class="sass-mobile-nav-link">
            Services
            <button class="sass-mobile-dropdown-toggle" data-target="sassServicesDropdown">
              <i class="fas fa-chevron-down"></i>
            </button>
          </a>
          <div class="sass-mobile-dropdown" id="sassServicesDropdown">
            <a href="#" class="sass-mobile-dropdown-item">Digital Marketing</a>
            <a href="#" class="sass-mobile-dropdown-item">Content Creation</a>
            <a href="#" class="sass-mobile-dropdown-item">Web Development</a>
            <a href="#" class="sass-mobile-dropdown-item">Branding</a>
            <a href="#" class="sass-mobile-dropdown-item">Analytics</a>
          </div>
        </li>
        <li class="sass-mobile-nav-item">
          <a href="#portfolio" class="sass-mobile-nav-link">Portfolio</a>
        </li>
        <li class="sass-mobile-nav-item">
          <a href="#blog" class="sass-mobile-nav-link">Blog</a>
        </li>
        <li class="sass-mobile-nav-item">
          <a href="contact.php" class="sass-mobile-nav-link">Contact</a>
        </li>
      </ul>

      <div class="sass-mobile-contact">
        <a href="tel:01705900937" class="sass-mobile-contact-item">
          <i class="fas fa-phone"></i>
          <span>01705900937</span>
        </a>
        <a href="mailto:abusufianshoron2017@gmail.com" class="sass-mobile-contact-item">
          <i class="fas fa-envelope"></i>
          <span>abusufianshoron2017@gmail.com</span>
        </a>
        <a href="#" class="sass-mobile-contact-item">
          <i class="fas fa-map-marker-alt"></i>
          <span>123 Digital Street, Marketing City</span>
        </a>
      </div>

      <div class="sass-mobile-social">
        <a href="#" class="sass-mobile-social-link">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="#" class="sass-mobile-social-link">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="#" class="sass-mobile-social-link">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="#" class="sass-mobile-social-link">
          <i class="fab fa-linkedin-in"></i>
        </a>
      </div>

      <button class="sass-cta-button" style="width: 100%; justify-content: center; margin-top: 30px;">
        <i class="fas fa-donate"></i> DONATE
      </button>
    </div>
  </div>

  <!-- Search Overlay -->
  <div class="sass-search-overlay" id="sassSearchOverlay">
    <button class="sass-search-close" id="sassSearchClose">
      <i class="fas fa-times"></i>
    </button>

    <div class="sass-search-container">
      <form class="sass-search-form">
        <input type="text" class="sass-search-input" placeholder="Search for services...">
        <button type="submit" class="sass-search-submit">
          <i class="fas fa-search"></i>
        </button>
      </form>

      <div class="sass-search-suggestions">
        <h3>Popular Searches</h3>
        <div class="sass-suggestion-tags">
          <div class="sass-suggestion-tag">SEO Services</div>
          <div class="sass-suggestion-tag">Social Media Marketing</div>
          <div class="sass-suggestion-tag">Content Strategy</div>
          <div class="sass-suggestion-tag">PPC Management</div>
          <div class="sass-suggestion-tag">Web Design</div>
          <div class="sass-suggestion-tag">Email Marketing</div>
        </div>
      </div>
    </div>
  </div>

  <!-- Overlay -->
  <div class="sass-overlay" id="sassOverlay"></div>

  <!-- Hero Section (for demo) -->
  <section class="sass-hero" style="background-position: center 0px;">
    <div class="sass-hero-container">
      <div class="sass-hero-content sass-fade-in">
        <p class="sass-hero-subtitle">ALEVATING COMMUNITIES</p>
        <h1 class="sass-hero-title">NANE EXPERIENCE COMMUNITY BASED <span>ORGANISATION: </span> Empowering Kibera, Transforming Lives</h1>

      </div>
    </div>
  </section>

  <!-- Stats Section -->
  <section class="sass-stats" style="opacity: 1; transform: translateY(0px); transition: opacity 0.8s, transform 0.8s;">
    <div class="sass-stats-container">
      <div class="sass-stat-item">
        <div class="sass-stat-icon">
          <i class="fas fa-users"></i>
        </div>
        <div class="sass-stat-number" data-count="250">100</div>
        <div class="sass-stat-text">Happy Clients</div>
      </div>

      <div class="sass-stat-item">
        <div class="sass-stat-icon">
          <i class="fas fa-project-diagram"></i>
        </div>
        <div class="sass-stat-number" data-count="520">100</div>
        <div class="sass-stat-text">Projects Completed</div>
      </div>

      <div class="sass-stat-item">
        <div class="sass-stat-icon">
          <i class="fas fa-award"></i>
        </div>
        <div class="sass-stat-number" data-count="35">100</div>
        <div class="sass-stat-text">Awards Won</div>
      </div>

      <div class="sass-stat-item">
        <div class="sass-stat-icon">
          <i class="fas fa-coffee"></i>
        </div>
        <div class="sass-stat-number" data-count="1250">100</div>
        <div class="sass-stat-text">Cups of Coffee</div>
      </div>
    </div>

    
  </section>

    <!-- portfolio
            ----------------------------------------------- -->
            <section id="folio" class="s-folio target-section">


                <div id="bricks" class="row bricks">
                    <div class="column lg-12 masonry">
                        <div class="bricks-wrapper">

                            <div class="grid-sizer"></div>

                            <article class="brick brick--double entry">
                                <a href="#modal-01" class="entry__link">
                                    <div class="entry__thumb">
                                        <img src="images/lib/28nane.JPG" alt="">
                                    </div>
                                    <div class="entry__info">
                                        <div class="entry__cat"><h1>Girls/Women Empowerment</h1></div>
                                    </div>
                                </a>
                            </article> <!-- entry -->

                            <article class="brick brick--double entry">
                                <a href="#modal-02" class="entry__link">
                                    <div class="entry__thumb">
                                        <img src="images/folio/caffeine_and_tulips@2x.jpg" alt="">
                                    </div>
                                    <div class="entry__info">
                                       <div class="entry__cat"><h1>Education</h1></div>
                                    </div>
                                </a>
                            </article> <!-- entry -->

                            <article class="brick entry">
                                <a href="#modal-03" class="entry__link">
                                    <div class="entry__thumb">
                                        <img src="images/lib/28nane.JPG" alt="">
                                    </div>
                                    <div class="entry__info">
                                        <div class="entry__cat"><h1>Community Library/Hub</h1></div>
                                    </div>
                                </a>
                            </article> <!-- entry -->

                            <article class="brick entry">
                                <a href="#modal-04" class="entry__link">
                                    <div class="entry__thumb">
                                        <img src="images/lib/30nane.JPG" alt="">
                                    </div>
                                    <div class="entry__info">
                                        <div class="entry__cat"><h1>Feeding Program for Children and Street Families</h1></div>
                                    </div>
                                </a>
                            </article> <!-- entry -->

                            <article class="brick entry">
                                <a href="#modal-05" class="entry__link">
                                    <div class="entry__thumb">
                                        <img src="images/lib/30nane.JPG" alt="">
                                    </div>
                                    <div class="entry__info">
                                        <div class="entry__cat"><h1>Youth Program</h1></div>
                                    </div>
                                </a>
                            </article> <!-- entry -->

                            <article class="brick entry">
                                <a href="#modal-06" class="entry__link">
                                    <div class="entry__thumb">
                                        <img src="images/lib/30nane.JPG" alt="">
                                    </div>
                                    <div class="entry__info">
                                        <div class="entry__cat"><h1>Art Program</h1></div>
                                    </div>
                                </a>
                            </article> <!-- entry -->

                        </div> <!-- end bricks-wrapper -->
                    </div> <!-- end masonry -->
                </div> <!-- end bricks -->


                <!-- modal templates popup
                -------------------------------------------- -->
                <div id="modal-01" hidden>
                    <div class="modal-popup">
                        <img src="images/folio/gallery/g-turban.jpg" alt="">
            
                        <div class="modal-popup__desc">
                            <h5>Girls/Women Empowerment</h5>
                            <p>
                                We believe in the power of women and girls to shape their own destinies. 
                                Our empowerment program focuses on providing essential knowledge and resources 
                                to navigate the challenges of adolescence and womanhood. We conduct vital workshops 
                                on menstrual hygiene, reproductive health, and the prevention of early pregnancies and marriages. 
                                We extend our reach beyond classrooms, visiting schools to distribute sanitary pads and conducting 
                                door-to-door outreach to support women and girls in need.

                            </p>
                            <ul class="modal-popup__cat">
                                <li>Girls empowerment</li>
                                <li>Women and Girls</li>
                            </ul>
                        </div>
            
                        <a href="#" class="modal-popup__details">Learn More</a>
                    </div>
                </div> <!-- end modal -->

                <div id="modal-02" hidden>
                    <div class="modal-popup">
                        <img src="images/folio/gallery/g-tulips.jpg" alt="">
            
                        <div class="modal-popup__desc">
                            <h5>Education</h5>
                            <p>
                                Education is the cornerstone of progress. Our scholarship program provides a lifeline to vulnerable 
                                children in Kibera, ensuring they have access to quality education. We cover school fees and provide 
                                all necessary learning materials, empowering these children to break the cycle of poverty and build 
                                a brighter future
                            </p>
                            <ul class="modal-popup__cat">
                                <li>Knowledge</li>
                            </ul>
                        </div>
            
                        <a href="#" class="modal-popup__details">Learn More</a>
                    </div>
                </div> <!-- end modal -->

                <div id="modal-03" hidden>
                    <div class="modal-popup">
                        <img src="images/folio/gallery/g-grayscale.jpg" alt="">
            
                        <div class="modal-popup__desc">
                            <h5>Library and Community Hub</h5>
                            <p>

                                Our community library and hub serves as a safe and enriching space for children. 
                                Equipped with a comprehensive collection of textbooks from primary to secondary levels, 
                                the hub provides a conducive environment for learning and academic support. Our dedicated 
                                volunteers offer free homework assistance, fostering a love for learning and empowering 
                                children to excel in their studies.

                            </p>
                            <ul class="modal-popup__cat">
                                <li>Learn More</li>
                            </ul>
                        </div>
            
                        <a href="#" class="modal-popup__details">Learn More</a>
                    </div>
                </div> <!-- end modal -->

                <div id="modal-04" hidden>
                    <div class="modal-popup">
                        <img src="images/folio/gallery/g-lamp.jpg" alt="">
            
                        <div class="modal-popup__desc">
                            <h5>Feeding Program for Children and Street Families</h5>
                            <p>
                                Recognizing the urgent need for food security, we conduct monthly feeding programs for street families and children 
                                in Kibera. Beyond providing nourishment, these programs serve as an opportunity to share love, offer words of 
                                encouragement, and instill hope in the lives of those facing hardship.
                            </p>
                            <ul class="modal-popup__cat">
                                <li>Food Security</li>
                            </ul>
                        </div>
            
                        <a href="#" class="modal-popup__details">Learn More</a>
                    </div>
                </div> <!-- end modal -->

                <div id="modal-05" hidden>
                    <div class="modal-popup">

                        <img src="images/folio/gallery/g-tropical.jpg" alt="">
            
                        <div class="modal-popup__desc">
                            <h5>Tropical</h5>
                            <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
                            <ul class="modal-popup__cat">
                                <li>Frontend Design</li>
                            </ul>
                        </div>
            
                        <a href="#" class="modal-popup__details">Learn More</a>
                    </div>
                </div> <!-- end modal -->

                <div id="modal-06" hidden>
                    <div class="modal-popup">
                        <img src="images/folio/gallery/g-woodcraft.jpg" alt="">
            
                        <div class="modal-popup__desc">
                            <h5>Youth Program</h5>
                            <p>
                                We are dedicated to nurturing the potential of Kibera's youth. Our youth program provides a platform for open dialogue and support, addressing critical issues such as mental wellbeing, crime prevention, and drug abuse. 
                                Through engaging discussions and mentorship, we empower young people to make informed choices and build resilient lives.
                            </p>
                            <ul class="modal-popup__cat">
                                <li>Art</li>
                                <li>Creativity</li>
                            </ul>
                        </div>
            
                        <a href="#" class="modal-popup__details">Learn More</a>
                    </div>
                </div> <!-- end modal -->


                <!-- clients
                -------------------------------------------- -->
                <div class="s-clients row">
                    <div class="column lg-12">

                        <div class="row section-header">
                            <div class="column lg-12">
                                <h3 class="title text-display-1">Partners we have had priveledge to work or collaborate with</h3>
                            </div>
                        </div> <!-- end section-header -->
    
                        <div class="row clients-list block-lg-one-fourth block-md-one-third block-tab-one-half block-stack">
    
                            <div class="column clients-list__item">
                                <a href="#0">
                                    Nico Mallol - AMBASSADOR
                                </a>
                            </div>
                            <div class="column clients-list__item">
                                <a href="#0">
                                   BECOME A PARTNER
                                </a>
                            </div>
                            <div class="column clients-list__item">
                                <a href="#0">
                                    BECOME OUR AMBASSADOR
                                </a>
                            </div>
                        
                            <div class="column clients-list__item">
                                <a href="#0">
                                     KINGS AND QUEENS OF KIBERA - PARTNER
                                </a>
                            </div>

                        </div> <!-- clients-list -->
                    </div> <!-- end column lg-12 -->
                </div> <!-- end s-clients -->

            </section> <!-- end s-folio -->


          

        </section>  <!-- end content -->

   <?php include ('includes/footer.php') ?>

</body>