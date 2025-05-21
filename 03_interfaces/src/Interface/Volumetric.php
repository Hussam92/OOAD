<?php

namespace Interfaces\Interface;

interface Volumetric extends Planar // Instead of extending Planar, we could implement the method signatures manually
{
    public function volume(): int;
}