<?php
namespace Builder;

/**
 * Item interface
 */
interface Item {

    /**
     * Get item name
     *
     * @return string
     */
    public function name();

    /**
     * Get item packing type
     *
     * @return string
     */
    public function packing();

    /**
     * Get item price
     *
     * @return integer
     */
    public function price();
}
