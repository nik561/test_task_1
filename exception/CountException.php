<?php


class CountException extends Exception
{
    public function __construct() {
        parent::__construct("Negative count doesn't allow in Farm");
    }
}