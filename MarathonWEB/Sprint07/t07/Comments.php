<?php


class Comments
{
    private $date;
    private $comments;

    /**
     * Comments constructor.
     * @param $data
     * @param $comments
     */
    public function __construct($data, $comments)
    {
        $this->date = $data;
        $this->comments = $comments;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @return mixed
     */
    public function getComments()
    {
        return $this->comments;
    }

}