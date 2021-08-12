<?php


class Chicken extends Animal
{
    protected $count_for_once;
    protected $ending = '';
    protected $collect_type = 'egg';

    function __construct()
    {
        $this->count_for_once = rand(0, 1);
    }
}