
<div id="wtst-topbar" class="container-fluid <?php if ($O_HDR_TOP_BANNER == 1) echo "text-center"; ?>">
    <?php if ($O_HDR_TOP_BANNER == 2): ?>
        <div class="container">
            <div class="row">
                <div id="wtst-topbar-row-left" class="col-md-6">
                    <?php echo get_option(wtst_options::T_HDR_TB_CONTENT_1); ?>
                </div>
                <div id="wtst-topbar-row-right" class="col-md-6">
                    <?php echo get_option(wtst_options::T_HDR_TB_CONTENT_2); ?>
                    <?php if(get_option(wtst_options::O_HDR_SOCIAL) == 1): ?>
                        <?php include(__DIR__.DS.'header-social-icons.php'); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    <?php else: ?>
        <div class="row">
            <div id="wtst-topbar-row-center" class="col-md-12">
                <?php echo get_option(wtst_options::T_HDR_TB_CONTENT_1); ?>
                <?php if(get_option(wtst_options::O_HDR_SOCIAL) == 1): ?>
                    <?php include(__DIR__.DS.'header-social-icons.php'); ?>
                <?php endif; ?></div>
        </div>
    <?php endif; ?>
</div>