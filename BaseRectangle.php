<?php 

require_once 'BaseFigure.php';

abstract class Base_Rectangle extends Base_Figure{
    
    /**
     * Second variable wich contains coordinates of end point (x and y)
     * 
     * @var array
     */
    private $end_point;
    
    /**
     * The figure angle
     * 
     * @var int
     */
    private $angle = 0;
    
    /**
     * base figure turn
     */
    abstract public function turn();
}
?>