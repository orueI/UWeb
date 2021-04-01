<?php


class FilesList
{
    private $path;

    /**
     * FilesList constructor.
     * @param $path
     */
    public function __construct($path)
    {
        $this->path = $path;
    }

    public function getArrayFiles()
    {
        return scandir($this->path);
//        $arrayResult = array();
//        foreach ($arrayPath as $p) {
//            if (is_file($p)) $arrayResult[count($arrayResult)] = $p;
//        }
//        return $arrayResult;
    }

}