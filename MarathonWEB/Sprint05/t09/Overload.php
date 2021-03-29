<?php

class Overload
{

    private $mapField = array();

    public function __set($name, $value)
    {
        $this->mapField[$name] = $value;
    }

    public function __get(string $name)
    {
//        echo $name;
        if (!array_key_exists($name, $this->mapField)) {
//            echo $name . "is null";
            $this->mapField[$name] = "NO DATA";
        }
//        return "$this->mapField[$name]";
        return $this->mapField[$name];
    }

    public function __isset($name): bool
    {
        $this->__set($name, "NOT SET");
//        $mapField[$name] = "NOT SET";
//        echo "\n$mapField[$name] SET__isset\n";
        return true;
    }

    public function __unset(string $name)
    {
//        echo "$name SET __unset\n";
        $this->__set($name, NULL);
//        $mapField[$name] = NULL;
//        if ($mapField[$name] == NULL)
//            echo "13";
        return false;
    }


}