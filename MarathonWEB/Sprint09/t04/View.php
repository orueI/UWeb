<?php


class View
{
    private $htmlFilePath;

    public function __construct($htmlFilePath)
    {
        $this->htmlFilePath = $htmlFilePath;
    }

    public function render()
    {
        flush();
        ob_clean();
        $file = file_get_contents($this->htmlFilePath);
        if ($file) {
            echo $file;
            return true;
        } else {
            return false;
        }
    }

    /**
     * @return mixed
     */
    public function getHtmlFilePath()
    {
        return $this->htmlFilePath;
    }

    /**
     * @param mixed $htmlFilePath
     */
    public function setHtmlFilePath($htmlFilePath): void
    {
        $this->htmlFilePath = $htmlFilePath;
    }
}