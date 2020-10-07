<?php 

namespace Factory;

class Rectangle implements Shape {
    public function draw()
    {
        $this->template();
    }

    public function template()
    {
        ?>
            <canvas id="tectangle" width="200" height="100" style="border: 1px solid #000000;"></canvas>
        <?php 
    }
}