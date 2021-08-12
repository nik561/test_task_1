<?php
include 'autoloader.php';

class FarmTest extends \PHPUnit\Framework\TestCase
{
    private $factory;
    private $farm;

    protected function setUp(): void
    {
        $this->factory = new AnimalFactory();
        $this->farm = new Farm();
    }

    public function test_register_unallowed_animal()
    {
        $this->expectException(TypeException::class);
        $this->factory->createAnimal($this->farm, 'Pig', 5);
    }

    public function test_register_minus_count_animal()
    {
        $this->expectException(CountException::class);
        $this->factory->createAnimal($this->farm, 'Cow', -5);
    }

    public function test_register_chicken()
    {
        $this->factory->createAnimal($this->farm, 'Chicken', 5);
        $cart = $this->farm->collectAll();
        $this->assertArrayHasKey('egg', $cart);
    }

    public function test_register_cow()
    {
        $this->factory->createAnimal($this->farm, 'Cow', 5);
        $cart = $this->farm->collectAll();
        $this->assertArrayHasKey('milk', $cart);
    }
}