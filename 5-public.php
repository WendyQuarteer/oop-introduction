<?php

declare(strict_types=1);

/* EXERCISE 5
Copy the class of exercise 1.
*/

class Beverage
{
//TODO: Change the properties to private.
    private string $color;           //private = can only be accessed from within class.
    public float $price;             //changed to public in order to access it in the changePrice()
    private string $temperature;

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
     * @return void
     */
    public function getInfo(): void
    {
        echo "This beverage is $this->temperature and $this->color";    //echo to print.
    }

//TODO: Change the price to 3.5 euro and print it also on the screen on a new line.
    public function changePrice(float $price)
    {
        if ($price < 0) {
            return Error('Price can not be negative!');
        }
        $this->price = $price;  //price needs to be set to public!!
    }
}

//TODO: Fix the errors without using getter and setter functions.
//no errors appeared
$cola = new Beverage("black", 2); //new object from class = child.
//$cola->temperature = "hot";                 //change the default-value.
$cola->getInfo();                             //display the getInfo of the new object.
echo "<br>";
$cola->changePrice(3.5);                //change the price
echo $cola->price;                          //display the changed price
