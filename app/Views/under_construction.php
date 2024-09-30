
<!--================ Head =================-->
<?php require_once(__DIR__ . '/common/head.php'); ?>

<!--================ Header =================-->
<?php require_once(__DIR__ . '/common/header_under_construction.php'); ?>

<!--================Home Banner Area =================-->
<section id="home" class="home_banner_area">
  <div class="container box_1620">
    <div class="row align-items-center">
      <div class="col-lg-6 text-center text-lg-start mb-4 mb-lg-0">
        <img src="<?php echo base_url('assets/img/standing_dev_mock3.jpg'); ?>" alt="Under Construction" class="img-fluid" style="max-height: 35vh;">
      </div>
      <div class="col-lg-6">
        <div class="personal_text">
          <?php if (session()->has('message')) : ?>
            <div class="alert alert-info">
              <?php echo session('message'); ?>
            </div>
          <?php endif; ?>
          <h6 class="text-center text-lg-start">Stay Tuned!</h6>
          <h3 class="text-center text-lg-start">This Page is Under Construction</h3>
          <h4 class="text-center text-lg-start">We'll be back soon with something amazing.</h4>
        </div>
      </div>
    </div>
  </div>
</section>

<?php require_once(__DIR__ . '/common/footer.php'); ?>

