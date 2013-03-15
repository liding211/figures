<?php 

/**
 * Построить описание класса, содержащего информацию о почтовом адресе организации.
 *  
 * Предусмотреть возможность раздельного изменения составных частей адреса, 
 * создания и уничтожения объектов этого класса.
 */
class CompanyAddress{
    
    /**
     * @var array (country, region, settlement, street, code, recipient)
     * 
     */
    private $address = array(
        'country' => '', 
        'region' => '', 
        'settlement' => '', 
        'street' => '', 
        'code' => '', 
        'recipient' => ''
    );
    
    public function __construct($address = array()){
        foreach($address as $address_part => $part_value){
            if(array_key_exists($address_part, $this->address)){
                $this->setAddressPart($address_part, $part_value);
            }
        }
    }
    
    public function setAddressPart($address_part, $part_value){
        if(array_key_exists($address_part, $this->address)){
            $this->address[$address_part] = $this->addressValidate($part_value);
        }
    }
    
    public function getAddress($address_part = ''){
        if(empty($address_part)){
            return $this->address;
        }
        if(!array_key_exists($address_part, $this->address)){
            return false;
        }
        return $this->address[$address_part];
    }
    
    private function addressValidate($part_value){
        return filter_var(
            $part_value, 
            FILTER_VALIDATE_REGEXP, 
            array('options' => array('regexp' => '/[\w ,.\-\\/]+/'))
        );
    }
    
    public function __toString() {}
    
    public function __destruct(){}
}
?>