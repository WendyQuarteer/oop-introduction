<?php
declare(strict_types=1);

/* EXERCISE 2
USE TYPEHINTING EVERYWHERE!
*/

class Beverage
{

    public string $color;           //public = accessed from everywhere.
    public float $price;
    public string $temperature;

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
}

//TODO: Make class beer that extends from Beverage.
class Beer extends Beverage
{
//TODO: Create the properties name (string) and alcoholPercentage (float).
//Remember for now we will use properties and methods that can be accessed from everywhere.
    public string $name;
    public float $alcoholPercentage;

//TODO: Foresee a construct that's allows us to use all the properties from beverage and that sets the values for name and alcoholpercentage.

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

    //TODO: Make a getAlcoholPercentage function which returns the alocoholPercentage.

    /**
     * @return float
     */
    public function getAlcoholPercentage(): float
    {
        return $this->alcoholPercentage;
    }
}

##ex1
$cola = new Beverage("black", 2); //new object from class = child.
//$cola->temperature = "hot";                 //change the default-value.
$cola->getInfo();                              //display the getInfo of the new object.
echo "<br>";

##ex2
//TODO: Instantiate an object which represents Duvel.
// Make sure that the color is set to blond,
// the price equals 3.5 euro and the temperature to cold automatically.
// Also the name equal to Duvel
// the alcohol percentage to 8,5%
$duvel = new Beer('duvel', 8.5, 'blond', 3.5);
// TODO: Print the getAlcoholPercentage 2 times on the screen in two different ways,
//  print the color on the screen and the getInfo.
echo $duvel->getAlcoholPercentage();
//Make sure that each print is on a different line.
echo "<br>";
echo $duvel->alcoholPercentage;
echo "<br>";
echo $duvel->color;
echo "<br>";
echo $duvel->getInfo();
//Try to get this error on the screen= Fatal error: Uncaught Error: Call to undefined method Beverage::getAlcoholPercentage() in /var/www/becode/workshop/exercise2.php on line 64
echo Beverage::getAlcoholPercentage();