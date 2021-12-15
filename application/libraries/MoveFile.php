<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Movefile {

    public function move($address,$folder)
    {
        $tmp = explode('/', $address);
        $tmp[2] = $folder;
        $image = implode($tmp, '/');
    
        if (rename($address, $image)) {
            return $image;
        }else{
            return '';
        }
    }
    public function movefileDocument($address,$folder)
    {
        $tmp = explode('/', $address);
        $tmp[1] = $folder;
        $file = implode($tmp, '/');
    
        if (rename($address, $file)) {
            return $file;
        }else{
            return '';
        }
    }
}