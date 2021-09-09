<?php

class Circle extends Shape
{
    public const TYPE = 3;

    protected float $radius;

    public function __construct(float $radius)
    {
        parent::__construct(0, 0);
        $this->radius = $radius;
        $this->setId();
    }

    public function calculateArea() :float
    {
        return ($this->radius ** 2) * pi();
    }

    public function getClone()
    {
        $obj = new stdClass();
        $obj->name = $this->name;
        $obj->radius = $this->radius;
        $obj->id = $this->id;
        
        return $obj;
    }

    public function setId(?string $type = null)
    {
        switch($type)
        {
            case "uuid":
                $this->id = uniqid();
                break;
            case "time":
                $this->id = time();
            default:
                $newId = random_bytes(23);
                $this->id = bin2hex($newId);
        }
    }
}
