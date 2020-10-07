<?php
namespace Builder;

class VegBurger extends Burger
{
    /**
     * Get price name
     *
     * @return string
     */
    public function name()
    {
        return "Veg Burger";
    }

    /**
     * Get price
     *
     * @return integer
     */
    public function price()
    {
        return 300;
    }
}
