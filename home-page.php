<!DOCTYPE html>
<html lang="en">
<body>
<?php
    /*
    Template Name: Home page
    */
    ?> 
    <?php get_header();?>   <!--  Tells WordPress to include header.php -->
    <section class="container-fluid aboutbg text-center">
            <div class="container">
            <h2><?php the_field('titleforaboutme'); ?></h2><!--  custom field for the aboutme content-->
            <p class="particle"><?php the_field('subtitleforaboutme'); ?></p>
            <p class="about-text"><?php the_field('paragraphforaboutme'); ?></p>
            <div class="blocker"></div>
            </div>
    </section>
        <section class="container-fluid articlesbg">
            <div class="container">
                <h3 class="text-center"><?php the_field('titleforarticles'); ?></h3>
                <div class="row">
                  <div class="col-md-4 text-center">
                        <?php $image=get_field('articleimageleft'); ?>
                        <img class="img-fluid" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                        <h4 class="article-title"><?php the_field('articletitleleft'); ?></h4>
                        <p class="date" ><?php the_field('articledateleft'); ?></p>
                        <p class="article-p"><?php the_field('articleexcerptleft'); ?> </p>
                        <a href="<?php the_field('readmoreleft'); ?>" class="readmore">CONTINUE READING</a>
                    </div>
                    <div class="col-md-4 text-center">
                        <?php $image=get_field('articleimagemiddle'); ?>
                        <img class="img-fluid" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                        <h4 class="article-title"><?php the_field('articletitlemiddle'); ?></h4>
                        <p class="date" ><?php the_field('articledatemiddle'); ?></p>
                        <p class="article-p"><?php the_field('articleexcerptmiddle'); ?> </p>
                        <a href="<?php the_field('readmoremiddle'); ?>" class="readmore">CONTINUE READING</a>
                    </div>
                    <div class="col-md-4 text-center">
                        <?php $image=get_field('articleimageright'); ?>
                        <img class="img-fluid" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                        <h4 class="article-title"><?php the_field('articletitleright'); ?></h4>
                        <p class="date" ><?php the_field('articledateright'); ?></p>
                        <p class="article-p"><?php the_field('articleexcerptright'); ?> </p>
                        <a href="<?php the_field('readmoreright'); ?>" class="readmore">CONTINUE READING</a>
                    </div>
                    </div><!-- row-->
                </div><!-- container-->
               </section><!-- container-fluid-->

        <?php get_footer();?>   <!-- Tells WordPress to include footer.php   -->

</body>
</html>