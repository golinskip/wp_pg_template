<?php if (get_option(wtst_options::O_HDR_PRELOADER)): ?>
    <div class="preloader-wrapper">
        <div class="preloader">
            <img src="<?php echo get_template_directory_uri() . '/assets/img/preloader.gif';?>" alt="loading">
        </div>
    </div>
<?php endif; ?>