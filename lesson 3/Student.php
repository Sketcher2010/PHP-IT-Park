<?php

class Student {
    private $name;
    private $age;
    private $birthDay;
    private $experience;
    private $countOfPrograms;

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
    public function setAge($age): void
    {
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getBirthDay()
    {
        return $this->birthDay;
    }

    /**
     * @param mixed $birthDay
     */
    public function setBirthDay($birthDay): void
    {
        $this->birthDay = $birthDay;
    }

    /**
     * @return mixed
     */
    public function getExperience()
    {
        return $this->experience;
    }

    /**
     * @param mixed $experience
     */
    public function setExperience($experience): void
    {
        $this->experience = $experience;
    }

    /**
     * @return mixed
     */
    public function getCountOfPrograms()
    {
        return $this->countOfPrograms;
    }

    /**
     * @param mixed $countOfPrograms
     */
    public function setCountOfPrograms($countOfPrograms): void
    {
        $this->countOfPrograms = $countOfPrograms;
    }

    public function increaseCountOfPrograms() {
        $this->countOfPrograms++;
    }
}