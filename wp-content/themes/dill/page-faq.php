<?php get_header();?>
<?php if (have_posts()):?>
<?php $more=1;?>
<?php while (have_posts()):the_post();?>
<?php the_content();?>
<?php endwhile;?>
<?php endif;?>
<?php get_footer();?>
