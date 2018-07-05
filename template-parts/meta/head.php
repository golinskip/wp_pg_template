
<?php wp_deregister_script('jquery') ?>

<!-- The little things -->
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
<base href="<?php echo get_home_url(); ?>/" />

<link href='http://fonts.googleapis.com/css?family=Alegreya+Sans&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

<link rel="shortcut icon" href="<?php echo bloginfo('template_directory'); ?>/favicon.png">
<link rel="apple-touch-icon" href="<?php echo bloginfo('template_directory'); ?>/apple-touch-icon-precomposed.png"/>
<!-- The little things -->



<?php wp_head(); ?>


<style type="text/css">
    <?php get_template_part('template-parts/header/header', 'css') ?>
    <?php get_template_part('template-parts/meta/head', 'css') ?>
</style>