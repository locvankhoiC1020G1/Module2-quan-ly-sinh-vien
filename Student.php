<?php


class Student
{
    private $name;
    private $age;
    private $math;
    private $physic;
    private $chemistry;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

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
    public function setName($name)
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
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getMath()
    {
        return $this->math;
    }

    /**
     * @param mixed $math
     */
    public function setMath($math)
    {
        $this->math = $math;
    }

    /**
     * @return mixed
     */
    public function getPhysic()
    {
        return $this->physic;
    }

    /**
     * @param mixed $physic
     */
    public function setPhysic($physic)
    {
        $this->physic = $physic;
    }

    /**
     * @return mixed
     */
    public function getChemistry()
    {
        return $this->chemistry;
    }

    /**
     * @param mixed $chemistry
     */
    public function setChemistry($chemistry)
    {
        $this->chemistry = $chemistry;
    }

    public function addScore($math,$physic,$chemistry)
    {
        $this->setMath($math);
        $this->setPhysic($physic);
        $this->setChemistry($chemistry);
}
}