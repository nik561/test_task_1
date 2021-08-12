<?php


class Cow extends Animal
{
    protected $count_for_once;
    protected $ending = 'liters';
    protected $collect_type = 'milk';

    function __construct()
    {
        $this->count_for_once = rand(8, 12);
    }
}