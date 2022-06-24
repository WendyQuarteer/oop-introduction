<?php

declare(strict_types=1);

/* EXERCISE 2

TODO: Make class beer that extends from Beverage.
TODO: Create the properties name (string) and alcoholPercentage (float).
TODO: Foresee a construct that's allows us to use all the properties from beverage and that sets the values for name and alcoholpercentage.

Remember for now we will use properties and methods that can be accessed from everywhere.
TODO: Make a getAlcoholPercentage function which returns the alocoholPercentage.
TODO: Instantiate an object which represents Duvel. Make sure that the color is set to blond, the price equals 3.5 euro and the temperature to cold automatically.
TODO: Also the name equal to Duvel and the alcohol percentage to 8,5%
TODO: Print the getAlcoholPercentage 2 times on the screen in two different ways, print the color on the screen and the getInfo.

Make sure that each print is on a different line.
Try to get this error on the screen= Fatal error: Uncaught Error: Call to undefined method Beverage::getAlcoholPercentage() in /var/www/becode/workshop/exercise2.php on line 64
USE TYPEHINTING EVERYWHERE!
*/
class Beer extends Beverage {
                                    //Make class beer that extends from Beverage = child
    public string $name;            //+creating extra properties for this new class
    public float $alcoholPercentage;

    /**
     * @param string $name
     * @param float $alcoholPercentage
     */
    public function __construct(string $name, float $alcoholPercentage, string $color, float $price)
    {
        parent:: __construct($color, $price);       //add the parent constructor
        $this->name = $name;                        //assign values to the properties
        $this->alcoholPercentage = $alcoholPercentage;
    }

    /**
     * @return float
     */
    public function getAlcoholPercentage(): float   //Make a getAlcoholPercentage function which returns the alocoholPercentage.  Also the name equal to Duvel and the alcohol percentage to 8,5%.
    {
        return $this->alcoholPercentage;
    }
}
$duvel = new Beer("Duvel", 8.5, "blond", 3.5); //Instantiate an object which represents Duvel. Make sure that the color is set to blond, the price equals 3.5 euro and the temperature to cold automatically.
echo "<br>";
echo $duvel->getAlcoholPercentage(); //Print the getAlcoholPercentage
echo "<br>";
echo $duvel->alcoholPercentage;     //Print the alcoholPercentage in a different way
echo "<br>";
echo $duvel->color;                 //print the color on the screen
echo "<br>";
$duvel->getInfo();                  //print the getInfo on the screen
echo "<br>";