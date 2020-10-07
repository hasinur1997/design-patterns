<?php 
namespace Builder;

/**
 * Coke class
 */
class Coke extends ColdDrink
{   
    /**
     * Get name
     *
     * @return string
     */
    public function name()
    {
        return "Coke";
    }

    /**
     * Get price
     *
     * @return integer
     */
    public function price()
    {
        return 40;
    }
}
