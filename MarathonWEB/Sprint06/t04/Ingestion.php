<?php


class Ingestion
{
    public $id;
    public $meal_type;
    public $day_of_diet;
    public array $products = array();

    /**
     * Ingestion constructor.
     * @param $meal_type
     * @param $day_of_diet
     */
    public function __construct($meal_type, $day_of_diet)
    {
        $this->meal_type = $meal_type;
        $this->day_of_diet = $day_of_diet;
    }

    public function get_from_fridge($product)
    {
        if ($this->products[$product]->getKcal() > 200)
            throw new EatException();
        else return;
    }

    public function setProduct(Product $product)
    {
        $this->products[$product->name] = $product;
    }

    public function getProducts(): array
    {
        return $this->products;
    }

}