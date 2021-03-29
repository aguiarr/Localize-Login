<?php

namespace Localize\Helpers;

class Util
{
    
    public static function generateToken() {

        $length = 18;
        $str = str_split("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789");
        $arr = [];

        for($i = 0; $i < $length; $i++){
            $randon = rand(0, sizeof($str) -1);
            array_push($arr, $str[$randon]);
        }

        $token = join("", $arr);
        return $token;
    }
    
    public static function ignorePath($paths, $current_path) {
        
        $ignore = false;
        foreach($paths as $path){
            if($path == $current_path){
                $ignore = true;
                return $ignore;
            } 
        }

        return $ignore;

    }
}