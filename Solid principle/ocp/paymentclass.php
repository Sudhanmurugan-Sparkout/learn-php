<?php 

interface payment{

    function paymentprocess($paymentType);
}

class buyProduct implements payment{

      
          function paymentprocess($paymentType)
          {
            if(strtolower($paymentType)=="creditcard"){

                return "you use credit card for payment";
            }elseif(strtolower($paymentType)=="debittcard"){
                  
                return "you use debit card for your payment";

            }elseif(strtolower($paymentType)=="gpay"){
                 
                return "you use gpay for your payment";

            }else{

                return "we cannot accept this $paymentType payment type";
            }
          }


    }

    

    


?>