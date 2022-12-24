<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
   
    <?php wp_head(); ?>
</head>
<body>

<!-- slider part  -->

    <section class="container-fluid slider">

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">

  <div class="carousel-inner">
    <?php
    $x = 0;
        while (have_posts()):(the_post());
        $x++;
    ?>
    <div class="carousel-item <?= ($x==1)? 'active' : '' ?> ">
        <?php the_post_thumbnail(); ?>
      <!-- <img src="..." class="d-block w-100" alt="..."> -->
    </div>
    <!-- <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div> -->
    <?php endwhile; ?>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    </section>

    <!-- slider part end -->

    <section class="container-fluid logo">
        <div class="row">
            <div class="col-lg-6">
                <?php the_custom_logo() ?>
            </div>
            <div class="col-lg-6 text-end">
                <?php dynamic_sidebar('logoright') ?>
            </div>
        </div>
    </section>


    <section class="container-fluid menu">
    <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    
    <div class="collapse navbar-collapse" id="navbarNav">
    <?php 
            wp_nav_menu([
                'menu_locations'=>'TM',
                'menu_class'=>'navbar-nav Project_menu'
            ])
        ?>
      <ul class="navbar-nav">       
        <li class="nav-item">
          <!-- <a class="nav-link active" aria-current="page" href="#">Home</a> -->
        </li>        
      </ul>
    </div>
  </div>
</nav>
    </section>



    <section class="container-fluid ">
        <div class="row card_heading mt-5">
            <?php dynamic_sidebar('c_heading') ?>
        </div>

        <div class="row card_heading mt-5">
            <div class="col-lg-4">

            <div class="card" style="width: 18rem;">
            <?php dynamic_sidebar('card1') ?>
            </div> 

            </div>

            <div class="col-lg-4">
            <div class="card" style="width: 18rem;">
            <?php dynamic_sidebar('card2') ?>
            </div> 
            </div>
            <div class="col-lg-4">
            <div class="card" style="width: 18rem;">
            <?php dynamic_sidebar('card3') ?>
            </div> 
            </div>
        </div>
    </section>

    <section class="container-fluid txt">
        <div class="row  green mt-5">
            <div class="col-lg-5 green">
                <img src="<?php echo get_template_directory_uri() . '/assets/image/green-line.png' ?>" alt="">
            </div>
            <div class="col-lg-2">
                <h4>Recent Photos</h4>
                <p>Some latest project pictures</p>
            </div>
            <div class="col-lg-5 green">
            <img src="<?php echo get_template_directory_uri() . '/assets/image/green-line.png' ?>" alt="">
            </div>
        </div>
    </section>


    

    <section class="container-fluid ">
   
        <div class="row card_heading mt-5">
            <div class="col-lg-3">
            <div class="card" style="width: 14rem;">
            <?php dynamic_sidebar('p_card1') ?>
            </div> 
            </div>

            <div class="col-lg-3">
            <div class="card" style="width: 14rem;">
            <?php dynamic_sidebar('p_card2') ?>
            </div> 
            </div>

            <div class="col-lg-3">
            <div class="card" style="width: 14rem;">
            <?php dynamic_sidebar('p_card3') ?>
            </div> 
            </div>

            <div class="col-lg-3">
            <div class="card" style="width: 14rem;">
            <?php dynamic_sidebar('p_card4') ?>
            </div> 
            </div>
        </div>
    </section>


    <section class="container-fluid txt">
        <div class="row  green mt-5">
            <div class="col-lg-5 green">
                <img src="<?php echo get_template_directory_uri() . '/assets/image/green-line.png' ?>" alt="">
            </div>
            <div class="col-lg-2">
                <h4>NEWS & EVENTS</h4>
                <p>CLICK HERE TO VIEW ALL</p>
            </div>
            <div class="col-lg-5 green">
            <img src="<?php echo get_template_directory_uri() . '/assets/image/green-line.png' ?>" alt="">
            </div>
        </div>
    </section>

    <footer class="container-fluid">
        <div class="row footer_main mt-5">
            <div class="col-lg-6 footer_left mt-5" style="width: 25rem;">
                <?php dynamic_sidebar('f_left') ?>
            </div>
            <div class="col-lg-6 footer_right mt-5" style="width: 30rem;">
                <?php dynamic_sidebar('f_right')?>
            </div>
        </div>
        <div class="author_main">
        <div class="row author mt-5">
            <div class="col-lg-6 author_left">
                <p>POWERED BY SOLUTION ART LTD</p>
            </div>
            <div class="col-lg-6 author_right text-end">
                <p>COPYRIGHT © 2015. BANGLADESH BRIDGE AUTHORITY.</p>
            </div>
        </div>
        </div>
    </footer>


    <!-- <?php wp_footer(); ?> -->
</body>
</html>