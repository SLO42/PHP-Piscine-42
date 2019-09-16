<?php
class Lannister {
    public function sleepWith($value){
        $string = get_parent_class($value);
        if ($string == 'Lannister')
            print("Not even if I'm drunk !" . PHP_EOL);
        else
            print("Let's do this." . PHP_EOL);
    }
}
