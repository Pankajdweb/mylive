<?php get_header();?>

<div class="container mt-5">

dfdsfvcsvsdvfdscf

<?php  get_template_part( 'includes/section' , 'archive');?>


<!-- fisrt way for  pagination -->
<?php
//  previous_posts_link();
 ?>
 <?
// php next_posts_link();
?>


<!-- second way for pagenation -->
<?php
  global $wp_query;
 
  $big = 999999999; // need an unlikely integer
  echo '<div class="paginate-links blog-pagination">';
    echo paginate_links( array(
    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
    'format' => '?paged=%#%',
    'prev_text' => __('&#x27F5;'),
    'next_text' => __('&#x27F6;'),
    'current' => max( 1, get_query_var('paged') ),
    'total' => $wp_query->max_num_pages
    ) );
  echo '</div>';
?>

</div>

<?php get_footer();?>