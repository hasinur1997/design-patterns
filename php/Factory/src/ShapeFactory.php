<?php 
namespace Factory;

class ShapeFactory {

    public function getShape($shapeType)
    {
        switch($shapeType)
        {
            case 'CIRCLE':
               return new Circle();

            case 'SQUARE':
                return new Square();

            case 'RECTANGLE': 
                return new Rectangle();

            default: 
                return null;
        }   
    }
}