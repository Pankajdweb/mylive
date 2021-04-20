<?php get_header();?>

<div class="container mt-5">
<?php if (has_post_thumbnail() ): ?>
<img src=" <?php the_post_thumbnail_url();?> " class="img-fulid img-thumbnail" />

<?php endif;?>

<h2><?php the_title();?></h2>

<?php  get_template_part( 'includes/section' , 'content');?>

</div>

<?php get_footer();?>