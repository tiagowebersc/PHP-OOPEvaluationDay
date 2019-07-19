<?php
class Cat
{
    private $name;
    private $age;
    private $color;
    private $sex;
    private $breed;

    public function __construct($name, $age, $color, $sex, $breed)
    {
        $this->setName($name);
        $this->setAge($age);
        $this->setColor($color);
        $this->setSex($sex);
        $this->setBreed($breed);
    }

    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        if (strlen($name) < 3 || strlen($name) > 20) {
            echo "Invalid name!<br>";
        } else {
            $this->name = $name;
        }
    }
    public function getAge()
    {
        return $this->age;
    }
    public function setAge($age)
    {
        if (is_int($age)) {
            return $this->age;
        } else {
            echo "Invalid age!<br>";
        }
    }
    public function getColor()
    {
        return $this->color;
    }
    public function setColor($color)
    {
        if (strlen($color) < 3 || strlen($color) > 10) {
            echo "Invalid color!<br>";
        } else {
            $this->color = $color;
        }
    }
    public function getSex()
    {
        return $this->sex;
    }
    public function setSex($sex)
    {
        if (in_array($sex, ['male', 'female'])) {
            $this->sex = $sex;
        } else {
            echo "Invalid sex!<br>";
        }
    }
    public function getBreed()
    {
        return $this->breed;
    }
    public function setBreed($breed)
    {
        if (strlen($breed) < 3 || strlen($breed) > 20) {
            echo "Invalid breed!<br>";
        } else {
            $this->breed = $breed;
        }
    }
    public function getInfos()
    {
        echo "<strong>Name:</strong>" . $this->getName() . "<br><strong>Age:</strong>" . $this->getAge() . "<br><strong>Color:</strong>" . $this->getColor() . "<br><strong>Sex:</strong>" . $this->getSex() . "<br><strong>Breed:</strong>" .    $this->getBreed() . "<br><hr>";
    }
}
