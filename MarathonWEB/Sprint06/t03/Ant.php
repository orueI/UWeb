<?php


class Ant
{
    public $name;
    public $role_in_army;
    public $date_of_entry;
    public $number_of_fights;
    public $number_of_legs;

    /**
     * Ant constructor.
     * @param $name
     * @param $role_in_army
     * @param $date_of_entry
     * @param $number_of_fights
     * @param $number_of_legs
     */
    public function __construct($name, $role_in_army, $date_of_entry, $number_of_fights, $number_of_legs)
    {
        $this->name = $name;
        $this->role_in_army = $role_in_army;
        $this->date_of_entry = $date_of_entry;
        $this->number_of_fights = $number_of_fights;
        $this->number_of_legs = $number_of_legs;
    }

//    public function __toString(): string
//    {
//        return "" .
//            "name: " . $this->name . "\n" .
//            "role_in_army: " . $this->role_in_army . "\n" .
//            "date_of_entry: " . $this->date_of_entry . "\n" .
//            "number_of_fights: " . $this->number_of_fights . "\n" .
//            "number_of_legs: " . $this->number_of_legs;
//    }

    public function __wakeup():void
    {
        echo "" .
            "name: " . $this->name . "\n" .
            "role_in_army: " . $this->role_in_army . "\n" .
            "date_of_entry: " . $this->date_of_entry . "\n" .
            "number_of_fights: " . $this->number_of_fights . "\n" .
            "number_of_legs: " . $this->number_of_legs;
        exit(0);
    }

//    public function __serialize(): array
//    {
//        return
//    }
//O:3:"Ant":5:
//{
//s:4:"name";
//s:7:"Anthony";
//s:12:"role_in_army";
//s:8:"sergeant";
//s:13:"date_of_entry";
//s:10:"2015-07-16";
//s:16:"number_of_fights";
//i:1;
//s:14:"number_of_legs";
//i:4;
//}
}
