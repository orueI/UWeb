<?php


class AvengerQuote
{
    private $id;
    private $author;
    private $quote;
    private $photos;
    private $publishDate;
    private $comments;

    /**
     * @param false|string $publishDate
     */
    public function setPublishDate(bool|string $publishDate): void
    {
        $this->publishDate = $publishDate;
    }

    /**
     * @param mixed $comments
     */
    public function setComments(mixed $comments): void
    {
        $this->comments = $comments;
    }

    /**
     * AvengerQuote constructor.
     * @param $id
     * @param $author
     * @param $quote
     * @param $photo
     * @param $publishDate
     * @param $comments
     */
    public function __construct($id, $author, $quote, $photo, $comments = null)
    {
        $this->id = $id;
        $this->author = $author;
        $this->quote = $quote;
        $this->photos = $photo;
        $this->publishDate = date('Y-m-d');
        if ($comments != null)
            $this->comments = $comments;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @return mixed
     */
    public function getQuote()
    {
        return $this->quote;
    }

    /**
     * @return mixed
     */
    public function getPhotos()
    {

        return $this->photos;
    }

    public function printPhotos()
    {
        echo print_r($this->photos);
    }

    /**
     * @return mixed
     */
    public function getPublishDate()
    {
        return $this->publishDate;
    }

    /**
     * @return mixed
     */
    public function getComments()
    {
        return $this->comments;
    }


    public function toXml($fileName)
    {

    }

    public function fromXml($fileName)
    {

    }

    public function issetComments()
    {
        return isset($this->comments);
    }
}