<?php 

abstract class vechicle{

    abstract function speed();
    abstract function fuel_effeciency();
}


class car extends vechicle{
    function speed(){

        return "The maximum speed of the car is 180km/hr";
    }
     function fuel_effeciency(){

        return " It give 12 km/l for mileage";
     }

}





class motorcycle extends vechicle{
    function speed(){

        return "The maximum speed of the car is 200km/hr";
    }
     function fuel_effeciency(){

        return " It give 35km/l for mileage";
     }

}


class truck extends vechicle{
    function speed(){

        return "The maximum speed of the car is 120km/hr";
    }
     function fuel_effeciency(){

        return " It give 10 km/l for mileage";
     }

}


 function vechicleDetails($speed){

    echo $speed->speed();
    echo "<br>";
    echo $speed->fuel_effeciency();
    echo "<br>";

}


$obj1= new car;
$obj2=new motorcycle;
$obj3= new truck;

vechicleDetails($obj1);
vechicleDetails($obj2);
vechicleDetails($obj3);


?>