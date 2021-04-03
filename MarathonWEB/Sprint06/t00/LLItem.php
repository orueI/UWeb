<?php


class LLItem
{

    public $value;
    public $next;

    /**
     * LLItem constructor.
     * @param $value
     */
    public function __construct($value)
    {
        $this->value = $value;
    }

    public function __toString(): string
    {
        return $this->value;
    }


}