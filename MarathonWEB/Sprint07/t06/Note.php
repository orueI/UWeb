<?php


class Note
{
    public $data;
    public $name;
    public $importance;
    public $text;

    /**
     * Note constructor.
     * @param $data
     * @param $name
     * @param $importance
     * @param $text
     */
    public function __construct($data, $name, $importance, $text)
    {
        $this->data = $data;
        $this->name = $name;
        $this->importance = $importance;
        $this->text = $text;
    }

    public function getPreview()
    {
        return $this->data . ' > ' . $this->name;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getImportance()
    {
        return $this->importance;
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }


}