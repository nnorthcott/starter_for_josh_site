<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@800&display=swap" rel="stylesheet"> 

<!--<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="responsive.css" />-->
<title>   <?php
              if (function_exists('is_tag') && is_tag()) {
                 single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
              elseif (is_archive()) {
                 wp_title(''); echo ' Archive - '; }
              elseif (is_search()) {
                 echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
              elseif (!(is_404()) && (is_single()) || (is_page())) {
                 wp_title(''); echo ' - '; }
              elseif (is_404()) {
                 echo 'Not Found - '; }
              if (is_home()) {
                 bloginfo('name'); echo ' - '; bloginfo('description'); }
              else {
                  bloginfo('name'); }
              if ($paged>1) {
                 echo ' - page '. $paged; }
           ?>
</title>
<meta name="description" content="<?php bloginfo('description'); ?>">
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico">
</head>
<body>
    <header class="container-fluid smallpage-bg">   <!-- div for the main image the stretches to the edge of the page- -->
        <div class="container">
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <!-- Brand -->
        <a class="navbar-brand" href="#"><span class="josh">JOSH</span><span class="orange">WHITKIN</span></a>
      
        <!-- Toggler/collapsible Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="#">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">PROJECTS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">CV</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">CONTACT</a>
              </li>
          </ul>
        </div>
      </nav> 
   
        <div class="container smallpage-tag"><!-- div that holds the content in the middle of the page-->
                  <h1 class="smallpage-title"> Games Design For the Future </h1><!--  the main tag line-->
  </div>            
</div><!-- container-->

<!—remove all our css styles and any Javascript code. WordPress automatically calls javascript /jquery elsewhere, calls to javascript are not needed in the header or the footer now- UNLESS you have calls to google or typkit fonts- they can stay-->

<!-- very important that this code is added-->
<?php wp_head(); ?> 

</header>

<section class="container-fluid aboutbg text-center">
    <div class="container">
        <h2>GAMES &amp; LEVEL DESIGNER</h2>
        <p class="particle"> and particle wizard</p>
        <p class="about-text">My name is Josh Whitkin. I'm a professional with more than 7 years of
            industry experience in Games Design, Level Design, Scripting and Visual
            Effects. WHat makes me passionate about games is the combination of
            technology and creativity, and how multiple disciplines come togehter to
            create an interactive experience. Whether I'm designing for puzzle games, 2D
            platformers or 3D environments.
            I always tell a story.</p>
        <div class="blocker"></div>
    </div>
</section>

<section class="container-fluid articlesbg">
    <div class="container">
        <div>
            <h3 class="text-center">LATEST ARTICLES</h3>
        </div>
        <div class="row">
            <div class="col-md-4 text-center">
                <img class="img-fluid" alt="portrait" src="images/port1.jpg">
                <h4 class="article-title">A PORTRAIT</h4>
                <p class="date">12 December 2020</p>
                <p class="article-p">STS has never been shy of seeking new terrains of
                    investigation. More and more STS scholars are starting to explore and
                    intervene in the arts. This object of study brings new challenges and opportunities that we want to explore in this session. We would like to gather first of all simply two kinds of knowledge arising from STS study of the arts.
                </p>
                <a class="readmore" href="#">CONTINUE READING</a>
            </div>
            <div class="col-md-4 text-center">
                <img class="img-fluid" alt="portrait" src="images/port2.jpg">
                <h4 class="article-title">A MODEL</h4>
                <p class="date">12 December 2020</p>
                <p class="article-p">STS has never been shy of seeking new terrains of
                    investigation. More and more STS scholars are starting to explore and
                    intervene in the arts. This object of study brings new challenges and opportunities that we want to explore in this session. We would like to gather first of all simply two kinds of knowledge arising from STS study of the arts.</p>
                <a class="readmore" href="#">CONTINUE READING</a>
            </div>
            <div class="col-md-4 text-center">
                <img class="img-fluid" alt="portrait" src="images/port3.jpg">
                <h4 class="article-title">A GAMES DESIGN</h4>
                <p class="date">12 December 2020</p>
                <p class="article-p">STS has never been shy of seeking new terrains of
                    investigation. More and more STS scholars are starting to explore and
                    intervene in the arts. This object of study brings new challenges and opportunities that we want to explore in this session. We would like to gather first of all simply two kinds of knowledge arising from STS study of the arts.</p>
                <a class="readmore" href="#">CONTINUE READING</a>
            </div>
        </div>
    </div>
</section>

<footer class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <a class="navbar-brand" href="#"><span class="josh">JOSH</span><span class="orange">WHITKIN</span></a>
            </div>
            <div class="col-md-6">
                <p>Terms and Conditions</p>
            </div>
        </div>
    </div>
</footer>
</body>
</html>