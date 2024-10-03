<?php /*Template Name:Homepage*/ ?>
<?php get_header(); ?>
<?php
$banner             = get_field('banner');
$page_introduction  = get_field('page_introduction');
$plan_section       = get_field('plan_section');
$plan_features      = get_field('plan_features');
$top_services       = get_field('top_services');
$hosting_solutions  = get_field('hosting_solutions');
$deployment_options = get_field('deployment_options');
$request_a_quote    = get_field('request_a_quote');
?>
  <!-- Home banner starts here -->
<?php if($banner){ ?>
  <div class="home--banner" style="background: url(<?php echo $banner['section_background_image']; ?>);">
    <div class="container">
      <div class="row align-items-center">  
        <div class="col-lg-7 wow fadeInLeft">
          <div class="main-banner-content">
            <h1><?php echo $banner['heading']; ?></h1>
            <p class="pblc"><?php echo $banner['sub_heading']; ?></p>
            <?php echo $banner['button']; ?>
          </div>
        </div>
        <div class="col-lg-5  wow fadeInRight">
          <div class="main-banner-image">
            <img src="<?php echo $banner['image']; ?>" alt="Banner BG">
          </div>
        </div>
      </div>
    </div>
  </div>
<?php } ?>
  <!-- Home banner ends here -->

  <!-- About starts here -->
<?php if($page_introduction){ ?>
  <div id="about-section" class="about--area page-section wow fadeInUp">
    <div class="triangle-vector"></div>
    <div class="container">
      <div class="row align-items-center">
          <?php echo $page_introduction; ?>
      </div>
    </div>
  </div>
<?php } ?>
  <!-- About ends here -->

  <!-- Plans area starts here -->
<?php if($plan_section){ ?>
  <div id="plans-section" class="plans--area page-section wow fadeInUp">
    <div class="container">
      <div class="heading--area wow fadeInUp">
        <h3><?php echo $plan_section['title']; ?></h3>
      </div>

      <div class="plan-tabs-header">
        <?php echo $plan_section['tab']['tab_1_title']; ?>
        <?php echo $plan_section['tab']['tab_2_title']; ?>
      </div>

      <div id="standard--dedicated-tab" class="plan-tab-content active">
        <div class="row g-4">
          <?php echo $plan_section['tab']['tab_1']; ?>
        </div>
      </div>

      <div id="high-performance-tab" class="plan-tab-content">
        <div class="row g-4">
          <?php echo $plan_section['tab']['tab_2']; ?>
        </div>       
      </div>
    </div>
  </div>
<?php } ?>
  <!-- Plans area ends here -->

  <!-- Features area starts here -->
  <div id="included-plans-section" class="features--area page-section">
    <?php if($plan_features){ ?>      
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <?php echo $plan_features['left_block']; ?>
            </div>
            <div class="col-lg-6">
              <?php echo $plan_features['right_block']; ?>
            </div>
          </div>
        </div>
    <?php } ?>
    <!-- Features area ends here -->

    <!-- Services area starts here -->
    <div id="feature-section" class="services--area page-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 order-lg-2">
            <img src="<?php echo $top_services['content_image']; ?>" alt="Image" class="bg--image wow fadeInRight">
          </div>
          <div class="col-lg-6 order-lg-1">
            <h4 class="wow fadeInUp"><?php echo $top_services['heading']; ?></h4>
            <?php echo $top_services['content']; ?>
          </div>   
        </div>
      </div>
    </div>
    <!-- Services area ends here -->
  </div>
  <!-- Features area ends here -->

  <!-- Beyond traditional starts here -->
  <div class="beyond-traditional">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <img src="<?php echo $hosting_solutions['content_image']; ?>" alt="Image" class="beyond-traditional-bg wow fadeInLeft">
        </div>
        <div class="col-lg-6">
          <h4 class="wow fadeInUp"><?php echo $hosting_solutions['heading']; ?></h4>
          <?php echo $hosting_solutions['content']; ?>
        </div>
      </div>
    </div>
  </div>
  <!-- Beyond traditional ends here -->

  <!-- Customizable deployment starts here-->
  <div id="deployment-options-section" class="customizable--deployment page-section">
    <div class="heading wow fadeInUp">
      <h2><?php echo $deployment_options['heading']; ?></h2>
      <p class="pblc"><?php echo $deployment_options['sub_heading']; ?></p>
    </div>
    <div class="customizable-items-container wow fadeInUp">
      <?php echo $deployment_options['images_block']; ?>
    </div>
  </div>
  <!-- Customizable deployment ends here-->

  <!-- Request quote area starts here -->
  <?php if($request_a_quote){ ?>
      <div id="get-touch-section" class="request--quote page-section wow fadeInUp">
        <div class="container">
          <div class="request--quote-area">
            <div class="row">
              <div class="col-xl-4">
                <div class="heading">
                  <h2><?php echo $request_a_quote['heading']; ?></h2>
                  <p class="pblc"><?php echo $request_a_quote['sub_heading']; ?></p>
                </div>
                <section>
                  <?php echo $request_a_quote['contact_block']; ?>
                </section>
              </div>
              <div class="col-xl-8">
                  <?php echo do_shortcode($request_a_quote['form_shortcode']); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
  <?php } ?>
<!-- Request quote area ends here -->

<?php get_footer(); ?>