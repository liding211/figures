<?php 
interface IFigure{
    
    /**
     * base figure draw
     */
    public function draw();
    
    /**
     * base figure moving
     */
    public function move();
    
    /**
     * base figure erase
     */
    public function erase();
    
    /**
     * base figure resize
     */
    public function resize();
}
?>