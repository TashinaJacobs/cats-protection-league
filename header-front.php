<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
  </head>
  <body>

    <div class="content">
      <div class="container-fluid my-container">
        <div class="background-image">
          <div class="row">
            <div class="col-12 no-padding">
              <nav class="navbar navbar-expand-lg navbar-light bg-dark">
                <?php if($custom_logo):
                    $custom_logo = get_theme_mod('custom_logo');
                    $logo_url = wp_get_attachment_image_url($custom_logo, 'medium')
                  ?>
                  <a href="<?= bloginfo('home');?>" class="navbar-brand">
                    <img src="<?= $logo_url ?>" alt="Company Logo" height="80">
                  </a>
                <?php endif; ?>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                  <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="#">Features</a>
                    <a class="nav-item nav-link" href="#">Pricing</a>
                    <a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                  </div>
                </div>
              </nav>
            </div>
          </div>
        </div>



      </div>
    </div>


<!-- This is the header for the front page - it will just not have the same title section as the others -->
