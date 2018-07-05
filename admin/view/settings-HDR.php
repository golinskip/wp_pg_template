<?php
$opts[wtst_options::O_HDR_WIDTH_TYPES] = [
    0 => __('Tiny'),
    1 => __('Full width'),
    2 => __('Auto'),
];

$opts[wtst_options::O_HDR_POSITION_TYPES] = [
    0 => __('On top'),
    1 => __('Fixed top'),
    2 => __('Fixed top transparent'),
];

$opts[wtst_options::O_HDR_TOP_BANNER] = [
    0 => __('No top bar'),
    1 => __('Top bar centered'),
    2 => __('Top bar with left and right'),
];

$opts[wtst_options::O_HDR_HEADER_ALTERNATIVES] = [
    0 => __('One menu'),
    1 => __('Alternative menu with special logo'),
    2 => __('Alternative menu only on home'),
];

$opts[wtst_options::O_HDR_MENU_POSITION] = [
    0 => __('Left'),
    1 => __('Center'),
    2 => __('Right'),
];
$opts[wtst_options::O_HDR_SOCIAL] =[
    0 => __("None"),
    1 => __("Top bar"),
    2 => __("Nav bar"),
];
$opts['YN'] =[
    0 => __("No"),
    1 => __("Yes"),
];
?>
<?php settings_fields(WTST_OPT_GRP_PREFIX . WTST_OPT_GRP_HDR); ?>
<?php do_settings_sections(WTST_OPT_GRP_PREFIX . WTST_OPT_GRP_HDR); ?>

<h3><?php echo __('Home page menu'); ?></h3>
<table class="form-table">
    <?php echo wtst_opt_rows::opt(__("Width type"), wtst_options::O_HDR_FPG_WIDTH_TYPES, $opts[wtst_options::O_HDR_WIDTH_TYPES]); ?>
    <?php echo wtst_opt_rows::opt(__("Position type"), wtst_options::O_HDR_FPG_POSITION_TYPES, $opts[wtst_options::O_HDR_POSITION_TYPES]); ?>
    <?php echo wtst_opt_rows::opt(__("Top banner"), wtst_options::O_HDR_FPG_TOP_BANNER, $opts[wtst_options::O_HDR_TOP_BANNER]); ?>
    <?php echo wtst_opt_rows::opt(__("Menu position"), wtst_options::O_HDR_FPG_MENU_POSITION, $opts[wtst_options::O_HDR_MENU_POSITION]); ?>
    <?php echo wtst_opt_rows::opt(__("Header alternatives"), wtst_options::O_HDR_FPG_HEADER_ALTERNATIVES, $opts[wtst_options::O_HDR_HEADER_ALTERNATIVES]); ?>
</table>
<h3><?php echo __('Other pages menu'); ?></h3>
<table class="form-table">
    <?php echo wtst_opt_rows::opt(__("Width type"), wtst_options::O_HDR_WIDTH_TYPES, $opts[wtst_options::O_HDR_WIDTH_TYPES]); ?>
    <?php echo wtst_opt_rows::opt(__("Position type"), wtst_options::O_HDR_POSITION_TYPES, $opts[wtst_options::O_HDR_POSITION_TYPES]); ?>
    <?php echo wtst_opt_rows::opt(__("Top banner"), wtst_options::O_HDR_TOP_BANNER, $opts[wtst_options::O_HDR_TOP_BANNER]); ?>
    <?php echo wtst_opt_rows::opt(__("Menu position"), wtst_options::O_HDR_MENU_POSITION, $opts[wtst_options::O_HDR_MENU_POSITION]); ?>
    <?php echo wtst_opt_rows::opt(__("Header alternatives"), wtst_options::O_HDR_HEADER_ALTERNATIVES, $opts[wtst_options::O_HDR_HEADER_ALTERNATIVES]); ?>
</table>
<h3><?php echo __('Texts'); ?></h3>
<table class="form-table">
    <?php echo wtst_opt_rows::opt(__("Onepage link easing"), wtst_options::O_HDR_ONEPAGE_EASE, $opts['YN']); ?>
    <?php echo wtst_opt_rows::opt(__("Show preloader"), wtst_options::O_HDR_PRELOADER, $opts['YN']); ?>

    <?php echo wtst_opt_rows::txt(__("Top banner text 1"), wtst_options::T_HDR_TB_CONTENT_1); ?>
    <?php echo wtst_opt_rows::txt(__("Top banner text 2"), wtst_options::T_HDR_TB_CONTENT_2); ?>
    
    <?php echo wtst_opt_rows::opt(__("Social buttons"), wtst_options::O_HDR_SOCIAL, $opts[wtst_options::O_HDR_SOCIAL]); ?>
</table>