<?php 
namespace Builder;

/**
 * Cold Drinks Class 
 */
abstract class ColdDrink implements Item
{
    /**
     * Get pack
     *
     * @return void
     */
    public function packing()
    {   
        return "Bottle";
    }

    /**
     * Get price
     *
     * @return integer
     */
    public abstract function price();

}
