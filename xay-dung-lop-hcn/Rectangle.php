<?php

class Rectangle
{
    public int $width;
    public int $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function getArea(): int{
        return $this->height * $this->width;
    }

    public function getPerimeter(): int{
        return ($this->height + $this->width)*2;
    }

    public function display(): string {
        return "Rectangle{" ."width = " .$this->width. ", heigth = " .$this->height. "}";
    }
}