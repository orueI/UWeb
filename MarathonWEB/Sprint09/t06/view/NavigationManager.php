<?php


class NavigationManager
{
    private $htmlFilePath;
    private array $arrFragment;

    public function __construct($htmlFilePath)
    {
        $this->htmlFilePath = $htmlFilePath;
    }

    public function renderBy($key){
        $this->changeScreen($key);
        $this->render();
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

    public function putScreen($key, $value): void
    {
        $this->arrFragment[$key] = $value;
    }

    public function changeScreen($key): void
    {
        $this->htmlFilePath = $this->arrFragment[$key];
    }

    /**
     * @param mixed $htmlFilePath
     */
    public function setHtmlFilePath($htmlFilePath): void
    {
        $this->htmlFilePath = $htmlFilePath;
    }
}