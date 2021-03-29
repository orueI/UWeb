<?php


trait Update
{

    private $arrayInfo = array("2 x Repulsors", "134 7.62mm Minigun", " x FN F2000 Tacticals", "Sidewinder \"Ex-Wife\" Self-Guided Missile", "24 Shotgun", "ilkor MGL 40mm Grenade Launcher");

    function makeBoom()
    {
        return $this->arrayInfo;
    }
}