<?php 
    // @todo - customizable footers
?>
<?php 
if(get_option(wtst_options::O_FTR_OPTIONS) == 4 ){
    get_template_part('template-parts/footer/footer', 'opt4');
} else {
    get_template_part('template-parts/footer/footer', 'opt1');
}

?>