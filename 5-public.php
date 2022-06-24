<?php

declare(strict_types=1);

/* EXERCISE 5

Copy the class of exercise 1.

TODO: Change the properties to private.
TODO: Fix the errors without using getter and setter functions.
TODO: Change the price to 3.5 euro and print it also on the screen on a new line.
*/

class Beverage
{
    private string $color;          //private = can only be accessed within the class.
    public float $price;
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

    public function getInfo(): void                 //void: nothing will be returned
    {
        echo "This beverage is $this->temperature and $this->color";
    }

    public function changePrice(float $price)       //method to change the price without getting and setting the price
    {
        if ($price < 0) {                           //if price less than 0,
            return Error("price can't be negative");//an error message will appear
        }
        $this->price = $price;                      //otherwise, the new price will be displayed
    }
}

$cola = new Beverage("black", 2);
//$cola->temperature = "hot";
$cola->getInfo();
echo "<br>";
$cola->changePrice(3.5);                    //display the new price.
echo $cola->price;
