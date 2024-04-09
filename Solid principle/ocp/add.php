<?php 

include_once 'paymentclass.php';

class phonepay implements payment{

function paymentprocess($paymentType)
{
    
    if(strtolower($paymentType)=="phonepay"){

        return "you use phone pay for payment";
}else{
    
    return "we cannot accept this $paymentType payment type";

}


}
}

?>