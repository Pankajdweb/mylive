<?php if ( have_posts() ) :  while ( have_posts() ) : the_post();?>
<div class="card mt-2">
<div class="card-body">
<?php if (has_post_thumbnail() ): ?>
<img src=" <?php the_post_thumbnail_url();?> " class="img-fulid img-thumbnail" />

<?php endif;?>
<h1><?php the_title();?></h1>
<?php  the_excerpt(); ?>
<a class="btn btn-success" href="<? the_permalink();?>" >read more</a>
</div>
</div>

<?php   endwhile; else: endif; ?> 