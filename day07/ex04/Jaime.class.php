<?php
class Jaime extends Lannister {
    public function sleepWith($value){
        $string = get_class($value);
        if ($string == 'Sansa')
            print("Let's do this." . PHP_EOL);
        else if ($string == 'Cersei')
            print("With pleasure, but only in a tower in Winterfell, then." . PHP_EOL);
        else    
            print("Not even if I'm drunk !" . PHP_EOL);
    }
}