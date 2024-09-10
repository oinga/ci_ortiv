<!doctype html>
<html lang="en">

<!--================ Head =================-->
<?php require_once(__DIR__ . '/common/head.php'); ?>

<!--================ Header =================-->
<?php require_once(__DIR__ . '/common/header_under_construction.php'); ?>


  <!--================Home Banner Area =================-->
  <section id="home" class="home_banner_area">
    <div class="container box_1620">
      <div class="banner_inner d-flex align-items-center">
        <div class="banner_content">
          <div class="media">
            <div class="d-flex">
            <img src="<?php echo base_url('assets/img/Standing_dev_1.jfif'); ?>" alt="Under Construction" style="height: 35vh;">
            </div>
            <div class="media-body">
              <div class="personal_text">
                <?php if (session()->has('message')) : ?>
                  <div class="alert alert-info">
                    <?php echo session('message'); ?>
                  </div>
                <?php endif; ?>
                <h6>Stay Tuned!</h6>
                <h3>
                  This Page is Under Construction
                </h3>
                <h4>We'll be back soon with something amazing.</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


 


  <?php require_once(__DIR__ . '/common/footer.php'); ?>

</html>