<?php
    class Validation{
        public static function validateItem($var, $type){
            $filter = false;
            switch ($type)
            {
                case 'email':
                    $var=substr($var,0,254);
                    $filter=FILTER_VALIDATE_EMAIL;
                    break;
                case 'int':
                    $filter=FILTER_VALIDATE_INT;
                    break;
                case 'boolean':
                    $filter=FILTER_VALIDATE_BOOLEAN;
                    break;
                case 'ip':
                    $filter=FILTER_VALIDATE_IP;
                    break;
                case 'url':
                    $filter=FILTER_VALIDATE_URL;
                    break;
                case 'float':
                    $filter=FILTER_VALIDATE_FLOAT;
                    break;

            }
            return filter_var($var, $filter)==false?false:true;
        }
        
        public static function array_Validate($array){
            foreach ($array as $key=>$value){
                if(isset($value)){
                    $tab[]=  self::validateItem($value, $key);
                }
                else {
                    $tab[]=false;
                }
            }
        }
        
        public static function sanitize($var, $type){
            $filter = false;
            switch ($type)
            {   
                case'string':
                    $filer=FILTER_SANITIZE_STRING;
                case 'email':
                    $var=substr($var,0,254);
                    $filter=FILTER_SANITIZE_EMAIL;
                    break;
                case 'int':
                    $filter=FILTER_SANITIZE_NUMBER_INT;
                    break;
                case 'url':
                    $filter=FILTER_SANITIZE_URL;
                    break;
                case 'float':
                    $filter=FILTER_SANITIZE_NUMBER_FLOAT;
                    break;
                case 'text':
                    if(preg_match('#^[a-zA-Z0-9éàè.,;:ôâêïëù!-_?/$€()=\s'."'".'"'.'î'.']*$#', $var)){
                        return true;
                    }
                    else{
                        return false;
                    }
            }
            return filter_var($var, $filter);
        }
        
        
         public static function array_Sanitize($array){
            foreach ($array as $key=>$value){
                if(isset($value)){
                    $tab[]=  self::sanitize($value, $key);
                }
                else {
                    $tab[]="";
                }
            }
        }
    }
?>