<?php
/**
 * Nagłówek kiedy zjedzie się niżej lub jedyny nagłówek na stronie
 */
?>
<nav id="wtst-navbar-1"  class="navbar align-bottom navbar-expand-lg fixed-top wtst-navbar-top <?php 
if($O_HDR_POSITION_TYPES == 2){
    echo ' wtst-navbar-transparent';
} else {
    echo ' wtst-navbar-color';
}?>
">
    <?php if($O_HDR_WIDTH_TYPES == 0): ?><div class="<?php if(wtst_options::O_HDR_WIDTH_TYPES!= 2) echo 'container'; ?>"><?php endif; ?>
        <div><?php include(__DIR__.DS.'header-logo.php'); ?></div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#wtst-navbar-menu-1" aria-controls="wtst-navbar-menu-1" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

            <?php 
            $menuAlignClass = '';
            switch($O_HDR_MENU_POSITION){
                case 0: $menuAlignClass = ''; break;
                case 1: $menuAlignClass = 'justify-content-md-center'; break;
                case 2: $menuAlignClass = 'justify-content-md-end'; break;
            }
            wp_nav_menu( array(
                    'theme_location'  => $navMenu,
                    'menu_id'         => '',
                    'depth'	          => 2, // 1 = no dropdowns, 2 = with dropdowns.
                    'container'       => 'div',
                    'container_class' => 'collapse navbar-collapse '.$menuAlignClass,
                    'container_id'    => 'wtst-navbar-menu-1',
                    'menu_class'      => 'nav navbar-nav navbar-right',
                    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'          => new WP_Bootstrap_Navwalker(),
                
            ) ); ?>
        
        <?php if(get_option(wtst_options::O_HDR_SOCIAL) == 2): ?>
        
        <span class="navbar-text social-icons">
            <?php include(__DIR__.DS.'header-social-icons.php'); ?>
        </span>
        <?php endif; ?>
    <?php if($O_HDR_WIDTH_TYPES == 0): ?></div><?php endif; ?>
</nav>