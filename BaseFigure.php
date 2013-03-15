<?php 

include('IFigure.php');

abstract class Base_Figure implements IFigure{
    
    /**
     * In this variable locetad coordinates of base point (x and y)
     * 
     * @var array
     */
    private $base_point;
}
?>