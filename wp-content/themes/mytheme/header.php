<!DOCTYPE html>
<html lang="en">
<head>
<title><?php bloginfo( 'name' ); ?> | <?php bloginfo( 'description' ); ?></title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head();?>

</head>
<body  <?php body_class();?>>
<header class="fixed-top my-header light">
<div class="container">

<nav class="navbar navbar-expand-lg navbar-light ">
<a class="navbar-brand" href="#">Pankaj</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>

<?php 
wp_nav_menu (
  array (
    'theme_location'  =>  'top-menu', 
    'container'       => 'div',
    'container_class' => 'collapse navbar-collapse justify-content-center',
    'container_id'    => 'navbarSupportedContent',
    'item_spacing'    => 'preserve',
    'menu_class' => 'navbar-nav m-auto'
   
  )
);
?>

 
</nav>

</div>
</header>