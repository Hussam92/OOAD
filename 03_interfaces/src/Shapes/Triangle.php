<?php

namespace Interfaces\Shapes;

use Interfaces\Interface\Planar;

class Triangle extends Shape implements Planar
{
    private int $a;
    private int $b;
    private int $c;

    public function render(): void
    {
        // TODO: Draw line from point a to point b,
        //  from point b to point c,
        //  from point c to point a
    }

    public function area(): int
    {
        return $this->a * $this->b * $this->c;
    }

    public function perimeter(): int
    {
        return $this->a + $this->b + $this->c;
    }
}