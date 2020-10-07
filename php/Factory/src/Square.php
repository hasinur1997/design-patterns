<?php 
namespace Factory;

class Square implements Shape {
    public function draw()
    {
        $this->template();
    }

    public function template()
    {
        ?>
            <div id="circle" style="width: 100px; height: 100px; border: 1px solid #000; margin: 20px; padding: 1px"></div>

        <?php
    }
}