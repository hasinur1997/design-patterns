<?php
namespace Factory;

class FactoryDemo {
    
    public function __construct()
    {
        $this->drawShapes();
    }

    public function drawShapes()
    {
        $shape = new ShapeFactory;

        $shape->getShape('CIRCLE')->draw();
        $shape->getShape('SQUARE')->draw();
        $shape->getShape('RECTANGLE')->draw();    
    }
}
