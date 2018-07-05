<?php

$O_HDR_WIDTH_TYPES         = is_front_page()?get_option(wtst_options::O_HDR_FPG_WIDTH_TYPES          ):get_option(wtst_options::O_HDR_WIDTH_TYPES);
$O_HDR_POSITION_TYPES      = is_front_page()?get_option(wtst_options::O_HDR_FPG_POSITION_TYPES       ):get_option(wtst_options::O_HDR_POSITION_TYPES);
$O_HDR_HEADER_ALTERNATIVES = is_front_page()?get_option(wtst_options::O_HDR_FPG_HEADER_ALTERNATIVES  ):get_option(wtst_options::O_HDR_HEADER_ALTERNATIVES);
$O_HDR_TOP_BANNER          = is_front_page()?get_option(wtst_options::O_HDR_FPG_TOP_BANNER           ):get_option(wtst_options::O_HDR_TOP_BANNER);
$O_HDR_MENU_POSITION       = is_front_page()?get_option(wtst_options::O_HDR_FPG_MENU_POSITION        ):get_option(wtst_options::O_HDR_MENU_POSITION);