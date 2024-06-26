<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico.png">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@800&display=swap" rel="stylesheet"> 

<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="responsive.css">
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
              <a class="nav-link" href="http://170.187.231.66/~mesh15/">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://170.187.231.66/~mesh15/?page_id=794">PROJECTS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://170.187.231.66/~mesh15/?page_id=790">CV</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://170.187.231.66/~mesh15/?page_id=828">CONTACT</a>
            </li>
          </ul>
        </div>
      </nav> 
      <header class="container-fluid" style="background-size:cover; background-repeat:no-repeat; height:60vh; background-image: url(<?php the_field('projectheaderbackgroundimage') ?>);">
        <div class="container smallpage-tag"><!-- div that holds the content in the middle of the page-->
        <h1 class="smallpage-title"><?php the_field('projectsheadertitle'); ?> </h1>            
      </div><!-- container-->

<!-- remove all our css styles and any Javascript code. WordPress automatically calls javascript /jquery elsewhere, calls to javascript are not needed in the header or the footer now- UNLESS you have calls to google or typkit fonts- they can stay-->

<!-- very important that this code is added-->
<?php wp_head(); ?> 

</header>

</body>
</html>