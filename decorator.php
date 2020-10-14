/**
 * title: Design patterns OOP - Decorator 
 * autor: Alexander Kuziv
 * email: alexander@makklays.com.ua
 **/

interface Pizza {
  public function ingredients() : string;
  public function price() : double;
}

abstruct class PizzaDecorator implements Pizza
{
  protected $pizza;
  public function __construct(Pizza $pizza) 
  {
    $this->pizza = $pizza;
  }
}

class SimplePizza implements Pizza
{
  public function ingredients(): string
  {
    return 'Простая пицца';
  }
  public function price(): double 
  {
    return 12.5;
  }
}

class DoublePizza implements Pizza
{
  public function ingredients(): string
  {
    return 'Двойная пицца'
  }
  public function price(): double 
  {
    return 22.8;
  }
}

class WithMeat extends PizzaDecorator
{
  public function ingredients(): string
  {
    return $this->pizza->ingredients() . ' c мясом';
  }
  public function price(): double
  {
    return $this->pizza->price() + 7.2;
  }
}

class WithCheese extends PizzaDecorator
{
  public function ingredients(): string
  {
    return $this->pizza->ingredients() . ' c сыром';
  }
  public function price(): double
  {
    return $this->pizza->price() + 6.5;
  }
}

// make Pizza 
$pizza = new SimplePizza();
$pizza = new WithMeat($pizza);
$pizza = new WithCheese($pizza);

echo $pizza->ingredients(); // Простая пицца c мясом c сыром 
echo $pizza->price(); // 26.2

// Finish! Успешная реализация паттерна Decorator 
