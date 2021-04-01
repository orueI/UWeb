<?php


class LList //implements IteratorAggregate
{
    public $head = NULL;
    private $last = null;
    private $size = 0;

    public function getLast(): LLItem
    {
        return $this->last;
    }

    public function getFirst(): LLItem
    {
        return $this->head;
    }

    public function add($value)
    {
        $this->size++;
        $newItem = new LLItem($value);
        if (!isset($this->head)) {
            $this->last = $newItem;
            $this->head = $this->last;
        } else {
            $tmp = $this->head;
            while (isset($tmp)) {
                if (isset($tmp->next))
                    $tmp = $tmp->next;
                else {
                    $tmp->next = $newItem;
                    break;
                }
            }
            $this->last->next = $newItem;
            $this->last = $newItem;
        }
    }

    public function addArr(array $array)
    {
        foreach ($array as $value) {
            $this->add($value);
        }
    }

    public function remove($value): bool
    {
//        echo "remove = " . $value . "\n";
        $tmp = $this->head;
        if ($tmp->value == $value) {
            if (isset($tmp->next))
                $this->head = $tmp->next;
            else $this->head = null;
        }

        while (isset($tmp->next)) {
            if ($tmp->next->value == $value) {
//                echo "remove = " . $tmp->next->value . "\n";
//                echo "remove 1 = " . $tmp->value . "\n";
                if (isset($tmp->next->next)) $tmp->next = $tmp->next->next;
                else $tmp->next = NULL;
                return true;
            }
            $tmp = $tmp->next;
        }
        return false;
    }

    public function removeAll($value)
    {
        $f = true;
        while ($f) {
            $f = $this->remove($value);
        }
    }

    public function contains($value)
    {
        $tmp = $this->head;
        while (isset($tmp)) {
            if ($tmp->value == $value) {
                return 1;
            }
            if (isset($tmp->next))
                $tmp = $tmp->next;
            else break;
        }
        return 0;
    }

    public function clear()
    {
        $this->head = null;
    }

    public function count(): int
    {
        return $this->size;
    }

    public function __toString(): string
    {
        return $this->toString();
    }

    public function toString(): string
    {
//        echo "1\n";
        $s = "";
        $tmp = $this->head;
//        echo "2\n";
        while (isset($tmp)) {
//            echo "while = " . $tmp->value . "\n";
            if (strlen($s) != 0)
                $s = $s . ", ";
            $s = $s . $tmp->value;
            if (isset($tmp->next))
                $tmp = $tmp->next;
            else break;
        }

        return $s;
    }

    public function getIterator()
    {
        $this->current = $this->head;
        return new class($this) implements Iterator {
            private LList $list;


            private $current = NULL;

            /**
             *  constructor.
             * @param LList $list
             */
            public function __construct(LList $list)
            {
                $this->list = $list;
                $this->current = $this->list->head;
            }


            public function current()
            {
                return $this->current->value;
            }

            public function next()
            {
                $this->current = $this->current->next;
            }

            public function key()
            {
                return "";
            }

            public function valid()
            {
                if (isset($this->current)) {
                    return true;
                } else return false;
            }

            public function rewind()
            {
                $this->current = $this->list->head;
            }
        };
    }
//    public function getIterator() {
//        $arr = array();
//        $temp = new LLItem();
//        $temp = $this->head;
//        if($temp != null) {
//            while($temp != null) {
//                $arr[] = $temp->data;
//                $temp = $temp->next;
//            }
//            return $arr;
//        }else{
//            return 0;
//        }
//    }
}