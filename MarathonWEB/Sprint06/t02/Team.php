<?php


class Team
{
    private $id;
    private $avengers;

    /**
     * Team constructor.
     * @param $id
     * @param $avengers
     */
    public function __construct($id, $avengers)
    {
        $this->id = $id;
        $this->avengers = $avengers;
    }

    public function battle($damag)
    {
        foreach ($this->avengers as $value) {
//            echo $value->name . " " . $value->hp . "  ";
            $value->hp = $value->hp - $damag;
//            echo $value->name . " " . $value->hp . "\n";;
        }
    }

    public function calculate_losses($cloned_team)
    {
        $thisTeam = 0;
        foreach ($this->avengers as $item) {
            $thisTeam = $thisTeam + $item->hp;
//            echo $item->hp;

        }
        foreach ($cloned_team as $item1) {
            if (isset($item1->hp))
                $thisTeam = $thisTeam - $item1->hp;
            echo $item1->hp;
        }
        echo $thisTeam;
        if ($thisTeam > 0) {
            echo "We haven't lost anyone in this battle!\n";
        } else {
            echo "In this battle we lost2 Avenger(s).\n";
        }
    }
//    public function calculate_losses($clonedTeam) {
//        $count = 0;
//        foreach ($this->avengers as $v) {
////            echo $v->hp;
//            if ($v->hp < 1) {
//                $count++;
//            }
//        }
//
//        if ($count == 0) {
//            echo "We haven't lost anyone in this battle";
//        } else {
//            echo "In this battle we lost $count Avenger(s)";
//        }
//    }

//    public function calculate_losses($cloned_team)
//    {
//        $tmp = count($cloned_team->avengers) - count($this->avengers);
//        if($tmp >= 0)
//            echo "We haven't lost anyonein this battle!";
//        else echo "In this battle we lost $tmp Avenger(s)";
//    }

//    public function __clone()
//    {
//        return new Team($this->id, $this->avengers);
//    }


}