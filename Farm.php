<?php


class Farm
{
    private $animal_list;
    private $cart;
    private $counter = 0;

    public function registerAnimal(Animal $animal)
    {
        $this->animal_list[] = $animal;
        $animal->setId($this->counter);
        $this->counter++;
    }

    public function collectAll()
    {
        foreach ($this->animal_list as $animal) {
            $this->cart[] = $animal->collect();
        }
        return $this->getCart();
    }

    public function getCart()
    {
        foreach ($this->cart as $item) {
            $array[$item['type']] = [
                'count' => $array[$item['type']]['count'] + $item['count'],
                'ending' => $item['ending']];
        }
        return $array;
    }
}