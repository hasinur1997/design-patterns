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

        $shape->getShape(new Circle)->draw();
        $shape->getShape(new Square)->draw();
        $shape->getShape(new Rectangle)->draw();    
    }
}
