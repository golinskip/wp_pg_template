
<!--Social buttons-->
<div class="text-center">
    <span class="wtst-social-text">
        <?php echo get_option(wtst_options::T_FTR_SOCIAL_TEXT); ?>
    </span>
        <?php if (get_option(wtst_options::T_SOC_FB) != null): ?>
            <div class='icon social fb'>
                <a href="<?php echo get_option(wtst_options::T_SOC_FB) ?>">
                    <i class="fab fa-facebook"></i>
                </a>
            </div>
        <?php endif; ?>

        <?php if (get_option(wtst_options::T_SOC_INSTA) != null): ?>
            <div class='icon social fb'>
                <a href="<?php echo get_option(wtst_options::T_SOC_INSTA) ?>">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>
        <?php endif; ?>

        <?php if (get_option(wtst_options::T_SOC_TWITTER) != null): ?>
            <div class='icon social fb'>
                <a href="<?php echo get_option(wtst_options::T_SOC_TWITTER) ?>">
                    <i class="fab fa-twitter"></i>
                </a>
            </div>
        <?php endif; ?>

        <?php if (get_option(wtst_options::T_SOC_VIMEO) != null): ?>
            <div class='icon social fb'>
                <a href="<?php echo get_option(wtst_options::T_SOC_VIMEO) ?>">
                    <i class="fab fa-vimeo"></i>
                </a>
            </div>
        <?php endif; ?>

        <?php if (get_option(wtst_options::T_SOC_YT) != null): ?>
            <div class='icon social fb'>
                <a href="<?php echo get_option(wtst_options::T_SOC_YT) ?>">
                    <i class="fab fa-youtube"></i>
                </a>
            </div>
        <?php endif; ?>
</div>
<!--/.Social buttons-->