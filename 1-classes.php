<?php

declare(strict_types=1);

/* EXERCISE 1
TODO: Create a class beverage.
TODO: Create the properties color (string), price (float) and temperature (string) and also foresee a construct.
TODO: Have a default value "cold" in the construct for temperature.

Remember for now we will use properties and methods that can be accessed from everywhere.
TODO: Make a getInfo function which returns "This beverage is <temperature> and <color>."
TODO: Instantiate an object which represents cola. Make sure that the color is set to black, the price equals 2 euro and the temperature to cold automatically
 print the getInfo on the screen.
TODO: Print the temperature on the screen.

USE TYPEHINTING EVERYWHERE!
*/
class Beverage {            //new class = template for objects (starts with capital).
    public string $color;   //create properties.
    public float $price;    //string-integer-float-integer string- -
    public string $temperature;  //public = always access // protected = only from within class or inheriting class has access // private = only accessed by public methods inside the class.

    /**                      //annotations provide supplemental information.
     * @param string $color
     * @param float|int $price
     */
    public function __construct(string $color, float $price) //__construct function = will automatically be called when a new object is created from the class.
    {
        $this->color = $color;          //$this = reference to property within the same class -> property-name = property.
        $this->price = $price;          //assigning values to the properties
        $this->temperature = "cold";    //temperature-property gets default value: cold.
    }

    public function getInfo(): void     //Make a getInfo function which returns "This beverage is <temperature> and <color>".
    {
        echo "This beverage is $this->temperature and $this->color";
    }
}
$cola = new Beverage("black",2);    //create a new object from the class.
//$cola->temperature = "hot";                   //how to change the default value.
$cola->getInfo();                               //Display the getInfo of the new object.
echo "<br>";