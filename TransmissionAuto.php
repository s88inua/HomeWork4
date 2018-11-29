<?php


trait TransmissionAuto
{
    public function move_forward($speed)
    {
        echo "Включена автоматическая коробка передач, едем вперед со скоростью " . $speed . " м/с<br>";
    }
}