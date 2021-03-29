<?php


class HardWorker
{
    private $name;
    private $age;
    private $salary;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age): bool
    {
        if ($age > 0 && $age <= 100) {
            $this->age = $age;
            return true;
        } else return false;
    }

    /**
     * @return mixed
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * @param mixed $salary
     */
    public function setSalary($salary): bool
    {
        if ($salary > 100 && $salary <= 10000) {
            $this->salary = $salary;
            return true;
        } else return false;

    }

    function toArray(): array
    {
        return array("name" => $this->name, "age" => $this->age, "salary" => $this->salary);
    }
}