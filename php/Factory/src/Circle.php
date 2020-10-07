<?php 
namespace Factory;

class Circle implements Shape {
    public function draw()
    {
        $this->template();
    }

    public function template()
    {
        ?>
            <div id="circle" style="width: 150px; height: 100px; border-radius: 100%; border: 1px solid #000"></div>
        <?php
    }
}