<?php

declare(strict_types=1);

/* EXERCISE 4
Copy the code of exercise 3.

USE TYPEHINTING EVERYWHERE!
*/

class Beverage
{
//TODO: Make all properties protected.
    protected string $color;           //protected = accessed from within class or classes derived from this class.
    protected float $price;
    protected string $temperature;

    /**                              //annotations provide supplemental information.
     * @param string $color
     * @param float $price
     */
    public function __construct(string $color, float $price)
    {
        $this->color = $color;  //assigning values to the properties
        $this->price = $price;
        $this->temperature = 'cold';    //temperature gets default-value
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @return void
     */
    public function getInfo(): void
    {
        echo "This beverage is $this->temperature and $this->color";    //echo to print.
    }
}

class Beer extends Beverage
{
    //TODO: Make all properties protected.
    protected string $name;
    protected float $alcoholPercentage;

    /**
     * @param string $name
     * @param float $alcoholPercentage
     * @param string $color
     * @param float $price
     */
    public function __construct(string $name, float $alcoholPercentage, string $color, float $price)
    {
        parent:: __construct($color, $price);
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
    }

    public function beerInfo(): void
    { //use $this to reference the current object.
        echo "Hi i'm $this->name and have an alcochol percentage of $this->alcoholPercentage and I have a $this->color color.";
    }

    /**
     * @return float
     */
    public function getAlcoholPercentage(): float
    {
        return $this->alcoholPercentage;
    }

    /**
     * @param string $color
     */
    public function setColor(string $color): string
    {
        return $this->color = $color;
    }
}

##ex1
// TODO: delete everything related to cola.
//$cola = new Beverage("black", 2); //new object from class = child.
//$cola->temperature = "hot";                 //change the default-value.
//$cola->getInfo();                              //display the getInfo of the new object.
//echo "<br>";

##ex2
//TODO: Make all the other prints work without error without changing the beverage class.
$duvel = new Beer('duvel', 8.5, 'blond', 3.5);
echo $duvel->getAlcoholPercentage();
//Make sure that each print is on a different line.
echo "<br>";
//echo $duvel->alcoholPercentage;  //cannot access protected property only trough getAlcoholPercentage!
echo "<br>";
//echo $duvel->color;  //cannot access protected property only through getColor method!
echo $duvel->getColor();
echo "<br>";
echo $duvel->getInfo();
echo "<br>";
echo $duvel->setColor('light');
echo "<br>";
echo $duvel->beerInfo(); //needed to change the method into public to call it from outside the class.