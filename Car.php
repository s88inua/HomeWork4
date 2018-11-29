<?php
require 'Engine.php';
require 'Transmission.php';

abstract class Car extends Engine
{
    use Transmission;

    public function move($meters , $speed , $move_forward = true)
    {
        $this->engine_on();
        $this->transmissionOn($move_forward);
        for ($i = 1; $i <= $meters; $i++) {
            $this->moving($speed);
            echo "Проехали $i метров<br>";
        }
        $this->transmissionOff();
        $this->engine_off();

    }

    public function transmissionOn($move_forward , $speed = 0)
    {
        if ($move_forward) {
            $this->move_forward($speed);
        } else {
            $this->move_back($speed);
        }
    }

    abstract public function moving($speed , $meter = 1);

    public function transmissionOff()
    {
        $this->transmission_off();
    }
}