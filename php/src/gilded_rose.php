<?php

class GildedRose {

    private $items;

    function __construct($items) {
        $this->items = $items;
    }

    function manageAgedBrie($item) {
        if ($item->quality < 50) {
            $item->quality++;
        }
    }

    function manageAgingRedWine($item) {
        if ($item->sell_In < 0 && $item->sell_in >= -100) {
            $item->quality ++;
        } else if ($item->sell_in < -100) {
            $item->quality --;
        }
    }

    function manageConjuredManaCake($item) {
        if ($item->quality > 0) {
            if ($item->quality > 1) {
                $item->quality = $item->quality - 2;
            } else {
                $item->quality --;
            }
        }
    }

    function manageBackstagePassesToaTAFKAL80ETCConcert($item) {
        if ($item->sell_in >= 0) {
            if ($item->quality < 50) {
                if ($item->sell_in < 11 && $item->sell_in >= 5 && $item->quality <= 48) {
                    $item->quality = $item->quality + 2;
                } else if ($item->sell_in < 6 && $item->quality <= 47) {
                    $item->quality = $item->quality + 3;
                } else {
                    $item->quality++;
                }
            }
        } else {
            $item->quality = 0;
        }
    }

    function update_quality() {
        foreach ($this->items as $item) {

            ($item->name != "Sulfuras, Hand of Ragnaros") ? ($item->quality --) : ($item->quality = $item->quality);

            switch ($item->name) {
                case "Aged Brie":
                    $this->manageAgedBrie($item);
                    break;
                case "Aging Red Wine":
                    $this->manageAgingRedWine($item);
                    break;
                case "Conjured Mana Cake":
                    $this->manageConjuredManaCake($item);
                    break;
                case "Backstage passes to a TAFKAL80ETC concert":
                    $this->manageBackstagePassesToaTAFKAL80ETCConcert($item);
                    break;
            }
        }
    }

}

class Item {

    public $name;
    public $sell_in;
    public $quality;

    function __construct($name, $sell_in, $quality) {
        $this->name = $name;
        $this->sell_in = $sell_in;
        $this->quality = $quality;
    }

    public function __toString() {
        return "{$this->name}, {$this->sell_in}, {$this->quality}";
    }

}
