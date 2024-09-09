<!doctype html>
<html lang="en">

<!--================ Head =================-->
<?php require_once(__DIR__ . '/common/head.php'); ?>
<body>
<!--================ Header =================-->
<?php require_once(__DIR__ . '/common/header.php'); ?>


<!--================Home Banner Area =================-->
<section id="home" class="home_banner_area">
  <div class="container box_1620">
    <div class="banner_inner d-flex align-items-center">
      <div class="banner_content">
        <div class="media">
          <div class="d-flex">
            <img src="<?php echo base_url('assets/img/personal.jpg'); ?>" alt="">
          </div>
          <div class="media-body">
            <div class="personal_text">
              
              <h6>Hello everyone! I am</h6>
              <h3>
                Ortiv Inga
                <a href="<?= base_url('cv'); ?>" class="btn btn-primary" download style="margin-left: 10px;">Download CV</a>
              </h3>
              <h4>Software Engineer</h4>
              <p>Welcome to my page! I am a Software engineer who enjoys building applications for the Information Technology sector. I enjoy combining my passion for learning, working on a team, and exercising my software development skills, to better serve clients and continue to build personalized applications.</p>
              <ul class="list basic_info">
                <li><a href="#"><i class="lnr lnr-calendar-full"></i> November, 7th 1983</a></li>
                <li><a href="mailto:ortiv@programmer.net"><i class="lnr lnr-envelope"></i> ortiv@programmer.net</a>
                <li><a href="#"><i class="lnr lnr-home"></i>Atlanta, Georgia</a></li>
              </ul>
              <ul class="list personal_social">
                <li><a href="https://github.com/oinga" target="_blank"><i class="fa fa-github"></i></a></li>
                <li><a href="https://www.facebook.com/ortiv.inga" target="_blank"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://www.linkedin.com/in/ortiv-inga/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--================End Home Banner Area =================-->

  <!--================Welcome Area =================-->
  <section id="about" class="welcome_area p_120">
    <div class="container">
      <div class="row welcome_inner">
        <div class="col-lg-6">
          <div class="welcome_text">
            <h4>About Me</h4>
            <div class="container">
              <p class="mb-4">
                Though I originally pursued a bachelor’s degree in Theatre, my journey took an unexpected turn when I discovered my true passion for coding. It all began with a freelance project for a law firm in Connecticut, where I was tasked with creating their website. This experience ignited a new direction in my career, leading me to become a professional software engineer.
              </p>

              <p class="mb-4">
                With over 10 years of programming experience, I am a Senior Applications Developer for Emory University's School of Medicine. I've navigated through various technologies, starting from DOS 6.22 and advancing to C#. I’ve also earned a Full Stack certification from Udacity and a Master’s in Information Technology from UoPeople. My diverse background and willingness to learn, fuel my enthusiasm for developing innovative software solutions.
              </p>
            </div>

            <div class="row">
              <!-- <div class="col-md-4">
                <div class="wel_item">
                  <i class="lnr lnr-database"></i>
                  <h4>$2.5M</h4>
                  <p>Total Donation</p>
                </div>
              </div> -->
              <div class="col-md-4">
                <div class="wel_item">
                  <i class="lnr lnr-book"></i>
                  <h4>32</h4>
                  <p>Total Personal Projects</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="wel_item">
                  <i class="lnr lnr-users"></i>
                  <h4>46</h4>
                  <p>Total Professional Projects</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="tools_expert">
            <div class="skill_main">
              <div class="skill_item">
                <h4>Backend Development <span class="counter">100</span>%</h4>
                <div class="progress_br">
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
              <div class="skill_item">
                <h4>Frontend Development <span class="counter">80</span>%</h4>
                <div class="progress_br">
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
              <div class="skill_item">
                <h4>Cloud Computing <span class="counter">70</span>%</h4>
                <div class="progress_br">
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
              <div class="skill_item">
                <h4>Integrations <span class="counter">90</span>%</h4>
                <div class="progress_br">
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
              <div class="skill_item">
                <h4>Database Administration <span class="counter">80</span>%</h4>
                <div class="progress_br">
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================End Welcome Area =================-->

  <!--================My Tabs Area =================-->
  <section id="experience" class="mytabs_area p_120">
    <div class="container">
      <div class="tabs_inner">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">My Experience</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">My Education</a>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <ul class="list">
              <li>
                <span></span>
                <div class="media">
                  <div class="d-flex">
                    <p>March 2021 - Current</p>
                  </div>
                  <div class="media-body">
                    <h4>Applications Developer/Analyst, Senior</h4>
                    <p>Emory University <br />Atlanta, GA United States</p>
                  </div>
                </div>
              </li>
              <li>
                <span></span>
                <div class="media">
                  <div class="d-flex">
                    <p>March 2019 to 2021</p>
                  </div>
                  <div class="media-body">
                    <h4>Emory University</h4>
                    <p>Software Engineer <br />Atlanta, GA</p>
                  </div>
                </div>
              </li>
              <li>
                <span></span>
                <div class="media">
                  <div class="d-flex">
                    <p>March 2015 to 2019</p>
                  </div>
                  <div class="media-body">
                    <h4>Logic Enterprises</h4>
                    <p>Junior Developer <br />St. Ives, England</p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <ul class="list">
              <li>
                <span></span>
                <div class="media">
                  <div class="d-flex">
                    <p>March 2017 to present</p>
                  </div>
                  <div class="media-body">
                    <h4>Colorlib</h4>
                    <p>Senior Web Developer <br />Santa monica, Los angeles</p>
                  </div>
                </div>
              </li>
              <li>
                <span></span>
                <div class="media">
                  <div class="d-flex">
                    <p>March 2017 to present</p>
                  </div>
                  <div class="media-body">
                    <h4>Colorlib</h4>
                    <p>Senior Web Developer <br />Santa monica, Los angeles</p>
                  </div>
                </div>
              </li>
              <li>
                <span></span>
                <div class="media">
                  <div class="d-flex">
                    <p>March 2015 to 2019</p>
                  </div>
                  <div class="media-body">
                    <h4>Colorlib</h4>
                    <p>Senior Web Developer <br />Santa monica, Los angeles</p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================End My Tabs Area =================-->

  <!--================Feature Area =================-->
  <section id="portfolio" class="feature_area p_120">
    <div class="container">
      <div class="main_title">
        <h2>What I Can Offer You</h2>
        <p>I offer expertise in full-stack development, seamlessly integrating backend and frontend technologies, leveraging cloud computing, developing robust APIs, and managing databases to deliver scalable and efficient software solutions.</p>
      </div>
      <div class="feature_inner row">
        <div class="col-lg-4 col-md-6">
          <div class="feature_item">
            <!-- <i class="flaticon-city"></i> -->
            <img class="backend-coding" src="<?php echo base_url('assets/img/backend-coding.png'); ?>" style="width: 30%; margin-bottom: 35px;" alt="back-endcoding">
            <h4>Backend Development</h4>
            <p>Backend development, including server-side logic, database management, and API design, ensuring high performance and security. I specialize in building scalable, maintainable architectures that support seamless user experiences.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="feature_item">
            <!-- <i class="flaticon-skyline"></i> -->
            <img class="dbm" src="<?php echo base_url('assets/img/dbm.png'); ?>" style="width: 30%; margin-bottom: 35px;" alt="dbm">
            <h4>Database Management</h4>
            <p>Database management, including design, optimization, and maintenance, ensuring data integrity and performance. I excel at a 'Database First' approaches, creating scalable, efficient solutions that enhance application functionality.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="feature_item">
            <!-- <i class="flaticon-sketch"></i> -->
            <img class="dbm" src="<?php echo base_url('assets/img/cloud-computing.png'); ?>" style="width: 30%; margin-bottom: 35px;" alt="cloud-computing">
            <h4>Cloud Computing</h4>
            <p>Cloud computing expertise, including deployment, scaling, and management of cloud resources, ensuring optimal performance and cost-efficiency. I excel at providing per-specification consultation and designing scalable solutions that leverage cloud technologies to meet business needs."</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="feature_item">
            <!-- <i class="flaticon-sketch"></i> -->
            <img class="dbm" src="<?php echo base_url('assets/img/integrations.png'); ?>" style="width: 30%; margin-bottom: 35px;" alt="integrations">
            <h4>Integrations</h4>
            <p>Seamless integration of diverse systems, such as API development, third-party service connections, and database synchronization, ensuring they work together efficiently. I excel at connecting APIs and services to create cohesive, scalable solutions.</p>
          </div>
        </div>        
      </div>
    </div>
  </section>
  <!--================End Feature Area =================-->

  <!--================Home Gallery Area =================-->
  <section id="elements" class="home_gallery_area p_120">
    <div class="container">
      <div class="main_title">
        <h2>What I'm up to</h2>
        <p>Below are some of the exciting projects and initiatives I'm currently involved in.</p>
      </div>
      <div class="isotope_fillter">
        <ul class="gallery_filter list">
          <li class="active" data-filter="*"><a href="#">All</a></li>
          <li data-filter=".education"><a href="#">Education</a></li>
          <li data-filter=".teach"><a href="#">Teaching</a></li>
          <li data-filter=".creative"><a href="#">Professional</a></li>
          <!-- <li data-filter=".design"><a href="#">Printing</a></li> -->
        </ul>
      </div>
    </div>
    <div class="container">
      <div class="gallery_f_inner row imageGallery1">
        <div class="col-lg-4 col-md-4 col-sm-6 education">
          <div class="h_gallery_item">
            <div class="g_img_item">
              <!-- <img class="img-fluid" src="<?php //echo base_url('img/gallery/project-1.jpg'); ?>" alt=""> -->
              <img src="<?php echo base_url('assets/img/artificial-intelligence.png'); ?>" style="width: 30%; margin-bottom: 35px;" alt="artificial-intelligence"></a>
            </div>
            <div class="g_item_text">
              <h4>Machine Learning</h4>
                <p><strong>Independent Study</strong></p>
                <p style="text-align: left; margin-top: 10px;">I am currently collaborating with fellow students, writing and anlyzing code that implements various deep learning neural networks. Including but not limited to Hidden Markov Models and Transformer Models. Our work explores a range of architectures and techniques to tackle diverse challenges in machine learning.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 teach">
          <div class="h_gallery_item">
            <div class="g_img_item">
              <!-- <img class="img-fluid" src="<?php //echo base_url('img/gallery/project-2.jpg'); ?>" alt=""> -->
              <img src="<?php echo base_url('assets/img/mentorship.png'); ?>" style="width: 30%; margin-bottom: 35px;" alt="mentorship"></a>
            </div>
            <div class="g_item_text">
              <h4>Mentoring</h4>
              <p><strong>Volunteer Work</strong></p>
              <p style="text-align: left; margin-top: 10px;">I am currently mentoring students in basic coding structure, including HTML, Python, and PHP. My focus is on helping them become acclimated to popular languages, frameworks, and design principles, providing a solid foundation for their development skills.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 manipul creative design print">
          <div class="h_gallery_item">
            <div class="g_img_item">
              <img class="img-fluid" src="<?php //echo base_url('img/gallery/project-3.jpg'); ?>" alt="">
              <img src="<?php echo base_url('assets/img/consultation.png'); ?>" style="width: 30%; margin-bottom: 35px;" alt="consultation"></a>
            </div>
            <div class="g_item_text">
              <h4>Consulting</h4>
              <p><strong>Client Project</strong></p>
              <p style="text-align: left; margin-top: 10px;">I am currently consulting with client to provide insights on healthcare analytical data. Additionally, I am implementing and advising them on next best steps for current applications and integrations, aiming to enhance procedural outcomes and foster stronger relationships with their clients.</p>
            </div>
          </div>
        </div>



      <!-- <div class="more_btn">
        <a class="main_btn" href="#">Load More Items</a>
      </div> -->
    </div>
  </section>
  <!--================End Home Gallery Area =================-->

  <!--================Testimonials Area =================-->
  <!-- <section class="testimonials_area p_120">
    <div class="container">
      <div class="main_title">
        <h2>Testimonials</h2>
        <p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price. You may see some for as low as $.17 each.</p>
      </div>
      <div class="testi_inner">
        <div class="testi_slider owl-carousel">
          <div class="item">
            <div class="testi_item">
              <p>As conscious traveling Paup ers we must always be oncerned about our dear Mother Earth. If you think about it, you travel across her face</p>
              <h4>Fanny Spencer</h4>
              <a href="#"><i class="fa fa-star"></i></a>
              <a href="#"><i class="fa fa-star"></i></a>
              <a href="#"><i class="fa fa-star"></i></a>
              <a href="#"><i class="fa fa-star"></i></a>
              <a href="#"><i class="fa fa-star-half-o"></i></a>
            </div>
          </div>
          <div class="item">
            <div class="testi_item">
              <p>As conscious traveling Paup ers we must always be oncerned about our dear Mother Earth. If you think about it, you travel across her face</p>
              <h4>Fanny Spencer</h4>
              <a href="#"><i class="fa fa-star"></i></a>
              <a href="#"><i class="fa fa-star"></i></a>
              <a href="#"><i class="fa fa-star"></i></a>
              <a href="#"><i class="fa fa-star"></i></a>
              <a href="#"><i class="fa fa-star-half-o"></i></a>
            </div>
          </div>
          <div class="item">
            <div class="testi_item">
              <p>As conscious traveling Paup ers we must always be oncerned about our dear Mother Earth. If you think about it, you travel across her face</p>
              <h4>Fanny Spencer</h4>
              <a href="#"><i class="fa fa-star"></i></a>
              <a href="#"><i class="fa fa-star"></i></a>
              <a href="#"><i class="fa fa-star"></i></a>
              <a href="#"><i class="fa fa-star"></i></a>
              <a href="#"><i class="fa fa-star-half-o"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <!--================End Testimonials Area =================-->

  <!--================Footer Area =================-->
  <footer id="contact" class="footer_area p_120">
    <div class="container">
      <div class="row footer_inner">
        <div class="col-lg-5 col-sm-6">
          <aside class="f_widget ab_widget">
            <div class="f_title">
              <h3>Want to Collaborate?</h3>
            </div>
            <p>I'm always on the lookout for talented developers and IT professionals to collaborate with on exciting projects. Feel free to reach out if you're interested in partnering!</p>
              Copyright &copy;<script>
                document.write(new Date().getFullYear());
              </script> All rights reserved | StandingDev.com</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </aside>
        </div>
        <div class="col-lg-5 col-sm-6">
          <aside class="f_widget news_widget">
            <div class="f_title">
              <h3>Get in Touch</h3>
            </div>
            <p>Want to collaborate?</p>
            <div id="contact">
              <?php echo form_open(base_url(), ['class' => 'subscribe_form relative']); ?>
                  <div class="input-group d-flex flex-row">
                      <?php echo form_input(['name' => 'EMAIL', 'placeholder' => 'Enter email address', 'onfocus' => "this.placeholder = ''", 'onblur' => "this.placeholder = 'Email Address '", 'required' => '', 'type' => 'email']); ?>
                      <button class="btn sub-btn"><span class="lnr lnr-arrow-right"></span></button>
                  </div>
                  <div class="mt-10 info"></div>
              <?php echo form_close(); ?>
            </div>
          </aside>
        </div>
        <div class="col-lg-2">
          <aside class="f_widget social_widget">
            <div class="f_title">
              <h3>Follow Me</h3>
            </div>
            <p>My Social</p>
            <ul class="list">
                <li><a href="https://www.facebook.com/ortiv.inga" target="_blank"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://www.linkedin.com/in/ortiv-inga" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="https://github.com/oinga" target="_blank"><i class="fa fa-github"></i></a></li>
            </ul>
          </aside>
        </div>
      </div>
    </div>
  </footer>
  <!--================End Footer Area =================-->






  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="<?php echo base_url('assets/js/jquery-3.3.1.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/popper.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/stellar.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendors/lightbox/simpleLightbox.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendors/nice-select/js/jquery.nice-select.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendors/isotope/imagesloaded.pkgd.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendors/isotope/isotope.pkgd.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendors/owl-carousel/owl.carousel.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendors/popup/jquery.magnific-popup.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/jquery.ajaxchimp.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendors/counter-up/jquery.waypoints.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendors/counter-up/jquery.counterup.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/mail-script.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/theme.js'); ?>"></script>
</body>

</html>