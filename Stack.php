<?php

class Stack{
    
    private $stack = array();
    
    public function push(array $elements_array){
        foreach ($elements_array as $element) {
            array_push($this->stack, $element);
        }
    }
    
    public function pop(){ 
        return array_pop($this->stack);
    }
    
    public function getStackSize(){
        return count($this->stack);
    }
    
    public function getLastElement(){
        return end($this->stack);
    }
    
    public function isStackEmpty(){
        return empty($this->stack);
    }
    
    public function clear(){
        $this->stack = array();
    }
}

$test = new Stack();
$test->push(array(4, 5));
var_dump($test->getElementByKey(0));
?>
