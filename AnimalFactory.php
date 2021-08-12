<?php


class AnimalFactory
{
    private $allow_animal = ['Cow', 'Chicken'];

    public function createAnimal(Farm $farm, $type, $count = 1)
    {
        if (in_array($type, $this->allow_animal)) {
            for ($i = 0; $i < $count; $i++) {
                $animal = new $type();
                $farm->registerAnimal($animal);
            }
        } else {
            throw new Exception("This animal doesn't allow in Farm");
        }
    }
}