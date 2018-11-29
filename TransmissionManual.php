<?php


trait TransmissionManual
{
    private $peredacha;

    public function move_forward($speed)
    {
        if ($speed >= 20 && $this->peredacha != 2) {
            $this->peredacha = 2;
            echo "Включена 2 передача, едем вперед со скоростью " . $speed . " м/с<br>";
        }
        if ($speed >= 0 && $speed < 20 && $this->peredacha != 1) {
            $this->peredacha = 1;
            echo "Включена 1 передача, едем вперед со скоростью " . $speed . " м/с<br>";
        }
    }
}