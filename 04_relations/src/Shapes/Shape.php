<?php

namespace Relations\Shapes;

abstract class Shape
{
    public int $x_position;
    public int $y_position;
    public int $z_position;

    abstract public function render(): void;
}