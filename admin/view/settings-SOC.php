<?php settings_fields(WTST_OPT_GRP_PREFIX . WTST_OPT_GRP_SOC); ?>
<?php do_settings_sections(WTST_OPT_GRP_PREFIX . WTST_OPT_GRP_SOC); ?>

<table class="form-table">
    <?php echo wtst_opt_rows::txt(__("Facebook"), wtst_options::T_SOC_FB); ?>
    <?php echo wtst_opt_rows::txt(__("Twitter"), wtst_options::T_SOC_TWITTER); ?>
    <?php echo wtst_opt_rows::txt(__("Instagram"), wtst_options::T_SOC_INSTA); ?>
    <?php echo wtst_opt_rows::txt(__("Vimeo"), wtst_options::T_SOC_VIMEO); ?>
    <?php echo wtst_opt_rows::txt(__("Youtube"), wtst_options::T_SOC_YT); ?>
</table>