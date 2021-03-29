<?php


class Tower extends Building
{
    private $elevator;
    private $arc_capacity;
    private $height;

    /**
     * Tower constructor.
     * @param $floors
     * @param $material
     * @param $address
     */

    /**
     * @return mixed
     */
    public function getElevator()
    {
        return $this->elevator;
    }

    /**
     * @param mixed $elevator
     */
    public function setElevator($elevator): void
    {
        if (is_bool($elevator))
            $this->elevator = $elevator;
    }

    /**
     * @return mixed
     */
    public function getArcCapacity()
    {
        return $this->arc_capacity;
    }

    /**
     * @param mixed $arc_capacity
     */
    public function setArcCapacity($arc_capacity): void
    {
        if (is_int($arc_capacity))
            $this->arc_capacity = $arc_capacity;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param mixed $height
     */
    public function setHeight($height): void
    {
        $this->height = floatval($height);
    }

    public function getFloorHeight(): float
    {
        return floatval($this->height) / floatval($this->floors);
    }

    public function toString(): string
    {
        return "Floors :" . $this->floors .
            "\nMaterial : " . $this->material .
            "\nAddress : " . $this->address .
            "\nElevator :" . $this->replaceBoolean($this->elevator) .
            "\nArc reactor capacity : " . $this->arc_capacity .
            "\nHeight : 1130" . $this->height .
            "\nFloor height : " . $this->getFloorHeight();
    }

    private function replaceBoolean($f): string
    {
        if ($f) return "+";
        else return "-";
    }
}

//Floors :93
//$Material : Different
//$Address : Manhattan, NY
//$Elevator: +
//$Arcreactor capacity : 0
//$Height : 1130
//$Floor height : 12.150537634409$