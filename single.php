<!DOCTYPE html>
<html lang="en">
<head>
    <!-- METADATA -->
    <title>Project Title | By ********</title>
    <meta charset="utf-8">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="Project Description" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <!-- STYLESHEETS-->
    <link href='https://fonts.googleapis.com/css?family=Krona+One' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" media="all" href="css/global.css" />
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo get_stylesheet_uri(); ?>" />
</head>
<body>


<div class="main_container">
  <div class="row">
    <div class="nav_bar">Nav Bar</div>
  </div>
  
  <img class="logo" src="/images/logo-circle-600.png">
  <div class="row">
    <div class="brand_name">BLUE LINE COFFEE</div>
  </div>
  <div class="hero clearfix">
    <div class="vid">
        <video autoplay loop muted>
          <source src="http://demosthenes.info/assets/videos/polina.webm" type="video/webm">
          <source src="http://demosthenes.info/assets/videos/polina.mp4" type="video/mp4">
        </video>
    </div>
  </div>
  

   

  <div class="row">
    <div class="company_discription">Blue Line Coffee is a coffee company. Blue Line Coffee is a coffee company. Blue Line Coffee is a coffee company. Blue Line Coffee is a coffee company. Blue Line Coffee is a coffee company.
    </div>
  </div>

  <div class="row">
    <div class="community_board clearfix">
      <div class="community_board__title">Community Board</div>
      <a class="community_board__archive" href="#">Archive</a>
    </div>

    <?php if ( have_posts() ) : ?>

      <?php while ( have_posts() ) : the_post(); ?>

        <div class="article medium-7 columns clearfix">
          <img class="article__image" src="/images/dd.jpg">
          <div class="article__title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </div>
          <div class="byline clearfix">
            <img class="byline__img" src="<?php get_avatar_url(); ?>">
            <div class="byline__writer">by <?php the_author(); ?></div>
          </div>
          <div class="article__article"><?php the_content(); ?></div>
        </div>

      <?php endwhile; ?>

    <?php else : ?>

      <p>There are no posts to show.</p>

    <?php endif; ?>
  </div>

  <div class="row">
    <div class="footer clearfix">
      <div class="footer__address">Blue Line Coffee - 4924 Underwood Ave - 402.502.6707</div>
    </div>
  </div>
</div>


<!-- SCRIPTS -->
<script src="js/site/global.js" type="text/javascript"></script>

</body>
</html>
