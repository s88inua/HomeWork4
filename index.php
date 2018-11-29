<?php

require 'Car.php';
require 'TransmissionManual.php';
require 'TransmissionAuto.php';



class FORD extends Car
{
    use Transmission , TransmissionManual {
        TransmissionManual::move_forward insteadof Transmission;
    }

    public function __construct($temp = 20)
    {
        parent::__construct(30 , $temp);
        echo "Ford 30 лошадиных сил, ручная коробка, температура двигателя равна температуре улицы $temp<br>";
    }

    public function moving($speed , $meter = 1)
    {
        $this->engine_move($speed , $meter);
        $this->move_forward($this->get_speed());
    }
}


class SKODA extends Car
{
    use Transmission , TransmissionAuto {
        TransmissionAuto::move_forward insteadof Transmission;
    }

    public function __construct($temp = 20)
    {
        parent::__construct(100 , $temp);
        echo "SKODA 100 лошадиных сил, автоматическая коробка, температура двигателя равна температуре улицы $temp<br>";
    }

    public function moving($speed , $meter = 1)
    {
        $this->engine_move($speed , $meter);
    }
}
echo"<h1>Машина №1 </h1>";

$car1 = new FORD(80);
$car1->move(50 , 10);

echo"</br>";
echo"</br>";

echo"<h1>Машина №2 </h1>";

$car2 = new SKODA(20);
$car2->move(50 , 80 , false);