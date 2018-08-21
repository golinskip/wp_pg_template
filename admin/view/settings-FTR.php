<?php settings_fields(WTST_OPT_GRP_PREFIX . WTST_OPT_GRP_FTR); ?>
<?php do_settings_sections(WTST_OPT_GRP_PREFIX . WTST_OPT_GRP_FTR); ?>
<?php

$opts[wtst_options::O_FTR_OPTIONS] = [
    0 => __('One line'),
    4 => __('4 columns'),
];
?>

<table class="form-table">
    <?php echo wtst_opt_rows::opt(__("Footer option"), wtst_options::O_FTR_OPTIONS, $opts[wtst_options::O_FTR_OPTIONS]); ?>
    <?php echo wtst_opt_rows::txt(__("Social text"), wtst_options::T_FTR_SOCIAL_TEXT); ?>
    <?php echo wtst_opt_rows::txt(__("Menu text"), wtst_options::T_FTR_MENU_TEXT); ?>
    <?php echo wtst_opt_rows::txt(__("Copyright"), wtst_options::T_FTR_COPYRIGHT); ?>
    <?php echo wtst_opt_rows::txtra(__("Footer text 1"), wtst_options::T_FTR_TAB_1); ?>
    <?php echo wtst_opt_rows::txtra(__("Footer text 2"), wtst_options::T_FTR_TAB_2); ?>
    <?php echo wtst_opt_rows::txtra(__("Footer text 3"), wtst_options::T_FTR_TAB_3); ?>
</table>