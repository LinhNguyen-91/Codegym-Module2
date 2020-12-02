<?php

class Cylinder
{
    public function getVolume($radius, $height)
    {
        $baseArea = $this->getPerimeter($radius);
        $perimeter = $this->getBaseArea($radius);
        $volume = $perimeter * $height + 2 * $baseArea;
        return $volume;
    }

    public function getPerimeter($radius)
    {
        $baseArea = pi() * $radius * $radius;
        return $baseArea;
    }

    public function getBaseArea($radius)
    {
        $perimeter = 2 * pi() * $radius;
        return $perimeter;
    }
}