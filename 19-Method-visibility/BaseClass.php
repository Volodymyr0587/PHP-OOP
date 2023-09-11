<?php

class BaseClass
{
    public $publicProperty = 'Public properties and methods can be accessed anywhere in code';
    
    protected $protectedProperty = "Protected properties and methods can only be accessed within the declaring class or from subclass";

    private $privateProperty = "Private properties and methods can only be accessed within the declaring class. They are NOT visible anywhere else";

    protected function getProtectedProperty(): string 
    {
        return $this->protectedProperty;
    }

    public function getPrivateProperty(): string
    {
        return $this->privateProperty;
    }
}
