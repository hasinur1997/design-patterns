<?php 
namespace Builder;

/**
 * MealBuilder Class
 */
class MealBuilder 
{
    /**
     * Prepare veg meal item
     *
     * @return array
     */
    public function prepareVegMeal()
    {
        $meal = new Meal;

        $meal->addItem(new VegBurger);
        $meal->addItem(new Coke);

        return $meal;
    }

    /**
     * Prepare non veg meal item
     *
     * @return array
     */
    public function prepareNonVegMeal()
    {
        $meal = new Meal;
        $meal->addItem(new ChickenBurger);
        $meal->addItem(new Pepsi);

        return $meal;
    }
}
