<?php

class Util{

    public static function getSafeGetVar($paramName){
        $paramVal = isset($_GET[$paramName]) ? $_GET[$paramName] : '';

        return $paramVal;
    }
}