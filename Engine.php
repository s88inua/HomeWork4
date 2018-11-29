<?php

class Engine
{
    public $power;
    public $temp;
    public $speed;
    public $everTen;
    public $is_on;
    public $is_speed;

    public function __construct($power = 1 , $temp = 20)
    {
        $this->power = $power;
        $this->temp = $temp;
        $this->speed = 0;
        $this->everTen = 0;
        $this->is_on = false;
        $this->is_speed = false;
    }

    public function get_speed()
    {
        return $this->speed;
    }

    public function engine_on()
    {
        if (!$this->is_on) {
            $this->is_on = true;
            echo "Двигатель включен</br>";
        } else {
            echo "Двигатель УЖЕ включен!</br>";
        }
        echo "Скорость " . $this->speed . "м/с</br>";
    }

    public function engine_off()
    {
        $this->speed = 0;
        echo "Скорость " . $this->speed . "м/с</br>";
        if ($this->is_on) {
            $this->is_on = false;
            echo "<b>Двигатель ВЫКЛЮЧЕН </b> </br>";
        } else {
            echo "<b>Двигатель УЖЕ выключен!</b></br>";
        }

    }

    public function engine_move($speed , $meter)
    {
        if (!$this->is_speed) {
            if ($speed <= $this->power * 2) {
                $this->speed = $speed;
            } else {
                $this->speed = $this->power * 2;
            }
            echo "<b>Машина разогналась " . $this->speed . "м/с</b></br>";
            $this->is_speed = true;
        }
        $this->everTen += $meter;
        if ($this->everTen >= 10) {
            $this->temp += 5;
            $this->everTen -= 10;
            echo "<b>Температура теперь " . $this->temp . "</b></br>";
            $this->engine_cold();
        }
    }

    private function engine_cold()
    {
        if ($this->temp >= 90) {
            echo "Температура двигателя " . $this->temp . " > <b>90, включаем вентилятор</b></br>";
            $this->temp -= 10;
            echo "Температура двигателя уравнялась " . $this->temp . "<b> Вентилятор ВЫКЛ.</b></br>";
        }
    }
}