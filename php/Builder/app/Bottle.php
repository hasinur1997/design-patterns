<?php 
namespace Builder;

/**
 * Bottle Class
 */
class Bottle implements Packing
{
    /**
     * Get pack
     *
     * @return string
     */
    public function pack()
    {
        return "Bottle";
    }
}
