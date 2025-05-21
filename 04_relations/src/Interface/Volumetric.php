<?php

namespace Relations\Interface;

use Relations\Model\Shape;

interface Volumetric extends Planar // Instead of extending Planar, we could implement the method signatures manually
{
    public function volume(): int;
}