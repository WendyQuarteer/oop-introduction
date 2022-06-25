<?php
declare(strict_types=1);
/* EXERCISE 1
USE TYPEHINTING EVERYWHERE!
*/

// TODO: Create a class beverage.
class Beverage
{
    //TODO: Create the properties color (string),
    // price (float) and temperature (string)
    // and also foresee a construct.
    //Remember for now we will use properties and methods that can be accessed from everywhere.
    public string $color;   //public = accessed from everywhere.
    public float $price;
    public string $temperature;

    /**                      //annotations provide supplemental information.
     * @param string $color
     * @param float|int $price
     */
    public function __construct(string $color, float $price)
    {
        $this->color = $color;          //assigning values to the properties
        $this->price = $price;
        $this->temperature = "cold";    //temperature gets default value
    }
    //TODO: Make a getInfo function which returns:
    // "This beverage is <temperature> and <color>."
    /**
     * @return void
     */
    public function getInfo(): void
    {
        echo "This beverage is $this->temperature and $this->color";
    }
}

//TODO: Instantiate an object which represents cola.
// Make sure that the color is set to black,
// the price equals 2 euro, the temperature to cold automatically
$cola = new Beverage("black", 2);    //new object from class.
//$cola->temperature = "hot";                   //change the default value.
$cola->getInfo();                               //display the getInfo of the new object.
echo "<br>";                                    //new line