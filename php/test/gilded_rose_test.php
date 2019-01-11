<?php

require_once '..\src\gilded_rose.php';

class GildedRoseTest extends PHPUnit_Framework_TestCase  {

    function agedBrieQualityIncreased() {
        $items = array(new Item("Aged Brie", 6, 9));
        $gildedRose = new GildedRose($items);
        $gildedRose->update_quality();
        $this->assertEquals( $items[0]->name,$item->quality= 10);
    }    
}
