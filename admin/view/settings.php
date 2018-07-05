<?php
if (!defined('WPINC')) {
    die;
}

$tabs=[
    'HDR' => [
        'title' => __('Header'),
        'file' => __DIR__.DS.'settings-HDR.php',
    ],
    'SOC' => [
        'title' => __('Social'),
        'file' => __DIR__.DS.'settings-SOC.php',
    ],
    'FTR' => [
        'title' => __('Footer'),
        'file' => __DIR__.DS.'settings-FTR.php',
    ],
];

$tab = (isset($_GET['tab']) && isset($tabs[$_GET['tab']]))?$_GET['tab']:key($tabs);
?>
<div class="wrap">
    <h2><?php echo __("Whitesite theme config"); ?></h2>
        <?php settings_errors(); ?>
    
        <h2 class="nav-tab-wrapper">
            <?php foreach($tabs as $curKey => $curTab): ?>
                <a href="?page=wtst_layout_options&tab=<?php echo $curKey;?>" class="nav-tab<?php if($curKey == $tab) echo " nav-tab-active"; ?>"><?php echo $curTab['title'];?></a>
            <?php endforeach; ?>
        </h2>
    <form method="post" action="options.php">
        <?php include($tabs[$tab]['file']); ?>
        <?php submit_button(); ?>
    </form>
</div>