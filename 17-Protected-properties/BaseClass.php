<?php

class BaseClass
{
    public $publicProperty = 'Public properties and methods can be accessed anywhere in code';
    
    protected $protectedProperty = "Protected properties and methods can only be accessed within the declaring class or from subclass";

    public function getProtectedProperty(): string 
    {
        return $this->protectedProperty;
    }
}
