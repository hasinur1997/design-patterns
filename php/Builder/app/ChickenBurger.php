<?php 
namespace Builder;

/**
 * Chicken burger class
 */
class ChickenBurger extends Burger
{
    /**
     * Get name
     *
     * @return string
     */
    public function name()
    {
        return "Checken Burger";
    }

    /**
     * Get price 
     *
     * @return integer
     */
    public function price()
    {
        return 75;
    }
}
