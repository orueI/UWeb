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




//val map = mapOf()
//Pair<Int,Double>(4   ,0.06),
//Pair<Int,Double>(8   ,0.06),
//Pair<Int,Double>(16   ,0.08),
//Pair<Int,Double>(16   ,0.12),
//Pair<Int,Double>(32   ,0.12),
//Pair<Int,Double>(64   ,0.16),
//Pair<Int,Double>(20   ,0.09),
//Pair<Int,Double>(40   ,0.09),
//Pair<Int,Double>(80   ,0.12),
//Pair<Int,Double>(28   ,0.03),
//Pair<Int,Double>(56   ,0.03),
//Pair<Int,Double>(112   ,0.04)
