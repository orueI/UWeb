<?php


class File
{
    private $path;

    /**
     * File constructor.
     * @param $path
     * @param $name
     */
    public function __construct($path)
    {
        $this->path = $path;
    }

    /**
     * @return mixed
     */
    public function getPath()
    {
        return $this->path;
    }

    public function createFile()
    {
        $file = fopen("testfile.txt", "w");
        fclose($file);
    }

    public function read()
    {
        return file($this->path);
    }

    public function writeToFile($text)
    {
        file_put_contents($this->path, $text, FILE_APPEND);
    }

    public function remove()
    {
//        echo 'unlink' . $this->path;
        unlink($this->path);
    }
}