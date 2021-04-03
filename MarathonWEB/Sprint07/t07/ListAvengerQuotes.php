<?php


class ListAvengerQuotes
{
    private $arrayAvengerQuote = [];

    /**
     * ListAvengerQuotes constructor.
     * @param array $arrayAvengerQuote
     */
    public function __construct(array $arrayAvengerQuote)
    {
        $this->arrayAvengerQuote = $arrayAvengerQuote;
    }

    public function toXml($fileName)
    {
        $xml = new SimpleXMLElement('<document/>');
        foreach ($this->arrayAvengerQuote as $avengerQuote) {
            $this->avengerQuoteToXml($xml, $avengerQuote);
        }
        $xml->asXML($fileName);
    }

    public function fromXml($fileName)
    {
        $arrayAvengerQuote = array();

        $xml = simplexml_load_file($fileName);
        foreach ($xml->children() as $XMLElement) {
            $this->arrayAvengerQuote[count($this->arrayAvengerQuote)] = $this->formXmlAvengerQuote($XMLElement, $arrayAvengerQuote);
        }
        return $this;
    }

    private function avengerQuoteToXml($xml, $avengerQuoteData)
    {
//        $avengerQuoteData->printPhotos();
        $avengerQuote = $xml->addChild('AvengerQuote');
        $avengerQuote->addChild('id', $avengerQuoteData->getId());
        $avengerQuote->addChild('author', $avengerQuoteData->getAuthor());
        $avengerQuote->addChild('quote', $avengerQuoteData->getQuote());
        $photos = $avengerQuote->addChild('photos');

        foreach ($avengerQuoteData->getPhotos() as $photo) {
            $photos->addChild('photo', $photo);
        }
        $avengerQuote->addChild('publishDate', $avengerQuoteData->getPublishDate());
        if ($avengerQuoteData->issetComments()) {
            $this->commentsToXml($avengerQuote, $avengerQuoteData->getComments());
        }
//        $avengerQuote->addChild('comments', $avengerQuote->getComments());
    }

    private function commentsToXml($xml, $comments)
    {
        $xmlComments = $xml->addChild('comments');
        foreach ($comments as $comment) {
            $xmlComments->addChild('date', $comment->getData());
            $xmlComments->addChild('comments', $comment->getComments());
        }
    }

    /**
     * @param SimpleXMLElement|null $XMLElement
     * @param array $arrayAvengerQuote
     */
    private function formXmlAvengerQuote($XMLElement, $arrayAvengerQuote)
    {
        $photos = array();
        $comments = array();
//        for ($i = 0; $i < count($XMLElement->photos); $i++) {
//            $photos[count($photos)] = $XMLElement->photos->photo;
//        }
        foreach ((array)$XMLElement->photos as $photo) {
            $photos = $photo;
        }
        foreach ((array)$XMLElement->comments as $comment) {
            $comments = $comment;
        }
//        for ($i = 0; $i < count($XMLElement->comments); $i++) {
//            $comments[count($comments)] = $XMLElement->comments->comment;
//        }
        $avengerQuote = new AvengerQuote(
            $XMLElement->id,
            $XMLElement->author,
            $XMLElement->quote,
            $photos);
        $avengerQuote->setComments($comments);
        $avengerQuote->setPublishDate($XMLElement->publishDate);
        return $avengerQuote;
    }

}