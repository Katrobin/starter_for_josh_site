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
        </div><!-- container-->
            <div class="blocker"></div>

              
          </div> <!-- container -->
    
        </section>
<section class="container-fluid articlesbg">
    <div class="container">
    
            <h3 class="text-center"><?php the_field('titleforarticles'); ?></h3>
            <div class="row">

    
        
        <div class="col-md-4">
            <img class="img-fluid" alt=“portait” src="<?php the_field('articleimage'); ?>">
            <h4 class="article-title"><?php the_field('articletitle'); ?></h4>
            <p class="date" ><?php the_field('articledate'); ?></p>
            <p class="article-p"><?php the_field('articleexcerpt'); ?> </p>
            <a href="<?php the_field('readmore'); ?>" class="readmore">CONTINUE READING</a>
        </div>
        <div class="col-md-4">
        <img class="img-fluid" alt=“portait” src="<?php the_field('article2image'); ?>">
            <h4 class="article-title"><?php the_field('titleforatyicle2'); ?></h4>
            <p class="date" ><?php the_field('article2date'); ?></p>
            <p class="article-p"><?php the_field('article2excerpt'); ?> </p>
            <a href="<?php the_field('readmore'); ?>" class="readmore">CONTINUE READING</a>
             </div>

        <div class="col-md-4">
        <img class="img-fluid" alt=“portait” src="<?php the_field('article3image'); ?>">
            <h4 class="article-title"><?php the_field('titleforarticle3'); ?></h4>
            <p class="date" ><?php the_field('article3date'); ?></p>
            <p class="article-p"><?php the_field('article3excerpt'); ?> </p>
            <a href="<?php the_field('readmore'); ?>" class="readmore">CONTINUE READING</a>
             </div>
        
            
         </div>
        </div>
        </div>
    </section>
    <?php get_footer(); ?> <!-- make sure there aren't any empty spaces after this otherwise you'll break Wordpress -->