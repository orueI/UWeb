<?php


class Avenger
{
    public $name;
    public $alias;
    public $gender;
    public $age;
    public $pover = array();

    /**
     * Avenger constructor.
     * @param $name
     * @param $alias
     * @param $gender
     * @param $age
     * @param array $pover
     * @param $hp
     */
    public function __construct($name, $alias, $gender, $age, array $pover)
    {
        $this->name = $name;
        $this->alias = $alias;
        $this->gender = $gender;
        $this->age = $age;
        $this->pover = $pover;
    }


    public function __invoke()
    {
        echo $this->alias . "\n " . implode("\n", $this->pover) . "\n" . "\n";
    }

    public function __toString(): string
    {
        return "name: " . $this->name . "\ngender: " . $this->gender . "\nage:" . $this->age . "\n";
    }


}