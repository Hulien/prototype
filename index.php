<?php get_header();?>
<section><h3>partie centrale</h3></section>
<h3> Sous titre</h3>
<!-- The Loop -->
<?php if (have_posts()):while (have_posts()):the_post();?>
<h3><?php the_title();?></h3>
<p><?php the_content();?></p>
<?php endwhile;endif;?>
<!-- Fin Loop -->
<?php get_footer();?>
