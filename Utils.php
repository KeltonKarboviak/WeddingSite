<?php

final class Utils {
    
    //const CAROUSEL_PATH = "./img/carousel/";
    
    private function __construct() {}

    function dirToArray($dir) {
        return array_diff(scandir($dir), array('..', '.'));
    }
}