<?php 

include_once 'interface.php';

class nonvegCustomer implements nonveg{

    function menu()
    {
        return "chicken briyani\n mutton briyani\n crab gravy\n";
    }
    function  discount()
    {
        return "we discount 20% for non veg customer";
    }
    function todaySpecial()
    {
        return 'today special is "chicken tandoori" ';
    }

}



?>