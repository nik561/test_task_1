<?php


class TypeException extends Exception
{
    public function __construct() {
        parent::__construct("This animal doesn't allow in Farm");
    }
}