<?php

namespace Relations\Trait;

trait Likeable
{
    private int $likes = 0;

    public function getLikes(): int
    {
        return $this->likes;
    }

    public function like(): int
    {
        return $this->likes++;
    }
}