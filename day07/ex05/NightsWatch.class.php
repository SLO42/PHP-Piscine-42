<?php
class NightsWatch{
    private $lists = array();

    public function recruit($value) {
        if (method_exists($value, "fight")) {
            $this->lists[] = $value;
        }
    }
    public function fight(){
        foreach ($this->lists as $value){
            $value->fight();
        }
    }
}