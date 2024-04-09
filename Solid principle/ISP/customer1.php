<?php 

include_once 'interface.php';

class vegCustomer implements veg{

    function vegmenu()
    {
        return "veg meals\n veg rice\n dosa\n idly\n ";
    }
    function  vegdiscount()
    {
       return "we offer 10% for veg customer";
    }
    function vegtodaySpecial()
    {
        return "tooday specail masal dosa";
    }

}



?>