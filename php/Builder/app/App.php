<?php 
namespace Builder;

/**
 * Class App
 */
class App 
{
    /**
     * Constructor for the App class
     */
    public function __construct()
    {
        $this->prepareMealDetails();
    }

    /**
     * Prepare meal details
     *
     * @return void
     */
    public function prepareMealDetails()
    {
        $mealBuilder = new MealBuilder;

        $vegMeal    = $mealBuilder->prepareVegMeal();
        $nonVegMeal = $mealBuilder->prepareNonVegMeal();

        echo "Veg Meal: <br>";
        $vegMeal->showItems();
        echo "Total Cost: $ {$vegMeal->getCost()}";


        echo "<br><br>Non Veg Meal: <br>";
        $nonVegMeal->showItems();
        echo "Total Cost: $ {$nonVegMeal->getCost()}";

    }
}
