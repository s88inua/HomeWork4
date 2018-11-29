<?php
trait Transmission
{
    public function transmission_off()
    {
        echo "Передача выключена<br>";
    }

    public function move_back($speed)
    {
        echo "Включена задняя передача, едем назад со скоростью " . $speed . "<br>";
    }

  /*  public function move_forward($speed)
    {
    }*/
}