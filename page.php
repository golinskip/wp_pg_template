<?php
if (is_plugin_active('whitesite-theme-toolkit/whitesite-theme-toolkit.php')) {
    $wtst_page_builder_frontend = new wtst_page_builder_frontend();
    $type = is_home()?"post":"page";
    $wtst_page_builder_frontend->load($type, get_the_ID());
    $html = $wtst_page_builder_frontend->getHTML();
    if($html !== false) $wtst_page_builder_frontend->enqueAssets();
}
?><?php get_header(); ?>
<?php
if (is_plugin_active('whitesite-theme-toolkit/whitesite-theme-toolkit.php') && $html !== false):
    echo $html;
else:
?>
<div class="container">
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

    <article role="main" class="primary-content" id="post-<?php the_ID(); ?>">
        <?php if ( is_front_page() ) { ?>
            <h1><?php the_title(); ?></h1>
        <?php } else { ?>
            <h1><?php the_title(); ?></h1>
        <?php } ?>
    
        <?php the_content(); ?>
        
		<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:' ), 'after' => '</div>' ) ); ?>
       
        <?php edit_post_link( __( 'Edit' ), '<span class="edit-link">', '</span>' ); ?>
        <?php comments_template( '', true ); ?>
    </article>
    
        <?php endwhile; ?>
</div>
<?php endif; ?>
<?php get_footer(); ?>
