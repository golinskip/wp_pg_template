<?php 
    // @todo - customizable footers
?>
<!--Footer-->
<footer class="page-footer font-small stylish-color-dark pt-4">

    <!--Footer Links-->
        <?php #get_template_part('template-parts/footer/footer', 'links') ?>
    <!--/.Footer Links-->

        <?php get_template_part('template-parts/footer/footer', 'menu') ?>
    <hr>

    <!--Call to action-->
        <?php #get_template_part('template-parts/footer/footer', 'newsletter') ?>
    <!--/.Call to action-->

    
    <!--Social buttons-->
        <?php get_template_part('template-parts/footer/footer', 'social') ?>
    <!--/.Social buttons-->
    
    <?php get_template_part('template-parts/footer/footer', 'copyright') ?>

</footer>
<!--/.Footer-->
                      