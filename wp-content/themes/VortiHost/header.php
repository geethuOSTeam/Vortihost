<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

  <head>

  <meta charset="<?php bloginfo( 'charset' ); ?>">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png">

  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/fonts/icomoon/style.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

  <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/main.css?v=<?php echo time(); ?>" rel="stylesheet">

  <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/custom.css?v=<?php echo time(); ?>" rel="stylesheet">

  <?php wp_head(); ?>

</head>
<?php global $theme_options; ?>
<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>

    <!-- Header starts here -->

    <header id="header-area">

      <div class="container">

        <div class="content--area">

          <a href="<?php echo get_site_url(); ?>" title="Logo" class="logo">

            <img src="<?php echo $theme_options['theme_logo']; ?>" alt="Logo">

          </a>

          <nav>
	  <?php wp_nav_menu(array('menu'=>$theme_options['main_menu'],
                                                           'container' => null , 
                                                   'menu_class'      => 'menu-inner',
                                                       ) ); ?> 
      

            <a href="<?php echo $theme_options['creananaccount']; ?>" class="primary--button" title="Create a account">Create a account</a>

          </nav>

          <a href="#" class="mobile-icon"><i class="icon-menu"></i></a>

        </div>

      </div>

    </header>

    <!-- Header ends here -->



  <!-- Mobile menu starts here -->

  <div class="mobile-menu">

    <a href="#" class="close-icon"><i class="icon-close"></i></a>

   	  <?php wp_nav_menu(array('menu'=>$theme_options['main_menu'],
                                                           'container' => null , 
                                                   'menu_class'      => 'menu-inner',
                                                       ) ); ?> 

    <div class="cta">

               <a href="<?php echo $theme_options['creananaccount']; ?>" class="primary--button" title="Create a account">Create a account</a>


    </div>

  </div>

  <!-- Mobile menu ends here -->