<?php

const WTST_OPT_GRP_PREFIX = "wtst-theme-option-";

const WTST_OPT_GRP_HDR = "HDR";
const WTST_OPT_GRP_FTR = "FTR";
const WTST_OPT_GRP_SOC = "SOC";

/**
 * Schemat:
 * T_PPP_NNNNN(...)
 * T - typ pola:
 *      - O - pole opcji
 *      - T - pole tekstowe
 * PPP - grupa
 *      - HDR - nagłówek
 *      - FTR - stopka
 * NNNNN(...) - dowolna nazwa pola
 * 
 * @author Paweł
 */
class wtst_options {
    /**
     * Typ szerokości - strona główna
     * 0 - ustalona szerokość 
     * 1 - cała szerokość
     */
    const O_HDR_FPG_WIDTH_TYPES = 'hdr_fpg_width_types';
    
    /**
     * Pozycjonowanie  - strona główna
     * 0 - u góry strony
     * 1 - przyklejone do góry, 
     * 2 - przyklejone do góry i przezroczyste, 
     */
    const O_HDR_FPG_POSITION_TYPES = 'hdr_fpg_position_types'; 
    
    /**
     * Alternatywne nagłówki  - strona główna
     * 0 - jeden nagłówek zawsze
     * 1 - dwa nagłówki w zależności od pozycji
     * 2 - dwa nagłówki tylko na stronie głównej
     */
    const O_HDR_FPG_HEADER_ALTERNATIVES = 'wtst_fpg_hdr_alternatives'; 
    
    /**
     * Baner górny - strona główna
     * 0 - brak 
     * 1 - wyśrodkowany 
     * 2 - lewo/prawo
     */
    const O_HDR_FPG_TOP_BANNER = 'hdr_fpg_top_banner';
    
    /**
     * Menu górne - strona główna
     * 0 - lewo 
     * 1 - środek
     * 2 - prawo
     */
    const O_HDR_FPG_MENU_POSITION = 'hdr_fpg_menu_position';
    
    /**
     * Typ szerokości - strona główna
     * 0 - ustalona szerokość 
     * 1 - cała szerokość
     */
    const O_HDR_WIDTH_TYPES = 'hdr_width_types';
    
    /**
     * Pozycjonowanie - 
     * 0 - u góry strony
     * 1 - przyklejone do góry, 
     * 2 - przyklejone do góry i przezroczyste, 
     */
    const O_HDR_POSITION_TYPES = 'hdr_position_types'; 
    
    /**
     * Alternatywne nagłówki -
     * 0 - jeden nagłówek zawsze
     * 1 - dwa nagłówki w zależności od pozycji
     * 2 - dwa nagłówki tylko na stronie głównej
     */
    const O_HDR_HEADER_ALTERNATIVES = 'wtst_hdr_alternatives'; 
    
    /**
     * Baner górny
     * 0 - brak 
     * 1 - wyśrodkowany 
     * 2 - lewo/prawo
     */
    const O_HDR_TOP_BANNER = 'hdr_top_banner';
    
    /**
     * Menu górne
     * 0 - lewo 
     * 1 - środek
     * 2 - prawo
     */
    const O_HDR_MENU_POSITION = 'hdr_menu_position';
    
    /**
     * Treść lub lewa zawartość bannera górnego
     */
    const T_HDR_TB_CONTENT_1 = 'hdr_top_banner_content_1';
    
    /**
     * Treść lub prawa zawartość bannera górnego
     */
    const T_HDR_TB_CONTENT_2 = 'hdr_top_banner_content_2';
    
    /**
     * Przyciski mediów społecznościowych
     * 0 - nie pokazuj
     * 1 - w górnym pasku
     * 2 - w pasku menu
     */
    const O_HDR_SOCIAL = 'wtst_hdr_social';
    
    /**
     * Animacja przejeżdżania w przypadku onepage
     * 0 - nie
     * 1 - tak
     */
    const O_HDR_ONEPAGE_EASE = 'wtst_hdr_onepage_ease';
    
    /**
     * Czy pokazywać preloader
     * 0 - nie
     * 1 - tak
     */
    const O_HDR_PRELOADER = 'wtst_hdr_preloader';
    
    /**
     * Stopka - treść pierwszej kolumny
     */
    const T_FTR_TAB_1 = 'ftr_tab_1';
    
    /**
     * Stopka - treść drugiej kolumny
     */
    const T_FTR_TAB_2 = 'ftr_tab_2';
    
    /**
     * Stopka - treść trzeciej kolumny
     */
    const T_FTR_TAB_3 = 'ftr_tab_3';
    
    /**
     * Stopka - treść trzeciej kolumny
     */
    const T_FTR_COPYRIGHT = 'ftr_copyright';
    
    
    /**
     * Stopka - tekst pred linkami do społeczności
     */
    const T_FTR_SOCIAL_TEXT = 'wtst_ftr_social_text';
    
    
    /**
     * Społ. - facebook
     */
    const T_SOC_FB = 'wtst_soc_fb';
    
    /**
     * Społ. - instagram
     */
    const T_SOC_INSTA = 'wtst_soc_insta';
    
    /**
     * Społ. - vimeo
     */
    const T_SOC_VIMEO = 'wtst_soc_vimeo';
    
    /**
     * Społ. - twitter
     */
    const T_SOC_TWITTER = 'wtst_soc_twitter';
    
    /**
     * Społ. - youtube
     */
    const T_SOC_YT = 'wtst_soc_yt';
    
    
    /**
     * Returns tab of constants
     * @return array
     */
    public static function tab() {
        $reflector = new ReflectionClass(get_class(new self()));
        $constArr = $reflector->getConstants();
        $out = [];
        foreach($constArr as $key => $value) {
            $grp = substr($key, 2, 3);
            if(!isset($out[$grp])) {
                $out[$grp] = [];
            }
            $out[$grp][$key] = $value;
        }
        return $out;
    }
}
