<?php

declare(strict_types=1);

/* EXERCISE 3

TODO: Copy the code of exercise 2 to here and delete everything related to cola.
TODO: Make all properties private.
TODO: Make all the other prints work without error.
TODO: After fixing the errors. Change the color of Duvel to light instead of blond and also print this new color on the screen after all the other things that were already printed (to be sure that the color has changed).
TODO: Create a new private method in the Beer class called beerInfo which returns "Hi i'm Duvel and have an alcochol percentage of 8.5 and I have a light color."

Make sure that you use the variables and not just this text line.

TODO: Print this method on the screen on a new line.

USE TYPEHINTING EVERYWHERE!
*/
class Beverage {
    private string $color;          //private properties can only be accessed from within the class
    private float $price;
    private string $temperature;

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
    public function getColor(): string      // Method to get the color.
    {
        return $this->color;
    }

    public function getInfo(): void
    {
        echo "This beverage is $this->temperature and $this->color";
    }
}

class Beer extends Beverage {
    private string $name;
    private float $alcoholPercentage;

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
    public function getAlcoholPercentage(): float
    {
        return $this->alcoholPercentage;
    }

    /**
     * @param string $color
     */
    public function setColor(string $color): string         //Method to change the color of Duvel to light instead of blond
    {
        return $this->color = $color;
    }

    private function beerInfo(): void                       // Create a new private method in the Beer class called beerInfo which returns "Hi i'm Duvel and have an alcochol percentage of 8.5 and I have a light color."
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
echo $duvel->setColor("Light");  //print this new color on the screen
echo "<br>";
echo $duvel->beerInfo();
