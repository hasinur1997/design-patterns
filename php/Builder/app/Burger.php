<?php 
namespace Builder;

/**
 * Burger Class
 */
abstract class Burger implements Item 
{
    /**
     * Get packing
     *
     * @return String
     */
    public function packing()
    {
        return "Wrapper";
    }

    /**
     * Get price
     *
     * @return integer
     */
    public abstract function price();
}
