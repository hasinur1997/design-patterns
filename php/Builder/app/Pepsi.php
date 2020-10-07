<?php 
namespace Builder;

/**
 * Pepsi class
 */
class Pepsi extends ColdDrink
{
    /**
     * Get name
     *
     * @return string
     */
    public function name()
    {
        return "Pepsi";
    }

    /**
     * Get price
     *
     * @return integer
     */
    public function price()
    {
        return 100;
    }
}
