<?php

declare(strict_types=1);

/* EXERCISE 6

Copy the classes of exercise 2.

TODO: Change the properties to private.
TODO: Make a const barname with the value 'Het Vervolg'.
TODO: Print the constant on the screen.
TODO: Create a function in beverage and use the constant.
TODO: Do the same in the beer class.
TODO: Print the output of these functions on the screen.
TODO: Make sure that every print is on a new line.

Use typehinting everywhere!
*/
class Beverage {
    public string $color;
    public float $price;
    public string $temperature;
    const BARNAME = "Het Vervolg";
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

    public function getInfo(): void
    {
        echo "This beverage is $this->temperature and $this->color";
    }

    public function nameBar():void
    {
        echo self::Beverage::BARNAME;
    }
}
class Beer extends Beverage {
    public string $name;
    public float $alcoholPercentage;
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
}
$duvel = new Beer("Duvel", 8.5, "blond", 3.5);
echo "<br>";
echo $duvel->getAlcoholPercentage();
echo "<br>";
echo $duvel->alcoholPercentage;
echo "<br>";
echo $duvel->color;
echo "<br>";
$duvel->getInfo();
echo "<br>";
echo $duvel::BARNAME;
echo Beverage::name
