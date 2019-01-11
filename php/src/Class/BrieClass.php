<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BrieClass
 *
 * @author MoulinDigital
 */
class BrieClass extends ProductClass{
    //put your code here
    
    function manageAgedBrie($item) {
        if ($item->quality < 50) {
            $item->quality++;
        }
    }
    
}
