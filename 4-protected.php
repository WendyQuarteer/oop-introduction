<?php

declare(strict_types=1);

/* EXERCISE 4

Copy the code of exercise 3 to here and delete everything related to cola.

TODO: Make all properties protected.
TODO: Make all the other prints work without error without changing the beverage class.

USE TYPEHINTING EVERYWHERE!
*/

class Beverage {
    protected string $color;        // make properties protected = can be accessed within the class and by classes derived from that class.
    protected float $price;
    protected string $temperature;

    /**
     * @param string $color
     * @param float|int $price
     */
    public function __construct(string $color, float $price)
    {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = "cold";
    }

    /**
     * @return string
     */
    public function getColor(): string              //string: a string will be returned
    {
        return $this->color;
    }

    public function getInfo(): void                 //void: nothing will be returned
    {
        echo "This beverage is $this->temperature and $this->color";
    }
}

class Beer extends Beverage {
    protected string $name;
    protected float $alcoholPercentage;

    /**
     * @param string $name
     * @param float $alcoholPercentage
     */
    public function __construct(string $name, float $alcoholPercentage, string $color, float $price)
    {
        parent:: __construct($color, $price);
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
    }

    /**
     * @return float
     */
    public function getAlcoholPercentage(): float           //float: a decimal number will be returned
    {
        return $this->alcoholPercentage;
    }

    /**
     * @param string $color
     */
    public function setColor(string $color)
    {
        $this->color = $color;
    }

    public function beerInfo(): void            // method needs to be public in order to get access to the properties.
    {
        echo "Hi i'm $this->name and have an alcohol percentage of $this->alcoholPercentage and I have a $this->color color.";
    }
}
$duvel = new Beer("Duvel", 8.5, "blond", 3.5);
echo "<br>";
echo $duvel->getAlcoholPercentage();
echo "<br>";
echo $duvel->getAlcoholPercentage();
echo "<br>";
echo $duvel->getColor();
echo "<br>";
$duvel->getInfo();
echo "<br>";
echo $duvel->setColor("Light");
echo "<br>";
echo $duvel->beerInfo();