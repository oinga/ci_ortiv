<!doctype html>
<html lang="en">

<!--================ Head =================-->
<?php require_once(__DIR__ . '/common/head.php'); ?>

<!--================ Header =================-->
<?php require_once(__DIR__ . '/common/header.php'); ?>


<!--================Welcome Banner Area =================-->
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
              <?php if (session()->has('forwarding')) : ?>
                <div class="alert alert-info">
                  <?php echo session('forwarding'); ?>
                </div>
              <?php endif; ?>
              <div class="personal_text">
                <?php if (session()->has('message')) : ?>
                  <div class="alert alert-info">
                    <?php echo session('message'); ?>
                  </div>
                <?php endif; ?>
                <h6>Hello everyone! I am</h6>
                <h3>
                  Ortiv Inga
                  <a href="<?= base_url('uploads/' . $cv); ?>" target="_blank" class="btn btn-primary" style="margin-left: 10px;">View My Résumé</a>
                </h3>
                <h4>Software Engineer</h4>
                <p>Welcome to my page! I am a Software engineer who enjoys building applications for the Information Technology sector. I enjoy combining my passion for learning, working on a team, and exercising my software development skills, to better serve clients and continue to build personalized applications.</p>
                <ul class="list basic_info">
                  <!-- <li><a href="#"><i class="lnr lnr-calendar-full"></i> November, 7th 1983</a></li> -->
                  <!-- <li><a href="mailto:ortiv@programmer.net"><i class="lnr lnr-envelope"></i> ortiv@programmer.net</a> -->
                  <li><a href="#"><i class="lnr lnr-home"></i>Atlanta, Georgia</a></li>
                </ul>
                <ul class="list personal_social">
                  <li><a href="https://github.com/oinga" target="_blank"><i class="fa fa-github"></i></a></li>
                  <li><a href="https://www.linkedin.com/in/ortiv-inga/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
<!--================End Welcome Area =================-->


<!--================My Tabs Area =================-->
<section id="projects" class="mytabs_area p_120">
  <div class="container">
    <div class="main_title">
      <h2> Most Recent Projects</h2>
    </div>
      
      <div class="feature_inner row"> 
        <div class="col-lg-4 col-md-6">
          <div class="feature_item">
            <!-- <i class="flaticon-city"></i> -->
            <a href="https://github.com/oinga/my_tennis_club" target="_blank">
            <img class="backend-coding" src="<?php echo base_url('assets/img/framework.png'); ?>" style="width: 30%; margin-bottom: 35px;" alt="back-endcoding"></a>
            </a>
            <h4>Django Tutorial Application</h4>
            <p>A Django-based web application designed to teach students how to use the Django framework. It provides hands-on experience with core Django concepts such as models, views, templates, and PostgreSQL integration.</p>
          </div>
        </div>     
               
        <div class="col-lg-4 col-md-6">
          <div class="feature_item">
            <!-- <i class="flaticon-city"></i> -->
            <a href="https://github.com/oinga/Foodie-Catalog" target="_blank">
            <img class="backend-coding" src="<?php echo base_url('assets/img/framework.png'); ?>" style="width: 30%; margin-bottom: 35px;" alt="back-endcoding"></a>
            </a>
            <h4>Restaurant Catalog</h4>
            <p>A capstone project for the Full Stack Developer Nanodegree at Udacity. It’s a restaurant management application built using OAuth 2.0 for authentication, the Flask microframework for backend development, and SQLite for database management.</p>
          </div>
        </div>         

        <div class="col-lg-4 col-md-6">
          <div class="feature_item">
            <!-- <i class="flaticon-city"></i> -->
            <a href="https://github.com/oinga/FlaskAPI" target="_blank">
            <img class="backend-coding" src="<?php echo base_url('assets/img/api.png'); ?>" style="width: 30%; margin-bottom: 35px;" alt="back-endcoding"></a>
            </a>
            <h4>Flask API</h4>
            <p>This is an independent project to built to explore and showcase the capabilities of the Python Flask framework.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="feature_item">
            <!-- <i class="flaticon-city"></i> -->
            <a href="https://github.com/oinga/FastAPI" target="_blank">
            <img class="backend-coding" src="<?php echo base_url('assets/img/api.png'); ?>" style="width: 30%; margin-bottom: 35px;" alt="back-endcoding"></a>
            </a>
            <h4>Fast API</h4>
            <p>This independent project explores the Python FastAPI library.</p>
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
          <p>Cloud computing expertise, including deployment, scaling, and management of cloud resources, ensuring optimal performance and cost-efficiency. I excel at providing per-specification consultation and designing scalable solutions that leverage cloud technologies to meet business needs.</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="feature_item">
          <!-- <i class="flaticon-sketch"></i> -->
          <img class="dbm" src="<?php echo base_url('assets/img/Integrations.png'); ?>" style="width: 30%; margin-bottom: 35px;" alt="integrations">
          <h4>Integrations</h4>
          <p>Seamless integration of diverse systems, such as API development, third-party service connections, and database synchronization, ensuring they work together efficiently. I excel at connecting APIs and services to create cohesive, scalable solutions.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!--================End Feature Area =================-->

<!--================What I'm Up To Area =================-->
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
            <!-- <img class="img-fluid" src="<?php //echo base_url('img/gallery/project-1.jpg'); 
                                              ?>" alt=""> -->
            <img src="<?php echo base_url('assets/img/artificial-intelligence.png'); ?>" style="width: 30%; margin-bottom: 35px;" alt="artificial-intelligence"></a>
          </div>
          <div class="g_item_text">
            <h4>Machine Learning</h4>
            <p><strong>Independent Study</strong></p>
            <p style="text-align: left; margin-top: 10px;">I am currently collaborating with fellow UoPeople Master’s students, writing and anlyzing code that implements various deep learning neural networks. Including but not limited to Hidden Markov Models and Transformer Models. Our work explores a range of architectures and techniques to tackle diverse challenges in machine learning.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6 teach">
        <div class="h_gallery_item">
          <div class="g_img_item">
            <!-- <img class="img-fluid" src="<?php //echo base_url('img/gallery/project-2.jpg'); 
                                              ?>" alt=""> -->
            <img src="<?php echo base_url('assets/img/mentorship.png'); ?>" style="width: 30%; margin-bottom: 35px;" alt="mentorship"></a>
          </div>
          <div class="g_item_text">
            <h4>Mentoring</h4>
            <p><strong>Volunteer Work</strong></p>
            <p style="text-align: left; margin-top: 10px;">I am currently mentoring students in basic coding structures, including HTML, Python, and PHP. My focus is on helping them become acclimated to popular languages, frameworks, and design principles, providing a solid foundation for their development skills.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6 manipul creative design print">
        <div class="h_gallery_item">
          <div class="g_img_item">
            <img class="img-fluid" src="<?php //echo base_url('img/gallery/project-3.jpg'); 
                                        ?>" alt="">
            <img src="<?php echo base_url('assets/img/consultation.png'); ?>" style="width: 30%; margin-bottom: 35px;" alt="consultation"></a>
          </div>
          <div class="g_item_text">
            <h4>Consulting</h4>
            <p><strong>Client Project</strong></p>
            <p style="text-align: left; margin-top: 10px;">I am currently consulting with client to provide insights on healthcare analytical data. Additionally, I am implementing and advising them on next best steps for current applications and integrations, aiming to enhance procedural outcomes and foster stronger relationships with their clients.</p>
          </div>
        </div>
      </div>
    </div>
</section>
<!--================End What I'm Up To Area =================-->

<!--================About Me Area =================-->
<section id="about" class="feature_area p_120">
  <div class="container">
    <div class="row welcome_inner">
      <div class="col-lg-6">
        <div class="welcome_text">
          <h4>About Me</h4>
          <div class="container">
            <p class="mb-4">
              Though I did not pursure my bachelor’s degree in Computer Science, my journey took an unexpected turn when I discovered my true passion for coding. It all began with a freelance project for a law firm in Connecticut, where I was tasked with creating their website. This experience ignited a new direction in my career, leading me to become a professional software engineer.
            </p>

            <p class="mb-4">
              With over 10 years of programming experience, I am a Senior Applications Developer for Emory University's School of Medicine. I've navigated through various technologies, starting from DOS 6.22 and advancing to C#. I’ve also earned a Full Stack certification from Udacity and a Master’s in Information Technology from UoPeople. My diverse background and willingness to learn, fuel my enthusiasm for developing innovative software solutions.
            </p>
          </div>

          <div class="row">
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
<!--================End About Me Area =================-->

<?php require_once(__DIR__ . '/common/footer.php'); ?>

</html>