<?php
/**
 * Created by PhpStorm.
 * User: Jrua
 */

function escape($string){
    return htmlentities($string, ENT_QUOTES, 'UTF-8');
}