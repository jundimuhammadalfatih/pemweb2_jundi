<?php
/* class Fruit {
    public $name;
    public $color;
    public $weight;

    function set_name($n){
        $this->name = $n;
    }
    protected function set_color($n){
        $this->color = $n;
    }
    private function set_weight($n){
        $this->color = $n;
    }
}

$mango = new Fruit();
$mango->set_name('Mango'); //OK
$mango->set_color('Yellow'); //ERROR
$mango->set_weight('300'); //ERROR
*/

class Fruit
{
    public $name;
    public $color;
    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }
    public function intro()
    {
        echo "The fruit is $this->name and color is $this->color <br>";
    }
}
class Strawberry extends Fruit
{
    public function message()
    {
        echo "Am I a fruit or a berry ? <br>";
    }
}
$strawberry = new Strawberry("Strawberry", "red");
$strawberry->message();
$strawberry->intro();


