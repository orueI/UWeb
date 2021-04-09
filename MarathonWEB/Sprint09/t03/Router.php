<?php

class Router
{
    public array $params;


    public function __construct()
    {
        $this->setParams();
    }

    public function __toString(): string
    {
        if (count($this->params)>0) {
            $s = '{';
            foreach ($this->params as $key => $value) {
                $s .= "'$key': '$value',";

            }
            $s .= substr($s,0,-2);
            $s .= '}';

        }
        return $s;
    }

    function print(){
        echo $this;
    }


    public function setParams(): void
    {
        $this->params = $_GET;
    }


}