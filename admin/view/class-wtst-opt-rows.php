<?php

class wtst_opt_rows {
    public static function opt($label, $variable, $options) {
        $out = '<tr valign="top">
                <th scope="row">'.$label.':</th>
                <td>
                    <select name="'.$variable.'">';
                        foreach($options as $key => $val) {
                            $out.='<option value="'.$key.'" ';
                            if($key == get_option($variable)){
                                $out.=' selected="selected"';
                            }
                            $out.=">$val</option>";
                        }
                    $out.='</select>
                </td>
            </tr>';
        return $out;
    }
    
    public static function txt($label, $variable) {
        $out = '<tr valign="top">
                <th scope="row">'.$label.':</th>
                <td>
                    <input type="text" name="'.$variable.'" value="'.get_option($variable).'" />
                </td>
            </tr>';
        return $out;
    }
    
    public static function txtra($label, $variable) {
        $out = '<tr valign="top">
                <th scope="row">'.$label.':</th>
                <td>';
                ob_start();
                wp_editor(get_option($variable), $variable);
                $out.= ob_get_clean();
            $out.='</td>
            </tr>';
        return $out;
    }
}