<?php 

include_once 'paymentclass.php';

class phonepay implements payment{

    private $object;

    public function __construct($object){

        $this->object=$object;
    }

function paymentprocess($paymentType)
{
    
    if(strtolower($paymentType)=="phonepay"){

        return "you use phone pay for payment";
}else{
    
    return  $this->object->paymentprocess($paymentType);

}


}
}

?>