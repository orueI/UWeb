<?php


class EatException extends Exception
{
    public $message = "No more junk food, dumpling";

    /**
     * EatException constructor.
     */
    public function __construct()
    {
        parent::__construct($this->message);
    }

}