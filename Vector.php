<?php 
class Vactor{
    
    private $x = 0;
    private $y = 0;
    
    public function __construct($x = 0, $y = 0){
        $this->setX($x);
        $this->setY($y);
    }
    
    public function getLenght(){
        return sqrt(pow($this->x) + pow($this->y));
    }
    
    public function setX($x){
        $this->x = (int) $x;
    }
    
    public function setY($y){
        $this->y = (int) $y;
    }
    
    public function getX(){
        return $this->x;
    }
    
    public function getY(){
        return $this->y;
    }
    
    public function __toString() {
        return "{{$this->getX()},{$this->getY()}}";
    }

    public function __destruct(){}
}

class VectorOperation{
    static public function add(
        Vector $vector_one, 
        Vector $vector_two
    ){  
        $new_x = $vector_one->getX() + $vector_two->getX();
        $new_y = $vector_one->getY() + $vector_two->getY();
        return new Vector( $new_x, $new_y );
    }
    
    static public function subtract(
        Vector $vector_one, 
        Vector $vector_two
    ){
        $new_x = $vector_one->getX() - $vector_two->getX();
        $new_y = $vector_one->getY() - $vector_two->getY();
        return new Vector( $new_x, $new_y );
    }
    
    static public function cosinus(
        Vector $vector_one, 
        Vector $vector_two
    ){
        return self::scalarMultiply($vector_one, $vector_two) / 
            ($vector_one->getLenght() + $vector_two->getLenght());
    }

    static public function scalarMultiply(
        Vector $vector_one, 
        Vector $vector_two
    ){
        return $vector_one->getX() * $vector_two->getX() + $vector_one->getY() * $vector_two->getY();
    }
    
}
?>