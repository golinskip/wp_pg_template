<?php
/**
 * Fast Code class
 */
class fc {
    
    /**
     * Wstawia blok z folderu blocks
     * @param type $name
     * @param type $options
     */
    public function block($name, $options = []) {
        extract($options, EXTR_SKIP);
        $includePath = get_template_directory().'/'.'blocks'.'/'.$this->st($name).'.php';
        require $includePath;
    }
    
    /**
     * Wyświetla sciezke do assetów vendora
     * @param type $name
     * @param type $resource
     * @return type
     */
    public function av($name, $resource) {
        return get_template_directory_uri().'/'.'assets'.'/'.'vendor'.'/'.$name.'/'.$resource;
    }
    
    /**
     * Usuwa niebezpieczne znaki
     * @param type $string
     * @return type
     */
    private function st($string) {
        return preg_replace("/[^A-Za-z0-9_-]/", '', $string);
    }
    
    /**
     * Singleton
     * @return fc
     */
    protected static $i = null;
    public static function i() {
        if(self::$i === null) {
            self::$i = new fc();
        }
        return self::$i;
    }
}