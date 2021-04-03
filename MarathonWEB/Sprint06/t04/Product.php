<?php


class Product
{
    public $name;
    public $kcal_per_portion;

    /**
     * Product constructor.
     * @param $name
     * @param $kcal_per_portion
     */
    public function __construct($name, $kcal_per_portion)
    {
        $this->name = $name;
        $this->kcal_per_portion = $kcal_per_portion;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getKcal()
    {
        return $this->kcal_per_portion;
    }

    /**
     * @param mixed $kcal_per_portion
     */
    public function setKcal($kcal_per_portion): void
    {
        $this->kcal_per_portion = $kcal_per_portion;
    }


}