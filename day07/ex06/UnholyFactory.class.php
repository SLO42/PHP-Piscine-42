<?php
class UnholyFactory{
    private $army  = array();

    public function absorb($value){
        if (array_key_exists($value, $this->army) == FALSE)
        {
            $this->army[] = $value();
        }
    }
}