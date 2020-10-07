<?php 
namespace Builder;



/**
 * Meal Class
 */
class Meal 
{
    /**
     * Store meal item
     *
     * @var array
     */

    private $items = [];

    /**
     * Add meal item
     *
     * @param Item $item
     * 
     * @return void
     */
    public function addItem(Item $item)
    {
        array_push($this->items, $item);
    }

    /**
     * Get total cost of all meal items
     *
     * @return integer
     */
    public function getCost()
    {
        $items = $this->items;
        $cost = 0;

        foreach($items as $item) {
            $cost += $item->price();
        }

        return $cost;
    }

    /**
     * Display all meal item
     *
     * @return void
     */
    public function showItems()
    {
        $items = $this->items;

        foreach ($items as $item) {
            echo "Item: {$item->name()}<br>";
            echo "Packing: $ {$item->packing()}<br>";
            echo "Price: $ {$item->price()}<br>";
        }
    }
}
