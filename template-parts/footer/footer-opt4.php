<?php
// Opcja z czterema kolumnami
?>
<!--Footer-->
<footer class="footer-opt-4 page-footer font-small stylish-color-dark pt-4">
    <div class="container">
        <div class="row">
            <div class="col-md-3 wtst-footer-col-1">
                <?php echo get_option(wtst_options::T_FTR_TAB_1); ?>
            </div>
            <div class="col-md-3 wtst-footer-col-2">
                <h4>
                    <?php echo get_option(wtst_options::T_FTR_MENU_TEXT); ?>
                </h4>
                <?php get_template_part('template-parts/footer/footer', 'menu') ?>
            </div>
            <div class="col-md-3 wtst-footer-col-3">
                <h4>
                    <?php echo get_option(wtst_options::T_FTR_SOCIAL_TEXT); ?>
                </h4>
                <?php get_template_part('template-parts/footer/footer', 'social') ?>
            </div>
            <div class="col-md-3 wtst-footer-col-4">
                <?php echo get_option(wtst_options::T_FTR_TAB_2); ?>
            </div>
        </div>
    </div>
    <!--Footer Links-->
        <?php #get_template_part('template-parts/footer/footer', 'links') ?>
    <!--/.Footer Links-->

    <!--Call to action-->
        <?php #get_template_part('template-parts/footer/footer', 'newsletter') ?>
    <!--/.Call to action-->

    
    <!--Social buttons-->
        
    <!--/.Social buttons-->
    
    <?php get_template_part('template-parts/footer/footer', 'copyright') ?>

</footer>
<!--/.Footer-->