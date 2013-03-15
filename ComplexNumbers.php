<?php 
class ComplexNumber{
    
    private $complex_real = 0;
    private $complex_imag = 0;
    
    public function __construct($real_part, $imag_part){
        $this->complex_real = doubleval($real_part);
        $this->complex_imag = doubleval($imag_part);
    }
    
    public function __toString(){
        $str = $this->complex_real;
        $str .= ($this->complex_imag < 0) ? ' - ' : ' + ';
        $str .= $this->complex_imag . 'i';
        return $str;
    }
    
    public function getReal(){
        return $this->complex_real;
    }
    
    public function getImag(){
        return $this->complex_imag;
    }

    public function __destruct(){}
}

class ComplexNumberOperation{
    static public function addition(
        ComplexNumber $complex_number_one, 
        ComplexNumber $complex_number_two
    ){
        $real = $complex_number_one->getReal() + $complex_number_two->getReal();
        $imag = $complex_number_one->getImag() + $complex_number_two->getImag();
        return new ComplexNumber( $real, $imag );
    }
    
    static public function mult(
        ComplexNumber $complex_number_one, 
        ComplexNumber $complex_number_two
    ){
        $real = ($complex_number_one->getReal() * $complex_number_two->getReal()) - 
            ($complex_number_one->getImag() * $complex_number_two->getImag());
        $imag = ($complex_number_two->getReal() * $complex_number_one->getImag()) + 
            ($complex_number_two->getImag() * $complex_number_one->getReal());
        return new ComplexNumber( $real, $imag );
    }
    
    static public function subtract(
        ComplexNumber $complex_number_one, 
        ComplexNumber $complex_number_two
    ){
        $real = ($complex_number_one->getReal() - $complex_number_two->getReal());
        $imag = ($complex_number_one->getImag() - $complex_number_two->getImag());
        return new ComplexNumber( $real, $imag );
    }
}

$a = new ComplexNumber(1, -1);
$b = new ComplexNumber(3, 6);
$c = ComplexNumberOperation::mult($a, $b);
echo $a . ' * ' . $b . ' = ' . $c;
?>