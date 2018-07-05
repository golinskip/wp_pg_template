<?php
if (is_plugin_active('whitesite-theme-toolkit/whitesite-theme-toolkit.php')) {
    $wtst_page_builder_frontend = new wtst_page_builder_frontend();
    $wtst_page_builder_frontend->load('frontpage', 0);
    $wtst_page_builder_frontend->enqueAssets();
}

get_header(); ?>

<?php
if (is_plugin_active('whitesite-theme-toolkit/whitesite-theme-toolkit.php')) {
    echo $wtst_page_builder_frontend->getHTML();
}
?>

<?php get_footer(); ?>