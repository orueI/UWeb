<?php


class StrFrequency
{
    private $letter = "";
    private $currentStr = "";
    private $currentWords = array();

    function __construct($str)
    {
        $this->letter = $str;
    }

    public function letterFrequencies(): array
    {
        $this->currentStr = $this->letter;
        $currentStr = strtoupper($this->currentStr);
        $this->currentStr = preg_replace('/[^a-zA-Z]/', "", $currentStr);
        echo $this->currentStr;


        $result = $this->initMap();
        for ($i = 0; $i < strlen($this->currentStr); $i++) {
            $count = $result[$this->currentStr[$i]];
            if ($count == null)
                $count = 1;
            else $count++;
            $result[$this->currentStr[$i]] = $count;
        }
        ksort($result, SORT_STRING);
        return $result;
    }

    function wordFrequencies(): array
    {
        $this->currentStr = $this->letter;
        $this->currentStr = strtoupper($this->currentStr);
        $this->currentStr = preg_replace('/[^a-zA-Z]/', " ", $this->currentStr);
        $this->currentWords = preg_split('/[^A-Z]+/', $this->currentStr);

        $result = $this->initMapByWork();
        foreach ($this->currentWords as $word) {
            $count = $result[$word];
            if ($count == null)
                $count = 1;
            else $count++;
            $result[$word] = $count;
        }
        ksort($result, SORT_STRING);
        unset($result[""]);
        return $result;
    }

//    function reverseString(): string
//    {
//        $str = $this->letter;
//        $newStr = "";
//        $size = strlen($str);
//        for ($i = 0; $i < $size; $i++) {
//            try {
//                $indexReplace = random_int(0, strlen($str));
//            } catch (Exception $e) {
//                return $newStr;
//            }
//            $newStr = $newStr . $str[$indexReplace];
//            $str = substr_replace($str, "", $indexReplace, 1);
//        }
//        return $newStr;
//    }

    function reverseString(): string
    {
        $tmp = $this->letter;
        $str =
            preg_replace('/[^a-zA-Z\s]/', "", $tmp);
        $newStr = "";
        $size = strlen($str);
        for ($i = 0; $i < $size; $i++) {
            $newStr = $newStr . $str[$size - 1 - $i];
        }
        return $newStr;
    }

    private function initMap(): array
    {
        $result = array();
        for ($i = 0; $i < strlen($this->currentStr); $i++) {
            $result[$this->currentStr[$i]] = 0;
        }
        return $result;
    }

    private function initMapByWork(): array
    {
        $result = array();
        foreach ($this->currentWords as $word) {
            $result[$word] = 0;
        }
        return $result;
    }

}

?>